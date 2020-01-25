<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2018 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Mon, 26 Feb 2018 06:08:20 GMT
 */
if (!defined('NV_IS_MOD_INVOICE')) die('Stop!!!');

$redirect = $nv_Request->get_string('redirect', 'get', '');

//tìm kiếm hóa đơn sắp hết hạn
if ($nv_Request->isset_request('get_info_invoice_json', 'post, get')) {
    $date = $nv_Request->get_int('date', 'post', '');
    nv_jsonOutput(nv_invoice_check_date($date));
}

if ($nv_Request->isset_request('delete_id', 'get') and $nv_Request->isset_request('delete_checkss', 'get')) {
    $id = $nv_Request->get_int('delete_id', 'get');
    $delete_checkss = $nv_Request->get_string('delete_checkss', 'get');
    if ($id > 0 and $delete_checkss == md5($id . NV_CACHE_PREFIX . $client_info['session_id'])) {
        nv_delete_invoice($id);
        $nv_Cache->delMod($module_name);
        if (!empty($redirect)) {
            $url = nv_redirect_decrypt($redirect);
        } else {
            $url = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op;
        }
        Header('Location: ' . $url);
        die();
    }
} elseif ($nv_Request->isset_request('delete_list', 'post')) {
    $listall = $nv_Request->get_title('listall', 'post', '');
    $array_id = explode(',', $listall);

    if (!empty($array_id)) {
        foreach ($array_id as $id) {
            nv_delete_invoice($id);
        }
        $nv_Cache->delMod($module_name);
        die('OK');
    }
    die('NO');
}

if ($nv_Request->isset_request('confirm_payment', 'post')) {
    $listall = $nv_Request->get_title('listall', 'post', '');
    $array_id = explode(',', $listall);

    if (!empty($array_id)) {
        foreach ($array_id as $id) {
            nv_invoice_confirm_payment($id);
        }
        $nv_Cache->delMod($module_name);
        die('OK');
    }
    die('NO');
}

$base_url = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op;
$per_page = 20;
$page = $nv_Request->get_int('page', 'post,get', 1);
$join = $where = '';

$array_search = array(
    'search' => $nv_Request->isset_request('search', 'post,get'),
    'q' => $nv_Request->get_title('q', 'post,get'),
    'customerid' => $nv_Request->get_int('customerid', 'get', 0),
    'workforceid' => $nv_Request->get_int('workforceid', 'get', 0),
    'presenterid' => $nv_Request->get_int('presenterid', 'get', 0),
    'performerid' => $nv_Request->get_int('performerid', 'get', 0),
    'serviceid' => $nv_Request->get_int('serviceid', 'get', 0),
    'daterange' => $nv_Request->get_string('daterange', 'get', ''),
    'status' => $nv_Request->get_int('status', 'get', -1),
    'datefield' => $nv_Request->get_string('datefield', 'get', 'addtime')
);

if (!empty($array_search['q'])) {
    $base_url .= '&amp;q=' . $array_search['q'];
    $where .= ' AND (title LIKE "%' . $array_search['q'] . '%"
        OR code LIKE "%' . $array_search['q'] . '%"
        OR terms LIKE "%' . $array_search['q'] . '%"
        OR description LIKE "%' . $array_search['q'] . '%"
    )';
}

if (!empty($array_search['customerid'])) {
    $base_url .= '&amp;customerid=' . $array_search['customerid'];
    $where .= ' AND customerid=' . $array_search['customerid'];
}

if (!empty($array_search['workforceid'])) {
    $base_url .= '&amp;workforceid=' . $array_search['workforceid'];
    $where .= ' AND workforceid=' . $array_search['workforceid'];
}

if (!empty($array_search['presenterid'])) {
    $base_url .= '&amp;presenterid=' . $array_search['presenterid'];
    $where .= ' AND presenterid=' . $array_search['presenterid'];
}

if (!empty($array_search['performerid'])) {
    $base_url .= '&amp;workforceid=' . $array_search['performerid'];
    $where .= ' AND performerid=' . $array_search['performerid'];
}

if (!empty($array_search['daterange'])) {

    $begin_time = substr($array_search['daterange'], 0, 10);
    $end_time = substr($array_search['daterange'], -10);

    if (preg_match('/^([0-9]{1,2})\/([0-9]{1,2})\/([0-9]{4})$/', $begin_time, $m)) {

        $begin_time = mktime(23, 59, 59, $m[2], $m[1], $m[3]);
    } else {
        $begin_time = 0;
    }
    if (preg_match('/^([0-9]{1,2})\/([0-9]{1,2})\/([0-9]{4})$/', $end_time, $m)) {

        $end_time = mktime(23, 59, 59, $m[2], $m[1], $m[3]);
    } else {
        $end_time = 0;
    }

    $base_url .= '&amp;daterange= ' . $array_search['daterange'];
    $where .= ' AND (' . $array_search['datefield'] . ' >= ' . $begin_time . ' AND ' . $array_search['datefield'] . ' <= ' . $end_time . ')';
}

if ($array_search['status'] >= 0) {
    $base_url .= '&amp;status=' . $array_search['status'];
    if ($array_search['status'] == 5) {
        // lọc hóa đơn quá hạn thanh toán
        $where .= ' AND status IN (0, 3, 4) AND duetime <= ' . NV_CURRENTTIME;
    } else {
        $where .= ' AND status=' . $array_search['status'];
    }
} elseif (!$array_search['search'] && !empty($array_config['default_status'])) {
    $where .= ' AND status IN (' . $array_config['default_status'] . ')';
}

if ($array_search['serviceid'] > 0) {
    $join .= ' INNER JOIN ' . NV_PREFIXLANG . '_' . $module_data . '_detail t2 ON t1.id=t2.idinvoice';
    $base_url .= '&amp;serviceid=' . $array_search['serviceid'];
    $where .= ' AND t2.module="services" AND t2.itemid=' . $array_search['serviceid'];
}

$where .= nv_invoice_premission($module_name);
$db->sqlreset()
    ->select('COUNT(*)')
    ->from(NV_PREFIXLANG . '_' . $module_data . ' t1')
    ->join($join)
    ->where('1=1' . $where);

$sth = $db->prepare($db->sql());
$sth->execute();
$num_items = $sth->fetchColumn();

$db->select('t1.*')
    ->order('t1.id DESC')
    ->limit($per_page)
    ->offset(($page - 1) * $per_page);
$sth = $db->prepare($db->sql());
$sth->execute();

$customer_info = array();
if (!empty($array_search['customerid'])) {
    $customer_info = nv_crm_customer_info($array_search['customerid']);
}

$xtpl = new XTemplate($op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('LANG_GLOBAL', $lang_global);
$xtpl->assign('MODULE_NAME', $module_name);
$xtpl->assign('OP', $op);
$xtpl->assign('ROW', $row);
$xtpl->assign('SEARCH', $array_search);
$xtpl->assign('BASE_URL', $base_url);
$xtpl->assign('URL_ADD', NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=content');

if (empty(nv_invoice_check_date(1))) {
    $xtpl->parse('main.empty_data_invoice');
} else {
    $xtpl->assign('DATA_INVOICE', nv_invoice_check_date(1));
}

$generate_page = nv_generate_page($base_url, $num_items, $per_page, $page);
if (!empty($generate_page)) {
    $xtpl->assign('NV_GENERATE_PAGE', $generate_page);
    $xtpl->parse('main.generate_page');
}

if (defined('NV_INVOICE_ADMIN')) {
    $xtpl->parse('main.admin4');
}

$array_users = array();
while ($view = $sth->fetch()) {
    if (!isset($array_users[$view['customerid']])) {
        $users = nv_crm_customer_info($view['customerid']);
        if ($users) {
            $view['customer'] = array(
                'fullname' => $users['fullname'],
                'link' => $users['link_view']
            );
            $array_users[$view['customerid']] = $view['customer'];
        } else {
            $view['customer'] = '';
        }
    } else {
        $view['customer'] = $array_users[$view['customerid']];
    }
    $view['grand_total'] = nv_number_format($view['grand_total']);
    $view['status_str'] = $lang_module['status_' . $view['status']];
    $view['createtime'] = (empty($view['createtime'])) ? '' : nv_date('d/m/Y', $view['createtime']);
    $view['duetime'] = (empty($view['duetime'])) ? ($lang_module['non_identify']) : nv_date('d/m/Y', $view['duetime']);
    $view['addtime'] = (empty($view['addtime'])) ? '-' : nv_date('H:i d/m/Y', $view['addtime']);
    $view['link_view'] = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=detail&amp;id=' . $view['id'];
    $view['link_edit'] = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=content&amp;id=' . $view['id'] . '&amp;redirect=' . nv_redirect_encrypt($client_info['selfurl']);
    $view['link_delete'] = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op . '&amp;delete_id=' . $view['id'] . '&amp;delete_checkss=' . md5($view['id'] . NV_CACHE_PREFIX . $client_info['session_id']) . '&amp;redirect=' . nv_redirect_encrypt($client_info['selfurl']);

    $xtpl->assign('VIEW', $view);

    if (empty($view['status'])) {
        $xtpl->parse('main.loop.warning');
    }

    if ($view['status'] == 2) {
        $xtpl->parse('main.loop.danger');
    } elseif ($view['status'] == 3) {
        $xtpl->parse('main.loop.success');
    }

    if (defined('NV_INVOICE_ADMIN')) {
        $xtpl->parse('main.loop.admin3');
    }

    $xtpl->parse('main.loop');
}

foreach ($array_invoice_status as $index => $value) {
    $sl = $index == $array_search['status'] ? 'selected="selected"' : '';
    $xtpl->assign('STATUS', array(
        'index' => $index,
        'value' => $value,
        'selected' => $sl
    ));
    $xtpl->parse('main.status');
}

$array_date_invoice = array(
    1 => $lang_module['1week'],
    2 => $lang_module['2week'],
    3 => $lang_module['1month'],
    4 => $lang_module['2month'],
    5 => $lang_module['3month']
);

foreach ($array_date_invoice as $index => $value) {
    $sl = $index == $view['list_invoice'] ? 'selected="selected"' : '';
    $xtpl->assign('TIME', array(
        'key' => $index,
        'title' => $value,
        'selected' => $sl
    ));
    $xtpl->parse('main.select_time');
}

if (defined('NV_INVOICE_ADMIN')) {
    if (!empty($workforce_list)) {
        foreach ($workforce_list as $user) {
            $user['selected'] = $user['userid'] == $array_search['workforceid'] ? 'selected="selected"' : '';
            $user['selected1'] = $user['userid'] == $array_search['presenterid'] ? 'selected="selected"' : '';
            $user['selected2'] = $user['userid'] == $array_search['performerid'] ? 'selected="selected"' : '';
            $xtpl->assign('USER', $user);
            $xtpl->parse('main.admin.user');
            $xtpl->parse('main.admin.user1');
            $xtpl->parse('main.admin.user2');
        }
    }

    if (!empty($customer_info)) {
        $xtpl->assign('CUSTOMER', $customer_info);
        $xtpl->parse('main.admin.customer');
    }

    $array_action = array(
        'delete_list_id' => $lang_global['delete'],
        'confirm_payment' => $lang_module['confirm_payment']
    );
    foreach ($array_action as $key => $value) {
        $xtpl->assign('ACTION', array(
            'key' => $key,
            'value' => $value
        ));
        $xtpl->parse('main.admin2.action_top');
        $xtpl->parse('main.admin1.action_bottom');
    }
    $xtpl->parse('main.admin');
    $xtpl->parse('main.admin1');
    $xtpl->parse('main.admin2');
}

$array_date_field = array(
    'createtime' => $lang_module['createtime'],
    'duetime' => $lang_module['duetime'],
    'addtime' => $lang_module['addtime'],
    'paytime' => $lang_module['paytime']
);
foreach ($array_date_field as $index => $value) {
    $sl = $index == $array_search['datefield'] ? 'selected="selected"' : '';
    $xtpl->assign('DATEFIELD', array(
        'index' => $index,
        'value' => $value,
        'selected' => $sl
    ));
    $xtpl->parse('main.datefield');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

$page_title = $module_info['custom_title'];

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';