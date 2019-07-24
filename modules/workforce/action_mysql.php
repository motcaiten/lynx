<?php

/**
 * @Project NUKEVIET 4.x
 * @Author mynukeviet (contact@mynukeviet.com)
 * @Copyright (C) 2018 mynukeviet. All rights reserved
 * @Createdate Mon, 12 Feb 2018 07:01:21 GMT
 */
if (!defined('NV_IS_FILE_MODULES')) die('Stop!!!');

$sql_drop_module = array();
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data;
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_part";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_part_detail";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_field";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_info";

$sql_create_module = $sql_drop_module;
$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "(
  id smallint(4) NOT NULL AUTO_INCREMENT,
  userid mediumint(8) unsigned NOT NULL,
  first_name varchar(100) NOT NULL,
  last_name varchar(50) NOT NULL,
  gender tinyint(1) unsigned NOT NULL DEFAULT '1',
  birthday int(11) unsigned NOT NULL DEFAULT '0',
  main_phone varchar(20) NOT NULL,
  other_phone varchar(255) NOT NULL,
  main_email varchar(100) NOT NULL,
  other_email varchar(255) NOT NULL,
  address varchar(255) NOT NULL,
  knowledge text NOT NULL COMMENT 'Thông tin học vấn',
  image varchar(255) NOT NULL,
  jointime int(11) unsigned NOT NULL DEFAULT '0',
  position varchar(255) NOT NULL COMMENT 'Chức vụ',
  part varchar(100) NOT NULL COMMENT 'Thuộc bộ phận',
  addtime int(11) unsigned NOT NULL,
  edittime int(11) unsigned NOT NULL DEFAULT '0',
  createtime int(11) unsigned NOT NULL DEFAULT '0',
  duetime int(11) unsigned NOT NULL DEFAULT '0',
  cycle tinyint(1) unsigned NOT NULL DEFAULT '0',
  useradd mediumint(8) unsigned NOT NULL,
  weight smallint(4) unsigned NOT NULL DEFAULT '0',
  branch_id smallint(4) unsigned NOT NULL DEFAULT '0',
  status tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_part(
  id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  parentid smallint(4) unsigned NOT NULL DEFAULT '0',
  title varchar(255) NOT NULL COMMENT 'Tên gọi bộ phận',
  alias varchar(255) NOT NULL DEFAULT '',
  office varchar(255) NOT NULL DEFAULT '',
  address varchar(255) NOT NULL DEFAULT '',
  phone varchar(20) NOT NULL DEFAULT '',
  fax varchar(20) NOT NULL DEFAULT '',
  website varchar(100) NOT NULL DEFAULT '',
  email varchar(255) NOT NULL DEFAULT '',
  note tinytext NOT NULL COMMENT 'Ghi chú',
  lev smallint(4) unsigned NOT NULL DEFAULT '0',
  numsub smallint(4) unsigned NOT NULL DEFAULT '0',
  subid varchar(255) NOT NULL NULL DEFAULT '',
  sort smallint(4) unsigned NOT NULL DEFAULT '0',
  weight smallint(4) unsigned NOT NULL DEFAULT '0',
  status tinyint(1) NOT NULL COMMENT 'Trạng thái',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_part_detail(
  userid mediumint(8) unsigned NOT NULL,
  part smallint(4) NOT NULL COMMENT 'Thuộc bộ phận',
  UNIQUE KEY userid(userid, part)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_field (
	fid mediumint(8) NOT NULL AUTO_INCREMENT,
	field varchar(25) NOT NULL,
	weight int(10) unsigned NOT NULL DEFAULT '1',
	field_type enum('number','date','textbox','textarea','editor','select','radio','checkbox','multiselect') NOT NULL DEFAULT 'textbox',
	field_choices text NOT NULL,
	sql_choices text NOT NULL,
	match_type enum('none','alphanumeric','email','url','regex','callback') NOT NULL DEFAULT 'none',
	match_regex varchar(250) NOT NULL DEFAULT '',
	func_callback varchar(75) NOT NULL DEFAULT '',
	min_length int(11) NOT NULL DEFAULT '0',
	max_length bigint(20) unsigned NOT NULL DEFAULT '0',
	required tinyint(3) unsigned NOT NULL DEFAULT '0',
	show_profile tinyint(4) NOT NULL DEFAULT '1',
	class varchar(50) NOT NULL DEFAULT '',
	language text NOT NULL,
	default_value varchar(255) NOT NULL DEFAULT '',
	PRIMARY KEY (fid),
	UNIQUE KEY field (field)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_info (
	rows_id mediumint(8) unsigned NOT NULL,
	PRIMARY KEY (rows_id)
) ENGINE=MyISAM";

$data = array();
$data['groups_admin'] = '1';
$data['groups_use'] = '4';
$data['termofcontract'] = '4';

foreach ($data as $config_name => $config_value) {
    $sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', " . $db->quote($module_name) . ", " . $db->quote($config_name) . ", " . $db->quote($config_value) . ")";
}

$sql_create_module[] = "INSERT INTO " . NV_CRONJOBS_GLOBALTABLE . " (start_time, inter_val, run_file, run_func, params, del, is_sys, act, last_time, last_result, vi_cron_name) VALUES(1547340000, 1440, 'workforce_birthday_reminder.php', 'cron_workforce_birthday_reminder', '', 0, 0, 1, 0, 0, 'Nhắc nhở sinh nhật nhân viên');";
