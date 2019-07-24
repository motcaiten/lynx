<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2018 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Sun, 07 Jan 2018 03:36:32 GMT
 */
if (!defined('NV_IS_MOD_WORKFORCE')) die('Stop!!!');

if ($nv_Request->isset_request('get_user_json', 'post, get')) {
    $q = $nv_Request->get_title('q', 'post, get', '');

    $db->sqlreset()
        ->select('userid, username, email, first_name, last_name')
        ->from(NV_USERS_GLOBALTABLE)
        ->where('( username LIKE :username OR email LIKE :email OR first_name like :first_name OR last_name like :last_name ) AND userid NOT IN (SELECT userid FROM ' . NV_PREFIXLANG . '_' . $module_data . ')')
        ->order('username ASC')
        ->limit(20);

    $sth = $db->prepare($db->sql());
    $sth->bindValue(':username', '%' . $q . '%', PDO::PARAM_STR);
    $sth->bindValue(':email', '%' . $q . '%', PDO::PARAM_STR);
    $sth->bindValue(':first_name', '%' . $q . '%', PDO::PARAM_STR);
    $sth->bindValue(':last_name', '%' . $q . '%', PDO::PARAM_STR);
    $sth->execute();

    $array_data = array();
    while (list ($userid, $username, $email, $first_name, $last_name) = $sth->fetch(3)) {
        $array_data[] = array(
            'id' => $userid,
            'username' => $username,
            'fullname' => nv_show_name_user($first_name, $last_name)
        );
    }

    header('Cache-Control: no-cache, must-revalidate');
    header('Content-type: application/json');

    ob_start('ob_gzhandler');
    echo json_encode($array_data);
    exit();
}

if ($nv_Request->isset_request('delete_id', 'get') and $nv_Request->isset_request('delete_checkss', 'get')) {
    $id = $nv_Request->get_int('delete_id', 'get');
    $delete_checkss = $nv_Request->get_string('delete_checkss', 'get');
    if ($id > 0 and $delete_checkss == md5($id . NV_CACHE_PREFIX . $client_info['session_id'])) {
        $userid = $db->query('SELECT userid FROM ' . NV_PREFIXLANG . '_' . $module_data . ' WHERE id=' . $id)->fetchColumn();
        $fullname = $workforce_list[$userid]['fullname'];
        nv_workforce_delete($id);
        nv_insert_logs(NV_LANG_DATA, $module_name, $lang_module['title_workforce'], $workforce_list[$user_info['userid']]['fullname'] . " " . $lang_module['delete_workforce'] . " " . $fullname, $user_info['userid']);
        $nv_Cache->delMod($module_name);
        $nv_Cache->delMod('users');
        Header('Location: ' . NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
        die();
    }
} elseif ($nv_Request->isset_request('delete_list', 'post')) {
    $listall = $nv_Request->get_title('listall', 'post', '');
    $array_id = explode(',', $listall);

    if (!empty($array_id)) {
        $array_name = array();
        foreach ($array_id as $id) {
            $userid = $db->query('SELECT userid FROM ' . NV_PREFIXLANG . '_' . $module_data . ' WHERE id=' . $id)->fetchColumn();
            if ($userid) {
                $array_name[] = $workforce_list[$userid]['fullname'];
            }
            nv_workforce_delete($id);
        }

        nv_insert_logs(NV_LANG_DATA, $module_name, $lang_module['title_workforce'], $workforce_list[$user_info['userid']]['fullname'] . " " . $lang_module['delete_many_workforce'] . " " . implode(', ', $array_name), $user_info['userid']);

        $nv_Cache->delMod($module_name);
        $nv_Cache->delMod('users');
        die('OK');
    }
    die('NO');
}

$array_search = array(
    'q' => $nv_Request->get_title('q', 'post,get'),
    'part' => $nv_Request->get_int('part', 'post,get'),
    'status' => $nv_Request->get_int('status', 'get', -1)
);

$q = $nv_Request->get_title('q', 'post,get');
$where = '';
$inner = '';
$per_page = 20;
$page = $nv_Request->get_int('page', 'post,get', 1);

if (!empty($array_search['q'])) {
    $base_url .= '&q=' . $array_search['q'];
    $where .= ' AND (first_name LIKE "%' . $array_search['q'] . '%"
        OR last_name LIKE "%' . $array_search['q'] . '%"
        OR gender LIKE "%' . $array_search['q'] . '%"
        OR birthday LIKE "%' . $array_search['q'] . '%"
        OR main_phone LIKE "%' . $array_search['q'] . '%"
        OR main_email LIKE "%' . $array_search['q'] . '%"
    )';
}
if (!empty($array_search['part'])) {
    $inner .= ' INNER JOIN ' . NV_PREFIXLANG . '_' . $module_data . '_part_detail t2 on t1.userid = t2.userid ';
    $where .= ' AND t2.part=' . $array_search['part'];
}

if ($array_search['status'] >= 0) {
    $where .= ' AND status=' . $array_search['status'];
}

$where .= !empty($global_config['branch_id']) ? ' AND branch_id=' . $global_config['branch_id'] : '';

$db->sqlreset()
    ->select('COUNT(*)')
    ->from(NV_PREFIXLANG . '_' . $module_data . ' t1')
    ->where('1=1 ' . $where);
$sth = $db->prepare($db->sql());

$sth->execute();
$num_items = $sth->fetchColumn();

$db->select('*')
    ->order('t1.id DESC')
    ->limit($per_page)
    ->offset(($page - 1) * $per_page)
    ->join($inner);
$sth = $db->prepare($db->sql());

$sth->execute();

$base_url = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op;
if (!empty($q)) {
    $base_url .= '&q=' . $q;
}

$xtpl = new XTemplate($op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('MODULE_NAME', $module_name);
$xtpl->assign('OP', $op);
$xtpl->assign('ROW', $row);
$xtpl->assign('Q', $q);
$xtpl->assign('BASE_URL', $base_url);
$xtpl->assign('URL_ADD', NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=content');

$generate_page = nv_generate_page($base_url, $num_items, $per_page, $page);
if (!empty($generate_page)) {
    $xtpl->assign('NV_GENERATE_PAGE', $generate_page);
    $xtpl->parse('main.view.generate_page');
}

if (nv_workforce_check_premission()) {
    $xtpl->parse('main.manage');
}

if (empty($sth->rowCount())) {
    $url = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=content';
    $xtpl->assign('WORKFORCE_CONTENT', sprintf($lang_module['workforce_content'], $url));
    $xtpl->parse('main.workforce_content');
}

$number = $page > 1 ? ($per_page * ($page - 1)) + 1 : 1;
while ($view = $sth->fetch()) {
    $view['number'] = $number++;
    $view['birthday'] = (empty($view['birthday'])) ? '' : nv_date('d/m/Y', $view['birthday']);
    $view['gender'] = $array_gender[$view['gender']];
    $view['fullname'] = nv_show_name_user($view['first_name'], $view['last_name']);
    $view['link_view'] = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=detail&amp;id=' . $view['id'] . ' ';
    if (nv_workforce_check_premission()) {
        $view['link_edit'] = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=content&amp;id=' . $view['id'];
        $view['link_delete'] = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op . '&amp;delete_id=' . $view['id'] . '&amp;delete_checkss=' . md5($view['id'] . NV_CACHE_PREFIX . $client_info['session_id']);
    }
    $xtpl->assign('VIEW', $view);

    if (nv_workforce_check_premission()) {
        $xtpl->parse('main.loop.manage');
    }

    $xtpl->parse('main.loop');
}

$array_action = array(
    'delete_list_id' => $lang_global['delete']
);
foreach ($array_action as $key => $value) {
    $xtpl->assign('ACTION', array(
        'key' => $key,
        'value' => $value
    ));
    $xtpl->parse('main.action_top');
    $xtpl->parse('main.action_bottom');
}

foreach ($array_part_list as $key => $value) {
    $xtpl->assign('PART', array(
        'key' => $key,
        'value' => $value['title'],
        'selected' => ($key == $array_search['part']) ? ' selected="selected"' : ''
    ));
    $xtpl->parse('main.select_part');
}

foreach ($array_status as $key => $value) {
    $xtpl->assign('STATUS', array(
        'key' => $key,
        'value' => $value,
        'selected' => ($key == $array_search['status']) ? 'selected = "selected"' : ''
    ));
    $xtpl->parse('main.select_status');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

$page_title = $lang_module['workforce'];

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';