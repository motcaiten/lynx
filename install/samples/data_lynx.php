<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2019 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Thu, 25 Jul 2019 03:32:23 GMT
 */

if (!defined('NV_MAINFILE')) {
    die('Stop!!!');
}

$sample_base_siteurl = '/';
$sql_create_table = array();


$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_banners_plans`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_banners_plans` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `blang` char(2) DEFAULT '',
  `title` varchar(250) NOT NULL,
  `description` text DEFAULT NULL,
  `form` varchar(100) NOT NULL,
  `width` smallint(4) unsigned NOT NULL DEFAULT 0,
  `height` smallint(4) unsigned NOT NULL DEFAULT 0,
  `act` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `require_image` tinyint(1) unsigned NOT NULL DEFAULT 1,
  `uploadtype` varchar(255) NOT NULL DEFAULT '',
  `uploadgroup` varchar(255) NOT NULL DEFAULT '',
  `exp_time` int(11) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `title` (`title`)
) ENGINE=MyISAM  AUTO_INCREMENT=4  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_banners_plans` (`id`, `blang`, `title`, `description`, `form`, `width`, `height`, `act`, `require_image`, `uploadtype`, `uploadgroup`, `exp_time`) VALUES (1, '', 'Quang cao giua trang', '', 'sequential', 575, 72, 1, 1, 'images,flash', '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_banners_plans` (`id`, `blang`, `title`, `description`, `form`, `width`, `height`, `act`, `require_image`, `uploadtype`, `uploadgroup`, `exp_time`) VALUES (2, '', 'Quang cao trai', '', 'sequential', 212, 800, 1, 1, 'images,flash', '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_banners_plans` (`id`, `blang`, `title`, `description`, `form`, `width`, `height`, `act`, `require_image`, `uploadtype`, `uploadgroup`, `exp_time`) VALUES (3, '', 'Quang cao Phai', '', 'random', 250, 500, 1, 1, 'images,flash', '', 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_banners_rows`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_banners_rows` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `pid` smallint(5) unsigned NOT NULL DEFAULT 0,
  `clid` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `file_name` varchar(255) NOT NULL,
  `file_ext` varchar(100) NOT NULL,
  `file_mime` varchar(100) NOT NULL,
  `width` int(4) unsigned NOT NULL DEFAULT 0,
  `height` int(4) unsigned NOT NULL DEFAULT 0,
  `file_alt` varchar(255) DEFAULT '',
  `imageforswf` varchar(255) DEFAULT '',
  `click_url` varchar(255) DEFAULT '',
  `target` varchar(10) NOT NULL DEFAULT '_blank',
  `bannerhtml` mediumtext NOT NULL,
  `add_time` int(11) unsigned NOT NULL DEFAULT 0,
  `publ_time` int(11) unsigned NOT NULL DEFAULT 0,
  `exp_time` int(11) unsigned NOT NULL DEFAULT 0,
  `hits_total` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `act` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `weight` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `clid` (`clid`)
) ENGINE=MyISAM  AUTO_INCREMENT=4  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_banners_rows` (`id`, `title`, `pid`, `clid`, `file_name`, `file_ext`, `file_mime`, `width`, `height`, `file_alt`, `imageforswf`, `click_url`, `target`, `bannerhtml`, `add_time`, `publ_time`, `exp_time`, `hits_total`, `act`, `weight`) VALUES (2, 'vinades', 2, 1, 'vinades.jpg', 'jpg', 'image/jpeg', 212, 400, '', '', 'http://vinades.vn', '_blank', '', 1514880771, 1514880771, 0, 0, 1, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_banners_rows` (`id`, `title`, `pid`, `clid`, `file_name`, `file_ext`, `file_mime`, `width`, `height`, `file_alt`, `imageforswf`, `click_url`, `target`, `bannerhtml`, `add_time`, `publ_time`, `exp_time`, `hits_total`, `act`, `weight`) VALUES (3, 'Quang cao giua trang', 1, 1, 'webnhanh.jpg', 'png', 'image/jpeg', 575, 72, '', '', 'http://webnhanh.vn', '_blank', '', 1514880771, 1514880771, 0, 0, 1, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_branch`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_branch` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `groups_manage` varchar(50) NOT NULL,
  `weight` smallint(4) unsigned NOT NULL DEFAULT 0,
  `active` tinyint(1) unsigned NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=4  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_branch` (`id`, `title`, `address`, `email`, `phone`, `groups_manage`, `weight`, `active`) VALUES (1, 'rthft h ft', '161 Tôn Thất Thuyết, Đông Hà', 'phanhuuhien@tdfoss.vn', '905908430', '15', 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_branch` (`id`, `title`, `address`, `email`, `phone`, `groups_manage`, `weight`, `active`) VALUES (3, 'drg drg dr', '', '', '', '1', 2, 1)";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'closed_site', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'admin_theme', 'admin_adminlte')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'date_pattern', 'l, d/m/Y')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'time_pattern', 'H:i')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'online_upd', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'statistic', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'site_phone', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'mailer_mode', 'smtp')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'smtp_host', 'smtp.gmail.com')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'smtp_ssl', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'smtp_port', '465')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'verify_peer_ssl', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'verify_peer_name_ssl', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'smtp_username', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'smtp_password', 'DNTYt9EgF_nEo81I1mz7zw,,')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'googleAnalyticsID', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'googleAnalyticsSetDomainName', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'googleAnalyticsMethod', 'classic')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'searchEngineUniqueID', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'metaTagsOgp', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'pageTitleMode', 'pagetitle')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'description_length', '170')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_unickmin', '4')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_unickmax', '20')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_upassmin', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_upassmax', '32')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'dir_forum', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_unick_type', '4')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_upass_type', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'allowmailchange', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'allowuserpublic', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'allowquestion', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'allowloginchange', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'allowuserlogin', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'allowuserloginmulti', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'allowuserreg', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'is_user_forum', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'openid_servers', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'openid_processing', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'user_check_pass_time', '1800')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'auto_login_after_reg', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'whoviewuser', '2')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'ssl_https', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'facebook_client_id', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'facebook_client_secret', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'google_client_id', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'google_client_secret', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'cors_restrict_domains', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'cors_valid_domains', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_gfx_num', '6')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'notification_active', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'notification_autodel', '15')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'site_keywords', 'NukeViet, portal, mysql, php')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'block_admin_ip', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'admfirewall', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'dump_autobackup', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'dump_backup_ext', 'gz')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'dump_backup_day', '30')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'gfx_chk', '3')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'file_allowed_ext', 'adobe,archives,audio,documents,flash,images,real,video')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'forbid_extensions', 'php,php3,php4,php5,phtml,inc')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'forbid_mimes', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'nv_max_size', '268435456')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'upload_checking_mode', 'lite')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'upload_alt_require', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'upload_auto_alt', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'upload_chunk_size', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'useactivate', '2')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'allow_sitelangs', 'vi')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'read_type', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'rewrite_enable', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'rewrite_optional', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'rewrite_endurl', '/')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'rewrite_exturl', '.html')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'rewrite_op_mod', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'autocheckupdate', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'autoupdatetime', '24')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'gzip_method', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'authors_detail_main', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'spadmin_add_admin', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'timestamp', '1563851254')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'captcha_type', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'version', '4.3.06')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'cookie_httponly', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'admin_check_pass_time', '1800')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'cookie_secure', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'is_flood_blocker', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'max_requests_60', '40')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'max_requests_300', '150')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'is_login_blocker', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'login_number_tracking', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'login_time_tracking', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'login_time_ban', '30')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'nv_display_errors_list', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'display_errors_list', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'nv_auto_resize', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'dump_interval', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'cdn_url', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'two_step_verification', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'recaptcha_sitekey', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'recaptcha_secretkey', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'recaptcha_type', 'image')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_gfx_width', '150')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_gfx_height', '40')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_max_width', '1500')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_max_height', '1500')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_live_cookie_time', '31104000')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_live_session_time', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_anti_iframe', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_anti_agent', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_allowed_html_tags', 'embed, object, param, a, b, blockquote, br, caption, col, colgroup, div, em, h1, h2, h3, h4, h5, h6, hr, i, img, li, p, span, strong, s, sub, sup, table, tbody, td, th, tr, u, ul, ol, iframe, figure, figcaption, video, audio, source, track, code, pre')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_debug', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_domain', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_logo', 'uploads/logo_200_86.png')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_banner', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_favicon', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_description', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_keywords', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'theme_type', 'r,d')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_theme', 'dashboard')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'preview_theme', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'mobile_theme', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_home_module', 'home')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'switch_mobi_des', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'upload_logo', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'upload_logo_pos', 'bottomRight')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'autologosize1', '50')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'autologosize2', '40')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'autologosize3', '30')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'autologomod', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'name_show', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'cronjobs_next_time', '1564025735')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'disable_site_content', 'Vì lý do kỹ thuật website tạm ngưng hoạt động. Thành thật xin lỗi các bạn vì sự bất tiện này!')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'seotools', 'prcservice', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'auto_postcomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'allowed_comm', '-1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'view_comm', '6')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'setcomm', '4')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'activecomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'emailcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'adminscomm', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'sortcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'captcha', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'perpagecomm', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'timeoutcomm', '360')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'allowattachcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'alloweditorcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'indexfile', 'viewcat_main_right')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'per_page', '20')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'st_links', '10')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'homewidth', '100')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'homeheight', '150')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'blockwidth', '70')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'blockheight', '75')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'imagefull', '460')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'copyright', 'Chú ý: Việc đăng lại bài viết trên ở website hoặc các phương tiện truyền thông khác mà không ghi rõ nguồn http://nukeviet.vn là vi phạm bản quyền')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'showtooltip', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'tooltip_position', 'bottom')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'tooltip_length', '150')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'showhometext', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'timecheckstatus', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'config_source', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'show_no_image', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'allowed_rating_point', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'facebookappid', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'socialbutton', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'alias_lower', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'tags_alias', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'auto_tags', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'tags_remind', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'keywords_tag', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'copy_news', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'structure_upload', 'Ym')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'imgposition', '2')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'htmlhometext', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'order_articles', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'identify_cat_change', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'elas_use', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'elas_host', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'elas_port', '9200')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'elas_index', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'instant_articles_active', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'instant_articles_template', 'default')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'instant_articles_httpauth', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'instant_articles_username', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'instant_articles_password', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'instant_articles_livetime', '60')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'instant_articles_gettime', '120')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'instant_articles_auto', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'auto_postcomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'allowed_comm', '-1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'view_comm', '6')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'setcomm', '4')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'activecomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'emailcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'adminscomm', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'sortcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'captcha', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'perpagecomm', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'timeoutcomm', '360')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'allowattachcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'alloweditorcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'frontend_edit_alias', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'frontend_edit_layout', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'contact', 'bodytext', 'Để không ngừng nâng cao chất lượng dịch vụ và đáp ứng tốt hơn nữa các yêu cầu của Quý khách, chúng tôi mong muốn nhận được các thông tin phản hồi. Nếu Quý khách có bất kỳ thắc mắc hoặc đóng góp nào, xin vui lòng liên hệ với chúng tôi theo thông tin dưới đây. Chúng tôi sẽ phản hồi lại Quý khách trong thời gian sớm nhất.')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'contact', 'sendcopymode', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'auto_postcomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'allowed_comm', '-1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'view_comm', '6')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'setcomm', '4')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'activecomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'emailcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'adminscomm', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'sortcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'captcha', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'perpagecomm', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'timeoutcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'allowattachcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'alloweditorcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'auto_postcomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'allowed_comm', '-1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'view_comm', '6')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'setcomm', '4')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'activecomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'emailcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'adminscomm', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'sortcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'captcha', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'perpagecomm', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'timeoutcomm', '360')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'allowattachcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'alloweditorcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'freecontent', 'next_execute', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'statistics_timezone', 'Asia/Bangkok')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'site_email', 'contact@tdfoss.vn')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'error_set_logs', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'error_send_email', 'admin@nukeviet.vn')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'site_lang', 'vi')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'my_domains', 'site-lynx.vn')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'site_timezone', 'byCountry')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'proxy_blocker', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'str_referer_blocker', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'lang_geo', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'ftp_server', 'localhost')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'ftp_port', '21')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'ftp_user_name', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'ftp_user_pass', 'DNTYt9EgF_nEo81I1mz7zw,,')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'ftp_path', '/')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'ftp_check_login', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'money', 'workgroup', '10,16')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'themes', 'simple', 'a:1:{s:12:\"theme_layout\";i:1;}')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'notification', 'onesignal_appid', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'workreport', 'work_groups', '4')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'workreport', 'admin_groups', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'projects', 'auto_postcomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'projects', 'allowed_comm', '6')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'projects', 'view_comm', '6')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'projects', 'setcomm', '4')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'projects', 'activecomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'projects', 'emailcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'projects', 'adminscomm', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'projects', 'sortcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'projects', 'captcha', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'projects', 'perpagecomm', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'projects', 'timeoutcomm', '360')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'projects', 'allowattachcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'projects', 'alloweditorcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'projects', 'groups_manage', '1,3')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'customer', 'groups_admin', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'customer', 'groups_manage', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'invoice', 'groups_manage', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'invoice', 'groups_admin', '10')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'invoice', 'default_status', '0,3')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'workforce', 'groups_admin', '1,2')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'groups_use', 'groups_use', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'workforce', 'groups_use', '1,2')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'workreport', 'allow_time', '1440')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'workreport', 'allow_days', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'projects', 'default_status', '1,2,3')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'workforce', 'workdays', '24')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'workforce', 'insurrance', '10.5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'workforce', 'overtime', '150')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'notification', 'slack_tocken', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'workreport', 'type_content', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'money', 'groupmanager', '10,16')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'invoice', 'auto_postcomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'invoice', 'allowed_comm', '6')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'invoice', 'view_comm', '6')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'invoice', 'setcomm', '4')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'invoice', 'activecomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'invoice', 'emailcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'invoice', 'adminscomm', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'invoice', 'sortcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'invoice', 'captcha', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'invoice', 'perpagecomm', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'invoice', 'timeoutcomm', '360')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'invoice', 'allowattachcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'invoice', 'alloweditorcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', '', 'score_allow', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', '', 'score_money', '100000')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', '', 'money_score', '10000')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'invoice', 'score_allow', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'invoice', 'score_money', '100000')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'invoice', 'money_score', '10000')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'workforce', 'termofcontract', '60')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_cronjobs`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_cronjobs` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `start_time` int(11) unsigned NOT NULL DEFAULT 0,
  `inter_val` int(11) unsigned NOT NULL DEFAULT 0,
  `inter_val_type` tinyint(1) unsigned NOT NULL DEFAULT 0 COMMENT '0: Lặp lại sau thời điểm bắt đầu thực tế, 1:lặp lại sau thời điểm bắt đầu trong CSDL',
  `run_file` varchar(255) NOT NULL,
  `run_func` varchar(255) NOT NULL,
  `params` varchar(255) DEFAULT NULL,
  `del` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `is_sys` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `act` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `last_time` int(11) unsigned NOT NULL DEFAULT 0,
  `last_result` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `vi_cron_name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `is_sys` (`is_sys`)
) ENGINE=MyISAM  AUTO_INCREMENT=15  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (1, 1514880771, 5, 0, 'online_expired_del.php', 'cron_online_expired_del', '', 0, 1, 1, 1564025435, 1, 'Xóa các dòng ghi trạng thái online đã cũ trong CSDL')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (2, 1514880771, 1440, 0, 'dump_autobackup.php', 'cron_dump_autobackup', '', 0, 1, 1, 1564025435, 1, 'Tự động lưu CSDL')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (3, 1514880771, 60, 0, 'temp_download_destroy.php', 'cron_auto_del_temp_download', '', 0, 1, 1, 1564025435, 1, 'Xóa các file tạm trong thư mục tmp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (4, 1514880771, 30, 0, 'ip_logs_destroy.php', 'cron_del_ip_logs', '', 0, 1, 1, 1564025435, 1, 'Xóa IP log files, Xóa các file nhật ký truy cập')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (5, 1514880771, 1440, 0, 'error_log_destroy.php', 'cron_auto_del_error_log', '', 0, 1, 1, 1564025435, 1, 'Xóa các file error_log quá hạn')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (6, 1514880771, 360, 0, 'error_log_sendmail.php', 'cron_auto_sendmail_error_log', '', 0, 1, 0, 0, 0, 'Gửi email các thông báo lỗi cho admin')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (7, 1514880771, 60, 0, 'ref_expired_del.php', 'cron_ref_expired_del', '', 0, 1, 1, 1564025435, 1, 'Xóa các referer quá hạn')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (8, 1514880771, 60, 0, 'check_version.php', 'cron_auto_check_version', '', 0, 1, 1, 1564025435, 1, 'Kiểm tra phiên bản NukeViet')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (9, 1514880771, 1440, 0, 'notification_autodel.php', 'cron_notification_autodel', '', 0, 1, 1, 1564025435, 1, 'Xóa thông báo cũ')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (13, 1547513100, 1440, 0, 'workforce_birthday_reminder.php', 'cron_workforce_birthday_reminder', '', 0, 0, 1, 1564025435, 1, 'Nhắc nhở sinh nhật nhân viên')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (14, 1558116000, 1440, 1, 'customer_happy_birthday.php', 'cron_customer_happy_birthday', '', 0, 0, 1, 1563991200, 1, 'Chúc mừng sinh nhật khách hàng')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_extension_files`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_extension_files` (
  `idfile` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL DEFAULT 'other',
  `title` varchar(55) NOT NULL DEFAULT '',
  `path` varchar(255) NOT NULL DEFAULT '',
  `lastmodified` int(11) unsigned NOT NULL DEFAULT 0,
  `duplicate` smallint(4) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`idfile`)
) ENGINE=MyISAM  AUTO_INCREMENT=159  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (1, 'module', 'home', 'modules/home/funcs/.htaccess', 1517879613, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (2, 'module', 'home', 'modules/home/funcs/index.html', 1517879613, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (3, 'module', 'home', 'modules/home/funcs/main.php', 1517879613, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (4, 'module', 'home', 'modules/home/functions.php', 1517879613, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (5, 'module', 'home', 'modules/home/index.html', 1517879613, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (6, 'module', 'home', 'modules/home/version.php', 1517879613, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (7, 'module', 'workreport', 'modules/workreport/theme.php', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (8, 'module', 'workreport', 'modules/workreport/admin.menu.php', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (9, 'module', 'workreport', 'modules/workreport/funcs/.htaccess', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (10, 'module', 'workreport', 'modules/workreport/funcs/index.html', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (11, 'module', 'workreport', 'modules/workreport/funcs/main.php', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (12, 'module', 'workreport', 'modules/workreport/admin.functions.php', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (13, 'module', 'workreport', 'modules/workreport/functions.php', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (14, 'module', 'workreport', 'modules/workreport/index.html', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (15, 'module', 'workreport', 'modules/workreport/admin/.htaccess', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (16, 'module', 'workreport', 'modules/workreport/admin/index.html', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (17, 'module', 'workreport', 'modules/workreport/admin/config.php', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (18, 'module', 'workreport', 'modules/workreport/admin/main.php', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (19, 'module', 'workreport', 'modules/workreport/version.php', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (20, 'module', 'workreport', 'modules/workreport/siteinfo.php', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (21, 'module', 'workreport', 'modules/workreport/action_mysql.php', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (22, 'module', 'workreport', 'modules/workreport/language/.htaccess', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (23, 'module', 'workreport', 'modules/workreport/language/index.html', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (24, 'module', 'workreport', 'modules/workreport/language/admin_vi.php', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (25, 'module', 'workreport', 'modules/workreport/language/vi.php', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (26, 'module', 'workreport', 'modules/workreport/language/admin_en.php', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (27, 'module', 'workreport', 'modules/workreport/language/en.php', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (28, 'module', 'workreport', 'modules/workreport/blocks/.htaccess', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (29, 'module', 'workreport', 'modules/workreport/blocks/index.html', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (30, 'module', 'workreport', 'themes/default/modules/workreport/main.tpl', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (31, 'module', 'workreport', 'themes/default/modules/workreport/.htaccess', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (32, 'module', 'workreport', 'themes/default/modules/workreport/index.html', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (33, 'module', 'workreport', 'themes/default/css/workreport.css', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (34, 'module', 'workreport', 'themes/default/js/workreport.js', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (35, 'module', 'workreport', 'themes/default/images/workreport/index.html', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (36, 'module', 'workreport', 'themes/admin_default/css/workreport.css', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (37, 'module', 'workreport', 'themes/admin_default/js/workreport.js', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (38, 'module', 'workreport', 'themes/admin_default/images/workreport/index.html', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (39, 'module', 'workreport', 'themes/admin_default/modules/workreport/main.tpl', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (40, 'module', 'workreport', 'themes/admin_default/modules/workreport/config.tpl', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (41, 'module', 'workreport', 'themes/admin_default/modules/workreport/.htaccess', 1521274440, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_extension_files` (`idfile`, `type`, `title`, `path`, `lastmodified`, `duplicate`) VALUES (42, 'module', 'workreport', 'themes/admin_default/modules/workreport/index.html', 1521274440, 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_ips`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_ips` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) unsigned NOT NULL DEFAULT 0,
  `ip` varchar(32) DEFAULT NULL,
  `mask` tinyint(4) NOT NULL DEFAULT 0,
  `area` tinyint(3) NOT NULL,
  `begintime` int(11) DEFAULT NULL,
  `endtime` int(11) DEFAULT NULL,
  `notice` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ip` USING BTREE (`ip`,`type`)
) ENGINE=MyISAM  AUTO_INCREMENT=2  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_ips` (`id`, `type`, `ip`, `mask`, `area`, `begintime`, `endtime`, `notice`) VALUES (1, 1, '127.0.0.1', 0, 1, 1551413478, 0, '')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_language`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_language` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `idfile` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `langtype` varchar(50) NOT NULL DEFAULT 'lang_module',
  `lang_key` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `filelang` USING BTREE (`idfile`,`lang_key`,`langtype`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_language_file`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_language_file` (
  `idfile` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `module` varchar(50) NOT NULL,
  `admin_file` varchar(200) NOT NULL DEFAULT '0',
  `langtype` varchar(50) NOT NULL DEFAULT 'lang_module',
  PRIMARY KEY (`idfile`),
  UNIQUE KEY `module` (`module`,`admin_file`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_plugin`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_plugin` (
  `pid` tinyint(4) NOT NULL AUTO_INCREMENT,
  `plugin_file` varchar(50) NOT NULL,
  `plugin_area` tinyint(4) NOT NULL,
  `weight` tinyint(4) NOT NULL,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `plugin_file` (`plugin_file`)
) ENGINE=MyISAM  AUTO_INCREMENT=21  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_plugin` (`pid`, `plugin_file`, `plugin_area`, `weight`) VALUES (1, 'qrcode.php', 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_plugin` (`pid`, `plugin_file`, `plugin_area`, `weight`) VALUES (2, 'cdn_js_css_image.php', 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_plugin` (`pid`, `plugin_file`, `plugin_area`, `weight`) VALUES (12, 'crm_check.php', 2, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_sendmail`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_sendmail` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `from_mail` varchar(255) NOT NULL,
  `to_mail` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `files` varchar(255) NOT NULL DEFAULT '',
  `embeddedimage` tinyint(1) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_setup_extensions`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_setup_extensions` (
  `id` int(11) NOT NULL DEFAULT 0,
  `type` varchar(10) NOT NULL DEFAULT 'other',
  `title` varchar(55) NOT NULL,
  `is_sys` tinyint(1) NOT NULL DEFAULT 0,
  `is_virtual` tinyint(1) NOT NULL DEFAULT 0,
  `basename` varchar(50) NOT NULL DEFAULT '',
  `table_prefix` varchar(55) NOT NULL DEFAULT '',
  `version` varchar(50) NOT NULL,
  `addtime` int(11) NOT NULL DEFAULT 0,
  `author` text NOT NULL,
  `note` varchar(255) DEFAULT '',
  UNIQUE KEY `title` (`type`,`title`),
  KEY `id` (`id`),
  KEY `type` (`type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'theme', 'simple', 0, 0, 'simple', 'simple', '4.0.0 1515233523', 1515233523, 'hongoctrien', 'Theme for NukeViet 4')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (19, 'module', 'banners', 1, 0, 'banners', 'banners', '4.3.06 1561107600', 1514880771, 'VINADES <contact@vinades.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (284, 'module', 'seek', 1, 0, 'seek', 'seek', '4.3.06 1561107600', 1514880771, 'VINADES <contact@vinades.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (24, 'module', 'users', 1, 1, 'users', 'users', '4.3.06 1561107600', 1514880771, 'VINADES <contact@vinades.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (29, 'module', 'menu', 0, 0, 'menu', 'menu', '4.3.06 1561107600', 1514880771, 'VINADES <contact@vinades.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (283, 'module', 'feeds', 1, 0, 'feeds', 'feeds', '4.3.06 1561107600', 1514880771, 'VINADES <contact@vinades.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (282, 'module', 'page', 1, 1, 'page', 'page', '4.3.06 1561107600', 1514880771, 'VINADES <contact@vinades.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (281, 'module', 'comment', 1, 0, 'comment', 'comment', '4.3.06 1561107600', 1514880771, 'VINADES <contact@vinades.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (327, 'module', 'two-step-verification', 1, 0, 'two-step-verification', 'two_step_verification', '4.3.06 1561107600', 1514880771, 'VINADES <contact@vinades.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (307, 'theme', 'default', 0, 0, 'default', 'default', '4.3.06 1561107600', 1514880771, 'VINADES <contact@vinades.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (311, 'theme', 'mobile_default', 0, 0, 'mobile_default', 'mobile_default', '4.3.06 1561107600', 1514880771, 'VINADES <contact@vinades.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'projects', 0, 0, 'projects', 'projects', '1.0.00 1515748446', 1515750959, 'TDFOSS.,LTD (contact@tdfoss.vn)', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'services', 0, 0, 'services', 'services', '1.0.00 1516075899', 1516096778, 'TDFOSS.,LTD (contact@tdfoss.vn)', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'notification', 0, 1, 'notification', 'notification', '4.0.11 1430878940', 1517809309, 'VINADES (contact@vinades.vn)', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (137, 'module', 'home', 0, 0, 'home', 'home', '3.4.01 1517879613', 1517879613, 'hoaquynhtim99 (phantandung92@gmail.com)', 'Module dùng làm trang chủ cho những website sử dụng block để làm homepage.')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'email', 0, 0, 'email', 'email', '1.0.01 1517972690', 1518147698, 'Le Hong Quang (quanglh268@tdfoss.com)', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'invoice', 0, 0, 'invoice', 'invoice', '1.0.00 1519616917', 1519719766, 'TDFOSS.,LTD (contact@tdfoss.vn)', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'products', 0, 0, 'products', 'products', '1.0.00 1519710750', 1519719766, 'TDFOSS.,LTD (contact@tdfoss.vn)', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'workreport', 0, 1, 'workreport', 'workreport', '1.0.00 1521274440', 1521274440, 'mynukeviet (contact@mynukeviet.com)', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'customer', 1, 0, 'customer', 'customer', '1.0.00 1525523219', 1525527261, 'TDFOSS.,LTD (contact@tdfoss.vn)', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'workforce', 1, 0, 'workforce', 'workforce', '1.0.00 1525563940', 1525568595, 'TDFOSS.,LTD (contact@tdfoss.vn)', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'api', 0, 0, 'api', 'api', '1.0.00 1523071996', 1526207356, 'mynukeviet (contact@mynukeviet.com)', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'theme', 'dashboard', 0, 0, 'dashboard', 'dashboard', '4.3.05 1555329366', 1555329366, 'TDFOSS.,LTD', 'CÔNG TY TNHH PHÁT TRIỂN VÀ DỊCH VỤ NGUỒN MỞ THUẬN ĐỨC. (THUAN DUC OPEN SOURCE DEVELOPMENT AND SERVICES COMPANY LIMITED - TDFOSS.,LTD).')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'contact', 0, 1, 'contact', 'contact', '4.3.06 1561107600', 1555580665, 'VINADES <contact@vinades.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'freecontent', 0, 0, 'freecontent', 'freecontent', '4.3.06 1561107600', 1555580665, 'VINADES <contact@vinades.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'news', 0, 1, 'news', 'news', '4.3.06 1561107600', 1555580665, 'VINADES <contact@vinades.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'statistics', 0, 0, 'statistics', 'statistics', '4.3.06 1561107600', 1555580665, 'VINADES <contact@vinades.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'voting', 0, 0, 'voting', 'voting', '4.3.06 1561107600', 1555580665, 'VINADES <contact@vinades.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'money', 0, 1, 'money', 'money', '1.0.00 1510838877', 1555580846, 'mynukeviet (contact@mynukeviet.com)', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'calendar', 1, 0, 'calendar', 'calendar', '1.0.00 1556793708', 1556793858, 'mynukeviet (contact@mynukeviet.com)', '')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_setup_language`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_setup_language` (
  `lang` char(2) NOT NULL,
  `setup` tinyint(1) NOT NULL DEFAULT 0,
  `weight` smallint(4) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`lang`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_language` (`lang`, `setup`, `weight`) VALUES ('vi', 1, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_backupcodes`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_backupcodes` (
  `userid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `is_used` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `time_used` int(11) unsigned NOT NULL DEFAULT 0,
  `time_creat` int(11) unsigned NOT NULL DEFAULT 0,
  UNIQUE KEY `userid` (`userid`,`code`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_config`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_config` (
  `config` varchar(100) NOT NULL,
  `content` text DEFAULT NULL,
  `edit_time` int(11) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`config`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('access_admin', 'a:6:{s:12:\"access_addus\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:14:\"access_waiting\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:13:\"access_editus\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:12:\"access_delus\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:13:\"access_passus\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:13:\"access_groups\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}}', 1526601221)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('password_simple', '000000|1234|2000|12345|111111|123123|123456|654321|696969|1234567|1234569|11223344|12345678|12345679|23456789|66666666|66668888|68686868|87654321|88888888|99999999|123456789|999999999|1234567890|aaaaaa|abc123|abc123@|abc@123|admin123|admin123@|admin@123|adobe1|adobe123|azerty|baseball|dragon|football|harley|hoilamgi|iloveyou|jennifer|jordan|khongbiet|khongco|khongcopass|letmein|macromedia|master|michael|monkey|mustang|nuke123|nuke123@|nuke@123|password|photoshop|pussy|qwerty|shadow|superman', 1526601221)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('deny_email', 'yoursite.com|mysite.com|localhost|xxx', 1526601221)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('deny_name', 'anonimo|anonymous|god|linux|nobody|operator|root', 1526601221)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('avatar_width', '80', 1526601221)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('avatar_height', '80', 1526601221)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('active_group_newusers', '0', 1526601221)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('active_user_logs', '1', 1526601221)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('min_old_user', '16', 1526601221)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('register_active_time', '86400', 1514880771)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('siteterms_vi', '<p> Để trở thành thành viên, bạn phải cam kết đồng ý với các điều khoản dưới đây. Chúng tôi có thể thay đổi lại những điều khoản này vào bất cứ lúc nào và chúng tôi sẽ cố gắng thông báo đến bạn kịp thời.<br /> <br /> Bạn cam kết không gửi bất cứ bài viết có nội dung lừa đảo, thô tục, thiếu văn hoá; vu khống, khiêu khích, đe doạ người khác; liên quan đến các vấn đề tình dục hay bất cứ nội dung nào vi phạm luật pháp của quốc gia mà bạn đang sống, luật pháp của quốc gia nơi đặt máy chủ của website này hay luật pháp quốc tế. Nếu vẫn cố tình vi phạm, ngay lập tức bạn sẽ bị cấm tham gia vào website. Địa chỉ IP của tất cả các bài viết đều được ghi nhận lại để bảo vệ các điều khoản cam kết này trong trường hợp bạn không tuân thủ.<br /> <br /> Bạn đồng ý rằng website có quyền gỡ bỏ, sửa, di chuyển hoặc khoá bất kỳ bài viết nào trong website vào bất cứ lúc nào tuỳ theo nhu cầu công việc.<br /> <br /> Đăng ký làm thành viên của chúng tôi, bạn cũng phải đồng ý rằng, bất kỳ thông tin cá nhân nào mà bạn cung cấp đều được lưu trữ trong cơ sở dữ liệu của hệ thống. Mặc dù những thông tin này sẽ không được cung cấp cho bất kỳ người thứ ba nào khác mà không được sự đồng ý của bạn, chúng tôi không chịu trách nhiệm về việc những thông tin cá nhân này của bạn bị lộ ra bên ngoài từ những kẻ phá hoại có ý đồ xấu tấn công vào cơ sở dữ liệu của hệ thống.</p>', 1274757129)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('active_editinfo_censor', '0', 1555328614)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_edit`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_edit` (
  `userid` mediumint(8) unsigned NOT NULL,
  `lastedit` int(11) unsigned NOT NULL DEFAULT 0,
  `info_basic` text NOT NULL,
  `info_custom` text NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_field`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_field` (
  `fid` mediumint(8) NOT NULL AUTO_INCREMENT,
  `field` varchar(25) NOT NULL,
  `weight` int(10) unsigned NOT NULL DEFAULT 1,
  `field_type` enum('number','date','textbox','textarea','editor','select','radio','checkbox','multiselect') NOT NULL DEFAULT 'textbox',
  `field_choices` text NOT NULL,
  `sql_choices` text NOT NULL,
  `match_type` enum('none','alphanumeric','email','url','regex','callback') NOT NULL DEFAULT 'none',
  `match_regex` varchar(250) NOT NULL DEFAULT '',
  `func_callback` varchar(75) NOT NULL DEFAULT '',
  `min_length` int(11) NOT NULL DEFAULT 0,
  `max_length` bigint(20) unsigned NOT NULL DEFAULT 0,
  `required` tinyint(3) unsigned NOT NULL DEFAULT 0,
  `show_register` tinyint(3) unsigned NOT NULL DEFAULT 0,
  `user_editable` tinyint(3) unsigned NOT NULL DEFAULT 0,
  `show_profile` tinyint(4) NOT NULL DEFAULT 1,
  `class` varchar(50) NOT NULL,
  `language` text NOT NULL,
  `default_value` varchar(255) NOT NULL DEFAULT '',
  `system` tinyint(1) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `field` (`field`)
) ENGINE=MyISAM  AUTO_INCREMENT=10  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_field` (`fid`, `field`, `weight`, `field_type`, `field_choices`, `sql_choices`, `match_type`, `match_regex`, `func_callback`, `min_length`, `max_length`, `required`, `show_register`, `user_editable`, `show_profile`, `class`, `language`, `default_value`, `system`) VALUES (1, 'first_name', 1, 'textbox', '', '', 'none', '', '', 0, 100, 0, 0, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:4:\"Tên\";i:1;s:0:\"\";}}', '', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_field` (`fid`, `field`, `weight`, `field_type`, `field_choices`, `sql_choices`, `match_type`, `match_regex`, `func_callback`, `min_length`, `max_length`, `required`, `show_register`, `user_editable`, `show_profile`, `class`, `language`, `default_value`, `system`) VALUES (2, 'last_name', 2, 'textbox', '', '', 'none', '', '', 0, 100, 0, 0, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:20:\"Họ và tên đệm\";i:1;s:0:\"\";}}', '', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_field` (`fid`, `field`, `weight`, `field_type`, `field_choices`, `sql_choices`, `match_type`, `match_regex`, `func_callback`, `min_length`, `max_length`, `required`, `show_register`, `user_editable`, `show_profile`, `class`, `language`, `default_value`, `system`) VALUES (3, 'gender', 3, 'select', 'a:3:{s:1:\"N\";s:3:\"N/A\";s:1:\"M\";s:3:\"Nam\";s:1:\"F\";s:4:\"Nữ\";}', '', 'none', '', '', 0, 255, 0, 0, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:12:\"Giới tính\";i:1;s:0:\"\";}}', '2', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_field` (`fid`, `field`, `weight`, `field_type`, `field_choices`, `sql_choices`, `match_type`, `match_regex`, `func_callback`, `min_length`, `max_length`, `required`, `show_register`, `user_editable`, `show_profile`, `class`, `language`, `default_value`, `system`) VALUES (4, 'birthday', 4, 'date', 'a:1:{s:12:\"current_date\";i:0;}', '', 'none', '', '', 0, 0, 0, 0, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:22:\"Ngày tháng năm sinh\";i:1;s:0:\"\";}}', '0', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_field` (`fid`, `field`, `weight`, `field_type`, `field_choices`, `sql_choices`, `match_type`, `match_regex`, `func_callback`, `min_length`, `max_length`, `required`, `show_register`, `user_editable`, `show_profile`, `class`, `language`, `default_value`, `system`) VALUES (5, 'sig', 5, 'textarea', '', '', 'none', '', '', 0, 1000, 0, 0, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:9:\"Chữ ký\";i:1;s:0:\"\";}}', '', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_field` (`fid`, `field`, `weight`, `field_type`, `field_choices`, `sql_choices`, `match_type`, `match_regex`, `func_callback`, `min_length`, `max_length`, `required`, `show_register`, `user_editable`, `show_profile`, `class`, `language`, `default_value`, `system`) VALUES (6, 'question', 6, 'textbox', '', '', 'none', '', '', 3, 255, 0, 0, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:22:\"Câu hỏi bảo mật\";i:1;s:0:\"\";}}', '', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_field` (`fid`, `field`, `weight`, `field_type`, `field_choices`, `sql_choices`, `match_type`, `match_regex`, `func_callback`, `min_length`, `max_length`, `required`, `show_register`, `user_editable`, `show_profile`, `class`, `language`, `default_value`, `system`) VALUES (7, 'answer', 7, 'textbox', '', '', 'none', '', '', 3, 255, 0, 0, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:22:\"Trả lời câu hỏi\";i:1;s:0:\"\";}}', '', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_field` (`fid`, `field`, `weight`, `field_type`, `field_choices`, `sql_choices`, `match_type`, `match_regex`, `func_callback`, `min_length`, `max_length`, `required`, `show_register`, `user_editable`, `show_profile`, `class`, `language`, `default_value`, `system`) VALUES (8, 'slack_id', 9, 'textbox', '', '', 'none', '', '', 0, 255, 0, 0, 1, 0, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:8:\"Slack ID\";i:1;s:0:\"\";}}', '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_field` (`fid`, `field`, `weight`, `field_type`, `field_choices`, `sql_choices`, `match_type`, `match_regex`, `func_callback`, `min_length`, `max_length`, `required`, `show_register`, `user_editable`, `show_profile`, `class`, `language`, `default_value`, `system`) VALUES (9, 'notify_type', 8, 'checkbox', 'a:2:{s:4:\"push\";s:18:\"Thông báo đẩy\";s:5:\"slack\";s:5:\"Slack\";}', '', 'none', '', '', 0, 255, 0, 0, 1, 0, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:24:\"Kênh nhận thông báo\";i:1;s:0:\"\";}}', '1', 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_groups`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_groups` (
  `group_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(240) NOT NULL,
  `email` varchar(100) DEFAULT '',
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `group_type` tinyint(4) unsigned NOT NULL DEFAULT 0 COMMENT '0:Sys, 1:approval, 2:public',
  `group_color` varchar(10) NOT NULL,
  `group_avatar` varchar(255) NOT NULL,
  `require_2step_admin` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `require_2step_site` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `is_default` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `add_time` int(11) NOT NULL,
  `exp_time` int(11) NOT NULL,
  `weight` int(11) unsigned NOT NULL DEFAULT 0,
  `act` tinyint(1) unsigned NOT NULL,
  `idsite` int(11) unsigned NOT NULL DEFAULT 0,
  `numbers` mediumint(9) unsigned NOT NULL DEFAULT 0,
  `siteus` tinyint(4) unsigned NOT NULL DEFAULT 0,
  `config` varchar(250) DEFAULT '',
  PRIMARY KEY (`group_id`),
  UNIQUE KEY `ktitle` (`title`,`idsite`),
  KEY `exp_time` (`exp_time`)
) ENGINE=MyISAM  AUTO_INCREMENT=17  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `title`, `email`, `description`, `content`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (1, 'Super admin', '', 'Super Admin', '', 0, '', '', 0, 0, 0, 1514880771, 0, 1, 1, 0, 5, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `title`, `email`, `description`, `content`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (2, 'General admin', '', 'General Admin', '', 0, '', '', 0, 0, 0, 1514880771, 0, 2, 1, 0, 4, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `title`, `email`, `description`, `content`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (3, 'Module admin', '', 'Module Admin', '', 0, '', '', 0, 0, 0, 1514880771, 0, 3, 1, 0, 0, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `title`, `email`, `description`, `content`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (4, 'Users', '', 'Users', '', 0, '', '', 0, 0, 0, 1514880771, 0, 4, 1, 0, 9, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `title`, `email`, `description`, `content`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (7, 'New Users', '', 'New Users', '', 0, '', '', 0, 0, 0, 1514880771, 0, 5, 1, 0, 0, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `title`, `email`, `description`, `content`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (5, 'Guest', '', 'Guest', '', 0, '', '', 0, 0, 0, 1514880771, 0, 6, 1, 0, 0, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `title`, `email`, `description`, `content`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (6, 'All', '', 'All', '', 0, '', '', 0, 0, 0, 1514880771, 0, 7, 1, 0, 0, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `title`, `email`, `description`, `content`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (10, 'Ban điều hành', '', 'Ban điều hành', '', 2, '', '', 0, 0, 1, 1514880771, 0, 9, 1, 0, 1, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `title`, `email`, `description`, `content`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (11, 'Phòng kinh doanh', '', 'Phòng kinh doanh', '', 2, '', '', 0, 0, 0, 1514880771, 0, 10, 1, 0, 0, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `title`, `email`, `description`, `content`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (13, 'Phòng kỹ thuật', '', 'Phòng kỹ thuật', '', 0, '', '', 0, 0, 0, 1515849430, 0, 12, 1, 0, 1, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `title`, `email`, `description`, `content`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (12, 'Phòng Marketing', '', 'Phòng marketing', '', 1, '', '', 0, 0, 0, 1514880771, 0, 11, 1, 0, 0, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `title`, `email`, `description`, `content`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (14, 'TDFOSS.,LTD', '', 'Nhân viên TDFOSS.,LTD', '', 0, '', '', 0, 0, 0, 1517911129, 0, 8, 1, 0, 1, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `title`, `email`, `description`, `content`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (15, 'Cộng tác viên', '', 'Cộng tác viên', '', 0, '', '', 0, 0, 0, 1518143270, 0, 14, 1, 0, 0, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `title`, `email`, `description`, `content`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (16, 'Văn thư', '', 'Văn thư', '', 0, '', '', 0, 0, 0, 1518145711, 0, 13, 1, 0, 0, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_groups_users`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_groups_users` (
  `group_id` smallint(5) unsigned NOT NULL DEFAULT 0,
  `userid` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `is_leader` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `approved` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `data` text NOT NULL,
  PRIMARY KEY (`group_id`,`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_users` (`group_id`, `userid`, `is_leader`, `approved`, `data`) VALUES (1, 1, 1, 1, '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_users` (`group_id`, `userid`, `is_leader`, `approved`, `data`) VALUES (10, 1, 1, 1, '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_users` (`group_id`, `userid`, `is_leader`, `approved`, `data`) VALUES (14, 1, 0, 1, '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_users` (`group_id`, `userid`, `is_leader`, `approved`, `data`) VALUES (13, 1, 1, 1, '0')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_info`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_info` (
  `userid` mediumint(8) unsigned NOT NULL,
  `slack_id` varchar(255) NOT NULL DEFAULT '',
  `notify_type` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_info` (`userid`, `slack_id`, `notify_type`) VALUES (1, '', 'push')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_openid`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_openid` (
  `userid` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `openid` varchar(255) NOT NULL DEFAULT '',
  `opid` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`opid`),
  KEY `userid` (`userid`),
  KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_question`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_question` (
  `qid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(240) NOT NULL DEFAULT '',
  `lang` char(2) NOT NULL DEFAULT '',
  `weight` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `add_time` int(11) unsigned NOT NULL DEFAULT 0,
  `edit_time` int(11) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`qid`),
  UNIQUE KEY `title` (`title`,`lang`)
) ENGINE=MyISAM  AUTO_INCREMENT=8  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES (1, 'Bạn thích môn thể thao nào nhất', 'vi', 1, 1274840238, 1274840238)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES (2, 'Món ăn mà bạn yêu thích', 'vi', 2, 1274840250, 1274840250)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES (3, 'Thần tượng điện ảnh của bạn', 'vi', 3, 1274840257, 1274840257)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES (4, 'Bạn thích nhạc sỹ nào nhất', 'vi', 4, 1274840264, 1274840264)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES (5, 'Quê ngoại của bạn ở đâu', 'vi', 5, 1274840270, 1274840270)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES (6, 'Tên cuốn sách &quot;gối đầu giường&quot;', 'vi', 6, 1274840278, 1274840278)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES (7, 'Ngày lễ mà bạn luôn mong đợi', 'vi', 7, 1274840285, 1274840285)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_reg`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_reg` (
  `userid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL DEFAULT '',
  `md5username` char(32) NOT NULL DEFAULT '',
  `password` varchar(150) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `first_name` varchar(255) NOT NULL DEFAULT '',
  `last_name` varchar(255) NOT NULL DEFAULT '',
  `gender` char(1) NOT NULL DEFAULT '',
  `birthday` int(11) NOT NULL,
  `sig` text DEFAULT NULL,
  `regdate` int(11) unsigned NOT NULL DEFAULT 0,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL DEFAULT '',
  `checknum` varchar(50) NOT NULL DEFAULT '',
  `users_info` text DEFAULT NULL,
  `openid_info` text DEFAULT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `login` (`username`),
  UNIQUE KEY `md5username` (`md5username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_about`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_about` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `alias` varchar(250) NOT NULL,
  `image` varchar(255) DEFAULT '',
  `imagealt` varchar(255) DEFAULT '',
  `imageposition` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `description` text DEFAULT NULL,
  `bodytext` mediumtext NOT NULL,
  `keywords` text DEFAULT NULL,
  `socialbutton` tinyint(4) NOT NULL DEFAULT 0,
  `activecomm` varchar(255) DEFAULT '',
  `layout_func` varchar(100) DEFAULT '',
  `weight` smallint(4) NOT NULL DEFAULT 0,
  `admin_id` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `add_time` int(11) NOT NULL DEFAULT 0,
  `edit_time` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `hitstotal` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `hot_post` tinyint(1) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  AUTO_INCREMENT=9  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about` (`id`, `title`, `alias`, `image`, `imagealt`, `imageposition`, `description`, `bodytext`, `keywords`, `socialbutton`, `activecomm`, `layout_func`, `weight`, `admin_id`, `add_time`, `edit_time`, `status`, `hitstotal`, `hot_post`) VALUES (1, 'Giới thiệu về NukeViet', 'gioi-thieu-ve-nukeviet', '', '', 0, '', '<h2><span style=\"font-size:20px;\"><strong>Giới thiệu khái quát</strong></span></h2>  <p>NukeViet là một ứng dụng trên nền web có thể sử dụng vào nhiều mục đích khác nhau. Phiên bản đang được phát hành theo giấy phép phần mềm tự do nguồn mở có tên gọi đầy đủ là <a href=\"/about/Gioi-thieu-ve-NukeViet-CMS.html\"><b>NukeViet CMS</b></a> gồm 2 phần chính là phần nhân (core) của hệ thống NukeViet và nhóm chức năng quản trị nội dung của CMS thường được sử dụng để xây dựng các website tin tức do đó người dùng thường nghĩ rằng NukeViet mạnh về hệ thống tin tức. Tuy nhiên, đội ngũ phát triển NukeViet đã phát triển nhiều hệ thống khác nhau cho NukeViet, nổi bật nhất là:</p>  <ul> 	<li>NukeViet Portal: Cổng thông tin hai chiều dùng cho doanh nghiệp.</li> 	<li><a href=\"http://edu.nukeviet.vn\" target=\"_blank\">NukeViet Edu Gate</a>: Cổng thông tin tích hợp nhiều website, sử dụng cho phòng giáo dục, sở giáo dục.</li> 	<li><a href=\"http://toasoandientu.vn\" target=\"_blank\">NukeViet Tòa Soạn Điện Tử</a>: Sử dụng cho các tòa soạn báo điện tử, trang tin điện tử.</li> </ul> Theo định hướng phát triển của NukeViet, ngoài NukeViet CMS đã được phát hành theo giấy phép tự do nguồn mở trong nhiều năm qua, NukeViet sẽ có thêm 2 nhóm ứng dụng nữa là:  <ul> 	<li>NukeViet Blog: Dành cho các website và người dùng tạo các trang nhật ký cá nhân.</li> 	<li>NukeViet Shop: dành cho các website thương mại điện tử với hoạt động chính là bán hàng trực tuyến, hiện đã có thể sử dụng bằng cách cài bổ sung <a href=\"https://github.com/nukeviet/module-shops\" target=\"_blank\">module Shop</a> lên NukeViet CMS.</li> </ul> &nbsp;  <h2><span style=\"font-size:20px;\"><strong>Video giới thiệu</strong></span></h2> <span style=\"font-size:14px;\">Video clip &quot;Giới thiệu mã nguồn mở NukeViet&quot; trong bản tin Tiêu điểm của chương trình Xã hội thông tin<br  /> (Đài truyền hình kỹ thuật số VTC) phát sóng lúc 20h chủ nhật, ngày 05-09-2010 trên VTC1</span>  <div style=\"text-align: center;\"> <div style=\"text-align: center;\"> <div class=\"youtube-embed-wrapper\" style=\"position:relative;padding-bottom:56.25%;padding-top:30px;height:0;overflow:hidden;\"><iframe allowfullscreen=\"\" frameborder=\"0\" height=\"480\" src=\"//www.youtube.com/embed/Cxp1kCyVhqY?rel=0&amp;autoplay=1\" style=\"position: absolute;top: 0;left: 0;width: 100%;height: 100%;\" width=\"640\"></iframe></div> <br  /> <span style=\"font-size:12px;\"><em>Video clip &quot;Giới thiệu mã nguồn mở NukeViet&quot;</em></span></div> </div>  <h2><br  /> <span style=\"font-size:20px;\"><strong><span class=\"mw-headline\" id=\".E1.BB.A8ng_d.E1.BB.A5ng\">Lịch sử phát triển</span></strong></span></h2> NukeViet ra đời từ năm 2004, bắt đầu từ việc sử dụng sản phẩm PHP-Nuke để làm cho website cá nhân, anh Nguyễn Anh Tú - một lưu học sinh người Việt tại Nga - đã cùng cộng đồng Việt hóa, cải tiến theo nhu cầu sử dụng của người Việt. Được sự đón nhận của đông đảo người sử dụng, NukeViet đã liên tục được phát triển và trở thành một ứng dụng thuần Việt. Cho đến phiên bản 3.0, NukeViet đã được phát triển thành một ứng dụng khác biệt hoàn toàn, và không chỉ là một CMS, NukeViet được định hướng để trở thành phần mềm đa chức năng trên nền web.<br  /> <br  /> Kể từ năm 2010, NukeViet đã phát triển theo mô hình chuyên nghiệp, đội ngũ quản trị đã thành lập doanh nghiệp chuyên quản và đạt được những tiến bộ vượt bậc. NukeViet đã trở thành hệ quản trị nội dung nguồn mở duy nhất của Việt Nam được Bộ GD&amp;ĐT khuyến khích sử dụng trong giáo dục (thông tư 08/2010/TT-BGDĐT). Tiếp đó, NukeViet CMS đã được trao giải Nhân Tài Đất Việt 2011 và trở thành phần mềm nguồn mở đầu tiên đạt giải thưởng cao quý này. <h2><br  /> <span style=\"font-size:20px;\"><strong><span class=\"mw-headline\" id=\"Di.E1.BB.85n_.C4.91.C3.A0n_NukeViet.vn\">Diễn đàn NukeViet.vn</span></strong></span></h2>  <p>Diễn đàn NukeViet hoạt động trên website: <a href=\"http://nukeviet.vn\">http://nukeviet.vn</a>, đây là kênh chính thức và hữu hiệu cho các bạn đam mê về NukeViet có thể chia sẻ các kiến thức về NukeViet với nhau. Tính đến tháng 12 năm 2015 diễn đàn đã có trên 34.500 thành viên tham gia, bao gồm học sinh, sinh viên &amp; nhiều thành phần khác thuộc giới trí thức ở trong và ngoài nước.</p>  <p>Là một diễn đàn của các nhà quản lý website, rất nhiều thành viên trong diễn đàn NukeViet là cán bộ, lãnh đạo từ đủ mọi lĩnh vực: công nghệ thông tin, xây dựng, văn hóa - xã hội, thể thao, dịch vụ - du lịch... từ cử nhân, bác sĩ, kỹ sư cho đến bộ đội, công an..</p>  <h2><br  /> <span style=\"font-size:20px;\"><span class=\"mw-headline\" id=\"Th.C3.A0nh_t.C3.ADch_.26_gi.E1.BA.A3i_th.C6.B0.E1.BB.9Fng\"><strong>Thành tích &amp; giải thưởng</strong></span></span></h2>  <h3><span style=\"font-size:14px;\"><em><strong><span class=\"mw-headline\" id=\"Khen_th.C6.B0.E1.BB.9Fng_.26_Th.C3.A0nh_t.C3.ADch\">Khen thưởng &amp; Thành tích</span></strong></em></span></h3>  <ul> 	<li>Giải Ba Nhân tài Đất Việt 2011 ở Lĩnh vực Công nghệ thông tin/Sản phẩm đã ứng dụng rộng rãi (không có giải nhất, nhì).</li> 	<li>Bằng khen của Hội Tin học Việt Nam vì những đóng góp xuất sắc cho sự phát triển của cộng đồng nguồn mở tại Việt Nam.</li> </ul> <span style=\"font-size:14px;\"><em><strong><span class=\"mw-headline\" id=\".C4.90.C6.B0.E1.BB.A3c_B.E1.BB.99_gi.C3.A1o_d.E1.BB.A5c_.26_.C4.90.C3.A0o_t.E1.BA.A1o_.E1.BB.A7ng_h.E1.BB.99\">Được Bộ giáo dục &amp; Đào tạo ủng hộ</span></strong></em></span>  <p>NukeViet CMS là hệ quản trị nội dung nguồn mở duy nhất của Việt Nam nằm trong danh mục các sản phẩm phần mềm nguồn mở được khuyến khích sử dụng trong thông tư số 08/2010/TT-BGDĐT do Bộ GD&amp;ĐT ban hành ngày 01-03-2010 quy định về sử dụng phần mềm tự do mã nguồn mở trong các cơ sở giáo dục). Trong bài thuyết trình &quot;Hiện trạng triển khai nội dung thông tư 08/2010/TT-BGDĐT về sử dụng PMNM trong các cơ sở giáo dục và định hướng cho thời gian tới&quot;<sup> </sup>tại Hội thảo phần mềm nguồn mở trong các cơ quan, tổ chức nhà nước năm 2012, Cục trưởng cục CNTT Quách Tuấn Ngọc cho biết: &quot;NukeViet có thể thay thế SharePoint server&quot;, &quot;NukeViet được nhiều cơ sở giáo dục thích dùng&quot;<sup> </sup>NukeViet được Bộ GD&amp;ĐT đưa vào văn bản hướng dẫn thực hiện nhiệm vụ CNTT năm học 2015 - 2016. Trong văn bản số 4983/BGDĐT-CNTT của Bộ Giáo dục và Đào tạo (Bộ GDĐT) hướng dẫn việc triển khai nhiệm vụ công nghệ thông tin (CNTT) cho năm học 2015 - 2016 có những nội dung như sau liên quan đến NukeViet:</p>  <ul> 	<li>Nhiệm vụ số &quot;5. Công tác bồi dưỡng ứng dụng CNTT cho giáo viên và cán bộ quản lý giáo dục&quot;, mục &quot;5.1 Một số nội dung cần bồi dưỡng&quot; có ghi &quot;Tập huấn sử dụng phần mềm nguồn mở NukeViet.&quot;</li> 	<li>Nhiệm vụ số &quot; 10. Khai thác, sử dụng và dạy học bằng phần mềm nguồn mở&quot; có ghi: &quot;Khai thác và áp dụng phần mềm nguồn mở NukeViet trong giáo dục.&quot;</li> 	<li>Phụ lục văn bản, có trong nội dung &quot;Khuyến cáo khi sử dụng các hệ thống CNTT&quot;, hạng mục số 3 ghi rõ &quot;Không nên làm website mã nguồn đóng&quot; và &quot;Nên làm NukeViet: phần mềm nguồn mở&quot;.</li> </ul>  <h3><span style=\"font-size:14px;\"><em><strong><span class=\"mw-headline\" id=\".C4.90.C6.B0.E1.BB.A3c_.C6.B0u_ti.C3.AAn_mua_s.E1.BA.AFm_s.E1.BB.AD_d.E1.BB.A5ng_trong_ch.C3.ADnh_ph.E1.BB.A7\">Được ưu tiên mua sắm sử dụng trong chính phủ</span></strong></em></span></h3>  <p>NukeViet CMS là hệ quản trị nội dung nguồn mở được quy định ưu tiên mua sắm, sử dụng trong các cơ quan, tổ chức nhà nước Việt Nam theo thông tư 20/2014/TT-BTTTT ký ngày 05/12/2014 và có hiệu lực từ ngày 20/1/2015 quy định về các sản phẩm phần mềm nguồn mở được ưu tiên mua sắm, sử dụng trong cơ quan, tổ chức nhà nước</p>  <h2><br  /> <span style=\"font-size:20px;\"><span class=\"mw-headline\" id=\"T.C3.ADnh_n.C4.83ng\"><strong>Tính năng</strong></span></span></h2>  <h3><span style=\"font-size:14px;\"><strong>NukeViet CMS 3.0 bản gốc có các module cơ bản là:</strong></span></h3>  <ul> 	<li>Quản lý Tin tức (<i>News</i>: Tạo bản tin chủ đề đa cấp, phân quyền theo chủ đề, hẹn giờ đăng tin, tạo bản in, bản tải về, thảo luận bản tin),</li> 	<li>Giới thiệu (<i>About</i>),</li> 	<li>Quản lý quảng cáo thương mại (banners),</li> 	<li>Quản lý người dùng (<i>users</i>),</li> 	<li>Liên hệ qua site (<i>Contact</i>),</li> 	<li>Cấp tin RSS (<i>RSS feeds</i>) và thu thập tin RSS (&quot;RSS reader&quot;),</li> 	<li>Bình chọn (thăm dò ý kiến - <i>Voting</i>),</li> 	<li>Thư viện file (<i>Download</i>),</li> 	<li>Thư viện Web (<i>Weblinks</i>),</li> 	<li>Hỏi nhanh đáp gọn(<i>Faq</i>),</li> 	<li>Thống kê truy cập (<i>statistics</i>),</li> 	<li>Tìm kiếm trong site (<i>Search</i>),</li> 	<li>Bán hàng trực tuyến (<i>Shop</i>) (có từ NukeViet 3.1)...</li> </ul>  <h3><span style=\"font-size:14px;\"><strong>Tính năng hệ thống:</strong></span></h3>  <ul> 	<li>Cài đặt, nâng cấp và đóng gói tự động.</li> 	<li>Hỗ trợ đa ngôn ngữ giao diện và đa ngôn ngữ Cơ sở dữ liệu 100%, cho phép người sử dụng tự xây dựng ngôn ngữ mới.</li> 	<li>Thay đổi &amp; tùy biến giao diện nhiều cấp độ, cho phép người sử dụng có thể cài thêm giao diện mới hoặc tùy biến giao diện trên site theo ý thích. Người sử dụng có thể tùy biến bố cục giao diện theo layout, theo block ở các khu vực khác nhau của website.</li> 	<li>Quản lý module với khả năng xử lý đa nhân module (ảo hóa module).</li> 	<li>Cho phép phân nhóm thành viên và phân quyền người quản trị theo nhiều cấp độ khác nhau.</li> 	<li>Hỗ trợ tối ưu hóa cho các công cụ tìm kiếm (SEO): Rewrite, tạo Sitemap, Ping sitemap, chẩn đoán site, phân tích từ khóa, tạo keyword, quản lý máy chủ tìm kiếm (Bot)...</li> 	<li>Quản lý và sao lưu cơ sở dữ liệu.</li> 	<li>Cấu hình tùy biến, tường lửa đa cấp, xử lý tiến trình tự động...</li> 	<li>Hỗ trợ thiết bị di động (mobile), cho phép thay đổi giao diện tương thích (từ phiên bản 3.3)</li> 	<li>...</li> </ul>  <h2><span style=\"font-size:20px;\"><strong><span class=\"mw-headline\" id=\".E1.BB.A8ng_d.E1.BB.A5ng\">Ứng dụng</span></strong></span></h2>  <p>NukeViet được sử dụng ở nhiều website, từ những website cá nhân cho tới những hệ thống website doanh nghiệp, nó cung cấp nhiều dịch vụ và ứng dụng nhờ khả năng tăng cường tính năng bằng cách cài thêm các module, block... Trước đây, NukeViet chủ yếu được sử dụng làm trang tin tức nhờ module News tích hợp sẵn trong NukeViet được viết rất công phu, nó lại đặc biệt phù hợp với yêu cầu và đặc điểm sử dụng cho hệ thống tin tức. Kể từ phiên bản NukeViet 3, đội ngũ phát triển NukeViet đã định nghĩa lại NukeViet, theo đó, NukeViet được coi như phần mềm trực tuyến mà chức năng CMS chỉ là một module của NukeViet. NukeViet có thể dễ dàng cài đặt, dễ dàng quản lý kể cả với những người mới sử dụng do đó thường được những đối tượng người dùng không chuyên ưa thích.<br  /> <br  /> NukeViet có mã nguồn mở do đó việc sử dụng NukeViet là hoàn toàn miễn phí cho tất cả mọi người trên thế giới. Từ bản 2.0 trở về trước, đối tượng người dùng chủ yếu của NukeViet là người Việt vì những đặc điểm của bản thân mã nguồn (có nguồn gốc từ PHP-Nuke) và vì chính sách của nhóm phát triển là: &quot;hệ thống Portal dành cho người Việt&quot;. Kể từ phiên bản 3.0, đội ngũ phát triển NukeViet định hướng đưa NukeViet ra cộng đồng quốc tế.</p>  <ul> 	<li>Các cổng thông tin điện tử</li> 	<li>Các tập đoàn kinh tế</li> 	<li>Giải trí trực tuyến, văn hóa, nghệ thuật.</li> 	<li>Báo điện tử, tạp chí điện tử</li> 	<li>Website của các doanh nghiệp vừa và nhỏ</li> 	<li>Website của các cơ quan, tổ chức chính phủ</li> 	<li>Website giáo dục, trường học</li> 	<li>Website của gia đình, cá nhân, nhóm sở thích...</li> </ul>  <p><br  /> Ngoài các ứng dụng website ở trên, thực tế NukeViet đã được ứng dụng làm rất nhiều phần mềm khác như: Phần mềm quản lý kho hàng, phần mềm bán hàng, phần mềm quản lý quán BI-A trợ giúp bật tắt điện đèn bàn bóng, phần mềm tòa soạn điện tử, phần mềm quản lý hồ sơ, quản lý nhân sự trực tuyến, phần mềm tra cứu điểm thi hỗ trợ SMS...</p>', '', 0, '4', '', 1, 1, 1557363838, 1557363838, 1, 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about` (`id`, `title`, `alias`, `image`, `imagealt`, `imageposition`, `description`, `bodytext`, `keywords`, `socialbutton`, `activecomm`, `layout_func`, `weight`, `admin_id`, `add_time`, `edit_time`, `status`, `hitstotal`, `hot_post`) VALUES (2, 'Giới thiệu về NukeViet CMS', 'gioi-thieu-ve-nukeviet-cms', '', '', 0, '', '<p style=\"text-align: justify;\">CMS là gì?<br  /> CMS là từ viết tắt từ Content Management System. Theo wikipedia</p>  <blockquote> <p><strong>Định nghĩa.</strong><br  /> Hệ quản trị nội dung, cũng được gọi là hệ thống quản lý nội dung hay CMS (từ Content Management System của tiếng Anh) là phần mềm để tổ chức và tạo môi trường cộng tác thuận lợi nhằm mục đích xây dựng một hệ thống tài liệu và các loại nội dung khác một cách thống nhất. Mới đây thuật ngữ này liên kết với chương trình quản lý nội dung của website. Quản lý nội dung web (web content management) cũng đồng nghĩa như vậy.<br  /> <br  /> <span class=\"mw-headline\" id=\"Ch.E1.BB.A9c_n.C4.83ng\"><strong>Chức năng</strong>.</span><br  /> Quản trị những nội dung tài liệu điện tử (bao gồm những tài liệu, văn bản số và đã được số hoá) của tổ chức. Những chức năng bao gồm:</p>  <ul> 	<li>Tạo lập nội dung;</li> 	<li>Lưu trữ nội dung;</li> 	<li>Chỉnh sửa nội dung;</li> 	<li>Chuyển tải nội dung;</li> 	<li>Chia sẻ nội dung;</li> 	<li>Tìm kiếm nội dung;</li> 	<li>Phân quyền người dùng và nội dung...</li> </ul>  <p><strong>Đặc điểm.</strong><br  /> Các đặc điểm cơ bản của CMS bao gồm:</p>  <ul> 	<li>Phê chuẩn việc tạo hoặc thay đổi nội dung trực tuyến</li> 	<li>Chế độ Soạn thảo &quot;Nhìn là biết&quot; WYSIWYG</li> 	<li>Quản lý người dùng</li> 	<li>Tìm kiếm và lập chỉ mục</li> 	<li>Lưu trữ</li> 	<li>Tùy biến giao diện</li> 	<li>Quản lý ảnh và các liên kết (URL)</li> </ul> </blockquote>  <p style=\"text-align: justify;\"><br  /> NukeViet CMS là một <strong>hệ quản trị nội dung</strong> (<em>Content Management System - CMS</em>) cho phép bạn quản lý các cổng thông tin điện tử trên Internet. Nói đơn giản, NukeViet giống như một phần mềm giúp bạn<strong> xây dựng</strong> và <strong>vận hành</strong> các trang web của mình một cách dễ dàng nhất.</p>  <p style=\"text-align: justify;\">NukeViet CMS là một phần mềm <strong>mã nguồn mở</strong>, do đó việc sử dụng <strong>hoàn toàn miễn phí</strong>, bạn có thể tải NukeViet CMS về bất cứ lúc nào tại website chính thức của NukeViet là <strong><a href=\"http://nukeviet.vn\">nukeviet.vn</a></strong>. Bạn có thể cài NukeViet lên hosting để sử dụng hoặc cũng có thể thử nghiệm bằng cách cài ngay lên máy tính cá nhân.</p>  <p style=\"text-align: justify;\">NukeViet cho phép xây dựng một website động, đa chức năng, hiện đại một cách nhanh chóng mà người vận hành nó thậm chí <strong>không cần phải biết một tí gì về lập trình</strong> bởi tất cả các tác vụ quản lý phức tạp đều được tự động hóa ở mức cao. NukeViet đặc biệt dễ dàng sử dụng vì hoàn toàn bằng tiếng Việt và được thiết kế phù hợp nhất với thói quen sử dụng mạng của <strong>người Việt Nam</strong>.</p>  <p style=\"text-align: justify;\">Bằng việc sử dụng các công nghệ web mới nhất hiện nay, thiết kế hệ thống uyển chuyển và sở hữu những tính năng độc đáo, NukeViet sẽ giúp bạn triển khai các ứng dụng web từ nhỏ đến lớn một cách nhanh chóng và tiết kiệm: từ các website cá nhân cho tới các cổng thông tin điện tử; từ các gian hàng trực tuyến cho tới các mạng xã hội...</p> NukeViet là CMS <strong>mã nguồn mở đầu tiên của Việt Nam</strong> có quá trình phát triển lâu dài nhất, có lượng người sử dụng đông nhất. Hiện NukeViet cũng là một trong những mã nguồn mở chuyên nghiệp đầu tiên của Việt Nam, cơ quan chủ quản của NukeViet là <a href=\"http://vinades.vn\" target=\"_blank\">VINADES.,JSC</a> - đơn vị chịu trách nhiệm phát triển NukeViet và triển khai NukeViet thành các ứng dụng cụ thể cho doanh nghiệp.', '', 0, '4', '', 2, 1, 1557363838, 1557363838, 1, 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about` (`id`, `title`, `alias`, `image`, `imagealt`, `imageposition`, `description`, `bodytext`, `keywords`, `socialbutton`, `activecomm`, `layout_func`, `weight`, `admin_id`, `add_time`, `edit_time`, `status`, `hitstotal`, `hot_post`) VALUES (3, 'Logo và tên gọi NukeViet', 'logo-va-ten-goi-nukeviet', '', '', 0, '', '<p style=\"text-align: justify;\"><span style=\"color: rgb(255, 0, 0);\"><span style=\"font-size: 14px;\"><strong>Tên gọi:</strong></span></span><br  /> <strong>NukeViet </strong>phát âm là <strong>&#91;Nu-Ke-Việt</strong>&#93;, đây là cách đọc riêng, không phải là cách phát âm chuẩn của tiếng Anh.<br  /> <br  /> <strong>Ý nghĩa:</strong><br  /> NukeViet là từ ghép từ chữ <strong>Nuke </strong>và <strong>Việt Nam</strong>.<br  /> <br  /> Sở dĩ có tên gọi này là vì phiên bản 1.0 và 2.0 của NukeViet được phát triển từ mã nguồn mở<strong> PHP-Nuke</strong>.</p>  <p style=\"text-align: justify;\">Mặc dù từ phiên bản 3.0, NukeViet được viết mới hoàn toàn và trong quá trình phát triển của mình, nhiều cái tên đã được đưa ra để thay thế nhưng cuối cùng cái tên NukeViet đã được giữ lại để nhớ rằng <strong>NukeViet </strong>được khởi đầu từ <strong>PHP-Nuke</strong> và để cảm ơn <strong>Franscisco Burzi</strong> - Tác giả PHP-Nuke - vì chính ông là nhân tố để có một cộng đồng mã nguồn mở NukeViet với hàng chục ngàn người dùng như hiện nay.</p>  <p style=\"text-align: justify;\"><strong>Nuke</strong> trong tiếng Anh (từ lóng) có nghĩa là &quot;<strong>vũ khí hạt nhân</strong>&quot; (nuclear weapons). Xem: <a href=\"http://vi.wiktionary.org/wiki/nuke\" target=\"_blank\">http://vi.wiktionary.org/wiki/nuke</a></p>  <p style=\"text-align: justify;\">Đội ngũ phát triển cũng hy vọng rằng <strong>NukeViet </strong>sẽ phát triển bùng nổ như đúng tên gọi của nó.</p>  <p style=\"text-align: justify;\"><span style=\"color: rgb(255, 0, 0);\"><span style=\"font-size: 14px;\"><strong>Logo NukeViet 3.0:</strong></span></span><br  /> Sau thời gian dài lựa chọn từ hàng chục mẫu thiết kế của thành viên diễn đàn NukeViet.VN và các nhà thiết kế đồ họa chuyên nghiệp... logo chính thức của NukeViet 3.0 đã được Ban Quản Trị chọn lựa đúng trước ngày Offline phát hành bản NukeViet 3.0 một ngày.<br  /> <br  /> Logo NukeViet 3.0 được lấy hình tượng từ Biển, Đêm, và Ánh Trăng trong khung hình giọt nước:</p>  <p style=\"text-align:center\"><img alt=\"w\" height=\"143\" src=\"/uploads/about/w.png\" style=\"width: 288px; height: 143px; border-width: 0px; border-style: solid;\" width=\"288\" /></p>  <p style=\"text-align: justify;\">Dưới nền trắng, cả logo nhìn như cảnh biển đêm huyền ảo, tĩnh mịch với mặt nước biển, bầu trời, thuyền buồm và ánh trăng. Đây là những hình ảnh biểu tượng cho sự thanh bình mà bất cứ ai cũng mong ước được thấy khi ngắm biển về đêm.<br  /> <br  /> Màu xanh thẫm là màu hòa quyện của của mặt biển, bầu trời về đêm, màu này cũng gần với màu xanh tượng trưng cho hòa bình.<br  /> Hai vệt khuyết chính là ánh trăng sáng màu bạc phản chiếu lên giọt nước.<br  /> <br  /> Giọt nước còn là biểu tượng cho sự sống, cho khát khao bất diệt của vạn vật trên trái đất này.<br  /> <br  /> <strong>Thông số chuẩn của màu logo:</strong><br  /> -&nbsp;&nbsp;&nbsp; Màu xanh: C80, M60, Y0, K0<br  /> <br  /> <strong>Tác giả mẫu thiết kế:</strong> Lê Thanh Xuân, chuyên viên thiết kế đồ họa của VINADES.,JSC</p>  <p style=\"text-align: justify;\"><span style=\"color: rgb(255, 0, 0);\"><span style=\"font-size: 14px;\"><strong>Slogan NukeViet 3.0:</strong></span></span> “Chia sẻ thành công, kết nối đam mê”, Tiếng Anh: “Sharing success, connect passions”</p>  <p style=\"text-align: justify;\">Slogan này của tác giả HoaiNamDr, đây là slogan đã đoạt giải trong cuộc thi sáng tác slogan trên diễn đàn NukeViet.VN</p>  <div style=\"text-align:center\"><img alt=\"nukevietcms 180x84\" height=\"84\" src=\"/uploads/about/nukevietcms-180x84.png\" width=\"180\" /></div>  <p style=\"text-align: center;\">Mẫu phối Logo, slogan và tên NukeViet CMS (180x84px)<br  /> Tải về mẫu kích thước lớn <a href=\"/uploads/about/nukevietcms.png\">logo-nukeviet-cms.png</a> (1500x700px)</p>  <div style=\"text-align:center\"><img alt=\"nukevietcms mu noel 180x84\" height=\"84\" src=\"/uploads/about/nukevietcms_mu_noel_180x84.png\" width=\"180\" /></div>  <p style=\"text-align: center;\">Mẫu phối Logo, slogan và tên NukeViet CMS với chiếc mũ ông già Noel (184x84px)<br  /> &nbsp;</p>  <div style=\"text-align:center\"><img alt=\"logo nukeviet3 flag 180x75\" height=\"75\" src=\"/uploads/about/logo-nukeviet3-flag-180x75.png\" width=\"180\" /></div>  <p style=\"text-align: center;\">Mẫu phối Logo, slogan và tên NukeViet CMS cắm cờ Việt Nam (180x75px)<br  /> &nbsp;</p>  <div style=\"text-align:center\"><img alt=\"nukevietcms laco 180x57\" height=\"57\" src=\"/uploads/about/nukevietcms_laco_180x57.png\" width=\"180\" /></div>  <p style=\"text-align: center;\">Mẫu phối Logo, slogan và tên NukeViet CMS với chiếc ruy băng cờ Việt Nam (180x57px)</p>  <div style=\"text-align:center\"><img alt=\"nukevietvn 180x84\" height=\"84\" src=\"/uploads/about/nukevietvn_180x84.png\" width=\"180\" /></div>  <p style=\"text-align: center;\">Mẫu phối Logo, slogan và tên NukeViet.VN (180x84px)<br  /> Tải về mẫu kích thước lớn <a href=\"/uploads/about/nukevietvn.png\">logo-nukeviet-big.png</a> (1500x700px)</p>  <p><br  /> <strong>Tải về file đồ họa gốc:</strong><br  /> - <a href=\"http://nukeviet.vn/vi/download/Tai-lieu/NukeViet-logo/\">NukeViet logo</a> - hình ảnh gốc có độ phân giải cao, bao gồm cả font chữ, có thể sử dụng cho in ấn sticker, in logo lên áo hoặc in Backdrop, Standy khổ lớn.</p>', '', 0, '4', '', 3, 1, 1557363838, 1557363838, 1, 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about` (`id`, `title`, `alias`, `image`, `imagealt`, `imageposition`, `description`, `bodytext`, `keywords`, `socialbutton`, `activecomm`, `layout_func`, `weight`, `admin_id`, `add_time`, `edit_time`, `status`, `hitstotal`, `hot_post`) VALUES (4, 'Giấy phép sử dụng NukeViet', 'giay-phep-su-dung-nukeviet', '', '', 0, 'Giấy phép công cộng GNU (tiếng Anh: GNU General Public License, viết tắt GNU GPL hay chỉ GPL) là giấy phép phần mềm tự do được sử dụng để phân phối mã nguồn mở NukeViet.', '<p><strong>Bản dịch tiếng Việt của Giấy phép Công cộng GNU</strong></p>

<p>Người dịch&nbsp;<a href=\"mailto:dangtuan@vietkey.net\">Đặng Minh Tuấn &lt;dangtuan@vietkey.net&gt;</a></p>

<p>Đây là bản dịch tiếng Việt không chính thức của Giấy phép Công cộng GNU. Bản dịch này không phải do Tổ chức Phần mềm Tự do ấn hành, và nó không quy định về mặt pháp lý các điều khoản cho các phần mềm sử dụng giấy phép GNU GPL -- chỉ có bản tiếng Anh gốc của GNU GPL mới có tính pháp lý. Tuy nhiên, chúng tôi hy vọng rằng bản dịch này sẽ giúp cho những người nói tiếng Việt hiểu rõ hơn về GNU GPL.</p>

<p>This is an unofficial translation of the GNU General Public License into Vietnamese. It was not published by the Free Software Foundation, and does not legally state the distribution terms for software that uses the GNU GPL--only the original English text of the GNU GPL does that. However, we hope that this translation will help Vietnamese speakers understand the GNU GPL better.</p>

<hr  />
<h3>GIẤY PHÉP CÔNG CỘNG GNU (GPL)</h3>
Giấy phép công cộng GNU<br />
Phiên bản 2, tháng 6/1991<br />
Copyright (C) 1989, 1991 Free Software Foundation, Inc. &nbsp;<br />
59 Temple Place - Suite 330, Boston, MA&nbsp; 02111-1307, USA
<p>Mọi người đều được phép sao chép và lưu hành bản sao nguyên bản nhưng không được phép thay đổi nội dung của giấy phép này.<br />
<br />
<strong>Lời nói đầu</strong><br />
<br />
Giấy phép sử dụng của hầu hết các phần mềm đều được đưa ra nhằm hạn chế bạn tự do chia sẻ và thay đổi nó. Ngược lại, Giấy phép Công cộng của GNU có mục đích đảm bảo cho bạn có thể tự do chia sẻ và thay đổi phần mềm tự do - tức là đảm bảo rằng phần mềm đó là tự do đối với mọi người sử dụng. Giấy phép Công cộng này áp dụng cho hầu hết các phần mềm của Tổ chức Phần mềm Tự do và cho tất cả các chương trình khác mà tác giả cho phép sử dụng. (Đối với một số phần mềm khác của Tổ chức Phần Mềm Tự do, áp dụng Giấy phép Công cộng Hạn chế của GNU thay cho giấy phép công cộng). Bạn cũng có thể áp dụng nó cho các chương trình của mình.<br />
<br />
Khi nói đến phần mềm tự do, chúng ta nói đến sự tự do sử dụng chứ không quan tâm về giá cả. Giấy phép Công cộng của chúng tôi được thiết kế để đảm bảo rằng bạn hoàn toàn tự do cung cấp các bản sao của phần mềm tự do (cũng như kinh doanh dịch vụ này nếu bạn muốn), rằng bạn có thể nhận được mã nguồn nếu bạn có yêu cầu, rằng bạn có thể thay đổi phần mềm hoặc sử dụng các thành phần của phần mềm đó cho những chương trình tự do mới; và rằng bạn biết chắc là bạn có thể làm được những điều này.<br />
<br />
Để bảo vệ bản quyền của bạn, chúng tôi cần đưa ra những hạn chế để ngăn chặn những ai chối bỏ quyền của bạn, hoặc yêu cầu bạn chối bỏ quyền của mình. Những hạn chế này cũng có nghĩa là những trách nhiệm nhất định của bạn khi cung cấp các bản sao phần mềm hoặc khi chỉnh sửa phần mềm đó.<br />
<br />
Ví dụ, nếu bạn cung cấp các bản sao của một chương trình, dù miễn phí hay không, bạn phải cho người nhận tất cả các quyền mà bạn có. Bạn cũng phải đảm bảo rằng họ cũng nhận được hoặc tiếp cận được mã nguồn. Và bạn phải thông báo những điều khoản này cho họ để họ biết rõ về quyền của mình.<br />
<br />
Chúng tôi bảo vệ quyền của bạn với hai bước: (1) bảo vệ bản quyền phần mềm, và (2) cung cấp giấy phép này để bạn có thể sao chép, lưu hành và/hoặc chỉnh sửa phần mềm một cách hợp pháp.<br />
<br />
Ngoài ra, để bảo vệ các tác giả cũng như để bảo vệ chính mình, chúng tôi muốn chắc chắn rằng tất cả mọi người đều hiểu rõ rằng không hề có bảo hành đối với phần mềm tự do này. Nếu phần mềm được chỉnh sửa thay đổi bởi một người khác và sau đó lưu hành, thì chúng tôi muốn những người sử dụng biết rằng phiên bản họ đang có không phải là bản gốc, do đó tất cả những trục trặc do những người khác gây ra hoàn toàn không ảnh hưởng tới uy tín của tác giả ban đầu.<br />
<br />
Cuối cùng, bất kỳ một chương trình tự do nào cũng đều thường xuyên có nguy cơ bị đe doạ về giấy phép bản quyền. Chúng tôi muốn tránh nguy cơ khi những người cung cấp lại một chương trình tự do có thể có được giấy phép bản quyền cho bản thân họ, từ đó trở thành độc quyền đối với chương trình đó. Để ngăn ngừa trường hợp này, chúng tôi đã nêu rõ rằng mỗi giấy phép bản quyền hoặc phải được cấp cho tất cả mọi người sử dụng một cách tự do hoặc hoàn toàn không cấp phép.<br />
<br />
Dưới đây là những điều khoản và điều kiện rõ ràng đối với việc sao chép, lưu hành và chỉnh sửa.<br />
<br />
<strong>Những điều khoản và điều kiện đối với việc sao chép, lưu hành và chỉnh sửa</strong><br />
<br />
<strong>0.</strong>&nbsp;Giấy phép này áp dụng cho bất kỳ một chương trình hay sản phẩm nào mà người giữ bản quyền công bố rằng nó có thể được cung cấp trong khuôn khổ những điều khoản của Giấy phép Công cộng này. Từ “Chương trình” dưới đây có nghĩa là tất cả các chương trình hay sản phẩm như vậy, và “sản phẩm dựa trên Chương trình” có nghĩa là Chương trình hoặc bất kỳ một sản phẩm nào bắt nguồn từ chương trình đó tuân theo luật bản quyền, nghĩa là một sản phẩm dựa trên Chương trình hoặc một phần của nó, đúng nguyên bản hoặc có một số chỉnh sửa và/hoặc được dịch ra một ngôn ngữ khác. (Dưới đây, việc dịch cũng được hiểu trong khái niệm “chỉnh sửa”). Mỗi người được cấp phép được gọi là “bạn”.<br />
<br />
Trong Giấy phép này không đề cập tới các hoạt động khác ngoài việc sao chép, lưu hành và chỉnh sửa; chúng nằm ngoài phạm vi của giấy phép này. Hành động chạy chương trình không bị hạn chế, và những kết quả từ việc chạy chương trình chỉ được đề cập tới nếu nội dung của nó tạo thành một sản phẩm dựa trên chương trình (độc lập với việc chạy chương trình). Điều này đúng hay không là phụ thuộc vào Chương trình.<br />
<br />
<strong>1.</strong>&nbsp;Bạn có thể sao chép và lưu hành những phiên bản nguyên bản của mã nguồn Chương trình đúng như khi bạn nhận được, qua bất kỳ phương tiện phân phối nào, với điều kiện trên mỗi bản sao bạn đều kèm theo một ghi chú bản quyền rõ ràng và từ chối bảo hành; giữ nguyên tất cả các ghi chú về Giấy phép và về việc không có bất kỳ một sự bảo hành nào; và cùng với Chương trình bạn cung cấp cho người sử dụng một bản sao của Giấy phép này.<br />
<br />
Bạn có thể tính phí cho việc chuyển giao bản sao, và tuỳ theo quyết định của mình bạn có thể cung cấp bảo hành để đổi lại với chi phí mà bạn đã tính.<br />
<br />
<strong>2.</strong>&nbsp;Bạn có thể chỉnh sửa bản sao của bạn hoặc các bản sao của Chương trình hoặc của bất kỳ phần nào của nó, từ đó hình thành một sản phẩm dựa trên Chương trình, và sao chép cũng như lưu hành sản phẩm đó hoặc những chỉnh sửa đó theo điều khoản trong Mục 1 ở trên, với điều kiện bạn đáp ứng được những điều kiện dưới đây:<br />
•&nbsp;&nbsp; &nbsp;a) Bạn phải có ghi chú rõ ràng trong những tập tin đã chỉnh sửa là bạn đã chỉnh sửa nó, và ngày tháng của bất kỳ một thay đổi nào.<br />
•&nbsp;&nbsp; &nbsp;b) Bạn phải cấp phép miễn phí cho tất cả các bên thứ ba đối với các sản phẩm bạn cung cấp hoặc phát hành, bao gồm Chương trình nguyên bản, từng phần của nó hay các sản phẩm dựa trên Chương trình hay dựa trên từng phần của Chương trình, theo những điều khoản của Giấy phép này.<br />
•&nbsp;&nbsp; &nbsp;c) Nếu chương trình đã chỉnh sửa thường đọc lệnh tương tác trong khi chạy, bạn phải thực hiện sao cho khi bắt đầu chạy để sử dụng tương tác theo cách thông thường nhất phải có một thông báo bao gồm bản quyền và thông báo về việc không có bảo hành (hoặc thông báo bạn là người cung cấp bảo hành), và rằng người sử dụng có thể cung cấp lại Chương trình theo những điều kiện này, và thông báo để người sử dụng có thể xem bản sao của Giấy phép này. (Ngoại lệ: nếu bản thân Chương trình là tương tác nhưng không có một thông báo nào như trên, thì sản phẩm của bạn dựa trên Chương trình đó cũng không bắt buộc phải có thông báo như vậy).<br />
<br />
Những yêu cầu trên áp dụng cho toàn bộ các sản phẩm chỉnh sửa. Nếu có những phần của sản phẩm rõ ràng không bắt nguồn từ Chương trình, và có thể được xem là độc lập và riêng biệt, thì Giấy phép này và các điều khoản của nó sẽ không áp dụng cho những phần đó khi bạn cung cấp chúng như những sản phẩm riêng biệt. Nhưng khi bạn cung cấp những phần đó như những phần nhỏ trong cả một sản phẩm dựa trên Chương trình, thì việc cung cấp này phải tuân theo những điều khoản của Giấy phép này, cho phép những người được cấp phép có quyền đối với toàn bộ sản phẩm, cũng như đối với từng phần trong đó, bất kể ai đã viết nó.<br />
<br />
Như vậy, điều khoản này không nhằm mục đích xác nhận quyền hoặc tranh giành quyền của bạn đối với những sản phẩm hoàn toàn do bạn viết; mà mục đích của nó là nhằm thi hành quyền kiểm soát đối với việc cung cấp những sản phẩm bắt nguồn hoặc tổng hợp dựa trên Chương trình.<br />
<br />
Ngoài ra, việc kết hợp thuần tuý Chương trình (hoặc một sản phẩm dựa trên Chương trình) với một sản phẩm không dựa trên Chương trình với mục đích lưu trữ hoặc quảng bá không đưa sản phẩm đó vào trong phạm vi áp dụng của Giấy phép này.<br />
<br />
<strong>3.</strong>&nbsp;Bạn có thể sao chép và cung cấp Chương trình (hoặc một sản phẩm dựa trên Chương trình, nêu trong Mục 2) dưới hình thức mã đã biên dịch hoặc dạng có thể thực thi được trong khuôn khổ các điều khoản nêu trong Mục 1 và 2 ở trên, nếu như bạn:<br />
•&nbsp;&nbsp; &nbsp;a) Kèm theo đó một bản mã nguồn dạng đầy đủ có thể biên dịch được theo các điều khoản trong Mục 1 và 2 nêu trên trong một môi trường trao đổi phần mềm thông thường; hoặc,<br />
•&nbsp;&nbsp; &nbsp;b) Kèm theo đó một đề nghị có hạn trong ít nhất 3 năm, theo đó cung cấp cho bất kỳ một bên thứ ba nào một bản sao đầy đủ của mã nguồn tương ứng, và phải được cung cấp với giá chi phí không cao hơn giá chi phí vật lý của việc cung cấp theo các điều khoản trong Mục 1 và 2 nêu trên trong một môi trường trao đổi phần mềm thông thường; hoặc<br />
•&nbsp;&nbsp; &nbsp;c) Kèm theo đó thông tin bạn đã nhận được để đề nghị cung cấp mã nguồn tương ứng. (Phương án này chỉ được phép đối với việc cung cấp phi thương mại và chỉ với điều kiện nếu bạn nhận được Chương trình dưới hình thức mã đã biên dịch hoặc dạng có thể thực thi được cùng với lời đề nghị như vậy, theo phần b trong điều khoản nêu trên).<br />
<br />
Mã nguồn của một sản phẩm là một dạng ưu tiên của sản phẩm dành cho việc chỉnh sửa nó. Với một sản phẩm có thể thi hành, mã nguồn hoàn chỉnh có nghĩa là tất cả các mã nguồn cho các môđun trong sản phẩm đó, cộng với tất cả các tệp tin định nghĩa giao diện đi kèm với nó, cộng với các hướng dẫn dùng để kiểm soát việc biên dịch và cài đặt các tệp thi hành. Tuy nhiên, một ngoại lệ đặc biệt là mã nguồn không cần chứa bất kỳ một thứ gì mà bình thường được cung cấp (từ nguồn khác hoặc hình thức nhị phân) cùng với những thành phần chính (chương trình biên dịch, nhân, và những phần tương tự) của hệ điều hành mà các chương trình chạy trong đó, trừ khi bản thân thành phần đó lại đi kèm với một tệp thi hành.<br />
<br />
Nếu việc cung cấp lưu hành mã đã biên dịch hoặc tập tin thi hành được thực hiện qua việc cho phép tiếp cận và sao chép từ một địa điểm được chỉ định, thì việc cho phép tiếp cận tương đương tới việc sao chép mã nguồn từ cùng địa điểm cũng được tính như việc cung cấp mã nguồn, mặc dù thậm chí các bên thứ ba không bị buộc phải sao chép mã nguồn cùng với mã đã biên dịch.<br />
<br />
<strong>4.</strong>&nbsp;Bạn không được phép sao chép, chỉnh sửa, cấp phép hoặc cung cấp Chương trình trừ phi phải tuân thủ một cách chính xác các điều khoản trong Giấy phép. Bất kỳ ý định sao chép, chỉnh sửa, cấp phép hoặc cung cấp Chương trình theo cách khác đều làm mất hiệu lực và tự động huỷ bỏ quyền của bạn trong khuôn khổ Giấy phép này. Tuy nhiên, các bên đã nhận được bản sao hoặc quyền từ bạn với Giấy phép này sẽ không bị huỷ bỏ giấy phép nếu các bên đó vẫn tuân thủ đầy đủ các điều khoản của giấy phép.<br />
<br />
<strong>5.</strong>&nbsp;Bạn không bắt buộc phải chấp nhận Giấy phép này khi bạn chưa ký vào đó. Tuy nhiên, không có gì khác đảm bảo cho bạn được phép chỉnh sửa hoặc cung cấp Chương trình hoặc các sản phẩm bắt nguồn từ Chương trình. Những hành động này bị luật pháp nghiêm cấm nếu bạn không chấp nhận Giấy phép này. Do vậy, bằng việc chỉnh sửa hoặc cung cấp Chương trình (hoặc bất kỳ một sản phẩm nào dựa trên Chương trình), bạn đã thể hiện sự chấp thuận đối với Giấy phép này, cùng với tất cả các điều khoản và điều kiện đối với việc sao chép, cung cấp hoặc chỉnh sửa Chương trình hoặc các sản phẩm dựa trên nó.<br />
<br />
<strong>6.</strong> Mỗi khi bạn cung cấp lại Chương trình (hoặc bất kỳ một sản phẩm nào dựa trên Chương trình), người nhận sẽ tự động nhận được giấy phép từ người cấp phép đầu tiên cho phép sao chép, cung cấp và chỉnh sửa Chương trình theo các điều khoản và điều kiện này. Bạn không thể áp đặt bất cứ hạn chế nào khác đối với việc thực hiện quyền của người nhận đã được cấp phép từ thời điểm đó. Bạn cũng không phải chịu trách nhiệm bắt buộc các bên thứ ba tuân thủ theo Giấy phép này.<br />
<br />
<strong>7.</strong>&nbsp;Nếu như, theo quyết định của toà án hoặc với những bằng chứng về việc vi phạm bản quyền hoặc vì bất kỳ lý do nào khác (không giới hạn trong các vấn đề về bản quyền), mà bạn phải tuân theo các điều kiện (nêu ra trong lệnh của toà án, biên bản thoả thuận hoặc ở nơi khác) trái với các điều kiện của Giấy phép này, thì chúng cũng không thể miễn cho bạn khỏi những điều kiện của Giấy phép này. Nếu bạn không thể đồng thời thực hiện các nghĩa vụ của mình trong khuôn khổ Giấy phép này và các nghĩa vụ thích đáng khác, thì hậu quả là bạn hoàn toàn không được cung cấp Chương trình. Ví dụ, nếu trong giấy phép bản quyền không cho phép những người nhận được bản sao trực tiếp hoặc gián tiếp qua bạn có thể cung cấp lại Chương trình thì trong trường hợp này cách duy nhất bạn có thể thoả mãn cả hai điều kiện là hoàn toàn không cung cấp Chương trình.<br />
<br />
Nếu bất kỳ một phần nào trong điều khoản này không có hiệu lực hoặc không thể thi hành trong một hoàn cảnh cụ thể, thì sẽ cân đối áp dụng các điều khoản, và toàn bộ điều khoản sẽ được áp dụng trong những hoàn cảnh khác.<br />
<br />
Mục đích của điều khoản này không nhằm buộc bạn phải vi phạm bất kỳ một bản quyền nào hoặc các quyền sở hữu khác hoặc tranh luận về giá trị hiệu lực của bất kỳ quyền hạn nào như vậy; mục đích duy nhất của điều khoản này là nhằm bảo vệ sự toàn vẹn của hệ thống cung cấp phần mềm tự do đang được thực hiện với giấy phép công cộng. Nhiều người đã đóng góp rất nhiều vào sự đa dạng của các phần mềm tự do được cung cấp thông qua hệ thống này với sự tin tưởng rằng hệ thống được sử dụng một cách thống nhất; tác giả/người cung cấp có quyền quyết định rằng họ có mong muốn cung cấp phần mềm thông qua hệ thống nào khác hay không, và người được cấp phép không thể có ảnh hưởng tới sự lựa chọn này.<br />
<br />
Điều khoản này nhằm làm rõ những hệ quả của các phần còn lại của Giấy phép này.<br />
<br />
<strong>8.</strong>&nbsp;Nếu việc cung cấp và/hoặc sử dụng Chương trình bị cấm ở một số nước nhất định bởi quy định về bản quyền, người giữ bản quyền gốc đã đưa Chương trình vào dưới Giấy phép này có thể bổ sung một điều khoản hạn chế việc cung cấp ở những nước đó, nghĩa là việc cung cấp chỉ được phép ở các nước không bị liệt kê trong danh sách hạn chế. Trong trường hợp này, Giấy phép đưa vào những hạn chế được ghi trong nội dung của nó.<br />
<br />
<strong>9.&nbsp;</strong>Tổ chức Phần mềm Tự do có thể theo thời gian công bố những phiên bản chỉnh sửa và/hoặc phiên bản mới của Giấy phép Công cộng. Những phiên bản đó sẽ đồng nhất với tinh thần của phiên bản hiện này, nhưng có thể khác ở một số chi tiết nhằm giải quyết những vấn đề hay những lo ngại mới.<br />
<br />
Mỗi phiên bản sẽ có một mã số phiên bản riêng. Nếu Chương trình và &quot;bất kỳ một phiên bản nào sau đó&quot; có áp dụng một phiên bản Giấy phép cụ thể, bạn có quyền lựa chọn tuân theo những điều khoản và điều kiện của phiên bản giấy phép đó hoặc của bất kỳ một phiên bản nào sau đó do Tổ chức Phần mềm Tự do công bố. Nếu Chương trình không nêu cụ thể mã số phiên bản giấy phép, bạn có thể lựa chọn bất kỳ một phiên bản nào đã từng được công bố bởi Tổ chức Phần mềm Tự do.<br />
<br />
<strong>10.</strong>&nbsp;Nếu bạn muốn kết hợp các phần của Chương trình vào các chương trình tự do khác mà điều kiện cung cấp khác với chương trình này, hãy viết cho tác giả để được phép. Đối với các phần mềm được cấp bản quyền bởi Tổ chức Phầm mềm Tự do, hãy đề xuất với tổ chức này; đôi khi chúng tôi cũng có những ngoại lệ. Quyết định của chúng tôi sẽ dựa trên hai mục tiêu là bảo hộ tình trạng tự do của tất cả các sản phẩm bắt nguồn từ phần mềm tự do của chúng tôi, và thúc đẩy việc chia sẻ và tái sử dụng phần mềm nói chung.<br />
<br />
<strong>KHÔNG BẢO HÀNH</strong><br />
DO CHƯƠNG TRÌNH ĐƯỢC CẤP PHÉP MIỄN PHÍ NÊN KHÔNG CÓ MỘT CHẾ ĐỘ BẢO HÀNH NÀO TRONG MỨC ĐỘ CHO PHÉP CỦA LUẬT PHÁP. TRỪ KHI ĐƯỢC CÔNG BỐ KHÁC ĐI BẰNG VĂN BẢN, NHỮNG NGƯỜI GIỮ BẢN QUYỀN VÀ/HOẶC CÁC BÊN CUNG CẤP CHƯƠNG TRÌNH NGUYÊN BẢN SẼ KHÔNG BẢO HÀNH DƯỚI BẤT KỲ HÌNH THỨC NÀO, BAO GỒM NHƯNG KHÔNG GIỚI HẠN TRONG CÁC HÌNH THỨC BẢO HÀNH ĐỐI VỚI TÍNH THƯƠNG MẠI CŨNG NHƯ TÍNH THÍCH HỢP CHO MỘT MỤC ĐÍCH CỤ THỂ. BẠN LÀ NGƯỜI CHỊU TOÀN BỘ RỦI RO VỀ CHẤT LƯỢNG CŨNG NHƯ VIỆC VẬN HÀNH CHƯƠNG TRÌNH. TRONG TRƯỜNG HỢP CHƯƠNG TRÌNH CÓ KHIẾM KHUYẾT, BẠN PHẢI CHỊU TOÀN BỘ CHI PHÍ CHO NHỮNG DỊCH VỤ SỬA CHỮA CẦN THIẾT.<br />
<br />
TRONG TẤT CẢ CÁC TRƯỜNG HỢP TRỪ KHI CÓ YÊU CẦU CỦA LUẬT PHÁP HOẶC CÓ THOẢ THUẬN BẰNG VĂN BẢN, NHỮNG NGƯỜI CÓ BẢN QUYỀN HOẶC BẤT KỲ MỘT BÊN NÀO CHỈNH SỬA VÀ/HOẶC CUNG CẤP LẠI CHƯƠNG TRÌNH TRONG CÁC ĐIỀU KIỆN NHƯ ĐÃ NÊU TRÊN ĐỀU KHÔNG CÓ TRÁCH NHIỆM VỚI BẠN VỀ CÁC LỖI HỎNG HÓC, BAO GỒM CÁC LỖI CHUNG HAY ĐẶC BIỆT, NGẪU NHIÊN HAY TẤT YẾU NẢY SINH DO VIỆC SỬ DỤNG HOẶC KHÔNG SỬ DỤNG ĐƯỢC CHƯƠNG TRÌNH (BAO GỒM NHƯNG KHÔNG GIỚI HẠN TRONG VIỆC MẤT DỮ LIỆU, DỮ LIỆU THIẾU CHÍNH XÁC HOẶC CHƯƠNG TRÌNH KHÔNG VẬN HÀNH ĐƯỢC VỚI CÁC CHƯƠNG TRÌNH KHÁC), THẬM CHÍ CẢ KHI NGƯỜI CÓ BẢN QUYỀN VÀ CÁC BÊN KHÁC ĐÃ ĐƯỢC THÔNG BÁO VỀ KHẢ NĂNG XẢY RA NHỮNG THIỆT HẠI ĐÓ.<br />
<br />
<strong>KẾT THÚC CÁC ĐIỀU KIỆN VÀ ĐIỀU KHOẢN.</strong></p>

<p><strong>Áp dụng những điều khoản trên như thế nào đối với chương trình của bạn</strong><br />
<br />
Nếu bạn xây dựng một chương trình mới, và bạn muốn cung cấp một cách tối đa cho công chúng sử dụng, thì biện pháp tốt nhất để đạt được điều này là phát triển chương trình đó thành phần mềm tự do để ai cũng có thể cung cấp lại và thay đổi theo những điều khoản như trên.<br />
<br />
Để làm được việc này, hãy đính kèm những thông báo như sau cùng với chương trình của mình. An toàn nhất là đính kèm chúng trong phần đầu của tập tin mã nguồn để thông báo một cách hiệu quả nhất về việc không có bảo hành; và mỗi tệp tin đều phải có ít nhất một dòng về “bản quyền” và trỏ đến toàn bộ thông báo.</p>

<blockquote>
<p>&nbsp; &nbsp; &nbsp; &nbsp; <strong>Một dòng đề tên chương trình và nội dung của nó.<br />
&nbsp; &nbsp; &nbsp; &nbsp; Bản quyền (C) năm,&nbsp; tên tác giả.</strong><br />
<br />
Chương trình này là phần mềm tự do, bạn có thể cung cấp lại và/hoặc chỉnh sửa nó theo những điều khoản của Giấy phép Công cộng của GNU do Tổ chức Phần mềm Tự do công bố; phiên bản 2 của Giấy phép, hoặc bất kỳ một phiên bản sau đó (tuỳ sự lựa chọn của bạn).<br />
<br />
Chương trình này được cung cấp với hy vọng nó sẽ hữu ích, tuy nhiên KHÔNG CÓ BẤT KỲ MỘT BẢO HÀNH NÀO; thậm chí kể cả bảo hành về KHẢ NĂNG THƯƠNG MẠI hoặc TÍNH THÍCH HỢP CHO MỘT MỤC ĐÍCH CỤ THỂ. Xin xem Giấy phép Công cộng của GNU để biết thêm chi tiết.<br />
<br />
Bạn phải nhận được một bản sao của Giấy phép Công cộng của GNU kèm theo chương trình này; nếu bạn chưa nhận được, xin gửi thư về Tổ chức Phần mềm Tự do, 59 Temple Place - Suite 330, Boston, MA&nbsp; 02111-1307, USA.<br />
<br />
Xin hãy bổ sung thông tin về địa chỉ liên lạc của bạn (thư điện tử và bưu điện).</p>
</blockquote>

<p>Nếu chương trình chạy tương tác, hãy đưa một thông báo ngắn khi bắt đầu chạy chương trình như sau:</p>

<blockquote>
<p>Gnomovision phiên bản 69, Copyright (C) năm, tên tác giả.<br />
<br />
Gnomovision HOÀN TOÀN KHÔNG CÓ BẢO HÀNH; để xem chi tiết hãy gõ `show w&#039;.&nbsp; Đây là một phần mềm miễn phí, bạn có thể cung cấp lại với những điều kiện nhất định, gõ ‘show c’ để xem chi tiết.<br />
Giả thiết lệnh `show w&#039; và `show c&#039; cho xem những phần tương ứng trong Giấy phép Công cộng. Tất nhiên những lệnh mà bạn dùng có thể khác với ‘show w&#039; và `show c&#039;; những lệnh này có thể là nhấn chuột hoặc lệnh trong thanh công cụ - tuỳ theo chương trình của bạn.</p>
</blockquote>

<p>Bạn cũng cần phải lấy chữ ký của người phụ trách (nếu bạn là người lập trình) hoặc của trường học (nếu có) xác nhận từ chối bản quyền đối với chương trình. Sau đây là ví dụ:</p>

<blockquote>
<p>Yoyodyne, Inc., tại đây từ chối tất cả các quyền lợi bản quyền đối với chương trình `Gnomovision&#039; viết bởi James Hacker.<br />
<br />
chữ ký của Ty Coon, 1 April 1989<br />
Ty Coon, Phó Tổng Giám đốc.</p>
</blockquote>

<p>Giấy phép Công cộng này không cho phép đưa chương trình của bạn vào trong các chương trình độc quyền. Nếu chương trình của bạn là một thư viện thủ tục phụ, bạn có thể thấy nó hữu ích hơn nếu cho thư viện liên kết với các ứng dụng độc quyền. Nếu đây là việc bạn muốn làm, hãy sử dụng Giấy phép Công cộng Hạn chế của GNU thay cho Giấy phép này.</p>

<hr  />
<p><strong>Bản gốc của giấy phép bằng tiếng Anh có tại các địa chỉ sau:</strong></p>

<ol>
	<li>GNU General Public License, version 1, February 1989:&nbsp;<a href=\"http://www.gnu.org/licenses/old-licenses/gpl-1.0.txt\" target=\"_blank\">http://www.gnu.org/licenses/old-licenses/gpl-1.0.txt</a></li>
	<li>GNU General Public License, version 2, June 1991:&nbsp;<a href=\"http://www.gnu.org/licenses/old-licenses/gpl-2.0.html\" target=\"_blank\">http://www.gnu.org/licenses/old-licenses/gpl-2.0.html</a></li>
	<li>GNU General Public License, version 3, 29 June 2007:&nbsp;<a href=\"http://www.gnu.org/licenses/gpl-3.0.txt\" target=\"_blank\">http://www.gnu.org/licenses/gpl-3.0.txt</a></li>
</ol>

<p><strong>Tài liệu tham khảo:</strong></p>

<ol>
	<li>Bản dịch tiếng Việt của Giấy phép Công cộng GNU tại OpenOffice.org:&nbsp;<br />
	<a href=\"http://vi.openoffice.org/gplv.html\" target=\"_blank\">http://vi.openoffice.org/gplv.html</a></li>
	<li>GPL tại&nbsp;Văn thư lưu trữ mở Wikisource:&nbsp;<a href=\"http://vi.wikisource.org/wiki/GPL\" target=\"_blank\">http://vi.wikisource.org/wiki/GPL</a></li>
</ol>

<p><strong>Xem thêm:</strong></p>

<ol>
	<li>LGPL tại&nbsp;Văn thư lưu trữ mở Wikisource:&nbsp;<a href=\"http://vi.wikisource.org/wiki/LGPL\" target=\"_blank\">http://vi.wikisource.org/wiki/LGPL</a></li>
	<li>Giấy phép Công cộng GNU - WikiPedia:&nbsp;<br />
	<a href=\"http://vi.wikipedia.org/wiki/Gi%E1%BA%A5y_ph%C3%A9p_C%C3%B4ng_c%E1%BB%99ng_GNU\" target=\"_blank\">http://vi.wikipedia.org/wiki/Giấy_phép_Công_cộng_GNU</a></li>
	<li>Thảo luận giấy phép GNU GPL - HVA:<br />
	&nbsp;<a href=\"http://www.hvaonline.net/hvaonline/posts/list/7120.hva\" target=\"_blank\">http://www.hvaonline.net/hvaonline/posts/list/7120.hva</a></li>
	<li>Thảo luận tại diễn đàn:&nbsp;<a href=\"http://nukeviet.vn/phpbb/viewtopic.php?f=83&amp;t=1591\" target=\"_blank\">http://nukeviet.vn/phpbb/viewtopic.php?f=83&amp;t=1591</a></li>
</ol>', 'giấy phép,công cộng,tiếng anh,gnu general,public license,gnu gpl,phần mềm,là tự,sử dụng,mã nguồn,bản dịch,tiếng việt,của gnu,đây là,này không,do tổ,chức tự,hành và,các điều,cho các,có bản,tuy nhiên,chúng tôi,cho những,phiên bản,mọi người,được phép,sao chép,lưu hành,bản sao,nguyên bản,nhưng không,và thay,nội dung,của này,hạn chế,tự do,chia sẻ,nukeviet,portal,mysql,php,cms,mã nguồn mở,thiết kế website', 0, '4', '', 4, 1, 1557363838, 1557363838, 1, 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about` (`id`, `title`, `alias`, `image`, `imagealt`, `imageposition`, `description`, `bodytext`, `keywords`, `socialbutton`, `activecomm`, `layout_func`, `weight`, `admin_id`, `add_time`, `edit_time`, `status`, `hitstotal`, `hot_post`) VALUES (5, 'Những tính năng của NukeViet CMS 4.0', 'nhung-tinh-nang-cua-nukeviet-cms-4-0', '', '', 0, '', '<p style=\"text-align: justify;\"><span style=\"font-size: 150%; line-height: 116%;\"><span style=\"font-weight: bold;\">Giới thiệu chung</span></span><br  /> <span style=\"font-weight: bold;\">Mã nguồn mở NukeViet là sản phẩm của sự làm việc chuyên nghiệp: </span><br  /> Để xây dựng lên NukeViet 4, đội ngũ phát triển đã thành lập công ty VINADES.,JSC. Trong quá trình phát triển NukeViet 4, VINADES.,JSC đã hợp tác với nhiều đơn vị cung cấp hosting trong và ngoài nước để thử nghiệm host, đảm bảo tương thích với đa số các hosting chuyên nghiệp.<br  /> NukeViet 4 cũng được vận hành thử nghiệm, góp ý bởi nhiều webmaster có kinh nghiệm quản trị ở nhiều hệ thống khác nhau nhằm tối ưu các tính năng hệ thống cho người sử dụng.<br  /> NukeViet 4 được lập trình bởi các lập trình viên mà kinh nghiệm và tên tuổi của họ đã được xác lập cùng với tên tuổi của bộ mã nguồn mở tạo web đầu tiên của Việt Nam.<br  /> <br  /> <span style=\"font-weight: bold;\">NukeViet 4 là một hệ thống mạnh:</span><br  /> Rút kinh nghiệm từ chính NukeViet 2, NukeViet 3, NukeViet 4 được viết mới hoàn toàn trên nền tảng kỹ thuật tiên tiến nhất hiện nay cho phép xây dựng các nền tảng ứng dụng trực tuyến lớn như Các cổng thông tin điện tử, các tòa soạn báo điện tử, các mạng xã hội và các hệ thống thương mại trực tuyến.<br  /> NukeViet 4 đã được thử nghiệm vận hành với dữ liệu lớn lên tới hàng triệu bản tin. Trên thực tế, NukeViet 4 cũng đã triển khai thành công cho các hiệp hội, doanh nghiệp có lượng truy cập rất lớn.<br  /> <br  /> <span style=\"font-weight: bold;\">NukeViet 4 thích hợp cho mọi đối tượng:</span><br  /> NukeViet lấy người sử dụng làm trọng tâm, những tính năng của NukeViet tạo nên chuẩn mực trong việc sử dụng và quản trị. Vì thế, NukeViet 4 tốt cho cả người sử dụng lẫn người phát triển.<br  /> Với người sử dụng, NukeViet 4 cho phép tùy biến dễ dàng và sử dụng ngay mà không cần can thiệp vào hệ thống.<br  /> Với người phát triển, sử dụng NukeViet cho phép nhanh chóng xây dựng các nền tảng khác nhau nhờ việc viết thêm các module cho hệ thống thay vì phải tự mình viết cả một hệ thống.</p>  <p style=\"text-align: justify;\"><span style=\"font-size: 150%; line-height: 116%;\"><span style=\"font-weight: bold;\">Các tính năng của NukeViet 4</span></span></p> <span style=\"font-weight: bold;\">Nền tảng công nghệ</span>  <ul> 	<li style=\"text-align: justify;\"><span id=\"cke_bm_178S\" style=\"display: none;\">&nbsp;</span>NukeViet CMS 4 lập trình trên PHP 5.4 và MySQL 5, Sử dụng PDO để kết nối với MySQL (Sẵn sàng kết nối với các CSDL khác) cho phép vận dụng tối đa sức mạnh của công nghệ mới.</li> 	<li style=\"text-align: justify;\">Sử dụng Composer để quản lý các thư viện PHP được cài vào hệ thống.</li> 	<li style=\"text-align: justify;\">Từng bước áp dụng các tiêu chuẩn viết code PHP theo khuyến nghị của http://www.php-fig.org/psr/</li> 	<li style=\"text-align: justify;\">Ứng dụng Xtemplate và jQuery cho phép vận dụng Ajax uyển chuyển từ trong nhân hệ thống.</li> 	<li style=\"text-align: justify;\">Giai diện trong NukeViet 4 được làm mới, tương thích với nhiều màn hình hơn, Sử dụng thư viện bootstrap để việc phát triển giao diện thống nhất và dễ dàng hơn.</li> 	<li style=\"text-align: justify;\">Tận dụng các thành tựu mã nguồn mở có sẵn nhưng NukeViet 4 vẫn đảm bảo rằng từng dòng code là được code tay. Điều này có nghĩa là NukeViet 4 hoàn toàn không lệ thuộc vào bất cứ framework nào trong quá trình phát triển của mình; Bạn hoàn toàn có thể đọc hiểu để tự lập trình trên NukeViet 4 nếu bạn biết PHP và MySQL (đồng nghĩa với việc NukeViet 4 hoàn toàn mở và dễ nghiên cứu cho bất cứ ai muốn tìm hiểu về code của NukeViet).<span id=\"cke_bm_178E\" style=\"display: none;\">&nbsp;</span></li> </ul>  <ul id=\"docs-internal-guid-7ec786f5-1ade-f016-4c9b-c9a8e36cc922\"> </ul>  <p style=\"text-align: justify;\"><span style=\"font-weight: bold;\">Kiến trúc Module</span></p>  <ul> 	<li style=\"text-align: justify;\">NukeViet CMS 4 tái cấu trúc lại module, theo đó, toàn bộ tệp tin của mỗi module được gói gọn trong một thư mục riêng nhằm đơn giản trong việc quản lý và đóng gói ứng dụng. Kiến trúc module này tạo ra khái niệm block của module và theme của module giúp đa dạng hóa việc trình bày module.</li> 	<li style=\"text-align: justify;\">Hệ thống NukeViet 4 hỗ trợ công nghệ đa nhân module. Chúng tôi gọi đó là công nghệ ảo hóa module. Công nghệ này cho phép người sử dụng có thể khởi tạo hàng ngàn module một cách tự động mà không cần động đến một dòng code. Các module được sinh ra từ công nghệ này gọi là module ảo. Module ảo là module được nhân bản từ một module bất kỳ của hệ thống nukeviet nếu module đó cho phép tạo module ảo.</li> 	<li style=\"text-align: justify;\">NukeViet 4 cũng hỗ trợ việc cài đặt từ động 100% các module kèm theo block, theme từ Admin Control Panel, người sử dụng có thể cài module mà không cần làm bất cứ thao tác phức tạp nào. NukeViet 4 còn cho phép bạn đóng gói module để chia sẻ cho người khác.</li> 	<li style=\"text-align: justify;\">Hệ thống cho phép quản lý module từ trong Admin Control Panel, quản trị cấp cao có thể phân quyền truy cập cũng như tạm ngưng hoạt động hay thậm chí cài lại hoặc xóa module tùy theo nhu cầu sử dụng.</li> </ul>  <p style=\"text-align: justify;\"><br  /> <span style=\"font-weight: bold;\">Đa ngôn ngữ</span></p>  <ul> 	<li>NukeViet 4 đa ngôn ngữ 100% với 2 loại: đa ngôn ngữ giao diện và đa ngôn ngữ xử lý dữ liệu (database).</li> 	<li>NukeViet 4 có tính năng cho phép người quản trị tự xây dựng ngôn ngữ mới cho site. Cho phép đóng gói file ngôn ngữ để chia sẻ cho cộng đồng...</li> 	<li>NukeViet cũng có trung tâm dịch thuật riêng dành cho việc chung tay góp sức xây dựng những ngôn ngữ mới tại địa chỉ: <a href=\"http://translate.nukeviet.vn\" target=\"_blank\">http://translate.nukeviet.vn</a></li> 	<li>NukeViet 4 tách bạch ngôn ngữ quản trị và ngôn ngữ người dùng, ngôn ngữ giao diện và ngôn ngữ database giúp dễ dàng xây dựng và quản lý các hệ thống đa ngôn ngữ.</li> 	<li>NukeViet 4 còn có khả năng tự động nhận diện và chuyển ngôn ngữ phù hợp cho người sử dụng.</li> 	<li>NukeViet 4 còn có sẵn 3 ngôn ngữ mặc định là Việt, Anh và Pháp.</li> </ul>  <p style=\"text-align: justify;\"><span style=\"font-weight: bold;\">Phân quyền</span><strong> cấp độ hệ thống</strong><br  /> NukeViet 4 tách biệt 2 khu vực: Khu vực quản trị và Khu vực người dùng. Toàn bộ các tính năng quản lý nằm trong khu vực quản trị nhằm đảm bảo việc phân quyền được thực hiện chính xác và an toàn nhất.<br  /> <br  /> <span style=\"font-weight: bold;\">Phân quyền Quản trị</span><br  /> NukeViet 4 phân quyền theo module và theo ngôn ngữ, do đó dễ dàng xác lập quyền quản trị cho các hệ thống lớn, nhiều người quản trị cùng làm việc.<br  /> <br  /> <span style=\"font-weight: bold;\">Phân quyền thành viên</span><br  /> NukeViet 4 cho phép quản lý và phân nhóm người sử dụng thành các nhóm khác nhau để dễ dàng phân quyền người sử dụng theo từng module cụ thể.<br  /> <br  /> <strong>Phân quyền cấp độ module</strong><br  /> Ở cấp module, tùy chức năng module được thiết kế mà nó có thể được phân quyền theo các cơ chế khác nhau, việc này đặc biệt linh hoạt khi xây dựng các hệ thống lớn. Với module News tích hợp trong hệ thống được trang bị việc phân quyền tới từng chuyên mục.<br  /> <br  /> <span style=\"font-weight: bold;\">Đa giao diện</span></p>  <ul> 	<li style=\"text-align: justify;\">Cài đặt: NukeViet 4 hỗ trợ cài đặt và gỡ bỏ giao diện hoàn toàn tự động. Hơn thế nữa, bạn có thể đóng gói giao diện để chia sẻ cho website khác một cách dễ dàng.</li> 	<li style=\"text-align: justify;\">NukeViet hỗ trợ giao diện theo ngôn ngữ, giao diện theo module, định nghĩa giao diện mobile (NukeViet 4) và giao diện PC tùy theo ý người quản trị.</li> 	<li style=\"text-align: justify;\">NukeViet hỗ trợ hệ thống đa giao diện cực kỳ uyển chuyển cho cả người sử dụng lẫn người lập trình. Với NukeViet 4, người sử dụng có thể tùy biến một cách dễ dàng: gán giao diện theo module, thiết lập bố cục giao diện cho từng tính năng của module.</li> 	<li style=\"text-align: justify;\">Với người thiết kế giao diện: có thể tùy ý thiết kế không giới hạn bố cục giao diện. Giao diện đã được tách bạch phần HTML và CSS khỏi PHP vì vậy người thiết kế tùy trình độ mà có thể can thiệp vào các lớp giao diện để chỉnh sửa hoặc thiết kế giao diện mới một cách dễ dàng.</li> </ul>  <p style=\"text-align: justify;\"><strong>Hỗ trợ truy cập từ điện thoại, máy tính bảng.</strong><br  /> Từ bản NukeViet 4, NukeViet có thể tự động nhận diện thiết bị di động để chuyển giao diện và chế độ tương tác phù hợp. Ngoài ra NukeViet 4 còn có giao diện tùy biến, để có thể hiển thị tốt trên các màn hình khác nhau.<br  /> <br  /> <span style=\"font-weight: bold;\">Tùy biến site bằng Block</span><br  /> NukeViet cho phép đa dạng hóa bố cục và chức năng cho website nhờ các khối (block) khác nhau trên website. Các khối này có thể là các ứng dụng, các khối quảng cáo hoặc dữ liệu bất kỳ nào được người sử dụng định nghĩa. Block của NukeViet 4 cũng phân theo 2 cấp: Block của hệ thống và block cho từng module.<br  /> Người sử dụng có thể tùy ý bố trí vị trí block ở các vị trí khác nhau: toàn bộ website, theo từng module và thậm chí là từng tính năng của module. Block có thể có các giao diện khác nhau theo theme. Có thể hẹn giờ bật/tắt cũng như phân quyền cho từng đối tượng người truy cập.<br  /> Việc bố trí block có thể thực hiện trong Admin Control Panel hoặc kéo thả trực quan ngay tại giao diện người dùng.<br  /> <br  /> <span style=\"font-weight: bold;\">An ninh, bảo mật</span><br  /> NukeViet 4 được thiết kế để nhận biết và chống các truy cập bất hợp pháp vào hệ thống cũng như gửi các dữ liệu có hại lên hệ thống.</p>  <ul> 	<li style=\"text-align: justify;\">Sau khi các chuyên giả bảo mật của HP gửi đánh giá, chúng tôi đã tối ưu NukeViet 4.0 để hệ thống an toàn hơn.</li> 	<li style=\"text-align: justify;\">Mã hóa các mật khẩu lưu trữ trong hệ thống: Các mật khẩu như FTP, SMTP,... đã được mã hóa, bảo mật thông tin người dùng.<br  /> 	Tường lửa Admin bảo vệ khu vực bằng mật khẩu và IP.</li> 	<li style=\"text-align: justify;\">Bộ lọc IP cấm và bộ lọc file cấm giúp ngăn ngừa các nguy cơ biết trước.</li> 	<li style=\"text-align: justify;\">Dữ liệu gửi qua hệ thống được kiểm duyệt bằng bộ lọc an ninh kép nhằm ngăn chặn các dữ liệu có khả năng tấn công vào hệ thống.</li> 	<li style=\"text-align: justify;\">NukeViet có khả năng ngăn chặn, theo dõi và kiểm soát truy cập vào hệ thống của tất cả các máy chủ tìm kiếm như yahoo và google hay bất cứ máy chủ tìm kiếm nào khác.</li> 	<li style=\"text-align: justify;\">Hệ thống có khả năng chống Spam bằng Captcha, chống lụt dữ liệu bằng nhiều hình thức như giới hạn thời gian gửi dữ liệu (sử dụng các công thức kép)...</li> 	<li style=\"text-align: justify;\">Hệ thống cho phép theo dõi, ghi nhận các thông số của máy tính truy cập đến site như: Hệ điều hành, Trình duyệt, quốc gia, các liên kết đến site (referer) để từ đó có thể kịp thời ngăn ngừa các nguy cơ tấn công bằng các hình thức như: kiểm tra và chặn các máy tình dùng proxy, chặn IP truy cập...</li> 	<li style=\"text-align: justify;\">hật ký hệ thống sẽ ghi nhận truy cập và thao tác tới cơ sở dữ liệu &amp; tệp tin, giúp người quản trị cũng như các thành viên dễ dàng phát hiện ra những đăng nhập bất hợp pháp từ lần đăng nhập trước đó.</li> 	<li style=\"text-align: justify;\">Hệ thống có thể phát hiện các bản nâng cấp mới của phần mềm để nhắc nhở người sử dụng nâng cấp và sửa chữa các lỗi (nếu có)</li> </ul>  <p style=\"text-align: justify;\"><span style=\"font-weight: bold;\">Quản lý CSDL</span></p>  <ul> 	<li style=\"text-align: justify;\">NukeViet 4 cho phép quản lý CSDL, người sử dụng có thể tối ưu, sao lưu trên máy chủ và tải dữ liệu về để phục vụ cho công tác phục hồi nếu xảy ra sự cố.</li> 	<li style=\"text-align: justify;\">Hỗ trợ mô hình CSDL theo mô hình master/slave để phân tải CSDL.</li> </ul>  <p style=\"text-align: justify;\"><span style=\"font-weight: bold;\">Kiểm soát lỗi tự động và báo lỗi thông minh</span></p>  <ul> 	<li style=\"text-align: justify;\">NukeViet 4 có hệ thống kiểm soát lỗi tự động và báo lỗi cho người dùng.</li> 	<li style=\"text-align: justify;\">Các lỗi (nếu có) sẽ được hệ thống kiểm soát có chủ đích, nó chỉ hiển thị lên màn hình người sử dụng ở lần đầu nó xuất hiện, sau đó hệ thống ghi nhận và báo về cho người quản trị qua email.</li> 	<li style=\"text-align: justify;\">Quản trị có thể cấu hình việc bật tắt việc có ghi nhận lỗi hay không.</li> </ul>  <p style=\"text-align: justify;\"><span style=\"font-weight: bold;\">Tối ưu hóa cho công cụ tìm kiếm (SEO)</span></p>  <ul> 	<li style=\"text-align: justify;\">Loại bỏ tên module khỏi URL khi không dùng đa ngôn ngữ.</li> 	<li style=\"text-align: justify;\">Cho phép đổi đường dẫn module</li> 	<li style=\"text-align: justify;\">Thêm chức năng xác thực Google+ (Bản quyền tác giả)</li> 	<li style=\"text-align: justify;\">Thêm chức năng ping đến các công cụ tìm kiếm: Submit url mới đến google để việc hiển thị bài viết mới lên kết quả tìm kiếm nhanh chóng hơn.</li> 	<li style=\"text-align: justify;\">Hỗ trợ Meta OG của facebook</li> 	<li style=\"text-align: justify;\">Hỗ trợ chèn Meta GEO qua Cấu hình Meta-Tags<br  /> 	Hỗ trợ SEO link.</li> 	<li style=\"text-align: justify;\">Quản lý và tùy biến tiêu đề site, description</li> 	<li style=\"text-align: justify;\">Hỗ trợ quản lý các thẻ meta như: keywords, description</li> 	<li style=\"text-align: justify;\">Hỗ trợ sử dụng keywords để phát sinh trang thống kê một cách tự động nhờ công cụ tìm kiếm.</li> 	<li style=\"text-align: justify;\">Hỗ trợ quản lý máy chủ tìm kiếm.</li> 	<li style=\"text-align: justify;\">Hỗ trợ quản lý cấu hình robots.txt</li> 	<li style=\"text-align: justify;\">Hỗ trợ chuẩn đoán site (site Diagnostic).</li> </ul>  <p style=\"text-align: justify;\"><span style=\"font-weight: bold;\">Sẵn sàng cho việc tích hợp các ứng dụng của bên thứ 3</span><br  /> NukeViet 3.4 sử dụng Cơ sở dữ liệu thành viên độc lập và xây dựng sẵn các phương thức kết nối với các ứng dụng Forum. Cơ sở dữ liệu thành viên độc lập giúp việc quản lý thành viên được chủ động, khi có nhu cầu kết nối hoặc trao quyền quản lý cho các ứng dụng từ bên thứ 3, NukeViet 3.4 vẫn hoàn toàn chủ động với dữ liệu thành viên của mình. Với NukeViet 3.4, các kết nối trực tiếp dành cho Forum như PHPBB hay VBB đều sẵn sàng.<br  /> <br  /> <span style=\"font-weight: bold;\">Hỗ trợ Đăng nhập phân tán</span><br  /> NukeViet hỗ trợ thư viện OAuth , cho phép người truy cập có thể đăng nhập phân tán từ các hệ thống như FaceBook và Google hay các hệ thống OpenID khác giúp các website mới xây dựng có cơ hội thu hút lượng người sử dụng khổng lồ từ các hệ thống lớn.<br  /> Trong mọi trường hợp, hệ thống cho phép admin kiểm duyệt việc login OAuth. Tùy nhu cầu sử dụng mà có thể thiết đặt mức độ login cao nhất (tự động) tới mức độ vẫn phải đăng ký thành viên (bớt bước kích hoạt qua email). Người sử dụng cũng có thể quản lý nhiều tài khoản OAuth để từ đó có thể đăng nhập bằng tài khoản bất kỳ (nếu hệ thống cho phép).</p>  <p style=\"text-align: justify;\"><strong>Trình soạn thảo tích hợp sẵn:</strong></p>  <p style=\"text-align: justify;\">Tại những vị trí phù hợp, NukeViet tích hợp sẵn trình soạn thảo CKeditor giúp người sử dụng dễ dàng biên tập nội dung trên giao diện trực quan và thân thiện như làm việc với phần mềm Microsoft Word hay OpenOffice. Hiện tại NukeViet 4 cũng đã mở sẵn để tích hợp các trình soạn thảo khác.</p>  <p style=\"text-align: justify;\"><span style=\"font-weight: bold;\">Các tiện ích khác</span><br  /> Hệ thống cho phép gửi mail bằng các phương thức: SMTP, Linux Mail, PHPmail.<br  /> Cho phép sử dụng phương thức FTP để ghi file nếu máy chủ không cho phép làm điều đó bằng PHP<br  /> Cho phép xây dựng và quản lý các tác vụ xử lý tự động như tự động sao lưu CSDL, tự động xóa các dữ liệu cũ hoặc gửi báo lỗi tới người quản trị...<br  /> Cung cấp đầy đủ các thông tin về hệ thống giúp nhà phát triển dễ dàng sử dụng các thông tin này phục vụ cho việc lập trình, kiểm tra và báo lỗi hệ thống.<br  /> <br  /> <span style=\"font-size: 150%; line-height: 116%;\"><span style=\"font-weight: bold;\">Các module tích hợp sẵn trong NukeViet CMS 4:</span></span><br  /> <span style=\"font-weight: bold;\">Quản lý Upload</span></p>  <ul> 	<li style=\"text-align: justify;\">Upload hình (ảnh, flash) từ máy tính hoặc một địa chỉ bất kỳ trên mạng.</li> 	<li style=\"text-align: justify;\">Quản lý: Di chuyển, đổi tên, sửa, xóa, tạo hình thu nhỏ...</li> 	<li style=\"text-align: justify;\">Hỗ trợ tìm kiểm các file và mô tả các file được upload lên trong khu vực quản trị.</li> </ul>  <p style=\"text-align: justify;\"><span style=\"font-weight: bold;\">Quản trị và xuất bản Tin tức:</span> (cho phép tạo module ảo)<br  /> Hệ thống tin tức của NukeViet là hệ thống quản trị tin tức chuyên nghiệp đặc biệt phù hợp với các website tin tức. Nó cho phép xử lý nhiều tác vụ nền thông minh mà không cần người sử dụng can thiệp nhằm tối ưu cho hệ thống tin tức, Ví dụ: tạo hình thu nhỏ, tự động chia thư mục và sắp xếp hình vào các thư mục theo thời gian...</p>  <ul> 	<li style=\"text-align: justify;\">Quản lý chủ đề đa cấp trong đó bản tin có thể nằm ở 1 hoặc nhiều chủ đề không phụ thuộc quan hệ cha con giữa các chủ đề.</li> 	<li style=\"text-align: justify;\">Phân quyền cho người quản lý module, đến từng chủ đề</li> 	<li style=\"text-align: justify;\">Quản lý nhóm tin liên quan (phân luồn tin theo dòng đơn)</li> 	<li style=\"text-align: justify;\">Quản lý block tin (nhóm tin đa luồng)</li> 	<li style=\"text-align: justify;\">Quản lý Tags</li> 	<li style=\"text-align: justify;\">Quản lý nguồn tin</li> 	<li style=\"text-align: justify;\">Tùy chỉnh bố cục trang tin.</li> 	<li style=\"text-align: justify;\">Gửi bài viết, hẹn giờ đăng và nhiều tùy chỉnh khác: cho phép gửi bản tin, in, lưu bản tin.</li> 	<li style=\"text-align: justify;\">Cấp tin RSS</li> 	<li style=\"text-align: justify;\">Công cụ tương tác với mạng xã&nbsp; hội.</li> </ul>  <p style=\"text-align: justify;\"><span style=\"font-weight: bold;\">Module Page:</span></p>  <ul> 	<li style=\"text-align: justify;\">Module này thích hợp làm các bài viết không cần quản lý chủ đề, như các module ảo: giới thiệu, nội quy site ...</li> 	<li style=\"text-align: justify;\">Hỗ trợ SEO: Ảnh minh họa, chú thích ảnh minh họa, mô tả, từ khóa cho bài viết, hiển thị các công cụ tương tác với các mạng xã hội.</li> 	<li style=\"text-align: justify;\">Hỗ trợ RSS</li> 	<li style=\"text-align: justify;\">Cấu hình phương án hiển thị các bài viết trên trang chính.</li> </ul>  <p style=\"text-align: justify;\"><span style=\"font-weight: bold;\">Quản lý thành viên:</span></p>  <ul> 	<li style=\"text-align: justify;\">Quản lý việc đăng nhập, đăng ký.</li> 	<li style=\"text-align: justify;\">Quản lý phương thức đăng nhập: Qua openid hoặc đăng nhập trực tiếp.</li> 	<li style=\"text-align: justify;\">Quản lý câu hỏi bảo mật.</li> 	<li style=\"text-align: justify;\">Quản lý nội quy.</li> 	<li style=\"text-align: justify;\">Quản lý thông tin thành viên.</li> 	<li style=\"text-align: justify;\">Cho phép đăng nhập 1 lần tài khoản người dùng NukeViet với Alfresco, Zimbra, Moodle, Koha thông qua CAS.</li> 	<li style=\"text-align: justify;\">Chức năng tùy biến trường dữ liệu thành viên</li> 	<li style=\"text-align: justify;\">Chức năng phân quyền sử dụng module users</li> 	<li style=\"text-align: justify;\">Cấu hình Số ký tự username, độ phức tạp mật khẩu, tạo mật khảu ngẫu nhiên,....</li> 	<li style=\"text-align: justify;\">Cho phép sử dụng tên truy cập, hoặc email để đăng nhập</li> </ul>  <p style=\"text-align: justify;\"><span style=\"font-weight: bold;\">Quản lý liên hệ gửi đến website</span></p>  <ul> 	<li style=\"text-align: justify;\">Quản lý thông tin liên hệ trên site.</li> 	<li style=\"text-align: justify;\">Quản lý các bộ phận tiếp nhận liên hệ.</li> 	<li style=\"text-align: justify;\">Quản lý và trả lời các thư gửi tới. Admin có thể trả lời khách nhiều lần, hệ thống lưu lại lịch sử trao đổi đó.</li> 	<li style=\"text-align: justify;\">Hệ thống nhận thông báo: đây là một tiện ích nhỏ, song nó rất hữu dụng để admin tương tác với hệ thống một cách nhanh chóng. Admin có thể nhận thông báo từ hệ thống (hoặc từ module) khi có sự kiện nào đó. Ví dụ: Khi có khách gửi liên hệ (qua module contact) đến thì hệ thống xuất hiện biểu tượng thông báo “Có liên hệ mới” ở góc phải, Admin sẽ nhận được ngay lập tức thông báo khi người dùng đang ở Admin control panel (ACP).</li> </ul>  <p style=\"text-align: justify;\"><span style=\"font-weight: bold;\">Quản lý thăm dò ý kiến:</span></p>  <ul> 	<li style=\"text-align: justify;\">Tạo các thăm dò ý kiến</li> </ul>  <p style=\"text-align: justify;\"><span style=\"font-weight: bold;\">Quản lý quảng cáo chuyên nghiệp:</span></p>  <ul> 	<li style=\"text-align: justify;\">Quản lý khách hàng.</li> 	<li style=\"text-align: justify;\">Quản lý các khu vực quảng cáo</li> 	<li style=\"text-align: justify;\">Quản lý các nội dung quảng cáo.</li> 	<li style=\"text-align: justify;\">Kết hợp với việc quản lý block. Các quản cáo có thể đặt vào các khu vực khác nhau, dễ dàng thay đổi theo nhu cầu của người dùng.</li> </ul>  <p style=\"text-align: justify;\"><span style=\"font-weight: bold;\">Thống kê:</span> Thống kê theo năm, tháng, ngày, tuần, giờ.</p>  <ul> 	<li style=\"text-align: justify;\">Theo liên kết đến site</li> 	<li style=\"text-align: justify;\">Theo quốc gia</li> 	<li style=\"text-align: justify;\">Theo trình duyệt</li> 	<li style=\"text-align: justify;\">Theo hệ điều hành</li> 	<li style=\"text-align: justify;\">Máy chủ tìm kiếm</li> </ul>  <p style=\"text-align: justify;\"><span style=\"font-weight: bold;\">Tìm kiếm</span></p>  <ul> 	<li style=\"text-align: justify;\">Tìm kiếm chung toàn hệ thống</li> 	<li style=\"text-align: justify;\">Tìm kiếm nâng cao từng khu vực</li> </ul>  <div style=\"text-align: justify;\"><strong>Module menu:</strong></div>  <ul> 	<li style=\"text-align: justify;\">Module này cung cấp để quản lý các menu tùy biên, có thể lấy liên kết từ nhiều mục khác nhau.</li> 	<li style=\"text-align: justify;\">Phương án quản lý menu được thay đổi hướng tới việc quản lý menu nhanh chóng, tiện lợi nhất cho admin.</li> 	<li style=\"text-align: justify;\">Admin có thể nạp nhanh menu theo các tùy chọn mà hệ thống cung cấp.</li> 	<li style=\"text-align: justify;\">Mẫu menu cũng được thay đổi, đa dạng và hiển thị tốt với các giao diện hiện đại.</li> </ul>  <p style=\"text-align: justify;\"><strong>Quản lý Bình luận</strong></p>  <ul> 	<li style=\"text-align: justify;\">Các bình luận của các module sẽ được tích hợp quản lý tập trung để cấu hình, phân quyền.</li> 	<li style=\"text-align: justify;\">Khi xây dựng mới module, Chỉ cần nhúng 1 đoạn mã vào. Tránh phải việc copy mã code gây khó khăn cho bảo trì.</li> </ul>  <p style=\"text-align: justify;\"><br  /> Trên đây là các tính năng chính của bộ nhân hệ thống NukeViet 4, để xem đầy đủ hơn các tính năng <strong><a href=\"http://wiki.nukeviet.vn/nukeviet4:feature\">click vào đây</a></strong>. Với NukeViet, việc mở rộng thêm các tính năng là không hạn chế, đơn giản là cài thêm các module tương ứng hoặc xây dựng thêm các module đó cho NukeViet.</p>', '', 4, '', '0', 5, 1, 1557363838, 1557363838, 1, 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about` (`id`, `title`, `alias`, `image`, `imagealt`, `imageposition`, `description`, `bodytext`, `keywords`, `socialbutton`, `activecomm`, `layout_func`, `weight`, `admin_id`, `add_time`, `edit_time`, `status`, `hitstotal`, `hot_post`) VALUES (6, 'Yêu cầu sử dụng NukeViet 4', 'Yeu-cau-su-dung-NukeViet-4', '', '', 0, '', '<h2 class=\"sectionedit2\" id=\"moi_truong_may_chủ\">1. Môi trường máy chủ</h2>  <div class=\"level2\"> <p><strong>Yêu cầu bắt buộc</strong></p>  <ul> 	<li class=\"level1\"> 	<div class=\"li\">Hệ điều hành: Unix (Linux, Ubuntu, Fedora …) hoặc Windows</div> 	</li> 	<li class=\"level1\"> 	<div class=\"li\">PHP: PHP 5.4 hoặc phiên bản mới nhất.</div> 	</li> 	<li class=\"level1\"> 	<div class=\"li\">MySQL: MySQL 5.5 hoặc phiên bản mới nhất</div> 	</li> </ul>  <p><strong>Tùy chọn bổ sung</strong></p>  <ul> 	<li class=\"level1\"> 	<div class=\"li\">Máy chủ Apache cần hỗ trợ mod mod_rewrite.</div> 	</li> 	<li class=\"level1\"> 	<div class=\"li\">Máy chủ Nginx cấu hình các thông số rewite.</div> 	</li> 	<li class=\"level1\"> 	<div class=\"li\">Máy chủ IIS 7.0 hoặc IIS 7.5 cần cài thêm module rewrite</div> 	</li> 	<li class=\"level1\"> 	<div class=\"li\">Môi trường PHP mở rộng: Các thư viện PHP cần có: file_uploads, session, mbstring, curl, gd2, zlib, soap, php_zip.</div> 	</li> </ul>  <p><em class=\"u\"><strong>Ghi chú:</strong></em></p>  <ul> 	<li class=\"level1\"> 	<div class=\"li\">Những yêu cầu trên không có nghĩa là NukeViet 4 không làm việc trên các hệ thống khác, điều quan trọng là cần thiết lập môi trường làm việc phù hợp.</div> 	</li> 	<li class=\"level1\"> 	<div class=\"li\">Với những website sử dụng hosting, NukeViet 4 làm việc tốt nhất trên các hosting Linux cài sẵn Apache 2.2, PHP 5, MySQL 5, DirectAdmin hoặc Cpanel.</div> 	</li> 	<li class=\"level1\"> 	<div class=\"li\">Với các website cần chịu tải cao, nên sử dụng Nginx, PHP7 (php-fpm). Tham khảo thêm mô hình <a class=\"urlextern\" href=\"http://wiki.nukeviet.vn/web_server:cai-dat-server-chi-tai-cao\" rel=\"nofollow\" target=\"_blank\" title=\"http://wiki.nukeviet.vn/web_server:cai-dat-server-chi-tai-cao\">http://wiki.nukeviet.vn/web_server:cai-dat-server-chi-tai-cao</a></div> 	</li> </ul> </div>  <div class=\"secedit editbutton_section editbutton_2\">  <div class=\"no\">&nbsp;</div>  </div>  <h2 class=\"sectionedit3\" id=\"may_tinh_nguời_truy_cập\">2. Máy tính người truy cập</h2>  <div class=\"level2\"> <p>NukeViet 4 cho kết quả là chuẩn HTML5 và CSS 3, đây là định dạng chuẩn mà hầu hết các trình duyệt hiện nay đang hỗ trợ. Chính vì vậy các website làm trên nền NukeViet 4 có thể truy cập tốt trên các phiên bản mới nhất của trình duyệt FireFox, Internet Explorer 9, Google Chrome … Máy tính người truy cập chỉ cần cài một trong các trình duyệt này là có thể tương tác với NukeViet thông qua internet hoặc intranet.</p> </div>', '', 0, '4', '', 6, 1, 1557363838, 1557363838, 1, 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about` (`id`, `title`, `alias`, `image`, `imagealt`, `imageposition`, `description`, `bodytext`, `keywords`, `socialbutton`, `activecomm`, `layout_func`, `weight`, `admin_id`, `add_time`, `edit_time`, `status`, `hitstotal`, `hot_post`) VALUES (7, 'Giới thiệu về Công ty cổ phần phát triển nguồn mở Việt Nam', 'gioi-thieu-ve-cong-ty-co-phan-phat-trien-nguon-mo-viet-nam', '', '', 0, '', '<p style=\"text-align: justify;\"><strong>Công ty cổ phần phát triển nguồn mở Việt Nam</strong> (VINADES.,JSC) là công ty mã nguồn mở đầu tiên của Việt Nam sở hữu riêng một mã nguồn mở nổi tiếng và đang được sử dụng ở hàng ngàn website lớn nhỏ trong mọi lĩnh vực. Wbsite đang hoạt động chính thức: <a href=\"http://vinades.vn/\">http://vinades.vn/</a><br  /> <br  /> Ra đời từ hoạt động của tổ chức nguồn mở NukeViet (từ năm 2004) và chính thức được thành lập đầu 2010 tại Hà Nội, khi đó báo chí đã gọi VINADES.,JSC là <em><strong>&quot;Công ty mã nguồn mở đầu tiên tại Việt Nam&quot;</strong></em>.<br  /> <br  /> Ngay sau khi thành lập, VINADES.,JSC đã thành công trong việc xây dựng <strong><a href=\"http://nukeviet.vn/\" target=\"_blank\">NukeViet</a></strong> thành một <a href=\"http://nukeviet.vn/\" target=\"_blank\">mã nguồn mở</a> thuần Việt. Với khả năng mạnh mẽ, cùng các ưu điểm vượt trội về công nghệ, độ an toàn và bảo mật, NukeViet đã được hàng ngàn website lựa chọn sử dụng trong năm qua. Ngay khi ra mắt phiên bản mới năm 2010, NukeViet đã tạo nên hiệu ứng truyền thông chưa từng có trong lịch sử mã nguồn mở Việt Nam. Tiếp đó, năm 2011 Mã nguồn mở NukeViet đã giành giải thưởng Nhân tài đất Việt cho sản phẩm Công nghệ thông tin đã được ứng dụng rộng rãi.</p>  <div style=\"text-align: center;\"> <div class=\"youtube-embed-wrapper\" style=\"position:relative;padding-bottom:56.25%;padding-top:30px;height:0;overflow:hidden;\"><iframe allowfullscreen=\"\" frameborder=\"0\" height=\"480\" src=\"//www.youtube.com/embed/ZOhu2bLE-eA?rel=0&amp;autoplay=1\" style=\"position: absolute;top: 0;left: 0;width: 100%;height: 100%;\" width=\"640\"></iframe></div> <br  /> <span style=\"font-size:12px;\"><strong>Video clip trao giải Nhân tài đất Việt 2011.</strong><br  /> Sản phẩm &quot;Mã nguồn mở NukeViet&quot; đã nhận giải cao nhất (Giải ba, không có giải nhất, giải nhì) của Giải thưởng Nhân Tài Đất Việt 2011 ở lĩnh vực Công nghệ thông tin - Sản phẩm đã có ứng dụng rộng rãi.</span></div>  <p style=\"text-align: justify;\"><br  /> Tự chuyên nghiệp hóa mình, thoát khỏi mô hình phát triển tự phát, công ty đã nỗ lực vươn mình ra thế giới và đang phấn đấu trở thành một trong những hiện tượng của thời &quot;dotcom&quot; ở Việt Nam.<br  /> <br  /> Để phục vụ hoạt động của công ty, công ty liên tục mở rộng và tuyển thêm nhân sự ở các vị trí: Lập trình viên, chuyên viên đồ họa, nhân viên kinh doanh... Hãy liên hệ ngay để gia nhập VINADES.,JSC và cùng chúng tôi trở thành một công ty phát triển nguồn mở thành công nhất Việt Nam.</p>  <p>Nếu bạn có nhu cầu triển khai các hệ thống <strong><a href=\"http://toasoandientu.vn\" target=\"_blank\">Tòa Soạn Điện Tử</a></strong>, <strong><a href=\"http://webnhanh.vn\" target=\"_blank\">phần mềm trực tuyến</a></strong>, <strong><a href=\"http://vinades.vn\" target=\"_blank\">thiết kế website</a></strong> theo yêu cầu hoặc dịch vụ có liên quan, hãy liên hệ công ty chuyên quản NukeViet theo thông tin dưới đây:</p>  <p><strong><span style=\"font-family: Tahoma; color: rgb(255, 69, 0); font-size: 14px;\">CÔNG TY CỔ PHẦN PHÁT TRIỂN NGUỒN MỞ VIỆT NAM</span></strong><br  /> <strong>VIET NAM OPEN SOURCE DEVELOPMENT JOINT STOCK COMPANY</strong> (<strong>VINADES.,JSC</strong>)<br  /> Website: <a href=\"http://vinades.vn/\">http://vinades.vn</a> | <a href=\"http://nukeviet.vn/\">http://nukeviet.vn</a> | <a href=\"http://webnhanh.vn/\">http://webnhanh.vn</a><br  /> Trụ sở: Phòng 2004 - Tòa nhà CT2 Nàng Hương, 583 Nguyễn Trãi, Hà Nội.<br  /> - Tel: +84-4-85872007<br  /> - Fax: +84-4-35500914<br  /> - Email: <a href=\"mailto:contact@vinades.vn\">contact@vinades.vn</a></p>', 'giới thiệu,công ty,cổ phần,phát triển', 0, '4', '', 7, 1, 1557363838, 1557363838, 1, 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about` (`id`, `title`, `alias`, `image`, `imagealt`, `imageposition`, `description`, `bodytext`, `keywords`, `socialbutton`, `activecomm`, `layout_func`, `weight`, `admin_id`, `add_time`, `edit_time`, `status`, `hitstotal`, `hot_post`) VALUES (8, 'Ủng hộ, hỗ trợ và tham gia phát triển NukeViet', 'ung-ho-ho-tro-va-tham-gia-phat-trien-nukeviet', '', '', 0, 'Nếu bạn yêu thích NukeViet, bạn có thể ủng hộ và hỗ trợ NukeViet bằng nhiều cách', '<h2>1. Ủng hộ bằng tiền mặt vào Quỹ tài trợ NukeViet</h2>
Qua tài khoản Paypal:

<p style=\"text-align:center\"><a href=\"https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=5LUSNE2SV5RR2\" target=\"_blank\"><img alt=\"\" src=\"https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif\" /></a></p>
Chuyển khoản ngân hàng trực tiếp:

<ul>
	<li>Người đứng tên tài khoản:&nbsp;NGUYEN THE HUNG</li>
	<li>Số tài khoản:&nbsp;0031000792053</li>
	<li>Loại tài khoản: VND (Việt Nam Đồng)</li>
	<li>Ngân hàng Vietcombank chi nhánh Hải Phòng.</li>
	<li>Website:&nbsp;<a href=\"http://www.vietcombank.com.vn/\">http://www.vietcombank.com.vn</a></li>
</ul>

<div class=\"alert alert-info\">Lưu ý: Đây là tài khoản hợp lệ duy nhất mà NukeViet.VN sử dụng cho&nbsp;Quỹ tài trợ NukeViet.</div>
Thảo luận tại đây:&nbsp;<a href=\"http://forum.nukeviet.vn/viewtopic.php?f=3&amp;t=3592\" target=\"_blank\">http://forum.nukeviet.vn/viewtopic.php?f=3&amp;t=3592</a>

<h2>2. Ủng hộ bằng cách sử dụng và phổ biến NukeViet đến nhiều người hơn</h2>
Cách đơn giản nhất để ủng hộ NukeViet phát triển là sử dụng NukeViet và giúp NukeViet phổ biến đến nhiều người hơn (ví dụ như giữ lại dòng chữ &quot;Powered by&nbsp;<a href=\"http://nukeviet.vn/\" target=\"_blank\">NukeViet</a>&quot; hoặc &quot;Sử dụng&nbsp;<a href=\"http://nukeviet.vn/\" target=\"_blank\">NukeViet</a>&quot; trên website của bạn, viết bài giới thiệu NukeViet đến mọi người).<br />
Nếu bạn có thời gian, bạn có thể tham gia&nbsp;<a href=\"http://forum.nukeviet.vn/\" target=\"_blank\">diễn đàn NukeViet</a>&nbsp;thường xuyên và giúp đỡ những người mới sử dụng NukeViet.

<h2>3. Ủng hộ bằng cách tham gia phát triển NukeViet</h2>

<h3>3.1. Phát triển module, giao diện cho NukeViet</h3>
Nếu bạn biết code, hãy tham gia viết module, block, theme cho NukeViet và đưa lên&nbsp;<a href=\"http://nukeviet.vn/vi/store/\" target=\"_blank\">NukeViet Store</a>&nbsp;để cung cấp cho cộng đồng. Bạn cũng có thể tham gia đội ngũ phát triển NukeViet.

<h3>3.2. Tham gia phát triển nhân hệ thống</h3>
Toàn bộ code nhân hệ thống NukeViet đã được đưa lên GitHub.com (truy cập tắt:&nbsp;<a href=\"http://code.nukeviet.vn/\" target=\"_blank\">http://code.nukeviet.vn</a>), dù bạn là ai, cá nhân hay doanh nghiệp chỉ cần có một tài khoản tại GitHub và học cách sử dụng&nbsp;<a href=\"#git\">git&nbsp;(1)</a>&nbsp;là bạn có thể tham gia phát triển code NukeViet. Tìm hiểu thêm về việc tham gia phát triển code nhân hệ thống NukeViet tại đây:&nbsp;<a href=\"http://wiki.nukeviet.vn/programming:github_rule\" target=\"_blank\">http://wiki.nukeviet.vn/programming:github_rule</a>

<h3>3.3. Tham gia dịch thuật</h3>
Nếu bạn biết ngoại ngữ, hãy đăng ký tham gia đội ngũ dịch thuật tình nguyện tại&nbsp;<a href=\"http://translate.nukeviet.vn/\" target=\"_blank\">NukeViet Stranslate System</a>&nbsp;để dịch thuật NukeViet sang các ngôn ngữ khác, quảng bá NukeViet ra với thế giới.

<h3>3.4. Tham gia viết tài liệu hướng dẫn sử dụng</h3>
Nếu bạn không biết code, không biết ngoại ngữ, bạn vẫn có thể tham gia đóng góp cho NukeViet bằng cách biên soạn tài liệu hướng dẫn người dùng NukeViet tại thư viện tài liệu mở của NukeViet ở địa chỉ&nbsp;<a href=\"http://wiki.nukeviet.vn/\" target=\"_blank\">http://wiki.nukeviet.vn</a>

<hr  /> <a id=\"git\" name=\"git\">(1)</a>: Tìm hiểu về git:&nbsp;<a href=\"http://wiki.nukeviet.vn/programming:vcs:git\" target=\"_blank\">http://wiki.nukeviet.vn/programming:vcs:git</a>', 'ủng hộ,hỗ trợ,tham gia,phát triển', 0, '4', '', 8, 1, 1557363838, 1557363838, 1, 0, 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_about_config`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_about_config` (
  `config_name` varchar(30) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  UNIQUE KEY `config_name` (`config_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about_config` (`config_name`, `config_value`) VALUES ('viewtype', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about_config` (`config_name`, `config_value`) VALUES ('facebookapi', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about_config` (`config_name`, `config_value`) VALUES ('per_page', '20')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about_config` (`config_name`, `config_value`) VALUES ('news_first', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about_config` (`config_name`, `config_value`) VALUES ('related_articles', '5')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about_config` (`config_name`, `config_value`) VALUES ('copy_page', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about_config` (`config_name`, `config_value`) VALUES ('alias_lower', '1')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_blocks_groups`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_blocks_groups` (
  `bid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `theme` varchar(55) NOT NULL,
  `module` varchar(55) NOT NULL,
  `file_name` varchar(55) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `template` varchar(55) DEFAULT NULL,
  `position` varchar(55) DEFAULT NULL,
  `exp_time` int(11) DEFAULT 0,
  `active` varchar(10) DEFAULT '1',
  `act` tinyint(1) unsigned NOT NULL DEFAULT 1,
  `groups_view` varchar(255) DEFAULT '',
  `all_func` tinyint(4) NOT NULL DEFAULT 0,
  `weight` int(11) NOT NULL DEFAULT 0,
  `config` text DEFAULT NULL,
  PRIMARY KEY (`bid`),
  KEY `theme` (`theme`),
  KEY `module` (`module`),
  KEY `position` (`position`),
  KEY `exp_time` (`exp_time`)
) ENGINE=MyISAM  AUTO_INCREMENT=55  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (2, 'default', 'banners', 'global.banners.php', 'Quảng cáo giữa trang', '', 'no_title', '[TOP]', 0, '1', 1, '6', 0, 2, 'a:1:{s:12:\"idplanbanner\";i:1;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (4, 'default', 'theme', 'global.module_menu.php', 'Module Menu', '', 'no_title', '[LEFT]', 0, '1', 1, '6', 0, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (5, 'default', 'banners', 'global.banners.php', 'Quảng cáo cột trái', '', 'no_title', '[LEFT]', 0, '1', 1, '6', 1, 3, 'a:1:{s:12:\"idplanbanner\";i:2;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (8, 'default', 'banners', 'global.banners.php', 'Quảng cáo cột phải', '', 'no_title', '[RIGHT]', 0, '1', 1, '6', 1, 2, 'a:1:{s:12:\"idplanbanner\";i:3;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (11, 'default', 'theme', 'global.copyright.php', 'Copyright', '', 'no_title', '[FOOTER_SITE]', 0, '1', 1, '6', 1, 1, 'a:5:{s:12:\"copyright_by\";s:0:\"\";s:13:\"copyright_url\";s:0:\"\";s:9:\"design_by\";s:12:\"VINADES.,JSC\";s:10:\"design_url\";s:18:\"http://vinades.vn/\";s:13:\"siteterms_url\";s:39:\"/index.php?language=vi&amp;nv=siteterms\";}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (13, 'default', 'theme', 'global.QR_code.php', 'QR code', '', 'no_title', '[QR_CODE]', 0, '1', 1, '6', 1, 1, 'a:3:{s:5:\"level\";s:1:\"M\";s:15:\"pixel_per_point\";i:4;s:11:\"outer_frame\";i:1;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (15, 'default', 'users', 'global.user_button.php', 'Đăng nhập thành viên', '', 'no_title', '[PERSONALAREA]', 0, '1', 1, '6', 1, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (16, 'default', 'theme', 'global.company_info.php', 'Công ty chủ quản', '', 'simple', '[COMPANY_INFO]', 0, '1', 1, '6', 1, 1, 'a:17:{s:12:\"company_name\";s:58:\"Công ty cổ phần phát triển nguồn mở Việt Nam\";s:15:\"company_address\";s:72:\"Phòng 1706 - Tòa nhà CT2 Nàng Hương, 583 Nguyễn Trãi, Hà Nội\";s:16:\"company_sortname\";s:12:\"VINADES.,JSC\";s:15:\"company_regcode\";s:0:\"\";s:16:\"company_regplace\";s:0:\"\";s:21:\"company_licensenumber\";s:0:\"\";s:22:\"company_responsibility\";s:0:\"\";s:15:\"company_showmap\";i:1;s:20:\"company_mapcenterlat\";d:20.984516000000013;s:20:\"company_mapcenterlng\";d:105.795475;s:14:\"company_maplat\";d:20.984516;s:14:\"company_maplng\";d:105.79547500000001;s:15:\"company_mapzoom\";i:17;s:13:\"company_phone\";s:58:\"+84-24-85872007[+842485872007]|+84-904762534[+84904762534]\";s:11:\"company_fax\";s:15:\"+84-24-35500914\";s:13:\"company_email\";s:18:\"contact@vinades.vn\";s:15:\"company_website\";s:17:\"http://vinades.vn\";}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (17, 'default', 'menu', 'global.bootstrap.php', 'Menu Site', '', 'no_title', '[MENU_SITE]', 0, '1', 1, '6', 1, 1, 'a:2:{s:6:\"menuid\";i:1;s:12:\"title_length\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (19, 'default', 'theme', 'global.social.php', 'Social icon', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', 1, '6', 1, 1, 'a:4:{s:8:\"facebook\";s:32:\"http://www.facebook.com/nukeviet\";s:11:\"google_plus\";s:32:\"https://www.google.com/+nukeviet\";s:7:\"youtube\";s:37:\"https://www.youtube.com/user/nukeviet\";s:7:\"twitter\";s:28:\"https://twitter.com/nukeviet\";}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (20, 'default', 'theme', 'global.menu_footer.php', 'Các chuyên mục chính', '', 'simple', '[MENU_FOOTER]', 0, '1', 1, '6', 1, 1, 'a:1:{s:14:\"module_in_menu\";a:8:{i:0;s:5:\"about\";i:1;s:4:\"news\";i:2;s:5:\"users\";i:3;s:7:\"contact\";i:4;s:6:\"voting\";i:5;s:7:\"banners\";i:6;s:4:\"seek\";i:7;s:5:\"feeds\";}}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (35, 'simple', 'theme', 'global.bootstrap.php', 'global top', '', 'no_title', '[TOP]', 0, '1', 1, '6', 1, 1, 'a:2:{s:6:\"menuid\";i:1;s:12:\"title_length\";i:24;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (37, 'simple', 'notification', 'global.block_notification_onesignal.php', 'global block notification push', '', 'no_title', '[TOP]', 0, '1', 1, '', 1, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (39, 'simple', 'theme', 'global.logs_event.php', 'Dự án', '/index.php?language=vi&nv=projects', 'default_no_padding', '[BOTTOM]', 0, '1', 1, '14', 0, 1, 'a:3:{s:6:\"numrow\";s:2:\"20\";s:6:\"height\";i:300;s:6:\"system\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (43, 'simple', 'notification', 'global.block_notification_popup.php', 'global block notification popup', '', 'no_title', '[TOP]', 0, '1', 1, '', 1, 3, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (44, 'dashboard', 'theme', 'global.company_info.php', 'Công ty chủ quản', '', 'simple', '[COMPANY_INFO]', 0, '1', 1, '6', 1, 1, 'a:17:{s:12:\"company_name\";s:58:\"Công ty cổ phần phát triển nguồn mở Việt Nam\";s:15:\"company_address\";s:72:\"Phòng 1706 - Tòa nhà CT2 Nàng Hương, 583 Nguyễn Trãi, Hà Nội\";s:16:\"company_sortname\";s:12:\"VINADES.,JSC\";s:15:\"company_regcode\";s:0:\"\";s:16:\"company_regplace\";s:0:\"\";s:21:\"company_licensenumber\";s:0:\"\";s:22:\"company_responsibility\";s:0:\"\";s:15:\"company_showmap\";i:1;s:20:\"company_mapcenterlat\";d:20.984516000000013;s:20:\"company_mapcenterlng\";d:105.795475;s:14:\"company_maplat\";d:20.984515999999999;s:14:\"company_maplng\";d:105.79547500000001;s:15:\"company_mapzoom\";i:17;s:13:\"company_phone\";s:58:\"+84-24-85872007[+842485872007]|+84-904762534[+84904762534]\";s:11:\"company_fax\";s:15:\"+84-24-35500914\";s:13:\"company_email\";s:18:\"contact@vinades.vn\";s:15:\"company_website\";s:17:\"http://vinades.vn\";}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (45, 'dashboard', 'theme', 'global.user_theme_button.php', 'global user theme button', '', 'no_title', '[CONTACT_DEFAULT]', 0, '1', 1, '6', 1, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (46, 'dashboard', 'projects', 'global.manage_projects.php', 'Dự án', '', 'simple-blue', '[HOME_LEFT]', 0, '1', 1, '6', 0, 1, 'a:4:{s:6:\"numrow\";i:5;s:10:\"characters\";i:0;s:4:\"type\";a:3:{i:0;i:0;i:1;i:1;i:2;i:2;}s:6:\"updown\";s:8:\"edittime\";}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (47, 'dashboard', 'theme', 'global.module_menu.php', 'Module Menu', '', 'no_title', '[LEFT]', 0, '1', 1, '6', 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (48, 'dashboard', 'theme', 'global.menu_footer.php', 'Các chuyên mục chính', '', 'simple', '[MENU_FOOTER]', 0, '1', 1, '6', 1, 1, 'a:1:{s:14:\"module_in_menu\";a:8:{i:0;s:5:\"about\";i:1;s:4:\"news\";i:2;s:5:\"users\";i:3;s:7:\"contact\";i:4;s:6:\"voting\";i:5;s:7:\"banners\";i:6;s:4:\"seek\";i:7;s:5:\"feeds\";}}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (49, 'dashboard', 'theme', 'global.category.php', 'Danh mục', '', 'no_title', '[MENU_SITE]', 0, '1', 1, '6', 1, 1, 'a:3:{s:6:\"menuid\";i:1;s:12:\"title_length\";i:0;s:8:\"template\";i:1;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (50, 'dashboard', 'theme', 'global.category.php', 'global category', '', 'no_title', '[MENU_SITE]', 0, '1', 1, '6', 1, 2, 'a:3:{s:6:\"menuid\";i:1;s:12:\"title_length\";i:0;s:8:\"template\";i:2;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (51, 'dashboard', 'notification', 'global.block_notification_popup.php', 'global block notification popup', '', 'no_title', '[NOTIFICATION]', 0, '1', 1, '6', 1, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (52, 'dashboard', 'users', 'global.user_button.php', 'Đăng nhập thành viên', '', 'no_title', '[PERSONALAREA]', 0, '1', 1, '6', 1, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (53, 'dashboard', 'notification', 'global.block_notification_onesignal.php', 'global block notification onesignal', '', 'no_title', '[PERSONALAREA]', 0, '1', 1, '6', 1, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (54, 'dashboard', 'theme', 'global.QR_code.php', 'QR code', '', 'no_title', '[QR_CODE]', 0, '1', 1, '6', 1, 1, 'a:3:{s:5:\"level\";s:1:\"M\";s:15:\"pixel_per_point\";i:4;s:11:\"outer_frame\";i:1;}')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_blocks_weight`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_blocks_weight` (
  `bid` mediumint(8) NOT NULL DEFAULT 0,
  `func_id` mediumint(8) NOT NULL DEFAULT 0,
  `weight` mediumint(8) NOT NULL DEFAULT 0,
  UNIQUE KEY `bid` (`bid`,`func_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (4, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (4, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (4, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (4, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (4, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (4, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (4, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (4, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (4, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (4, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (4, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (4, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (4, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (4, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (4, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (4, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (4, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 4, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 5, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 6, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 7, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 8, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 9, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 10, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 11, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 12, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 31, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 32, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 33, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 34, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 35, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 36, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 37, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 19, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 20, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 21, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 22, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 23, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 24, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 25, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 26, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 27, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 28, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 1, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 38, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 39, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 40, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 41, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 47, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 48, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 49, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 50, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 51, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 61, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 64, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 4, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 5, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 6, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 7, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 8, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 9, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 10, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 11, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 12, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 52, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 63, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 55, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 56, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 31, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 32, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 33, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 34, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 35, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 36, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 37, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 58, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 59, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 60, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 19, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 20, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 21, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 22, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 23, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 24, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 25, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 26, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 27, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 28, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 29, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 62, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 86, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (2, 4, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 69, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 70, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 69, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 70, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 69, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 70, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 69, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 70, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 69, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 70, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 69, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 70, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 69, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 70, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 74, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 75, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 71, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 66, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 65, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 72, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 67, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 76, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 77, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 69, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 70, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 69, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 70, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 78, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 80, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 78, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 80, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 78, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 80, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 78, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 80, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 78, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 80, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 78, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 80, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 78, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 80, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 79, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 78, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 80, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 78, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 80, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 78, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 80, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 69, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 70, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 83, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 84, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 85, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 85, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 85, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 85, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 85, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 85, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 85, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 85, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 85, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 85, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 91, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 90, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 92, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 91, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 90, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 92, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 91, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 90, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 92, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 91, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 90, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 92, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 91, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 90, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 92, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 91, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 90, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 92, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 91, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 90, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 92, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 91, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 90, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 92, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 91, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 90, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 92, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 91, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 90, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 92, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 93, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 93, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 93, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 93, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 93, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 93, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 93, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 93, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 93, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 93, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 94, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 94, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 94, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 94, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 94, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 94, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 94, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 94, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 94, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 94, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 97, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 97, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 97, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 97, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 97, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 97, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 97, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 97, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 97, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 97, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 100, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 98, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 100, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 98, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 100, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 98, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 100, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 98, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 100, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 98, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 100, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 98, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 100, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 98, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 100, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 98, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 100, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 98, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 100, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 98, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 104, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 104, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 104, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 104, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 104, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 104, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 104, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 104, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 104, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 104, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 105, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 105, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 105, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 105, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 105, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 105, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 105, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 105, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 105, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 105, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 157, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 158, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 158, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 157, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 157, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 158, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 157, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 19, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 20, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 21, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 22, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 23, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 24, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 25, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 26, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 27, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 28, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 29, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 160, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 159, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 160, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 159, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 160, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 58, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 59, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 60, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 157, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 157, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 158, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 158, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 99, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 100, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 98, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 158, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 157, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 158, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 108, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 107, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 106, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 109, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 110, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 111, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 114, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 113, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 112, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 111, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 114, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 113, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 112, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 111, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 114, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 113, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 112, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 111, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 114, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 113, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 112, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 111, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 114, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 113, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 112, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 111, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 114, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 113, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 112, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 111, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 114, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 113, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 112, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 111, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 114, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 113, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 112, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 111, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 114, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 113, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 112, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 111, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 114, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 113, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 112, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 111, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 114, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 113, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 112, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 117, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 116, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 117, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 116, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 117, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 116, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 117, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 116, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 117, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 116, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 117, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 116, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 117, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 116, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 117, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 116, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 117, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 116, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 117, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 116, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 117, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 116, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 115, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 160, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 160, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 159, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 162, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 162, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 161, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 159, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 161, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 160, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 159, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 162, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 161, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 19, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 20, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 21, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 22, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 23, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 24, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 25, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 26, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 27, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 28, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 29, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 64, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 162, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 161, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 162, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 161, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 162, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 58, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 59, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 60, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 99, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 100, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 98, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 160, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 159, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 108, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 107, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 106, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 109, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 110, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 111, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 114, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 113, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 112, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 117, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 116, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 115, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 122, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 122, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 122, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 122, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 122, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 122, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 122, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 122, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 122, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 122, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 122, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 157, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 122, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 159, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 125, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 125, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 125, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 125, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 125, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 125, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 125, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 125, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 125, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 125, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 125, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 124, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 123, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 125, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 124, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 123, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 126, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 126, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 126, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 126, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 126, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 126, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 126, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 126, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 126, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 126, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 126, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 126, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 127, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 127, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 127, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 127, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 127, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 127, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 127, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 127, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 127, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 127, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 127, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 127, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 128, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 128, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 128, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 128, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 128, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 128, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 128, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 128, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 128, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 128, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 158, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 160, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 129, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 129, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 129, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 129, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 129, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 129, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 129, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 129, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 129, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 129, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 129, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 129, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 132, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 131, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 130, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 132, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 131, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 130, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 132, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 131, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 130, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 132, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 131, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 130, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 132, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 131, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 130, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 132, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 131, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 130, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 132, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 131, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 130, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 132, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 131, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 130, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 132, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 131, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 130, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 132, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 131, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 130, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 132, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 131, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 130, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 132, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 131, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 130, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 135, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 134, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 133, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 135, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 134, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 133, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 135, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 134, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 133, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 135, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 134, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 133, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 135, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 134, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 133, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 135, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 134, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 133, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 135, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 134, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 133, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 135, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 134, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 133, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 135, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 134, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 133, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 135, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 134, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 133, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 135, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 134, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 133, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 135, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 134, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 133, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 136, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 136, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 136, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 136, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 136, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 136, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 136, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 136, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 136, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 136, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 136, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 136, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 137, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 137, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 137, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 137, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 137, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 137, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 137, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 137, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 137, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 137, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 137, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 137, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 138, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 138, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 138, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 138, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 138, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 138, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 138, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 138, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 138, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 138, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 138, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 138, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 139, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 140, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 139, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 140, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 139, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 140, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 139, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 140, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 139, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 140, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 139, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 140, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 139, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 140, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 139, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 140, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 139, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 140, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 139, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 140, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 157, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 158, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 159, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 160, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 147, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 149, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 142, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 148, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 143, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 144, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 150, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 147, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 149, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 142, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 148, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 143, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 144, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 150, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 147, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 149, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 142, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 148, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 143, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 144, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 150, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 147, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 149, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 142, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 148, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 143, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 144, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 150, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 147, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 149, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 142, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 148, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 143, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 144, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 150, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 147, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 149, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 142, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 148, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 143, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 144, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 150, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 147, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 149, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 142, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 148, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 143, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 144, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 150, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 147, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 149, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 142, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 148, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 143, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 144, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 150, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 147, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 149, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 142, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 148, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 143, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 144, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 150, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 147, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 149, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 142, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 148, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 143, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 144, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 150, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 158, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 158, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 157, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 157, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 158, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 157, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 64, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 160, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 160, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 159, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 159, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 160, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 159, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 159, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 152, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 152, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 152, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 152, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 152, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 152, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 152, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 152, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 152, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 152, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 152, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 152, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 156, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 155, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 154, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 156, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 155, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 154, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 156, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 155, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 154, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 156, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 155, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 154, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 156, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 155, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 154, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 156, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 155, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 154, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 156, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 155, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 154, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 156, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 155, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 154, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 156, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 155, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 154, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 156, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 155, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 154, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 156, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 155, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 154, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 156, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 155, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 154, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 161, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 162, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 161, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 162, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 161, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 162, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 161, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 162, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 161, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 162, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 161, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 162, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 161, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 163, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 163, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 163, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 163, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 163, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 163, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 163, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 163, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 163, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 163, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 163, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 163, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 164, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 164, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 164, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 164, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 164, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 164, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 164, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 164, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 164, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 164, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 164, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 164, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 165, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 165, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 165, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 165, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 165, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 165, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 165, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 165, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 165, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 165, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 165, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 165, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 166, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 166, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 166, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 166, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 166, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 166, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 166, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 166, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 166, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 166, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 166, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 166, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 138, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 163, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 164, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 132, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 131, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 130, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 117, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 116, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 126, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 125, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 122, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 129, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 100, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 98, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 165, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 166, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 135, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 134, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 133, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 137, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 136, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 127, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 152, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 138, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 163, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 164, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 132, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 131, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 130, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 117, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 116, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 126, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 125, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 122, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 129, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 100, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 98, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 165, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 166, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 135, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 134, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 133, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 137, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 136, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 127, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 152, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (46, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (47, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (47, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (47, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (47, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (47, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (47, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (47, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (47, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (47, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (47, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 138, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 163, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 164, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 132, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 131, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 130, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 117, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 116, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 126, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 125, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 122, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 129, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 100, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 98, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 165, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 166, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 135, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 134, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 133, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 137, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 136, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 127, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 152, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 138, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 163, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 164, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 132, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 131, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 130, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 117, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 116, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 126, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 125, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 122, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 129, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 100, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 98, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 165, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 166, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 135, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 134, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 133, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 137, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 136, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 127, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 152, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 138, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 38, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 39, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 40, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 41, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 163, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 164, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 132, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 131, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 130, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 117, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 116, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 115, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 126, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 64, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 110, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 125, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 124, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 123, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 109, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 52, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 122, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 129, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 100, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 98, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 99, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 63, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 108, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 107, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 106, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 58, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 59, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 60, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 19, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 20, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 21, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 22, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 23, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 24, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 25, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 26, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 27, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 28, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 29, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 165, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 166, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 135, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 134, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 133, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 137, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 136, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 127, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 152, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 138, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 163, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 164, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 132, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 131, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 130, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 117, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 116, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 126, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 125, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 122, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 129, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 100, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 98, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 165, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 166, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 135, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 134, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 133, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 137, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 136, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 127, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 152, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 138, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 163, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 164, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 132, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 131, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 130, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 117, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 116, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 126, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 125, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 122, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 129, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 100, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 98, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 165, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 166, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 135, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 134, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 133, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 137, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 136, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 127, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 152, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 138, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 38, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 39, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 40, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 41, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 163, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 164, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 132, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 131, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 130, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 117, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 116, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 115, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 126, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 64, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 110, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 125, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 124, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 123, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 109, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 52, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 122, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 129, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 100, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 98, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 99, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 63, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 108, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 107, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 106, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 58, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 59, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 60, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 19, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 20, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 21, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 22, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 23, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 24, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 25, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 26, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 27, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 28, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 29, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 165, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 166, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 135, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 134, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 133, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 137, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 136, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 127, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 152, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 138, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 163, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 164, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 132, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 131, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 130, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 117, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 116, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 126, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 125, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 122, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 129, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 100, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 98, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 165, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 166, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 135, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 134, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 133, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 137, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 136, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 127, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 152, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 168, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 167, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 168, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 167, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 168, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 167, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 168, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 167, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 168, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 167, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 168, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 167, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 168, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 167, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 168, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 167, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 168, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 167, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 168, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 167, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 168, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 167, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 168, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 167, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 168, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 167, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 168, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 167, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 168, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 167, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 168, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 167, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 168, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 167, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 168, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 167, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 168, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 167, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 168, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 167, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 168, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 167, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 169, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 170, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 169, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 170, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 169, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 170, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 169, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 170, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 169, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 170, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 169, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 170, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 169, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 170, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 169, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 170, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 169, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 170, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 169, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 170, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 169, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 170, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 169, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 170, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 169, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 170, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 169, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 170, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 169, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 170, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 169, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 170, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 169, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 170, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 169, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 170, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 169, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 170, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 169, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 170, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 169, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 170, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 172, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 172, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 172, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 172, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 172, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 172, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 172, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 172, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 172, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 172, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 172, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 172, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 172, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 172, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 172, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 172, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 172, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 172, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 172, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 172, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 172, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 173, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 173, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 173, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 173, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 173, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 173, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 173, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 173, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 173, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 173, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 173, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 173, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 173, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 173, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 173, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 173, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 173, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 173, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 173, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 173, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 173, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 174, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 175, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 174, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 175, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 174, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 175, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 174, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 175, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 174, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 175, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 174, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 175, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 174, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 175, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 174, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 175, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 174, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 175, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 174, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 175, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 174, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 175, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 174, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 175, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 174, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 175, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 174, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 175, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 174, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 175, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 174, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 175, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 174, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 175, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 174, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 175, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 174, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 175, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 174, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 175, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 174, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 175, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 177, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 177, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 177, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 177, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 177, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 177, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 177, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 177, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 177, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 177, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 177, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 177, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 177, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 177, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 177, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 177, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 177, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 177, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 177, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 177, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 177, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 182, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 192, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 191, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 180, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 179, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 187, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 178, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 190, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 185, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 182, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 192, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 191, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 180, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 179, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 187, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 178, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 190, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 185, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 182, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 192, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 191, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 180, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 179, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 187, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 178, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 190, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 185, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 182, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 192, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 191, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 180, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 179, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 187, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 178, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 190, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 185, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 182, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 192, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 191, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 180, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 179, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 187, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 178, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 190, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 185, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 182, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 192, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 191, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 180, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 179, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 187, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 178, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 190, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 185, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 182, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 192, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 191, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 180, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 179, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 187, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 178, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 190, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 185, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 182, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 192, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 191, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 180, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 179, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 187, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 178, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 190, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 185, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 182, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 192, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 191, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 180, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 179, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 187, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 178, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 190, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 185, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 182, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 192, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 191, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 180, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 179, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 187, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 178, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 190, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 185, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 182, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 192, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 191, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 180, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 179, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 187, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 178, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 190, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 185, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 182, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 192, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 191, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 180, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 179, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 187, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 178, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 190, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 185, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 182, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 192, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 191, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 180, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 179, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 187, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 178, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 190, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 185, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 182, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 192, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 191, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 180, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 179, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 187, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 178, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 190, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 185, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 182, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 192, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 191, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 180, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 179, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 187, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 178, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 190, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 185, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 182, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 192, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 191, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 180, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 179, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 187, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 178, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 190, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 185, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 182, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 192, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 191, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 180, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 179, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 187, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 178, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 190, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 185, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 182, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 192, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 191, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 180, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 179, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 187, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 178, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 190, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 185, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 182, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 192, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 191, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 180, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 179, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 187, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 178, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 190, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 185, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 182, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 192, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 191, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 180, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 179, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 187, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 178, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 190, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 185, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 182, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 192, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 191, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 180, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 179, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 187, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 178, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 190, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 185, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 193, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 194, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 193, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 194, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 193, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 194, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 193, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 194, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 193, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 194, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 193, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 194, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 193, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 194, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 193, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 194, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 193, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 194, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 193, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 194, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 193, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 194, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 193, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 194, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 193, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 194, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 193, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 194, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 193, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 194, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 193, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 194, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 193, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 194, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 193, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 194, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 193, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 194, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 193, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 194, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 193, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 194, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 196, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 196, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 196, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 196, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 196, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 196, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 196, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 196, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 196, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 196, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 196, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 196, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 196, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 196, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 196, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 196, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 196, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 196, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 196, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 196, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 196, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 121, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 121, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 197, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 197, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 197, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 197, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 197, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 197, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 197, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 197, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 197, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 197, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 197, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 197, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 197, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 197, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 197, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 197, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 197, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 197, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 197, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 197, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 197, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 198, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 198, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 198, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 198, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 198, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 198, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 198, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 198, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 198, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 198, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 198, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 198, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 198, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 198, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 198, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 198, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 198, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 198, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 198, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 198, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 198, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 199, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 199, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 199, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 199, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 199, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 199, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 199, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 199, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 199, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 199, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 199, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 199, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 199, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 199, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 199, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 199, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 199, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 199, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 199, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 199, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 199, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 200, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 200, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (48, 200, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (49, 200, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (50, 200, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (51, 200, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (52, 200, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (53, 200, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (54, 200, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (16, 200, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 200, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (5, 200, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (20, 200, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 200, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 200, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (13, 200, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (8, 200, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 200, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 200, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 200, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 200, 3)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_contact_department`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_contact_department` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(250) NOT NULL,
  `alias` varchar(250) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `others` text NOT NULL,
  `cats` text NOT NULL,
  `admins` text NOT NULL,
  `act` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `weight` smallint(5) NOT NULL,
  `is_default` tinyint(1) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `full_name` (`full_name`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_contact_department` (`id`, `full_name`, `alias`, `image`, `phone`, `fax`, `email`, `address`, `note`, `others`, `cats`, `admins`, `act`, `weight`, `is_default`) VALUES (1, 'Phòng Chăm sóc khách hàng', 'Cham-soc-khach-hang', '', '(08) 38.000.000[+84838000000]', '08 38.000.001', 'customer@mysite.com', '', 'Bộ phận tiếp nhận và giải quyết các yêu cầu, đề nghị, ý kiến liên quan đến hoạt động chính của doanh nghiệp', '{\"viber\":\"myViber\",\"skype\":\"mySkype\",\"yahoo\":\"myYahoo\"}', 'Tư vấn|Khiếu nại, phản ánh|Đề nghị hợp tác', '1/1/1/0;', 1, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_contact_department` (`id`, `full_name`, `alias`, `image`, `phone`, `fax`, `email`, `address`, `note`, `others`, `cats`, `admins`, `act`, `weight`, `is_default`) VALUES (2, 'Phòng Kỹ thuật', 'Ky-thuat', '', '(08) 38.000.002[+84838000002]', '08 38.000.003', 'technical@mysite.com', '', 'Bộ phận tiếp nhận và giải quyết các câu hỏi liên quan đến kỹ thuật', '{\"viber\":\"myViber2\",\"skype\":\"mySkype2\",\"yahoo\":\"myYahoo2\"}', 'Thông báo lỗi|Góp ý cải tiến', '1/1/1/0;', 1, 2, 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_contact_reply`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_contact_reply` (
  `rid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `id` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `reply_content` text DEFAULT NULL,
  `reply_time` int(11) unsigned NOT NULL DEFAULT 0,
  `reply_aid` mediumint(8) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`rid`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_contact_send`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_contact_send` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cid` smallint(5) unsigned NOT NULL DEFAULT 0,
  `cat` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `send_time` int(11) unsigned NOT NULL DEFAULT 0,
  `sender_id` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `sender_name` varchar(100) NOT NULL,
  `sender_address` varchar(250) NOT NULL,
  `sender_email` varchar(100) NOT NULL,
  `sender_phone` varchar(20) DEFAULT '',
  `sender_ip` varchar(15) NOT NULL,
  `is_read` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `is_reply` tinyint(1) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `sender_name` (`sender_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_contact_supporter`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_contact_supporter` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `departmentid` smallint(5) unsigned NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `others` text NOT NULL,
  `act` tinyint(1) unsigned NOT NULL DEFAULT 1,
  `weight` smallint(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_customer`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_customer` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL COMMENT 'Tên',
  `last_name` varchar(100) NOT NULL COMMENT 'Họ và tên đệm',
  `main_phone` varchar(20) NOT NULL COMMENT 'Số điện thoại',
  `other_phone` varchar(255) NOT NULL COMMENT 'Số điện thoại khác',
  `main_email` varchar(100) NOT NULL COMMENT 'Email',
  `other_email` varchar(255) NOT NULL COMMENT 'Email khác',
  `birthday` int(11) unsigned NOT NULL DEFAULT 0,
  `facebook` varchar(255) NOT NULL,
  `skype` varchar(50) NOT NULL,
  `zalo` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `gender` tinyint(1) unsigned NOT NULL DEFAULT 2 COMMENT 'Giới tính',
  `address` varchar(255) NOT NULL COMMENT 'Địa chỉ',
  `unit` varchar(255) NOT NULL COMMENT 'Đơn vị công tác',
  `care_staff` mediumint(8) unsigned NOT NULL COMMENT 'Nhân viên chăm sóc KH',
  `image` varchar(255) NOT NULL,
  `addtime` int(11) unsigned NOT NULL COMMENT 'Thời gian thêm',
  `edittime` int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'Thời gian sửa',
  `userid_link` mediumint(8) unsigned NOT NULL DEFAULT 0 COMMENT 'Tài khoản liên kết',
  `userid` mediumint(8) unsigned NOT NULL COMMENT 'Người thêm',
  `note` text NOT NULL COMMENT 'Ghi chú',
  `is_contacts` tinyint(1) NOT NULL COMMENT 'Loại khách hàng',
  `type_id` smallint(4) unsigned NOT NULL DEFAULT 0,
  `tag_id` varchar(100) NOT NULL,
  `share_acc` varchar(100) NOT NULL COMMENT 'share với tài khoản',
  `share_groups` smallint(4) unsigned NOT NULL COMMENT 'share với group',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=26  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_customer_field`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_customer_field` (
  `fid` mediumint(8) NOT NULL AUTO_INCREMENT,
  `field` varchar(25) NOT NULL,
  `weight` int(10) unsigned NOT NULL DEFAULT 1,
  `field_type` enum('number','date','textbox','textarea','editor','select','radio','checkbox','multiselect') NOT NULL DEFAULT 'textbox',
  `field_choices` text NOT NULL,
  `sql_choices` text NOT NULL,
  `match_type` enum('none','alphanumeric','email','url','regex','callback') NOT NULL DEFAULT 'none',
  `match_regex` varchar(250) NOT NULL DEFAULT '',
  `func_callback` varchar(75) NOT NULL DEFAULT '',
  `min_length` int(11) NOT NULL DEFAULT 0,
  `max_length` bigint(20) unsigned NOT NULL DEFAULT 0,
  `required` tinyint(3) unsigned NOT NULL DEFAULT 0,
  `show_profile` tinyint(4) NOT NULL DEFAULT 1,
  `class` varchar(50) NOT NULL DEFAULT '',
  `language` text NOT NULL,
  `default_value` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`fid`),
  UNIQUE KEY `field` (`field`)
) ENGINE=MyISAM  AUTO_INCREMENT=4  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_customer_info`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_customer_info` (
  `rows_id` mediumint(8) unsigned NOT NULL,
  `test` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`rows_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_customer_share_acc`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_customer_share_acc` (
  `userid` smallint(4) NOT NULL,
  `customerid` mediumint(8) unsigned NOT NULL,
  `permisson` tinyint(1) unsigned NOT NULL DEFAULT 1 COMMENT 'Quyền',
  UNIQUE KEY `tid` (`userid`,`customerid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_customer_tags`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_customer_tags` (
  `tid` smallint(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT 'Tiêu đề',
  `note` text NOT NULL COMMENT 'Ghi chú',
  `weight` smallint(4) unsigned NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM  AUTO_INCREMENT=5  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_customer_tags_customer`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_customer_tags_customer` (
  `tid` smallint(4) NOT NULL,
  `customerid` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `tid` (`tid`,`customerid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_customer_types`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_customer_types` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT 'Loại khách hàng',
  `note` text NOT NULL COMMENT 'Ghi chú',
  `content` text NOT NULL,
  `title_mail` varchar(255) NOT NULL COMMENT 'tiêu đề mail',
  `birthday_title` varchar(255) NOT NULL,
  `birthday_content` text NOT NULL,
  `weight` smallint(4) unsigned NOT NULL,
  `active` tinyint(1) unsigned NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_customer_units`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_customer_units` (
  `tid` smallint(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT 'Tiêu đề',
  `note` text NOT NULL COMMENT 'Ghi chú',
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM  AUTO_INCREMENT=5  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_customer_units_customer`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_customer_units_customer` (
  `tid` smallint(4) NOT NULL,
  `customerid` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `tid` (`tid`,`customerid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_email`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_email` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `useradd` mediumint(8) NOT NULL,
  `cc_id` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `files` varchar(255) NOT NULL,
  `addtime` int(11) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=32  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_email_sendto`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_email_sendto` (
  `email_id` int(11) unsigned NOT NULL,
  `customer_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `email_id` (`email_id`,`customer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_email_template`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_email_template` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `weight` smallint(4) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_freecontent_blocks`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_freecontent_blocks` (
  `bid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM  AUTO_INCREMENT=2  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_freecontent_blocks` (`bid`, `title`, `description`) VALUES (1, 'Sản phẩm', 'Sản phẩm của công ty cổ phần phát triển nguồn mở Việt Nam - VINADES.,JSC')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_freecontent_rows`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_freecontent_rows` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `bid` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `link` varchar(255) NOT NULL DEFAULT '',
  `target` varchar(10) NOT NULL DEFAULT '' COMMENT '_blank|_self|_parent|_top',
  `image` varchar(255) NOT NULL DEFAULT '',
  `start_time` int(11) NOT NULL DEFAULT 0,
  `end_time` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) unsigned NOT NULL DEFAULT 0 COMMENT '0: In-Active, 1: Active, 2: Expired',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=6  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_freecontent_rows` (`id`, `bid`, `title`, `description`, `link`, `target`, `image`, `start_time`, `end_time`, `status`) VALUES (1, 1, 'Hệ quản trị nội dung NukeViet', '<ul>
	<li>Giải thưởng Nhân tài đất Việt 2011, 10.000+ website đang sử dụng</li>
	<li>Được Bộ GD&amp;ĐT khuyến khích sử dụng trong các cơ sở giáo dục</li>
	<li>Bộ TT&amp;TT quy định ưu tiên sử dụng trong cơ quan nhà nước</li>
</ul>', 'http://vinades.vn/vi/san-pham/nukeviet/', '_blank', 'cms.jpg', 1557363838, 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_freecontent_rows` (`id`, `bid`, `title`, `description`, `link`, `target`, `image`, `start_time`, `end_time`, `status`) VALUES (2, 1, 'Cổng thông tin doanh nghiệp', '<ul>
	<li>Tích hợp bán hàng trực tuyến</li>
	<li>Tích hợp các nghiệp vụ quản lý (quản lý khách hàng, quản lý nhân sự, quản lý tài liệu)</li>
</ul>', 'http://vinades.vn/vi/san-pham/Cong-thong-tin-doanh-nghiep-NukeViet-portal/', '_blank', 'portal.jpg', 1557363838, 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_freecontent_rows` (`id`, `bid`, `title`, `description`, `link`, `target`, `image`, `start_time`, `end_time`, `status`) VALUES (3, 1, 'Cổng thông tin Phòng giáo dục, Sở giáo dục', '<ul>
	<li>Tích hợp chung website hàng trăm trường</li>
	<li>Tích hợp các ứng dụng trực tuyến (Tra điểm SMS, Tra cứu văn bằng, Học bạ điện tử ...)</li>
</ul>', 'http://vinades.vn/vi/san-pham/Cong-thong-tin-giao-duc-NukeViet-Edugate/', '_blank', 'edugate.jpg', 1557363838, 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_freecontent_rows` (`id`, `bid`, `title`, `description`, `link`, `target`, `image`, `start_time`, `end_time`, `status`) VALUES (4, 1, 'Tòa soạn báo điện tử chuyên nghiệp', '<ul>
	<li>Bảo mật đa tầng, phân quyền linh hoạt</li>
	<li>Hệ thống bóc tin tự động, đăng bài tự động, cùng nhiều chức năng tiên tiến khác...</li>
</ul>', 'http://vinades.vn/vi/san-pham/Toa-soan-bao-dien-tu/', '_blank', 'toa-soan-dien-tu.jpg', 1557363838, 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_freecontent_rows` (`id`, `bid`, `title`, `description`, `link`, `target`, `image`, `start_time`, `end_time`, `status`) VALUES (5, 1, 'Giải pháp bán hàng trực tuyến', '<ul><li>Tích hợp các tính năng cơ bản bán hàng trực tuyến</li><li>Tích hợp với các cổng thanh toán, ví điện tử trên toàn quốc</li></ul>', 'http://vinades.vn', '_blank', 'shop.jpg', 1557363838, 0, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_invoice`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_invoice` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `code` varchar(6) NOT NULL DEFAULT '',
  `customerid` mediumint(8) unsigned NOT NULL,
  `createtime` int(11) unsigned NOT NULL DEFAULT 0,
  `duetime` int(11) unsigned NOT NULL DEFAULT 0,
  `paytime` int(11) unsigned NOT NULL DEFAULT 0,
  `cycle` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `status` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `workforceid` smallint(4) unsigned NOT NULL,
  `presenterid` mediumint(8) unsigned NOT NULL DEFAULT 0 COMMENT 'Người giới thiệu',
  `performerid` mediumint(8) unsigned NOT NULL DEFAULT 0 COMMENT 'Người thực hiện',
  `terms` text NOT NULL,
  `description` text NOT NULL,
  `grand_total` double unsigned NOT NULL DEFAULT 0,
  `discount_percent` tinyint(2) unsigned NOT NULL DEFAULT 0,
  `discount_value` double unsigned NOT NULL DEFAULT 0,
  `sended` smallint(4) unsigned NOT NULL DEFAULT 0 COMMENT 'Số lượt gửi thông tin hóa đơn',
  `addtime` int(11) unsigned NOT NULL,
  `updatetime` int(11) unsigned NOT NULL DEFAULT 0,
  `useradd` mediumint(8) unsigned NOT NULL,
  `reminder` tinyint(1) unsigned NOT NULL DEFAULT 1,
  `auto_create` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `score` smallint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=16  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_invoice_detail`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_invoice_detail` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `idinvoice` mediumint(8) unsigned NOT NULL,
  `idcustomer` mediumint(8) unsigned NOT NULL,
  `module` varchar(50) NOT NULL,
  `itemid` mediumint(8) NOT NULL,
  `unit_price` double NOT NULL DEFAULT 0,
  `quantity` int(11) unsigned NOT NULL COMMENT 'Số lượng',
  `price` double unsigned NOT NULL,
  `vat` smallint(4) unsigned NOT NULL DEFAULT 0,
  `total` double unsigned NOT NULL,
  `note` text NOT NULL,
  `weight` mediumint(8) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idinvoice` (`idinvoice`,`idcustomer`,`module`,`itemid`)
) ENGINE=MyISAM  AUTO_INCREMENT=15  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_invoice_econtent`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_invoice_econtent` (
  `action` varchar(100) NOT NULL,
  `econtent` text NOT NULL,
  PRIMARY KEY (`action`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_invoice_econtent` (`action`, `econtent`) VALUES ('newinvoice', '<div style=\"line-height: 27px\">Kính gửi <strong>&#91;FULLNAME&#93;!</strong><br  />
Cảm ơn quý khách đã tin tưởng sử dụng dịch vụ của <strong>TDFOSS.,LTD</strong> trong thời gian qua.<br  />
<br  />
Hôm nay, chúng tôi gửi email này để thông báo về việc khởi tạo hóa đơn&nbsp;mới cho các dịch vụ của chúng tôi mà quý khách đang (hoặc bắt đầu) sử dụng. Quý khách vui lòng thanh toán trong vòng 08 ngày kể từ ngày nhận được thông báo (theo thông tin chi tiết bên duới) để không làm dán đoạn dịch vụ. (Chúng tôi gửi lời xin lỗi đến quý khách nếu nhận được email này trong khi đã thanh toán).<br  />
<br  />
<strong>THÔNG TIN HÓA ĐƠN</strong>
<ul>
	<li><strong>Mã:</strong> #&#91;CODE&#93;</li>
	<li><strong>Ngày tạo:</strong> &#91;CREATETIME&#93;</li>
	<li><strong>Ngày hết hạn:</strong> &#91;DUETIME&#93;</li>
	<li><strong>Trạng thái thanh toán:</strong> &#91;STATUS&#93;</li>
</ul>
<strong>CHI TIẾT HÓA ĐƠN</strong><br  />
&#91;TABLE&#93;
<h3><strong>LỊCH SỬ GIAO DỊCH</strong><br  />
<br  />
&#91;TABLE_TRANSACTION&#93;<br  />
<br  />
<strong>HƯỚNG DẪN THANH TOÁN</strong></h3>

<ul>
	<li>Vui lòng xem tại&nbsp;<a href=\"https://tdfoss.vn/huong-dan-thanh-toan.html\">https://tdfoss.vn/huong-dan-thanh-toan.html</a></li>
	<li>Nội dung thanh toán (nếu có) ghi rõ Thanh toan hoa don #&#91;CODE&#93;</li>
</ul>
Mọi yêu cầu, báo lỗi về sản phẩm, dịch vụ vui lòng gửi về email <a href=\"mailto:support@tdfoss.vn\">support@tdfoss.vn</a> để được hỗ trợ.<br  />
Xin chân thành cảm ơn!</div>')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_invoice_econtent` (`action`, `econtent`) VALUES ('newconfirm', 'Kính gửi <strong>&#91;FULLNAME&#93;!</strong><br  />
<br  />
Chúng tôi xin xác nhận <strong>đã nhận được thanh toán</strong> của bạn cho hóa đơn có mã số <strong>#&#91;CODE&#93; - &#91;TITLE&#93;</strong> tại <strong>TDFOSS.,LTD</strong><br  />
<br  />
<strong>THÔNG TIN HÓA ĐƠN</strong>
<ul>
	<li><strong>Ngày tạo:</strong> &#91;CREATETIME&#93;</li>
	<li><strong>Ngày hết hạn thanh toán:</strong> &#91;DUETIME&#93;</li>
	<li><strong>Trạng thái thanh toán:</strong> &#91;STATUS&#93;</li>
</ul>
<strong>CHI TIẾT HÓA ĐƠN</strong><br  />
&#91;TABLE&#93;<br  />
<br  />
Một lần nữa xin cảm ơn!<br  />
&nbsp;')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_invoice_econtent` (`action`, `econtent`) VALUES ('contentpdf', '<table>
	<tbody>
		<tr>
			<td width=\"110\"><img alt=\"logo\" height=\"90\" src=\"/uploads/tdfoss-logo-small_256_256.png\" width=\"90\" /></td>
			<td><strong>CÔNG TY TNHH PHÁT TRIỂN VÀ DỊCH VỤ NGUỒN MỞ THUẬN ĐỨC</strong><br  />
			161 Tôn Thất Thuyết, Phường 5, TP Đông Hà, Tỉnh Quảng Trị<br  />
			<strong>Điện thoại:</strong> 02336 270 610 - 0905 908 430<br  />
			<strong>Email:</strong> contact@tdfoss.vn&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>Website:</strong> www.tdfoss.vn</td>
		</tr>
	</tbody>
</table>

<hr  />
<table>
	<tbody>
		<tr>
			<td width=\"50%\"><strong>THÔNG TIN HÓA ĐƠN</strong></td>
			<td width=\"50%\"><strong>THÔNG TIN KHÁCH HÀNG</strong></td>
		</tr>
		<tr>
			<td><strong>Mã hóa đơn: #&#91;CODE&#93;</strong><br  />
			<strong>Ngày tạo:</strong> &#91;CREATETIME&#93;<br  />
			<strong>Ngày hết hạn:</strong> &#91;DUETIME&#93;<br  />
			<strong>Trạng thái:</strong> &#91;STATUS&#93;</td>
			<td><strong>Họ tên:&nbsp;</strong>&#91;FULLNAME&#93;&nbsp;<br  />
			<strong>Điện thoại:</strong> &#91;CUSTOMER_PHONE&#93;<br  />
			<strong>Địa chỉ:</strong> &#91;CUSTOMER_ADDRESS&#93;<br  />
			&nbsp;</td>
		</tr>
	</tbody>
</table>

<h3><strong>CHI TIẾT HÓA ĐƠN</strong></h3>
&#91;TABLE&#93;

<h3><strong>LỊCH SỬ GIAO DỊCH</strong></h3>
&#91;TABLE_TRANSACTION&#93;

<h3><strong>HƯỚNG DẪN THANH TOÁN</strong></h3>

<ul>
	<li>Vui lòng xem tại&nbsp;<a href=\"https://tdfoss.vn/huong-dan-thanh-toan.html\">https://tdfoss.vn/huong-dan-thanh-toan.html</a></li>
	<li>Nội dung thanh toán (nếu có) ghi rõ <strong>Thanh toan hoa don #&#91;CODE&#93;</strong></li>
</ul>')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_invoice_score`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_invoice_score` (
  `customerid` mediumint(8) unsigned NOT NULL,
  `score` smallint(4) NOT NULL DEFAULT 0,
  UNIQUE KEY `customerid` (`customerid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_invoice_score` (`customerid`, `score`) VALUES (19, 3)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_invoice_transaction`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_invoice_transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceid` mediumint(8) unsigned NOT NULL,
  `transaction_time` int(11) unsigned NOT NULL,
  `transaction_status` int(11) NOT NULL,
  `payment` varchar(100) NOT NULL DEFAULT '',
  `payment_amount` double NOT NULL DEFAULT 0,
  `payment_data` text NOT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=8  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_menu`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_menu` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu` (`id`, `title`) VALUES (1, 'Menu chính')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_menu_rows`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_menu_rows` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `parentid` mediumint(5) unsigned NOT NULL,
  `mid` smallint(5) NOT NULL DEFAULT 0,
  `title` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `icon` varchar(255) DEFAULT '',
  `image` varchar(255) DEFAULT '',
  `note` varchar(255) DEFAULT '',
  `weight` int(11) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT 0,
  `lev` int(11) NOT NULL DEFAULT 0,
  `subitem` text DEFAULT NULL,
  `groups_view` varchar(255) DEFAULT '',
  `module_name` varchar(255) DEFAULT '',
  `op` varchar(255) DEFAULT '',
  `target` tinyint(4) DEFAULT 0,
  `css` varchar(255) DEFAULT '',
  `active_type` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `status` tinyint(1) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `parentid` (`parentid`,`mid`)
) ENGINE=MyISAM  AUTO_INCREMENT=73  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (29, 0, 1, 'Dự án', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=projects', '', '', '', 3, 12, 0, '34', '14', '0', '', 1, 'fa fa-briefcase', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (26, 46, 1, 'Nhân sự', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=workforce', '', '', '', 2, 3, 1, '', '14', 'crm', 'workforce', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (25, 0, 1, 'Khách hàng', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=customer', '', '', '', 2, 7, 0, '33,42,43,67', '10,11,12', '0', '', 1, 'fa fa-user-circle', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (33, 25, 1, 'Thêm khách hàng', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=customer&op=content', '', '', '', 2, 9, 1, '', '6', 'crm', 'manage_customer_form', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (31, 0, 1, 'Báo cáo công việc', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=workreport', '', '', '', 6, 20, 0, '', '14', 'workreport', '', 1, 'fa fa-line-chart', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (46, 0, 1, 'Văn phòng', '#', '', '', '', 1, 1, 0, '26,51,47,52,68', '14', '0', '', 1, 'fa fa-briefcase', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (34, 29, 1, 'Thêm dự án', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=projects&op=content', '', '', '', 1, 13, 1, '', '6', 'projects', 'main', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (44, 0, 1, 'Hóa đơn', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=invoice', '', '', '', 4, 14, 0, '45,71,72', '4', 'invoice', '', 1, 'fa fa-file-text-o', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (51, 46, 1, 'Dịch vụ', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=services', '', '', '', 5, 6, 1, '', '6', 'services', '', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (40, 0, 1, 'Quản lý Email', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=email', '', '', '', 5, 18, 0, '41', '14', 'email', '', 1, 'fa fa-envelope-o', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (41, 40, 1, 'Gửi Email mới', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=email&op=content', '', '', '', 1, 19, 1, '', '6', 'email', 'content', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (42, 25, 1, 'Thêm liên hệ', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=customer&op=content&is_contact=1', '', '', '', 4, 11, 1, '', '6', 'crm', 'manage_customer_form', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (47, 46, 1, 'Sản phẩm', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=products', '', '', '', 4, 5, 1, '', '10,11', 'products', '', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (43, 25, 1, 'Danh sách liên hệ', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=customer&is_contact=1', '', '', '', 3, 10, 1, '', '6', 'crm', 'manage_customer', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (45, 44, 1, 'Tạo hóa đơn', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=invoice&op=content', '', '', '', 1, 15, 1, '', '10,11,16', 'invoice', '', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (52, 46, 1, 'Phòng ban', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=workforce&op=part', '', '', '', 1, 2, 1, '', '6', 'workforce', 'salary', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (67, 25, 1, 'Danh sách khách hàng', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=customer', '', '', '', 1, 8, 1, '', '6', 'customer', '', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (68, 46, 1, 'Quản lý thu chi', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=money', '', '', '', 3, 4, 1, '', '10,16', 'money', '', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (71, 44, 1, 'Báo cáo', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=invoice&op=statistic', '', '', '', 3, 17, 1, '', '10', 'invoice', '', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (72, 44, 1, 'Điểm tích lũy', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=invoice&op=score', '', '', '', 2, 16, 1, '', '10,11', 'invoice', '', 1, '', 0, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_modfuncs`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_modfuncs` (
  `func_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `func_name` varchar(55) NOT NULL,
  `alias` varchar(55) NOT NULL DEFAULT '',
  `func_custom_name` varchar(255) NOT NULL,
  `func_site_title` varchar(255) NOT NULL DEFAULT '',
  `in_module` varchar(50) NOT NULL,
  `show_func` tinyint(4) NOT NULL DEFAULT 0,
  `in_submenu` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `subweight` smallint(2) unsigned NOT NULL DEFAULT 1,
  `setting` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`func_id`),
  UNIQUE KEY `func_name` (`func_name`,`in_module`),
  UNIQUE KEY `alias` (`alias`,`in_module`)
) ENGINE=MyISAM  AUTO_INCREMENT=201  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (100, 'main', 'main', 'Main', '', 'projects', 1, 1, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (99, 'detail', 'detail', 'Detail', '', 'projects', 1, 0, 3, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (98, 'content', 'content', 'Content', '', 'projects', 1, 0, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (19, 'main', 'main', 'Main', '', 'users', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (20, 'login', 'login', 'Đăng nhập', '', 'users', 1, 1, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (21, 'register', 'register', 'Đăng ký', '', 'users', 1, 1, 3, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (22, 'lostpass', 'lostpass', 'Khôi phục mật khẩu', '', 'users', 1, 1, 4, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (23, 'active', 'active', 'Kích hoạt tài khoản', '', 'users', 1, 0, 5, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (24, 'lostactivelink', 'lostactivelink', 'Lostactivelink', '', 'users', 1, 0, 6, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (25, 'editinfo', 'editinfo', 'Thiết lập tài khoản', '', 'users', 1, 1, 7, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (26, 'memberlist', 'memberlist', 'Danh sách thành viên', '', 'users', 1, 1, 8, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (27, 'avatar', 'avatar', 'Avatar', '', 'users', 1, 0, 9, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (28, 'logout', 'logout', 'Thoát', '', 'users', 1, 1, 10, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (29, 'groups', 'groups', 'Quản lý nhóm', '', 'users', 1, 0, 11, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (30, 'oauth', 'oauth', 'Oauth', '', 'users', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (38, 'main', 'main', 'Main', '', 'banners', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (39, 'addads', 'addads', 'Addads', '', 'banners', 1, 0, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (40, 'clientinfo', 'clientinfo', 'Clientinfo', '', 'banners', 1, 0, 3, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (41, 'stats', 'stats', 'Stats', '', 'banners', 1, 0, 4, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (42, 'cledit', 'cledit', 'Cledit', '', 'banners', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (43, 'click', 'click', 'Click', '', 'banners', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (44, 'clinfo', 'clinfo', 'Clinfo', '', 'banners', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (45, 'logininfo', 'logininfo', 'Logininfo', '', 'banners', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (46, 'viewmap', 'viewmap', 'Viewmap', '', 'banners', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (47, 'main', 'main', 'main', '', 'comment', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (48, 'post', 'post', 'post', '', 'comment', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (49, 'like', 'like', 'Like', '', 'comment', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (50, 'delete', 'delete', 'Delete', '', 'comment', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (51, 'down', 'down', 'Down', '', 'comment', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (52, 'main', 'main', 'Main', '', 'page', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (53, 'sitemap', 'sitemap', 'Sitemap', '', 'page', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (54, 'rss', 'rss', 'Rss', '', 'page', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (58, 'main', 'main', 'Main', '', 'two-step-verification', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (59, 'confirm', 'confirm', 'Confirm', '', 'two-step-verification', 1, 0, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (60, 'setup', 'setup', 'Setup', '', 'two-step-verification', 1, 0, 3, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (63, 'main', 'main', 'Main', '', 'seek', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (64, 'main', 'main', 'Main', '', 'feeds', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (106, 'content', 'content', 'Content', '', 'services', 1, 0, 3, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (107, 'detail', 'detail', 'Detail', '', 'services', 1, 0, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (108, 'main', 'main', 'Main', '', 'services', 1, 1, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (109, 'main', 'main', 'Main', '', 'notification', 1, 1, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (110, 'main', 'main', 'Main', '', 'home', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (115, 'content', 'content', 'Content', '', 'email', 1, 1, 3, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (116, 'detail', 'detail', 'Detail', '', 'email', 1, 1, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (117, 'main', 'main', 'Main', '', 'email', 1, 1, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (118, 'rss', 'rss', 'Rss', '', 'email', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (119, 'search', 'search', 'Search', '', 'email', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (120, 'sitemap', 'sitemap', 'Sitemap', '', 'email', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (121, 'detail', 'detail', 'Detail', '', 'products', 1, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (122, 'main', 'main', 'Main', '', 'products', 1, 1, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (123, 'content', 'content', 'Content', '', 'invoice', 1, 0, 7, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (124, 'detail', 'detail', 'Detail', '', 'invoice', 1, 0, 6, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (125, 'main', 'main', 'Main', '', 'invoice', 1, 0, 5, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (126, 'download', 'download', 'Download', '', 'email', 1, 0, 4, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (127, 'main', 'main', 'Main', '', 'workreport', 1, 1, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (129, 'content', 'content', 'Content', '', 'products', 1, 1, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (130, 'content', 'content', 'Content', '', 'customer', 1, 0, 5, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (131, 'detail', 'detail', 'Detail', '', 'customer', 1, 0, 4, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (132, 'main', 'main', 'Main', '', 'customer', 1, 1, 3, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (133, 'content', 'content', 'Content', '', 'workforce', 1, 0, 5, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (134, 'detail', 'detail', 'Detail', '', 'workforce', 1, 0, 4, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (135, 'main', 'main', 'Main', '', 'workforce', 1, 1, 3, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (136, 'salary-content', 'salary-content', 'Salary-content', '', 'workforce', 1, 0, 7, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (137, 'salary', 'salary', 'Salary', '', 'workforce', 1, 1, 6, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (138, 'main', 'main', 'Main', '', 'api', 1, 1, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (153, 'types', 'types', 'Types', '', 'projects', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (152, 'admin', 'admin', 'Admin', '', 'workreport', 1, 1, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (163, 'export', 'export', 'Export', '', 'customer', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (164, 'import', 'import', 'Import', '', 'customer', 1, 0, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (165, 'history-salary', 'history-salary', 'History-salary', '', 'workforce', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (166, 'part', 'part', 'Part', '', 'workforce', 1, 0, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (167, 'content', 'content', 'Content', '', 'money', 1, 1, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (168, 'main', 'main', 'Main', '', 'money', 1, 1, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (173, 'main', 'main', 'Main', '', 'calendar', 1, 1, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (197, 'statistic', 'statistic', 'Statistic', '', 'invoice', 1, 0, 4, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (198, 'invoice', 'invoice', 'Invoice', '', 'invoice', 1, 0, 3, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (199, 'score-history', 'score-history', 'Score-history', '', 'invoice', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (200, 'score', 'score', 'Score', '', 'invoice', 1, 0, 2, '')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_modthemes`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_modthemes` (
  `func_id` mediumint(8) DEFAULT NULL,
  `layout` varchar(100) DEFAULT NULL,
  `theme` varchar(100) DEFAULT NULL,
  UNIQUE KEY `func_id` (`func_id`,`layout`,`theme`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (0, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (0, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (0, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (19, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (19, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (19, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (20, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (20, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (20, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (21, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (21, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (21, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (22, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (22, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (22, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (23, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (23, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (23, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (24, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (24, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (24, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (25, 'left-main', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (25, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (25, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (26, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (26, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (26, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (27, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (27, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (27, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (28, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (28, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (28, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (29, 'left-main', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (29, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (29, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (38, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (38, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (38, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (39, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (39, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (39, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (40, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (40, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (40, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (41, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (41, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (41, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (47, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (47, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (48, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (48, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (49, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (49, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (50, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (50, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (51, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (52, 'left-main', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (52, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (52, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (58, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (58, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (58, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (59, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (59, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (59, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (60, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (60, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (60, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (63, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (63, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (63, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (64, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (64, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (64, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (98, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (98, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (98, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (99, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (99, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (100, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (100, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (100, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (106, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (106, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (106, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (107, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (107, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (107, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (108, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (108, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (108, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (109, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (109, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (109, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (110, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (110, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (110, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (115, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (115, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (115, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (116, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (116, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (116, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (117, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (117, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (117, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (118, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (119, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (120, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (121, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (121, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (121, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (122, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (122, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (122, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (123, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (123, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (123, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (124, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (124, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (124, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (125, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (125, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (125, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (126, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (126, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (127, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (127, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (127, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (129, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (129, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (130, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (130, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (130, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (131, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (131, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (131, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (132, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (132, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (132, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (133, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (133, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (133, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (134, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (134, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (134, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (135, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (135, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (135, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (136, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (136, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (137, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (137, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (138, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (138, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (138, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (152, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (152, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (153, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (163, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (163, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (164, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (164, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (165, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (165, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (166, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (166, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (167, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (167, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (167, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (168, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (168, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (168, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (173, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (173, 'main', 'simple')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (173, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (197, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (198, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (199, 'main-collapse', 'dashboard')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (200, 'main-collapse', 'dashboard')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_modules`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_modules` (
  `title` varchar(50) NOT NULL,
  `module_file` varchar(50) NOT NULL DEFAULT '',
  `module_data` varchar(50) NOT NULL DEFAULT '',
  `module_upload` varchar(50) NOT NULL DEFAULT '',
  `module_theme` varchar(50) NOT NULL DEFAULT '',
  `custom_title` varchar(255) NOT NULL,
  `site_title` varchar(255) NOT NULL DEFAULT '',
  `admin_title` varchar(255) NOT NULL DEFAULT '',
  `set_time` int(11) unsigned NOT NULL DEFAULT 0,
  `main_file` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `admin_file` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `theme` varchar(100) DEFAULT '',
  `mobile` varchar(100) DEFAULT '',
  `description` varchar(255) DEFAULT '',
  `keywords` text DEFAULT NULL,
  `groups_view` varchar(255) NOT NULL,
  `weight` tinyint(3) unsigned NOT NULL DEFAULT 1,
  `act` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `admins` varchar(255) DEFAULT '',
  `rss` tinyint(4) NOT NULL DEFAULT 1,
  `sitemap` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`title`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('users', 'users', 'users', 'users', 'users', 'Thành viên', '', 'Tài khoản', 1514880771, 1, 1, '', '', '', '', '6', 3, 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('projects', 'projects', 'projects', 'projects', 'projects', 'Quản lý dự án', '', '', 1515750961, 1, 1, '', '', '', '', '6', 11, 1, '', 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('banners', 'banners', 'banners', 'banners', 'banners', 'Quảng cáo', '', '', 1514880771, 1, 1, '', '', '', '', '6', 4, 0, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('seek', 'seek', 'seek', 'seek', 'seek', 'Tìm kiếm', '', '', 1514880771, 1, 0, '', '', '', '', '6', 5, 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('menu', 'menu', 'menu', 'menu', 'menu', 'Menu Site', '', '', 1514880771, 0, 1, '', '', '', '', '6', 6, 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('feeds', 'feeds', 'feeds', 'feeds', 'feeds', 'RSS-feeds', '', 'RSS-feeds', 1514880771, 1, 1, '', '', '', '', '6', 7, 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('page', 'page', 'page', 'page', 'page', 'Page', '', '', 1514880771, 1, 1, '', '', '', '', '6', 8, 0, '', 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('comment', 'comment', 'comment', 'comment', 'comment', 'Bình luận', '', 'Quản lý bình luận', 1514880771, 0, 1, '', '', '', '', '6', 9, 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('two-step-verification', 'two-step-verification', 'two_step_verification', 'two_step_verification', 'two-step-verification', 'Xác thực hai bước', '', '', 1514880771, 1, 0, '', '', '', '', '6', 10, 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('services', 'services', 'services', 'services', 'services', 'Quản lý dịch vụ', '', '', 1516096780, 1, 1, '', '', '', '', '10,11', 12, 1, '', 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('notification', 'notification', 'notification', 'notification', 'notification', 'Thông báo', '', '', 1517809311, 1, 1, '', '', '', '', '6', 13, 1, '', 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('home', 'home', 'home', 'home', 'home', 'Home', '', '', 1517879767, 1, 0, '', '', '', '', '6', 14, 1, '', 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('email', 'email', 'email', 'email', 'email', 'Email', '', '', 1518147700, 1, 0, '', '', '', '', '6', 15, 1, '', 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('products', 'products', 'products', 'products', 'products', 'Sản phẩm', '', '', 1519719768, 1, 1, '', '', '', '', '6', 16, 1, '', 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('invoice', 'invoice', 'invoice', 'invoice', 'invoice', 'Hóa đơn', '', '', 1519719779, 1, 1, '', '', '', '', '4', 17, 1, '', 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('workreport', 'workreport', 'workreport', 'workreport', 'workreport', 'Báo cáo công việc', '', '', 1521274444, 1, 1, '', '', '', '', '6', 18, 1, '', 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('customer', 'customer', 'customer', 'customer', 'customer', 'Khách hàng', '', '', 1525527263, 1, 1, '', '', '', '', '6', 2, 1, '', 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('workforce', 'workforce', 'workforce', 'workforce', 'workforce', 'Nhân sự', '', '', 1525568597, 1, 1, '', '', '', '', '6', 19, 1, '', 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('api', 'api', 'api', 'api', 'api', 'Api', '', '', 1526207358, 1, 0, '', '', '', '', '6', 20, 1, '', 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('money', 'money', 'money', 'money', 'money', 'Quản lý thu chi', '', '', 1555580848, 1, 1, '', '', '', '', '10,16', 21, 1, '', 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('calendar', 'calendar', 'calendar', 'calendar', 'calendar', 'Lịch', '', '', 1556794273, 1, 0, '', '', '', '', '6', 1, 1, '', 0, 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_money_money`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_money_money` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) unsigned NOT NULL,
  `date` int(11) unsigned NOT NULL,
  `money` double NOT NULL,
  `note` text NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `userid` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=2  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_1`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_1` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT 0,
  `listcatid` varchar(255) NOT NULL DEFAULT '',
  `topicid` smallint(5) unsigned NOT NULL DEFAULT 0,
  `admin_id` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `author` varchar(250) DEFAULT '',
  `sourceid` mediumint(8) NOT NULL DEFAULT 0,
  `addtime` int(11) unsigned NOT NULL DEFAULT 0,
  `edittime` int(11) unsigned NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `weight` int(11) unsigned NOT NULL DEFAULT 0,
  `publtime` int(11) unsigned NOT NULL DEFAULT 0,
  `exptime` int(11) unsigned NOT NULL DEFAULT 0,
  `archive` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `hometext` text NOT NULL,
  `homeimgfile` varchar(255) DEFAULT '',
  `homeimgalt` varchar(255) DEFAULT '',
  `homeimgthumb` tinyint(4) NOT NULL DEFAULT 0,
  `inhome` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `allowed_comm` varchar(255) DEFAULT '',
  `allowed_rating` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `external_link` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `hitstotal` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `hitscm` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `total_rating` int(11) NOT NULL DEFAULT 0,
  `click_rating` int(11) NOT NULL DEFAULT 0,
  `instant_active` tinyint(1) NOT NULL DEFAULT 0,
  `instant_template` varchar(100) NOT NULL DEFAULT '',
  `instant_creatauto` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `catid` (`catid`),
  KEY `topicid` (`topicid`),
  KEY `admin_id` (`admin_id`),
  KEY `author` (`author`),
  KEY `title` (`title`),
  KEY `addtime` (`addtime`),
  KEY `edittime` (`edittime`),
  KEY `publtime` (`publtime`),
  KEY `exptime` (`exptime`),
  KEY `status` (`status`),
  KEY `instant_active` (`instant_active`),
  KEY `instant_creatauto` (`instant_creatauto`)
) ENGINE=MyISAM  AUTO_INCREMENT=18  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_1` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (1, 1, '1,8,12', 0, 1, 'Quỳnh Nhi', 1, 1274989177, 1275318126, 1, 1, 1274989140, 0, 2, 'Ra mắt công ty mã nguồn mở đầu tiên tại Việt Nam', 'Ra-mat-cong-ty-ma-nguon-mo-dau-tien-tai-Viet-Nam', 'Mã nguồn mở NukeViet vốn đã quá quen thuộc với cộng đồng CNTT Việt Nam trong mấy năm qua. Tuy chưa hoạt động chính thức, nhưng chỉ trong khoảng 5 năm gần đây, mã nguồn mở NukeViet đã được dùng phổ biến ở Việt Nam, áp dụng ở hầu hết các lĩnh vực, từ tin tức đến thương mại điện tử, từ các website cá nhân cho tới những hệ thống website doanh nghiệp.', '', 'Thành lập VINADES.,JSC', 0, 1, '6', 1, 0, 2, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_1` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (10, 1, '1,9', 0, 1, '', 3, 1322685920, 1322686042, 1, 2, 1322685920, 0, 2, 'Mã nguồn mở NukeViet giành giải ba Nhân tài đất Việt 2011', 'Ma-nguon-mo-NukeViet-gianh-giai-ba-Nhan-tai-dat-Viet-2011', 'Không có giải nhất và giải nhì, sản phẩm Mã nguồn mở NukeViet của VINADES.,JSC là một trong ba sản phẩm đã đoạt giải ba Nhân tài đất Việt 2011 - Lĩnh vực Công nghệ thông tin (Sản phẩm đã ứng dụng rộng rãi).', '', 'Mã nguồn mở NukeViet giành giải ba Nhân tài đất Việt 2011', 0, 1, '6', 1, 0, 1, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_1` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (11, 1, '1', 0, 1, '', 4, 1445309676, 1445309676, 1, 3, 1445309520, 0, 2, 'NukeViet được ưu tiên mua sắm, sử dụng trong cơ quan, tổ chức nhà nước', 'nukeviet-duoc-uu-tien-mua-sam-su-dung-trong-co-quan-to-chuc-nha-nuoc', 'Ngày 5/12/2014, Bộ trưởng Bộ TT&TT Nguyễn Bắc Son đã ký ban hành Thông tư 20/2014/TT-BTTTT (Thông tư 20) quy định về các sản phẩm phần mềm nguồn mở (PMNM) được ưu tiên mua sắm, sử dụng trong cơ quan, tổ chức nhà nước. NukeViet (phiên bản 3.4.02 trở lên) là phần mềm được nằm trong danh sách này.', '', 'NukeViet được ưu tiên mua sắm, sử dụng trong cơ quan, tổ chức nhà nước', 0, 1, '4', 1, 0, 2, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_1` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (14, 1, '1,11', 0, 1, 'Trần Thị Thu', 0, 1445391118, 1445394180, 1, 7, 1445391060, 0, 2, 'Chương trình thực tập sinh tại công ty VINADES', 'chuong-trinh-thuc-tap-sinh-tai-cong-ty-vinades', 'Cơ hội để những sinh viên năng động được học tập, trải nghiệm, thử thách sớm với những tình huống thực tế, được làm việc cùng các chuyên gia có nhiều kinh nghiệm của công ty VINADES.', '', '', 0, 1, '4', 1, 0, 0, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_1` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (16, 1, '1', 0, 1, '', 0, 1445391182, 1445394133, 1, 9, 1445391120, 0, 2, 'NukeViet được Bộ GD&amp;ĐT đưa vào Hướng dẫn thực hiện nhiệm vụ CNTT năm học 2015 - 2016', 'nukeviet-duoc-bo-gd-dt-dua-vao-huong-dan-thuc-hien-nhiem-vu-cntt-nam-hoc-2015-2016', 'Trong Hướng dẫn thực hiện nhiệm vụ CNTT năm học 2015 - 2016 của Bộ Giáo dục và Đào tạo, NukeViet được đưa vào các hạng mục: Tập huấn sử dụng phần mềm nguồn mở cho giáo viên và cán bộ quản lý giáo dục; Khai thác, sử dụng và dạy học; đặc biệt phần &quot;khuyến cáo khi sử dụng các hệ thống CNTT&quot; có chỉ rõ &quot;Không nên làm website mã nguồn đóng&quot; và &quot;Nên làm NukeViet: phần mềm nguồn mở&quot;.', '', '', 0, 1, '4', 1, 0, 0, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_1` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (17, 1, '1,10', 0, 1, '', 0, 1445391217, 1445393997, 1, 10, 1445391180, 0, 2, 'Hỗ trợ tập huấn và triển khai NukeViet cho các Phòng, Sở GD&amp;ĐT', 'ho-tro-tap-huan-va-trien-khai-nukeviet-cho-cac-phong-so-gd-dt', 'Trên cơ sở Hướng dẫn thực hiện nhiệm vụ CNTT năm học 2015 - 2016 của Bộ Giáo dục và Đào tạo, Công ty cổ phần phát triển nguồn mở Việt Nam và các doanh nghiệp phát triển NukeViet trong cộng đồng NukeViet đang tích cực công tác hỗ trợ cho các phòng GD&ĐT, Sở GD&ĐT triển khai 2 nội dung chính: Hỗ trợ công tác đào tạo tập huấn hướng dẫn sử dụng NukeViet và Hỗ trợ triển khai NukeViet cho các trường, Phòng và Sở GD&ĐT', '', 'Tập huấn triển khai NukeViet tại Phòng Giáo dục và Đào tạo Hà Đông - Hà Nội', 0, 1, '4', 1, 0, 1, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_1` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (6, 12, '1,12', 0, 1, 'Nguyễn Thế Hùng', 7, 1453192444, 1453192444, 1, 12, 1453192444, 0, 2, 'Hãy trở thành nhà cung cấp dịch vụ của NukeViet&#33;', 'hay-tro-thanh-nha-cung-cap-dich-vu-cua-nukeviet', 'Nếu bạn là công ty hosting, là công ty thiết kế web có sử dụng mã nguồn NukeViet, là cơ sở đào tạo NukeViet hay là công ty bất kỳ có kinh doanh dịch vụ liên quan đến NukeViet... hãy cho chúng tôi biết thông tin liên hệ của bạn để NukeViet hỗ trợ bạn trong công việc kinh doanh nhé!', 'hoptac.jpg', '', 1, 1, '6', 1, 0, 13, 0, 0, 0, 0, '', 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_10`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_10` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT 0,
  `listcatid` varchar(255) NOT NULL DEFAULT '',
  `topicid` smallint(5) unsigned NOT NULL DEFAULT 0,
  `admin_id` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `author` varchar(250) DEFAULT '',
  `sourceid` mediumint(8) NOT NULL DEFAULT 0,
  `addtime` int(11) unsigned NOT NULL DEFAULT 0,
  `edittime` int(11) unsigned NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `weight` int(11) unsigned NOT NULL DEFAULT 0,
  `publtime` int(11) unsigned NOT NULL DEFAULT 0,
  `exptime` int(11) unsigned NOT NULL DEFAULT 0,
  `archive` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `hometext` text NOT NULL,
  `homeimgfile` varchar(255) DEFAULT '',
  `homeimgalt` varchar(255) DEFAULT '',
  `homeimgthumb` tinyint(4) NOT NULL DEFAULT 0,
  `inhome` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `allowed_comm` varchar(255) DEFAULT '',
  `allowed_rating` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `external_link` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `hitstotal` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `hitscm` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `total_rating` int(11) NOT NULL DEFAULT 0,
  `click_rating` int(11) NOT NULL DEFAULT 0,
  `instant_active` tinyint(1) NOT NULL DEFAULT 0,
  `instant_template` varchar(100) NOT NULL DEFAULT '',
  `instant_creatauto` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `catid` (`catid`),
  KEY `topicid` (`topicid`),
  KEY `admin_id` (`admin_id`),
  KEY `author` (`author`),
  KEY `title` (`title`),
  KEY `addtime` (`addtime`),
  KEY `edittime` (`edittime`),
  KEY `publtime` (`publtime`),
  KEY `exptime` (`exptime`),
  KEY `status` (`status`),
  KEY `instant_active` (`instant_active`),
  KEY `instant_creatauto` (`instant_creatauto`)
) ENGINE=MyISAM  AUTO_INCREMENT=18  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_10` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (17, 1, '1,10', 0, 1, '', 0, 1445391217, 1445393997, 1, 10, 1445391180, 0, 2, 'Hỗ trợ tập huấn và triển khai NukeViet cho các Phòng, Sở GD&amp;ĐT', 'ho-tro-tap-huan-va-trien-khai-nukeviet-cho-cac-phong-so-gd-dt', 'Trên cơ sở Hướng dẫn thực hiện nhiệm vụ CNTT năm học 2015 - 2016 của Bộ Giáo dục và Đào tạo, Công ty cổ phần phát triển nguồn mở Việt Nam và các doanh nghiệp phát triển NukeViet trong cộng đồng NukeViet đang tích cực công tác hỗ trợ cho các phòng GD&ĐT, Sở GD&ĐT triển khai 2 nội dung chính: Hỗ trợ công tác đào tạo tập huấn hướng dẫn sử dụng NukeViet và Hỗ trợ triển khai NukeViet cho các trường, Phòng và Sở GD&ĐT', '', 'Tập huấn triển khai NukeViet tại Phòng Giáo dục và Đào tạo Hà Đông - Hà Nội', 0, 1, '4', 1, 0, 1, 0, 0, 0, 0, '', 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_11`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_11` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT 0,
  `listcatid` varchar(255) NOT NULL DEFAULT '',
  `topicid` smallint(5) unsigned NOT NULL DEFAULT 0,
  `admin_id` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `author` varchar(250) DEFAULT '',
  `sourceid` mediumint(8) NOT NULL DEFAULT 0,
  `addtime` int(11) unsigned NOT NULL DEFAULT 0,
  `edittime` int(11) unsigned NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `weight` int(11) unsigned NOT NULL DEFAULT 0,
  `publtime` int(11) unsigned NOT NULL DEFAULT 0,
  `exptime` int(11) unsigned NOT NULL DEFAULT 0,
  `archive` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `hometext` text NOT NULL,
  `homeimgfile` varchar(255) DEFAULT '',
  `homeimgalt` varchar(255) DEFAULT '',
  `homeimgthumb` tinyint(4) NOT NULL DEFAULT 0,
  `inhome` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `allowed_comm` varchar(255) DEFAULT '',
  `allowed_rating` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `external_link` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `hitstotal` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `hitscm` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `total_rating` int(11) NOT NULL DEFAULT 0,
  `click_rating` int(11) NOT NULL DEFAULT 0,
  `instant_active` tinyint(1) NOT NULL DEFAULT 0,
  `instant_template` varchar(100) NOT NULL DEFAULT '',
  `instant_creatauto` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `catid` (`catid`),
  KEY `topicid` (`topicid`),
  KEY `admin_id` (`admin_id`),
  KEY `author` (`author`),
  KEY `title` (`title`),
  KEY `addtime` (`addtime`),
  KEY `edittime` (`edittime`),
  KEY `publtime` (`publtime`),
  KEY `exptime` (`exptime`),
  KEY `status` (`status`),
  KEY `instant_active` (`instant_active`),
  KEY `instant_creatauto` (`instant_creatauto`)
) ENGINE=MyISAM  AUTO_INCREMENT=16  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_11` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (12, 11, '11', 0, 1, 'Vũ Bích Ngọc', 0, 1445391061, 1445394203, 1, 4, 1445391000, 0, 2, 'Công ty VINADES tuyển dụng nhân viên kinh doanh', 'cong-ty-vinades-tuyen-dung-nhan-vien-kinh-doanh', 'Công ty cổ phần phát triển nguồn mở Việt Nam là đơn vị chủ quản của phần mềm mã nguồn mở NukeViet - một mã nguồn được tin dùng trong cơ quan nhà nước, đặc biệt là ngành giáo dục. Chúng tôi cần tuyển 05 nhân viên kinh doanh cho lĩnh vực này.', '', '', 0, 1, '4', 1, 0, 0, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_11` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (8, 11, '11', 0, 1, 'Phạm Quốc Tiến', 0, 1445391089, 1445394192, 1, 5, 1445391060, 0, 2, 'Tuyển dụng chuyên viên đồ hoạ phát triển NukeViet', 'Tuyen-dung-chuyen-vien-do-hoa', 'Bạn đam mê nguồn mở? Bạn là chuyên gia đồ họa? Chúng tôi sẽ giúp bạn hiện thực hóa ước mơ của mình với một mức lương đảm bảo. Hãy gia nhập VINADES.,JSC để xây dựng mã nguồn mở hàng đầu cho Việt Nam.', '', 'Tuyển dụng', 0, 1, '6', 1, 0, 0, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_11` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (9, 11, '11', 0, 1, 'Phạm Quốc Tiến', 0, 1445391090, 1445394193, 1, 6, 1445391060, 0, 2, 'Tuyển dụng lập trình viên front-end (HTML/CSS/JS) phát triển NukeViet', 'Tuyen-dung-lap-trinh-vien-front-end-HTML-CSS-JS', 'Bạn đam mê nguồn mở? Bạn đang cần tìm một công việc phù hợp với thế mạnh của bạn về front-end (HTML/CSS/JS)? Hãy gia nhập VINADES.,JSC để xây dựng mã nguồn mở hàng đầu cho Việt Nam.', '', 'Tuyển dụng', 0, 1, '6', 1, 0, 0, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_11` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (14, 1, '1,11', 0, 1, 'Trần Thị Thu', 0, 1445391118, 1445394180, 1, 7, 1445391060, 0, 2, 'Chương trình thực tập sinh tại công ty VINADES', 'chuong-trinh-thuc-tap-sinh-tai-cong-ty-vinades', 'Cơ hội để những sinh viên năng động được học tập, trải nghiệm, thử thách sớm với những tình huống thực tế, được làm việc cùng các chuyên gia có nhiều kinh nghiệm của công ty VINADES.', '', '', 0, 1, '4', 1, 0, 0, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_11` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (15, 11, '11', 0, 1, 'Trần Thị Thu', 0, 1445391135, 1445394444, 1, 8, 1445391120, 0, 2, 'Học việc tại công ty VINADES', 'hoc-viec-tai-cong-ty-vinades', 'Công ty cổ phần phát triển nguồn mở Việt Nam tạo cơ hội việc làm và học việc miễn phí cho những ứng viên có đam mê thiết kế web, lập trình PHP… được học tập và rèn luyện cùng đội ngũ lập trình viên phát triển NukeViet.', '', '', 0, 1, '4', 1, 0, 0, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_11` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (7, 11, '11', 0, 1, 'Phạm Quốc Tiến', 2, 1453192400, 1453192400, 1, 11, 1453192400, 0, 2, 'Tuyển dụng lập trình viên PHP phát triển NukeViet', 'Tuyen-dung-lap-trinh-vien-PHP', 'Bạn đam mê nguồn mở? Bạn đang cần tìm một công việc phù hợp với thế mạnh của bạn về PHP và MySQL? Hãy gia nhập VINADES.,JSC để xây dựng mã nguồn mở hàng đầu cho Việt Nam.', '', 'Tuyển dụng', 0, 1, '6', 1, 0, 0, 0, 0, 0, 0, '', 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_12`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_12` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT 0,
  `listcatid` varchar(255) NOT NULL DEFAULT '',
  `topicid` smallint(5) unsigned NOT NULL DEFAULT 0,
  `admin_id` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `author` varchar(250) DEFAULT '',
  `sourceid` mediumint(8) NOT NULL DEFAULT 0,
  `addtime` int(11) unsigned NOT NULL DEFAULT 0,
  `edittime` int(11) unsigned NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `weight` int(11) unsigned NOT NULL DEFAULT 0,
  `publtime` int(11) unsigned NOT NULL DEFAULT 0,
  `exptime` int(11) unsigned NOT NULL DEFAULT 0,
  `archive` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `hometext` text NOT NULL,
  `homeimgfile` varchar(255) DEFAULT '',
  `homeimgalt` varchar(255) DEFAULT '',
  `homeimgthumb` tinyint(4) NOT NULL DEFAULT 0,
  `inhome` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `allowed_comm` varchar(255) DEFAULT '',
  `allowed_rating` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `external_link` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `hitstotal` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `hitscm` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `total_rating` int(11) NOT NULL DEFAULT 0,
  `click_rating` int(11) NOT NULL DEFAULT 0,
  `instant_active` tinyint(1) NOT NULL DEFAULT 0,
  `instant_template` varchar(100) NOT NULL DEFAULT '',
  `instant_creatauto` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `catid` (`catid`),
  KEY `topicid` (`topicid`),
  KEY `admin_id` (`admin_id`),
  KEY `author` (`author`),
  KEY `title` (`title`),
  KEY `addtime` (`addtime`),
  KEY `edittime` (`edittime`),
  KEY `publtime` (`publtime`),
  KEY `exptime` (`exptime`),
  KEY `status` (`status`),
  KEY `instant_active` (`instant_active`),
  KEY `instant_creatauto` (`instant_creatauto`)
) ENGINE=MyISAM  AUTO_INCREMENT=7  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_12` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (1, 1, '1,8,12', 0, 1, 'Quỳnh Nhi', 1, 1274989177, 1275318126, 1, 1, 1274989140, 0, 2, 'Ra mắt công ty mã nguồn mở đầu tiên tại Việt Nam', 'Ra-mat-cong-ty-ma-nguon-mo-dau-tien-tai-Viet-Nam', 'Mã nguồn mở NukeViet vốn đã quá quen thuộc với cộng đồng CNTT Việt Nam trong mấy năm qua. Tuy chưa hoạt động chính thức, nhưng chỉ trong khoảng 5 năm gần đây, mã nguồn mở NukeViet đã được dùng phổ biến ở Việt Nam, áp dụng ở hầu hết các lĩnh vực, từ tin tức đến thương mại điện tử, từ các website cá nhân cho tới những hệ thống website doanh nghiệp.', '', 'Thành lập VINADES.,JSC', 0, 1, '6', 1, 0, 2, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_12` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (6, 12, '1,12', 0, 1, 'Nguyễn Thế Hùng', 7, 1453192444, 1453192444, 1, 12, 1453192444, 0, 2, 'Hãy trở thành nhà cung cấp dịch vụ của NukeViet&#33;', 'hay-tro-thanh-nha-cung-cap-dich-vu-cua-nukeviet', 'Nếu bạn là công ty hosting, là công ty thiết kế web có sử dụng mã nguồn NukeViet, là cơ sở đào tạo NukeViet hay là công ty bất kỳ có kinh doanh dịch vụ liên quan đến NukeViet... hãy cho chúng tôi biết thông tin liên hệ của bạn để NukeViet hỗ trợ bạn trong công việc kinh doanh nhé!', 'hoptac.jpg', '', 1, 1, '6', 1, 0, 13, 0, 0, 0, 0, '', 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_2`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_2` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT 0,
  `listcatid` varchar(255) NOT NULL DEFAULT '',
  `topicid` smallint(5) unsigned NOT NULL DEFAULT 0,
  `admin_id` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `author` varchar(250) DEFAULT '',
  `sourceid` mediumint(8) NOT NULL DEFAULT 0,
  `addtime` int(11) unsigned NOT NULL DEFAULT 0,
  `edittime` int(11) unsigned NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `weight` int(11) unsigned NOT NULL DEFAULT 0,
  `publtime` int(11) unsigned NOT NULL DEFAULT 0,
  `exptime` int(11) unsigned NOT NULL DEFAULT 0,
  `archive` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `hometext` text NOT NULL,
  `homeimgfile` varchar(255) DEFAULT '',
  `homeimgalt` varchar(255) DEFAULT '',
  `homeimgthumb` tinyint(4) NOT NULL DEFAULT 0,
  `inhome` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `allowed_comm` varchar(255) DEFAULT '',
  `allowed_rating` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `external_link` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `hitstotal` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `hitscm` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `total_rating` int(11) NOT NULL DEFAULT 0,
  `click_rating` int(11) NOT NULL DEFAULT 0,
  `instant_active` tinyint(1) NOT NULL DEFAULT 0,
  `instant_template` varchar(100) NOT NULL DEFAULT '',
  `instant_creatauto` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `catid` (`catid`),
  KEY `topicid` (`topicid`),
  KEY `admin_id` (`admin_id`),
  KEY `author` (`author`),
  KEY `title` (`title`),
  KEY `addtime` (`addtime`),
  KEY `edittime` (`edittime`),
  KEY `publtime` (`publtime`),
  KEY `exptime` (`exptime`),
  KEY `status` (`status`),
  KEY `instant_active` (`instant_active`),
  KEY `instant_creatauto` (`instant_creatauto`)
) ENGINE=MyISAM  AUTO_INCREMENT=21  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_2` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (18, 2, '2', 0, 1, 'VINADES', 0, 1453194455, 1453194455, 1, 13, 1453194455, 0, 2, 'NukeViet 4.0 có gì mới?', 'nukeviet-4-0-co-gi-moi', 'NukeViet 4 là phiên bản NukeViet được cộng đồng đánh giá cao, hứa hẹn nhiều điểm vượt trội về công nghệ đến thời điểm hiện tại. NukeViet 4 thay đổi gần như hoàn toàn từ nhân hệ thống đến chức năng, giao diện người dùng. Vậy, có gì mới trong phiên bản này?', '', '', 0, 1, '4', 1, 0, 2, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_2` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (19, 2, '2', 0, 1, 'VINADES', 0, 1501837620, 1501837620, 1, 14, 1501837620, 0, 2, 'NukeViet 4.2 có gì mới?', 'nukeviet-4-2-co-gi-moi', 'NukeViet 4.2 là phiên bản nâng cấp của phiên bản NukeViet 4.0 tập trung vào việc fix các vấn đề bất cập còn tồn tại của NukeViet 4.0, Thêm các tính năng mới để tăng cường bảo mật của hệ thống cũng như tối ưu trải nghiệm của người dùng.', '', '', 0, 1, '4', 1, 1, 2, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_2` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (20, 2, '2', 0, 1, 'VINADES', 0, 1510215907, 1510215907, 1, 15, 1510215907, 0, 2, 'NukeViet 4.3 có gì mới?', 'nukeviet-4-3-co-gi-moi', 'NukeViet 4.3 là phiên bản nâng cấp của phiên bản NukeViet 4.2 tập trung vào việc fix các vấn đề bất cập còn tồn tại, tối ưu trải nghiệm của người dùng.', '', '', 0, 1, '4', 1, 1, 2, 0, 0, 0, 0, '', 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_8`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_8` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT 0,
  `listcatid` varchar(255) NOT NULL DEFAULT '',
  `topicid` smallint(5) unsigned NOT NULL DEFAULT 0,
  `admin_id` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `author` varchar(250) DEFAULT '',
  `sourceid` mediumint(8) NOT NULL DEFAULT 0,
  `addtime` int(11) unsigned NOT NULL DEFAULT 0,
  `edittime` int(11) unsigned NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `weight` int(11) unsigned NOT NULL DEFAULT 0,
  `publtime` int(11) unsigned NOT NULL DEFAULT 0,
  `exptime` int(11) unsigned NOT NULL DEFAULT 0,
  `archive` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `hometext` text NOT NULL,
  `homeimgfile` varchar(255) DEFAULT '',
  `homeimgalt` varchar(255) DEFAULT '',
  `homeimgthumb` tinyint(4) NOT NULL DEFAULT 0,
  `inhome` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `allowed_comm` varchar(255) DEFAULT '',
  `allowed_rating` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `external_link` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `hitstotal` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `hitscm` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `total_rating` int(11) NOT NULL DEFAULT 0,
  `click_rating` int(11) NOT NULL DEFAULT 0,
  `instant_active` tinyint(1) NOT NULL DEFAULT 0,
  `instant_template` varchar(100) NOT NULL DEFAULT '',
  `instant_creatauto` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `catid` (`catid`),
  KEY `topicid` (`topicid`),
  KEY `admin_id` (`admin_id`),
  KEY `author` (`author`),
  KEY `title` (`title`),
  KEY `addtime` (`addtime`),
  KEY `edittime` (`edittime`),
  KEY `publtime` (`publtime`),
  KEY `exptime` (`exptime`),
  KEY `status` (`status`),
  KEY `instant_active` (`instant_active`),
  KEY `instant_creatauto` (`instant_creatauto`)
) ENGINE=MyISAM  AUTO_INCREMENT=2  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_8` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (1, 1, '1,8,12', 0, 1, 'Quỳnh Nhi', 1, 1274989177, 1275318126, 1, 1, 1274989140, 0, 2, 'Ra mắt công ty mã nguồn mở đầu tiên tại Việt Nam', 'Ra-mat-cong-ty-ma-nguon-mo-dau-tien-tai-Viet-Nam', 'Mã nguồn mở NukeViet vốn đã quá quen thuộc với cộng đồng CNTT Việt Nam trong mấy năm qua. Tuy chưa hoạt động chính thức, nhưng chỉ trong khoảng 5 năm gần đây, mã nguồn mở NukeViet đã được dùng phổ biến ở Việt Nam, áp dụng ở hầu hết các lĩnh vực, từ tin tức đến thương mại điện tử, từ các website cá nhân cho tới những hệ thống website doanh nghiệp.', '', 'Thành lập VINADES.,JSC', 0, 1, '6', 1, 0, 2, 0, 0, 0, 0, '', 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_9`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_9` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT 0,
  `listcatid` varchar(255) NOT NULL DEFAULT '',
  `topicid` smallint(5) unsigned NOT NULL DEFAULT 0,
  `admin_id` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `author` varchar(250) DEFAULT '',
  `sourceid` mediumint(8) NOT NULL DEFAULT 0,
  `addtime` int(11) unsigned NOT NULL DEFAULT 0,
  `edittime` int(11) unsigned NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `weight` int(11) unsigned NOT NULL DEFAULT 0,
  `publtime` int(11) unsigned NOT NULL DEFAULT 0,
  `exptime` int(11) unsigned NOT NULL DEFAULT 0,
  `archive` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `hometext` text NOT NULL,
  `homeimgfile` varchar(255) DEFAULT '',
  `homeimgalt` varchar(255) DEFAULT '',
  `homeimgthumb` tinyint(4) NOT NULL DEFAULT 0,
  `inhome` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `allowed_comm` varchar(255) DEFAULT '',
  `allowed_rating` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `external_link` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `hitstotal` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `hitscm` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `total_rating` int(11) NOT NULL DEFAULT 0,
  `click_rating` int(11) NOT NULL DEFAULT 0,
  `instant_active` tinyint(1) NOT NULL DEFAULT 0,
  `instant_template` varchar(100) NOT NULL DEFAULT '',
  `instant_creatauto` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `catid` (`catid`),
  KEY `topicid` (`topicid`),
  KEY `admin_id` (`admin_id`),
  KEY `author` (`author`),
  KEY `title` (`title`),
  KEY `addtime` (`addtime`),
  KEY `edittime` (`edittime`),
  KEY `publtime` (`publtime`),
  KEY `exptime` (`exptime`),
  KEY `status` (`status`),
  KEY `instant_active` (`instant_active`),
  KEY `instant_creatauto` (`instant_creatauto`)
) ENGINE=MyISAM  AUTO_INCREMENT=11  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_9` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (10, 1, '1,9', 0, 1, '', 3, 1322685920, 1322686042, 1, 2, 1322685920, 0, 2, 'Mã nguồn mở NukeViet giành giải ba Nhân tài đất Việt 2011', 'Ma-nguon-mo-NukeViet-gianh-giai-ba-Nhan-tai-dat-Viet-2011', 'Không có giải nhất và giải nhì, sản phẩm Mã nguồn mở NukeViet của VINADES.,JSC là một trong ba sản phẩm đã đoạt giải ba Nhân tài đất Việt 2011 - Lĩnh vực Công nghệ thông tin (Sản phẩm đã ứng dụng rộng rãi).', '', 'Mã nguồn mở NukeViet giành giải ba Nhân tài đất Việt 2011', 0, 1, '6', 1, 0, 1, 0, 0, 0, 0, '', 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_admins`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_admins` (
  `userid` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `catid` smallint(5) NOT NULL DEFAULT 0,
  `admin` tinyint(4) NOT NULL DEFAULT 0,
  `add_content` tinyint(4) NOT NULL DEFAULT 0,
  `pub_content` tinyint(4) NOT NULL DEFAULT 0,
  `edit_content` tinyint(4) NOT NULL DEFAULT 0,
  `del_content` tinyint(4) NOT NULL DEFAULT 0,
  `app_content` tinyint(4) NOT NULL DEFAULT 0,
  UNIQUE KEY `userid` (`userid`,`catid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_block`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_block` (
  `bid` smallint(5) unsigned NOT NULL,
  `id` int(11) unsigned NOT NULL,
  `weight` int(11) unsigned NOT NULL,
  UNIQUE KEY `bid` (`bid`,`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_block` (`bid`, `id`, `weight`) VALUES (1, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_block` (`bid`, `id`, `weight`) VALUES (2, 17, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_block` (`bid`, `id`, `weight`) VALUES (2, 16, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_block` (`bid`, `id`, `weight`) VALUES (2, 15, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_block` (`bid`, `id`, `weight`) VALUES (2, 14, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_block` (`bid`, `id`, `weight`) VALUES (2, 12, 5)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_block` (`bid`, `id`, `weight`) VALUES (2, 11, 6)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_block` (`bid`, `id`, `weight`) VALUES (2, 1, 7)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_block` (`bid`, `id`, `weight`) VALUES (2, 6, 8)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_block_cat`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_block_cat` (
  `bid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `adddefault` tinyint(4) NOT NULL DEFAULT 0,
  `numbers` smallint(5) NOT NULL DEFAULT 10,
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `image` varchar(255) DEFAULT '',
  `description` varchar(255) DEFAULT '',
  `weight` smallint(5) NOT NULL DEFAULT 0,
  `keywords` text DEFAULT NULL,
  `add_time` int(11) NOT NULL DEFAULT 0,
  `edit_time` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`bid`),
  UNIQUE KEY `title` (`title`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_block_cat` (`bid`, `adddefault`, `numbers`, `title`, `alias`, `image`, `description`, `weight`, `keywords`, `add_time`, `edit_time`) VALUES (1, 0, 4, 'Tin tiêu điểm', 'Tin-tieu-diem', '', 'Tin tiêu điểm', 1, '', 1279945710, 1279956943)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_block_cat` (`bid`, `adddefault`, `numbers`, `title`, `alias`, `image`, `description`, `weight`, `keywords`, `add_time`, `edit_time`) VALUES (2, 1, 4, 'Tin mới nhất', 'Tin-moi-nhat', '', 'Tin mới nhất', 2, '', 1279945725, 1279956445)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_cat`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_cat` (
  `catid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` smallint(5) unsigned NOT NULL DEFAULT 0,
  `title` varchar(250) NOT NULL,
  `titlesite` varchar(250) DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `description` text DEFAULT NULL,
  `descriptionhtml` text DEFAULT NULL,
  `image` varchar(255) DEFAULT '',
  `viewdescription` tinyint(2) NOT NULL DEFAULT 0,
  `weight` smallint(5) unsigned NOT NULL DEFAULT 0,
  `sort` smallint(5) NOT NULL DEFAULT 0,
  `lev` smallint(5) NOT NULL DEFAULT 0,
  `viewcat` varchar(50) NOT NULL DEFAULT 'viewcat_page_new',
  `numsubcat` smallint(5) NOT NULL DEFAULT 0,
  `subcatid` varchar(255) DEFAULT '',
  `numlinks` tinyint(2) unsigned NOT NULL DEFAULT 3,
  `newday` tinyint(2) unsigned NOT NULL DEFAULT 2,
  `featured` int(11) NOT NULL DEFAULT 0,
  `ad_block_cat` varchar(255) NOT NULL DEFAULT '',
  `keywords` text DEFAULT NULL,
  `admins` text DEFAULT NULL,
  `add_time` int(11) unsigned NOT NULL DEFAULT 0,
  `edit_time` int(11) unsigned NOT NULL DEFAULT 0,
  `groups_view` varchar(255) DEFAULT '',
  `status` smallint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`catid`),
  UNIQUE KEY `alias` (`alias`),
  KEY `parentid` (`parentid`),
  KEY `status` (`status`)
) ENGINE=MyISAM  AUTO_INCREMENT=13  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_cat` (`catid`, `parentid`, `title`, `titlesite`, `alias`, `description`, `descriptionhtml`, `image`, `viewdescription`, `weight`, `sort`, `lev`, `viewcat`, `numsubcat`, `subcatid`, `numlinks`, `newday`, `featured`, `ad_block_cat`, `keywords`, `admins`, `add_time`, `edit_time`, `groups_view`, `status`) VALUES (1, 0, 'Tin tức', '', 'Tin-tuc', '', '', '', 0, 1, 1, 0, 'viewcat_main_right', 3, '8,12,9', 4, 2, 0, '', '', '', 1274986690, 1274986690, '6', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_cat` (`catid`, `parentid`, `title`, `titlesite`, `alias`, `description`, `descriptionhtml`, `image`, `viewdescription`, `weight`, `sort`, `lev`, `viewcat`, `numsubcat`, `subcatid`, `numlinks`, `newday`, `featured`, `ad_block_cat`, `keywords`, `admins`, `add_time`, `edit_time`, `groups_view`, `status`) VALUES (2, 0, 'Sản phẩm', '', 'San-pham', '', '', '', 0, 2, 5, 0, 'viewcat_page_new', 0, '', 4, 2, 0, '', '', '', 1274986705, 1274986705, '6', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_cat` (`catid`, `parentid`, `title`, `titlesite`, `alias`, `description`, `descriptionhtml`, `image`, `viewdescription`, `weight`, `sort`, `lev`, `viewcat`, `numsubcat`, `subcatid`, `numlinks`, `newday`, `featured`, `ad_block_cat`, `keywords`, `admins`, `add_time`, `edit_time`, `groups_view`, `status`) VALUES (8, 1, 'Thông cáo báo chí', '', 'thong-cao-bao-chi', '', '', '', 0, 1, 2, 1, 'viewcat_page_new', 0, '', 4, 2, 0, '', '', '', 1274987105, 1274987244, '6', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_cat` (`catid`, `parentid`, `title`, `titlesite`, `alias`, `description`, `descriptionhtml`, `image`, `viewdescription`, `weight`, `sort`, `lev`, `viewcat`, `numsubcat`, `subcatid`, `numlinks`, `newday`, `featured`, `ad_block_cat`, `keywords`, `admins`, `add_time`, `edit_time`, `groups_view`, `status`) VALUES (9, 1, 'Tin công nghệ', '', 'Tin-cong-nghe', '', '', '', 0, 3, 4, 1, 'viewcat_page_new', 0, '', 4, 2, 0, '', '', '', 1274987212, 1274987212, '6', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_cat` (`catid`, `parentid`, `title`, `titlesite`, `alias`, `description`, `descriptionhtml`, `image`, `viewdescription`, `weight`, `sort`, `lev`, `viewcat`, `numsubcat`, `subcatid`, `numlinks`, `newday`, `featured`, `ad_block_cat`, `keywords`, `admins`, `add_time`, `edit_time`, `groups_view`, `status`) VALUES (10, 0, 'Đối tác', '', 'Doi-tac', '', '', '', 0, 3, 9, 0, 'viewcat_page_new', 0, '', 4, 2, 0, '', '', '', 1274987460, 1274987460, '6', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_cat` (`catid`, `parentid`, `title`, `titlesite`, `alias`, `description`, `descriptionhtml`, `image`, `viewdescription`, `weight`, `sort`, `lev`, `viewcat`, `numsubcat`, `subcatid`, `numlinks`, `newday`, `featured`, `ad_block_cat`, `keywords`, `admins`, `add_time`, `edit_time`, `groups_view`, `status`) VALUES (11, 0, 'Tuyển dụng', '', 'Tuyen-dung', '', '', '', 0, 4, 12, 0, 'viewcat_page_new', 0, '', 4, 2, 0, '', '', '', 1274987538, 1274987538, '6', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_cat` (`catid`, `parentid`, `title`, `titlesite`, `alias`, `description`, `descriptionhtml`, `image`, `viewdescription`, `weight`, `sort`, `lev`, `viewcat`, `numsubcat`, `subcatid`, `numlinks`, `newday`, `featured`, `ad_block_cat`, `keywords`, `admins`, `add_time`, `edit_time`, `groups_view`, `status`) VALUES (12, 1, 'Bản tin nội bộ', '', 'Ban-tin-noi-bo', '', '', '', 0, 2, 3, 1, 'viewcat_page_new', 0, '', 4, 2, 0, '', '', '', 1274987902, 1274987902, '6', 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_config_post`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_config_post` (
  `group_id` smallint(5) NOT NULL,
  `addcontent` tinyint(4) NOT NULL,
  `postcontent` tinyint(4) NOT NULL,
  `editcontent` tinyint(4) NOT NULL,
  `delcontent` tinyint(4) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_detail`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_detail` (
  `id` int(11) unsigned NOT NULL,
  `titlesite` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `bodyhtml` longtext NOT NULL,
  `keywords` varchar(255) DEFAULT '',
  `sourcetext` varchar(255) DEFAULT '',
  `files` text DEFAULT NULL,
  `imgposition` tinyint(1) NOT NULL DEFAULT 1,
  `layout_func` varchar(100) DEFAULT '',
  `copyright` tinyint(1) NOT NULL DEFAULT 0,
  `allowed_send` tinyint(1) NOT NULL DEFAULT 0,
  `allowed_print` tinyint(1) NOT NULL DEFAULT 0,
  `allowed_save` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_detail` (`id`, `titlesite`, `description`, `bodyhtml`, `keywords`, `sourcetext`, `files`, `imgposition`, `layout_func`, `copyright`, `allowed_send`, `allowed_print`, `allowed_save`) VALUES (1, '', '', '<p style=\"text-align: justify;\">Để chuyên nghiệp hóa việc phát hành mã nguồn mở NukeViet, Ban quản trị NukeViet quyết định thành lập doanh nghiệp chuyên quản NukeViet mang tên Công ty cổ phần Phát triển nguồn mở Việt Nam (Viết tắt là VINADES.,JSC), chính thức ra mắt vào ngày 25-2-2010 (trụ sở tại Hà Nội) nhằm phát triển, phổ biến hệ thống NukeViet tại Việt Nam.<br /> <br /> Theo ông Nguyễn Anh Tú, Chủ tịch HĐQT VINADES, công ty sẽ phát triển bộ mã nguồn NukeViet nhất quán theo con đường mã nguồn mở đã chọn, chuyên nghiệp và quy mô hơn bao giờ hết. Đặc biệt là hoàn toàn miễn phí đúng tinh thần mã nguồn mở quốc tế.<br /> <br /> NukeViet là một hệ quản trị nội dung mã nguồn mở (Opensource Content Management System) thuần Việt từ nền tảng PHP-Nuke và cơ sở dữ liệu MySQL. Người sử dụng thường gọi NukeViet là portal vì nó có khả năng tích hợp nhiều ứng dụng trên nền web, cho phép người sử dụng có thể dễ dàng xuất bản và quản trị các nội dung của họ lên internet hoặc intranet.<br /> <br /> NukeViet cung cấp nhiều dịch vụ và ứng dụng nhờ khả năng tăng cường tính năng thêm các module, block... tạo sự dễ dàng cài đặt, quản lý, ngay cả với những người mới tiếp cận với website. Người dùng có thể tìm hiểu thêm thông tin và tải về sản phẩm tại địa chỉ http://nukeviet.vn</p><blockquote> <p style=\"text-align: justify;\"> <em>Thông tin ra mắt công ty VINADES có thể tìm thấy trên trang 7 báo Hà Nội Mới ra ngày 25/02/2010 (<a href=\"http://hanoimoi.com.vn/newsdetail/Cong_nghe/309750/ra-mat-cong-ty-ma-nguon-mo-dau-tien-tai-viet-nam.htm\" target=\"_blank\">xem chi tiết</a>), Bản tin tiếng Anh của đài tiếng nói Việt Nam ngày 26/02/2010 (<a href=\"http://english.vovnews.vn/Home/First-opensource-company-starts-operation/20102/112960.vov\" target=\"_blank\">xem chi tiết</a>); trang 7 báo An ninh Thủ Đô số 2858 ra vào thứ 2 ngày 01/03/2010 và các trang tin tức, báo điện tử khác.</em></p></blockquote>', '', 'http://hanoimoi.com.vn/newsdetail/Cong_nghe/309750/ra-mat-cong-ty-ma-nguon-mo-dau-tien-tai-viet-nam.htm', NULL, 2, '', 0, 1, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_detail` (`id`, `titlesite`, `description`, `bodyhtml`, `keywords`, `sourcetext`, `files`, `imgposition`, `layout_func`, `copyright`, `allowed_send`, `allowed_print`, `allowed_save`) VALUES (6, '', '', '<div style=\"text-align: justify;\">Tính đến năm 2015, ước tính có hơn 10.000 website đang sử dụng NukeViet. Nhu cầu triển khai NukeViet không chỉ dừng lại ở các cá nhân, doanh nghiệp, cơ sở giáo dục mà đã lan rộng ra khối chính phủ.</div><div style=\"text-align: justify;\"><br  />Cộng đồng NukeViet cũng đã lớn mạnh hơn trước. Nếu như đầu năm 2010, ngoài Công ty VINADES chỉ có một vài công ty cung cấp dịch vụ cho NukeViet nhưng không chuyên, thì theo thống kê năm 2015 đã có hàng trăm doanh nghiệp đang cung cấp dịch vụ có liên quan đến NukeViet như: đào tạo NukeViet, thiết kế web, phát triển phần mềm, cung cấp giao diện, module... trên nền tảng NukeViet. Đặc biệt có nhiều doanh nghiệp hoàn toàn cung cấp dịch vụ thiết kế web, cung cấp giao diện, module... sử dụng nền tảng NukeViet. Nhiều sản phẩm phái sinh từ NukeViet đã ra đời, NukeViet được phát triển thành nhiều phần mềm quản lý sử dụng trên mạng LAN hay trên internet, được phát triển thành các phần mềm dùng riêng hay sử dụng như một nền tảng để cung cấp dịch vụ online, thậm chí đã được thử nghiệm tích hợp vào trong các thiết bị phần cứng để bán cùng thiết bị (NukeViet Captive Portal - dùng để quản lý người dùng truy cập internet, tích hợp trong thiết bị quản lý wifi)...<br  /><br  />Tuy nhiên, cùng với những cơ hội, cộng đồng NukeViet đang đứng trước một thách thức mới. NukeViet cần tập hợp tất cả các doanh nghiệp, tổ chức và cá nhân đang cung cấp dịch vụ cho NukeViet và liên kết các đơn vị này với nhau để giúp nhau chuyên nghiệp hóa, cùng nhau chia sẻ những cơ hội kinh doanh và trở lên lớn mạnh hơn.<br  /><br  />Nếu cộng đồng NukeViet có 500 công ty siêu nhỏ chỉ 2-3 người và những công ty này đứng riêng rẽ như hiện nay thì NukeViet mãi bé nhỏ và sẽ không làm được việc gì. Nhưng nếu 500 công ty này biết nhau, cùng làm một số việc, cùng tham gia phát triển NukeViet, đó sẽ là sức mạnh rất lớn cho một phần mềm nguồn mở như NukeViet, và đó cũng là cơ hội rất lớn để các công ty nhỏ ấy trở lên chuyên nghiệp và vững mạnh.<br  /><br  />Cho dù bạn là doanh nghiệp hay một nhóm kinh doanh, cho dù bạn đang cung cấp bất kỳ dịch vụ có liên quan trực tiếp đến NukeViet như: đào tạo NukeViet, thiết kế web, phát triển phần mềm, cung cấp giao diện, module... hoặc gián tiếp có liên quan đến NukeViet (ví dụ các công ty hosting, các nhà cung cấp dịch vụ thanh toán điện tử...). Bạn đều là một thành phần quan trọng của NukeViet. Dù bạn là công ty to hay một nhóm nhỏ, hãy đăng ký vào danh sách các đối tác của NukeViet để thiết lập kênh liên lạc với các doanh nghiệp khác trong cộng đồng NukeViet và nhận sự hỗ trợ từ Ban Quản Trị NukeViet cũng như từ các cơ quan nhà nước đang có nhu cầu tìm kiếm các đơn vị cung ứng dịch vụ cho NukeViet.<br  /><br  />Hãy gửi email cho Ban Quản Trị NukeViet về địa chỉ: admin@nukeviet.vn để đăng ký vào danh sách các đơn vị hỗ trợ NukeViet.<br  /><br  />Tiêu đề email: Đăng ký vào danh sách các đơn vị cung cấp dịch vụ dựa trên NukeViet<br  />Nội dung email: Thông tin về đơn vị, dịch vụ cung cấp.<br  /><br  />Hoặc gửi yêu cầu tại đây: <a href=\"http://nukeviet.vn/vi/contact/\" target=\"_blank\">http://nukeviet.vn/vi/contact/</a><br  /><br  />Mọi yêu cầu sẽ được phản hồi trong vòng 24h. Trường hợp không nhận được phản hồi, hãy liên hệ với Ban Quản Trị NukeViet qua các kênh liên lạc khác như:<br  /><br  />- Diễn đàn doanh nghiệp NukeViet: <a href=\"http://forum.nukeviet.vn/viewforum.php?f=4\" target=\"_blank\">http://forum.nukeviet.vn/viewforum.php?f=4</a><br  />- Fanpage NukeViet trên FaceBook: <a href=\"http://fb.com/nukeviet/\" target=\"_blank\">http://fb.com/nukeviet/</a><br  /><br  />Vui lòng truy cập địa chỉ sau để xem danh sách các đơn vị: <a href=\"https://nukeviet.vn/vi/partner/\" target=\"_blank\">https://nukeviet.vn/vi/partner/</a></div>', '', 'http://vinades.vn/vi/news/thong-cao-bao-chi/Thu-moi-hop-tac-6/', NULL, 2, '', 0, 1, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_detail` (`id`, `titlesite`, `description`, `bodyhtml`, `keywords`, `sourcetext`, `files`, `imgposition`, `layout_func`, `copyright`, `allowed_send`, `allowed_print`, `allowed_save`) VALUES (7, '', '', 'Công ty cổ phần phát triển nguồn mở Việt Nam (VINADES.,JSC) đang thu hút tuyển dụng nhân tài ở các vị trí:<ol><li><a href=\"/Tuyen-dung/Tuyen-dung-lap-trinh-vien-PHP-7.html\">Lập trình viên PHP và MySQL.</a></li><li><a href=\"/Tuyen-dung/Tuyen-dung-lap-trinh-vien-front-end-HTML-CSS-JS-9.html\">Lập trình viên front-end (HTML/CSS/JS).</a></li><li><a href=\"/Tuyen-dung/Tuyen-dung-chuyen-vien-do-hoa-8.html\">Chuyên Viên Đồ Hoạ.</a></li></ol><br />Tại VINADES.,JSC bạn sẽ được tham gia các dự án của công ty, tham gia xây dựng và phát triển bộ nhân hệ thống NukeViet, được học hỏi và trau dồi nâng cao kiến thức và kỹ năng cá nhân. Ngoài ra, nếu bạn đam mê về nguồn mở và có mong muốn cống hiến cho quá trình phát triển nguồn mở của Việt Nam nói riêng và của thế giới nói chung, thì đây là cơ hội lớn nhất để bạn đạt được mong muốn của mình. Tham gia công tác tại công ty là bạn đã góp phần xây dựng một cộng đồng nguồn mở chuyên nghiệp cho Việt Nam để vươn xa ra thế giới.<br /><br /><span style=\"font-size:16px;\"><strong>1. Vị trí dự tuyển:</strong></span> Lập trình viên PHP và MySQL<br /><br /><span style=\"font-size:16px;\"><strong>2. Mô tả công việc:</strong></span><ul><li>Phát triển hệ thống NukeViet.</li><li>Phân tích yêu cầu và lập trình riêng cho các dự án cụ thể.</li><li>Thực hiện các công đoạn để dưa website vào hoạt động như upload dữ liệu lên host, xử lý lỗi, sự cố liên quan.</li><li>Chịu trách nhiệm về chất lượng, trải nghiệm người dùng của sản phẩm trong khi sản phẩm hoạt động.</li><li>Thực hiện các công việc theo sự phân công của cấp trên.</li><li>Chịu trách nhiệm về chất lượng và tiến độ công việc.</li></ul><br /><span style=\"font-size:16px;\"><strong>3. Yêu cầu:</strong></span><ul><li>Nắm vững kiến thức hướng đối tượng, cấu trúc dữ liệu và giải thuật.</li><li>Có kinh nghiệm về PHP và các hệ cơ sở dữ liệu MySQL.…</li><li>Tư duy lập trình tốt, thiết kế CSDL chuẩn, biết xử lý nhanh các vấn đề khi phát sinh nghiệp vụ mới.</li><li>Sửa được các lỗi, nâng cấp tính năng cho các module đã có. 6. Viết module mới.</li><li>Biết đưa website lên host, xử lý lỗi, sự cố liên quan.</li><li>Chịu trách nhiệm về chất lượng và tiến độ công việc phụ trách.</li><li>Khả năng sáng tạo.</li><li>Đam mê công việc về lập trình web.</li></ul><br /><em><strong>Ưu tiên các ứng viên:</strong></em><ul><li>Có kiến thức cơ bản về quản trị website NukeViệt.</li><li>Sử dụng và nắm rõ các tính năng, block thường dùng của NukeViet.</li><li>Biết sử dụng git để quản lý source code (nếu ứng viên chưa biết công ty sẽ đào tạo thêm).</li><li>Có khả năng giao tiếp với khách hàng (Trực tiếp, điện thoại, email).</li><li>Có khả năng làm việc độc lập và làm việc theo nhóm.</li><li>Có tinh thần trách nhiệm cao và chủ động trong công việc.</li><li>Có khả năng trình bày ý tưởng.</li></ul><br /><span style=\"font-size:16px;\"><strong>4. Quyền lợi:</strong></span><ul><li>Lương thoả thuận, trả qua ATM.</li><li>Thưởng theo dự án, các ngày lễ tết.</li><li>Hưởng các chế độ khác theo quy định của công ty và pháp luật: Bảo hiểm y tế, bảo hiểm xã hội...</li></ul><br /><span style=\"font-size:16px;\"><strong>5. Thời gian làm việc:</strong></span> Toàn thời gian cố định hoặc làm online.<br /><br /><span style=\"font-size:16px;\"><strong>6. Hạn nộp hồ sơ:</strong></span> Không hạn chế, vui lòng kiểm tra tại <a href=\"http://vinades.vn/vi/news/Tuyen-dung/\">http://vinades.vn/vi/news/Tuyen-dung/</a><br /><br /><span style=\"font-size:16px;\"><strong>7. Cách thức đăng ký dự tuyển:</strong></span> Làm Hồ sơ xin việc<em><strong> (download tại đây: <strong><a href=\"http://vinades.vn/vi/download/Tai-lieu/Ban-khai-so-yeu-ly-lich-ky-thuat-vien/\" target=\"_blank\"><u>Mẫu lý lịch ứng viên</u></a></strong>)</strong></em> và gửi về hòm thư <a href=\"mailto:tuyendung@vinades.vn\">tuyendung@vinades.vn</a><br /><br /><span style=\"font-size:16px;\"><strong>8. Hồ sơ bao gồm:</strong></span><ul><li>Đơn xin việc: Tự biên soạn.</li><li>Thông tin ứng viên: Theo mẫu của VINADES.,JSC</li></ul>&nbsp;<p style=\"text-align: justify;\"><strong>Chi tiết vui lòng tham khảo tại:</strong> <a href=\"http://vinades.vn/vi/news/Tuyen-dung/\" target=\"_blank\">http://vinades.vn/vi/news/Tuyen-dung/</a><br /><br /><strong>Mọi thắc mắc vui lòng liên hệ:</strong></p><blockquote><p style=\"text-align: justify;\"><strong>Công ty cổ phần phát triển nguồn mở Việt Nam.</strong><br />Trụ sở chính: Phòng 1706 - Tòa nhà CT2 Nàng Hương, 583 Nguyễn Trãi, Hà Nội.</p><div>- Tel: +84-24-85872007 - Fax: +84-24-35500914<br />- Email: <a href=\"mailto:contact@vinades.vn\">contact@vinades.vn</a> - Website: <a href=\"http://www.vinades.vn/\">http://www.vinades.vn</a></div></blockquote>', '', 'http://vinades.vn/vi/news/Tuyen-dung/', NULL, 2, '', 0, 1, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_detail` (`id`, `titlesite`, `description`, `bodyhtml`, `keywords`, `sourcetext`, `files`, `imgposition`, `layout_func`, `copyright`, `allowed_send`, `allowed_print`, `allowed_save`) VALUES (8, '', '', 'Công ty cổ phần phát triển nguồn mở Việt Nam (VINADES.,JSC) đang thu hút tuyển dụng nhân tài ở các vị trí:<ol><li><a href=\"/Tuyen-dung/Tuyen-dung-lap-trinh-vien-PHP-7.html\">Lập trình viên PHP và MySQL.</a></li><li><a href=\"/Tuyen-dung/Tuyen-dung-lap-trinh-vien-front-end-HTML-CSS-JS-9.html\">Lập trình viên front-end (HTML/CSS/JS).</a></li><li><a href=\"/Tuyen-dung/Tuyen-dung-chuyen-vien-do-hoa-8.html\">Chuyên Viên Đồ Hoạ.</a></li></ol><br />Tại VINADES.,JSC bạn sẽ được tham gia các dự án của công ty, tham gia xây dựng và phát triển bộ nhân hệ thống NukeViet, được học hỏi và trau dồi nâng cao kiến thức và kỹ năng cá nhân. Ngoài ra, nếu bạn đam mê về nguồn mở và có mong muốn cống hiến cho quá trình phát triển nguồn mở của Việt Nam nói riêng và của thế giới nói chung, thì đây là cơ hội lớn nhất để bạn đạt được mong muốn của mình. Tham gia công tác tại công ty là bạn đã góp phần xây dựng một cộng đồng nguồn mở chuyên nghiệp cho Việt Nam để vươn xa ra thế giới.<br /><br /><span style=\"font-size:16px;\"><strong>1. Vị trí dự tuyển:</strong></span> Chuyên viên đồ hoạ.<br /><br /><span style=\"font-size:16px;\"><strong>2. Mô tả công việc:</strong></span><br /><br /><em><strong>Công việc chính:</strong></em><ul><li>Thiết kế layout, banner, logo website theo yêu cầu của dự án.</li><li>Đưa ra sản phẩm sáng tạo dựa trên ý tưởng của khách hàng.</li><li>Thực hiện các công việc theo sự phân công của cấp trên.</li><li>Chịu trách nhiệm về chất lượng và tiến độ công việc.</li></ul><br /><em><strong>Ngoài ra bạn cần có khả năng thực hiện các công việc sau:</strong></em><ul><li>Cắt và ghép giao diện cho hệ thống.</li><li>Valid CSS, xHTML.</li></ul><br /><span style=\"font-size:16px;\"><strong>3. Yêu cầu:</strong></span><ul><li>Sử dụng thành thạo phần mềm thiết kế: Photoshop ngoài ra cần biết cách sử dụng các phần mềm thiết kế khác là một lợi thế.</li><li>Có kiến thức cơ bản về thiết kế website: Am hiểu các dạng layout, thành phần của một website.</li><li>Có kinh nghiệm, kỹ năng thiết kế giao diện web, logo, banner.</li><li>Chịu trách nhiệm về chất lượng và tiến độ công việc phụ trách.</li><li>Khả năng sáng tạo, tính thẩm mỹ tốt</li><li>Đam mê công việc thiết kế và website.</li></ul><br /><em><strong>Ưu tiên các ứng viên:</strong></em><ul><li>Có kiến thức cơ bản về quản trị website NukeViệt</li><li>Am hiểu về Responsive và có thể thiết kế giao diện, layout trên mobile (Boostrap).</li><li>Sử dụng và nắm rõ các tính năng, block thường dùng của NukeViet.</li><li>Biết sử dụng git để quản lý source code (nếu ứng viên chưa biết công ty sẽ đào tạo thêm).</li><li>Sử dụng thành thạo HTML5, CSS3 &amp; Javascrip/Jquery và Xtemplate</li><li>Khả năng chuyển PSD sang NukeViet tốt.</li><li>Hiểu rõ và nắm chắc cách làm Theme/Template.</li><li>Có khả năng giao tiếp với khách hàng (Trực tiếp, điện thoại, email).</li><li>Có khả năng làm việc độc lập và làm việc theo nhóm.</li><li>Có tinh thần trách nhiệm cao và chủ động trong công việc.</li><li>Có khả năng trình bày ý tưởng</li></ul><br /><span style=\"font-size:16px;\"><strong>4. Quyền lợi:</strong></span><ul><li>Lương thoả thuận, trả qua ATM.</li><li>Thưởng theo dự án, các ngày lễ tết.</li><li>Hưởng các chế độ khác theo quy định của công ty và pháp luật: Bảo hiểm y tế, bảo hiểm xã hội...</li></ul><br /><span style=\"font-size:16px;\"><strong>5. Thời gian làm việc:</strong></span> Toàn thời gian cố định hoặc làm online.<br /><br /><span style=\"font-size:16px;\"><strong>6. Hạn nộp hồ sơ:</strong></span> Không hạn chế, vui lòng kiểm tra tại <a href=\"http://vinades.vn/vi/news/Tuyen-dung/\">http://vinades.vn/vi/news/Tuyen-dung/</a><br /><br /><span style=\"font-size:16px;\"><strong>7. Cách thức đăng ký dự tuyển:</strong></span> Làm Hồ sơ xin việc<em><strong> (download tại đây: <strong><a href=\"http://vinades.vn/vi/download/Tai-lieu/Ban-khai-so-yeu-ly-lich-ky-thuat-vien/\" target=\"_blank\"><u>Mẫu lý lịch ứng viên</u></a></strong>)</strong></em> và gửi về hòm thư <a href=\"mailto:tuyendung@vinades.vn\">tuyendung@vinades.vn</a><br /><br /><span style=\"font-size:16px;\"><strong>8. Hồ sơ bao gồm:</strong></span><ul><li>Đơn xin việc: Tự biên soạn.</li><li>Thông tin ứng viên: Theo mẫu của VINADES.,JSC</li></ul>&nbsp;<p style=\"text-align: justify;\"><strong>Chi tiết vui lòng tham khảo tại:</strong> <a href=\"http://vinades.vn/vi/news/Tuyen-dung/\" target=\"_blank\">http://vinades.vn/vi/news/Tuyen-dung/</a><br /><br /><strong>Mọi thắc mắc vui lòng liên hệ:</strong></p><blockquote><p style=\"text-align: justify;\"><strong>Công ty cổ phần phát triển nguồn mở Việt Nam.</strong><br />Trụ sở chính: Phòng 1706 - Tòa nhà CT2 Nàng Hương, 583 Nguyễn Trãi, Hà Nội.</p><div>- Tel: +84-24-85872007 - Fax: +84-24-35500914<br />- Email: <a href=\"mailto:contact@vinades.vn\">contact@vinades.vn</a> - Website: <a href=\"http://www.vinades.vn/\">http://www.vinades.vn</a></div></blockquote>', '', '', NULL, 2, '', 0, 1, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_detail` (`id`, `titlesite`, `description`, `bodyhtml`, `keywords`, `sourcetext`, `files`, `imgposition`, `layout_func`, `copyright`, `allowed_send`, `allowed_print`, `allowed_save`) VALUES (9, '', '', 'Công ty cổ phần phát triển nguồn mở Việt Nam (VINADES.,JSC) đang thu hút tuyển dụng nhân tài ở các vị trí:<ol><li><a href=\"/Tuyen-dung/Tuyen-dung-lap-trinh-vien-PHP-7.html\">Lập trình viên PHP và MySQL.</a></li><li><a href=\"/Tuyen-dung/Tuyen-dung-lap-trinh-vien-front-end-HTML-CSS-JS-9.html\">Lập trình viên front-end (HTML/CSS/JS).</a></li><li><a href=\"/Tuyen-dung/Tuyen-dung-chuyen-vien-do-hoa-8.html\">Chuyên Viên Đồ Hoạ.</a></li></ol><br />Tại VINADES.,JSC bạn sẽ được tham gia các dự án của công ty, tham gia xây dựng và phát triển bộ nhân hệ thống NukeViet, được học hỏi và trau dồi nâng cao kiến thức và kỹ năng cá nhân. Ngoài ra, nếu bạn đam mê về nguồn mở và có mong muốn cống hiến cho quá trình phát triển nguồn mở của Việt Nam nói riêng và của thế giới nói chung, thì đây là cơ hội lớn nhất để bạn đạt được mong muốn của mình. Tham gia công tác tại công ty là bạn đã góp phần xây dựng một cộng đồng nguồn mở chuyên nghiệp cho Việt Nam để vươn xa ra thế giới.<br /><br /><span style=\"font-size:16px;\"><strong>1. Vị trí dự tuyển:</strong></span> Lập trình viên front-end (HTML/ CSS/ JS)<br /><br /><span style=\"font-size:16px;\"><strong>2. Mô tả công việc:</strong></span><ul><li>Cắt, làm giao diện website từ bản thiết kế (sử dụng Photoshop) trên nền hệ thống NukeViet.</li><li>Tham gia vào việc phát triển Front-End các ứng dụng nền web.</li><li>Thực hiện các công đoạn để dưa website vào hoạt động như upload dữ liệu lên host, xử lý lỗi, sự cố liên quan.</li><li>Chịu trách nhiệm về chất lượng, trải nghiệm người dùng, thẩm mỹ của sản phẩm trong khi sản phẩm hoạt động Tham mưu, tư vấn về chất lượng, thẩm mỹ, trải nghiệm người dùng về các sản phẩm.</li><li>Đảm bảo website theo các tiêu chuẩn web (W3c, XHTML, CSS 3.0, Tableless, no inline style, … ).</li><li>Đảm bảo website hiển thị đúng trên tất cả các trình duyệt.</li><li>Đảm bảo website theo chuẩn “Responsive Web Design.</li><li>Đảm bảo việc đưa sản phẩm thiết kế đến người dùng cuối cùng một cách chính xác và đẹp.</li><li>Thực hiện các công việc theo sự phân công của cấp trên.</li><li>Chịu trách nhiệm về chất lượng và tiến độ công việc.</li></ul><br /><span style=\"font-size:16px;\"><strong>3. Yêu cầu:</strong></span><ul><li>Có kiến thức cơ bản về thiết kế website: Am hiểu các dạng layout, thành phần của một website.</li><li>Hiểu rõ và nắm chắc cách làm Theme/Template.</li><li>Sử dụng thành thạo HTML5, CSS3 &amp; Javascrip/Jquery và Xtemplate</li><li>Khả năng chuyển PSD sang NukeViet tốt.</li><li>Biết đưa website lên host, xử lý lỗi, sự cố liên quan.</li><li>Chịu trách nhiệm về chất lượng và tiến độ công việc phụ trách.</li><li>Khả năng sáng tạo, tính thẩm mỹ tốt.</li><li>Đam mê công việc về web.</li></ul><br /><em><strong>Ưu tiên các ứng viên:</strong></em><ul><li>Có kiến thức cơ bản về quản trị website NukeViệt.</li><li>Am hiểu về Responsive và có thể thiết kế giao diện, layout trên mobile (Boostrap).</li><li>Sử dụng và nắm rõ các tính năng, block thường dùng của NukeViet.</li><li>Biết sử dụng git để quản lý source code (nếu ứng viên chưa biết công ty sẽ đào tạo thêm).</li><li>Có khả năng giao tiếp với khách hàng (Trực tiếp, điện thoại, email).</li><li>Có khả năng làm việc độc lập và làm việc theo nhóm.</li><li>Có tinh thần trách nhiệm cao và chủ động trong công việc.</li><li>Có khả năng trình bày ý tưởng.</li></ul><br /><span style=\"font-size:16px;\"><strong>4. Quyền lợi:</strong></span><ul><li>Lương thoả thuận, trả qua ATM.</li><li>Thưởng theo dự án, các ngày lễ tết.</li><li>Hưởng các chế độ khác theo quy định của công ty và pháp luật: Bảo hiểm y tế, bảo hiểm xã hội...</li></ul><br /><span style=\"font-size:16px;\"><strong>5. Thời gian làm việc:</strong></span> Toàn thời gian cố định hoặc làm online.<br /><br /><span style=\"font-size:16px;\"><strong>6. Hạn nộp hồ sơ:</strong></span> Không hạn chế, vui lòng kiểm tra tại <a href=\"http://vinades.vn/vi/news/Tuyen-dung/\">http://vinades.vn/vi/news/Tuyen-dung/</a><br /><br /><span style=\"font-size:16px;\"><strong>7. Cách thức đăng ký dự tuyển:</strong></span> Làm Hồ sơ xin việc<em><strong> (download tại đây: <strong><a href=\"http://vinades.vn/vi/download/Tai-lieu/Ban-khai-so-yeu-ly-lich-ky-thuat-vien/\" target=\"_blank\"><u>Mẫu lý lịch ứng viên</u></a></strong>)</strong></em> và gửi về hòm thư <a href=\"mailto:tuyendung@vinades.vn\">tuyendung@vinades.vn</a><br /><br /><span style=\"font-size:16px;\"><strong>8. Hồ sơ bao gồm:</strong></span><ul><li>Đơn xin việc: Tự biên soạn.</li><li>Thông tin ứng viên: Theo mẫu của VINADES.,JSC</li></ul>&nbsp;<p style=\"text-align: justify;\"><strong>Chi tiết vui lòng tham khảo tại:</strong> <a href=\"http://vinades.vn/vi/news/Tuyen-dung/\" target=\"_blank\">http://vinades.vn/vi/news/Tuyen-dung/</a><br /><br /><strong>Mọi thắc mắc vui lòng liên hệ:</strong></p><blockquote><p style=\"text-align: justify;\"><strong>Công ty cổ phần phát triển nguồn mở Việt Nam.</strong><br />Trụ sở chính: Phòng 1706 - Tòa nhà CT2 Nàng Hương, 583 Nguyễn Trãi, Hà Nội.</p><div>- Tel: +84-24-85872007 - Fax: +84-24-35500914<br />- Email: <a href=\"mailto:contact@vinades.vn\">contact@vinades.vn</a> - Website: <a href=\"http://www.vinades.vn/\">http://www.vinades.vn</a></div></blockquote>', '', '', NULL, 2, '', 0, 1, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_detail` (`id`, `titlesite`, `description`, `bodyhtml`, `keywords`, `sourcetext`, `files`, `imgposition`, `layout_func`, `copyright`, `allowed_send`, `allowed_print`, `allowed_save`) VALUES (10, '', '', 'Cả hội trường như vỡ òa, rộn tiếng vỗ tay, tiếng cười nói chúc mừng các nhà khoa học, các nhóm tác giả đoạt Giải thưởng Nhân tài Đất Việt năm 2011. Năm thứ 7 liên tiếp, Giải thưởng đã phát hiện và tôn vinh nhiều tài năng của đất nước.<div align=\"center\"> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/01_b7d3f.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div><div align=\"center\"> <span style=\"FONT-SIZE: 10pt; FONT-FAMILY: Tahoma\">Sân khấu trước lễ trao giải.</span></div><div> &nbsp;</div><div align=\"center\"> &nbsp;</div><div align=\"left\"> Cơ cấu Giải thưởng của Nhân tài Đất Việt 2011 trong lĩnh vực CNTT bao gồm 2 hệ thống giải dành cho “Sản phẩm có tiềm năng ứng dụng” và “Sản phẩm đã ứng dụng rộng rãi trong thực tế”. Mỗi hệ thống giải sẽ có 1 giải Nhất, 1 giải Nhì và 1 giải Ba với trị giá giải thưởng tương đương là 100 triệu đồng, 50 triệu đồng và 30 triệu đồng cùng phần thưởng của các đơn vị tài trợ.</div><div align=\"center\"> &nbsp;</div><div align=\"center\"> <div align=\"center\"> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/03_f19bd.jpg\" width=\"350\" /></div> <div align=\"center\"> Nhiều tác giả, nhóm tác giả đến lễ trao giải từ rất sớm.</div></div><p> Giải thưởng Nhân tài Đất Việt 2011 trong lĩnh vực Khoa học Tự nhiên được gọi chính thức là Giải thưởng Khoa học Tự nhiên Việt Nam sẽ có tối đa 6 giải, trị giá 100 triệu đồng/giải dành cho các lĩnh vực: Toán học, Cơ học, Vật lý, Hoá học, Các khoa học về sự sống, Các khoa học về trái đất (gồm cả biển) và môi trường, và các lĩnh vực khoa học liên ngành hoặc đa ngành của hai hoặc nhiều ngành nói trên. Viện Khoa học và Công nghệ Việt Nam thành lập Hội đồng giám khảo gồm các nhà khoa học tự nhiên hàng đầu trong nước để thực hiện việc đánh giá và trao giải.</p><div> Sau thành công của việc trao Giải thưởng Nhân tài Đất Việt trong lĩnh vực Y dược năm 2010, Ban Tổ chức tiếp tục tìm kiếm những chủ nhân xứng đáng cho Giải thưởng này trong năm 2011.</div><div> &nbsp;</div><div align=\"center\"> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/07_78b85.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div><div align=\"center\"> <span style=\"FONT-SIZE: 10pt; FONT-FAMILY: Tahoma\">Nguyên Tổng Bí thư BCH TW Đảng Cộng sản Việt Nam Lê Khả Phiêu tới&nbsp;dự Lễ trao giải.</span></div><div> &nbsp;</div><div> 45 phút trước lễ trao giải, không khí tại Cung Văn hóa Hữu nghị Việt - Xô đã trở nên nhộn nhịp. Sảnh phía trước Cung gần như chật kín. Rất đông bạn trẻ yêu thích công nghệ thông tin, sinh viên các trường đại học đã đổ về đây, cùng với đó là những bó hoa tươi tắn sẽ được dành cho các tác giả, nhóm tác giả đoạt giải.</div><div> &nbsp;</div><div align=\"center\"> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/09_aef87.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div><div align=\"center\"> <span style=\"FONT-SIZE: 10pt; FONT-FAMILY: Tahoma\">Phó Chủ tịch nước CHXHCN Việt Nam Nguyễn Thị Doan.</span></div><div> &nbsp;</div><div> Các vị khách quý cũng đến từ rất sớm. Tới tham dự lễ trao giải năm nay có ông Lê Khả Phiêu, nguyên Tổng Bí thư BCH TW Đảng Cộng sản Việt Nam; bà Nguyễn Thị Doan, Phó Chủ tịch nước CHXHCN Việt Nam; ông Vũ Oanh, nguyên Ủy viên Bộ Chính trị, nguyên Chủ tịch Hội Khuyến học Việt Nam; ông Nguyễn Bắc Son, Bộ trưởng Bộ Thông tin và Truyền thông; ông Đặng Ngọc Tùng, Chủ tịch Tổng Liên đoàn lao động Việt Nam; ông Phạm Văn Linh, Phó trưởng ban Tuyên giáo Trung ương; ông Đỗ Trung Tá, Phái viên của Thủ tướng Chính phủ về CNTT, Chủ tịch Hội đồng Khoa học công nghệ quốc gia; ông Nguyễn Quốc Triệu, nguyên Bộ trưởng Bộ Y tế, Trưởng Ban Bảo vệ Sức khỏe TƯ; bà Cù Thị Hậu, Chủ tịch Hội người cao tuổi Việt Nam; ông Lê Doãn Hợp, nguyên Bộ trưởng Bộ Thông tin Truyền thông, Chủ tịch Hội thông tin truyền thông số…</div><div> &nbsp;</div><div align=\"center\"> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/08_ba46c.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div><div align=\"center\"> <span style=\"FONT-SIZE: 10pt; FONT-FAMILY: Tahoma\">Bộ trưởng Bộ Thông tin và Truyền thông Nguyễn Bắc Son.</span></div><div align=\"center\"> &nbsp;</div><div align=\"center\"> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/06_29592.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div><div align=\"center\"> <span style=\"FONT-SIZE: 10pt; FONT-FAMILY: Tahoma\">Giáo sư - Viện sỹ Nguyễn Văn Hiệu.</span></div><div align=\"center\"> &nbsp;</div><div align=\"center\"> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/04_051f2.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div><div align=\"center\"> <span style=\"FONT-SIZE: 10pt; FONT-FAMILY: Tahoma\">Nguyên Bộ trưởng Bộ Y tế Nguyễn Quốc Triệu.</span></div><div align=\"center\"> &nbsp;</div><div align=\"center\"> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/05_c7ea4.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div><div align=\"center\"> <span style=\"FONT-SIZE: 10pt; FONT-FAMILY: Tahoma\">Ông Vũ Oanh, nguyên Ủy viên Bộ Chính trị, nguyên Chủ tịch Hội Khuyến học Việt Nam.</span></div><p> Do tuổi cao, sức yếu hoặc bận công tác không đến tham dự lễ trao giải nhưng Đại tướng Võ Nguyên Giáp và Chủ tịch nước Trương Tấn Sang cũng gửi lẵng hoa đến chúc mừng lễ trao giải.</p><div> Đúng 20h, Lễ trao giải bắt đầu với bài hát “Nhân tài Đất Việt” do ca sỹ Thái Thùy Linh cùng ca sĩ nhí và nhóm múa biểu diễn. Các nhóm tác giả tham dự Giải thưởng năm 2011 và những tác giả của các năm trước từ từ bước ra sân khấu trong tiếng vỗ tay tán dương của khán giả.</div><div> &nbsp;</div><div align=\"center\"> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/12_74abf.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div><div align=\"center\"> &nbsp;</div><div align=\"center\"> <div> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/PHN15999_3e629.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div></div><div align=\"center\"> <span style=\"FONT-SIZE: 10pt; FONT-FAMILY: Tahoma\">Tiết mục mở màn Lễ trao giải.</span></div><p> Trước Lễ trao giải Giải thưởng Nhân tài Đất Việt năm 2011, Đại tướng Võ Nguyên Giáp, Chủ tịch danh dự Hội Khuyến học Việt Nam, đã gửi thư chúc mừng, khích lệ Ban tổ chức Giải thưởng cũng như các nhà khoa học, các tác giả tham dự.</p><blockquote> <p> <em><span style=\"FONT-STYLE: italic\">Hà Nội, ngày 16 tháng 11 năm 2011</span></em></p> <div> <em>Giải thưởng “Nhân tài đất Việt” do Hội Khuyến học Việt Nam khởi xướng đã bước vào năm thứ bảy (2005 - 2011) với ba lĩnh vực: Công nghệ thông tin, Khoa học tự nhiên và Y dược.</em></div></blockquote><div align=\"center\"> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/thuDaituong1_767f4.jpg\" style=\"MARGIN: 5px\" width=\"400\" /></div><div align=\"center\"> <span style=\"FONT-SIZE: 10pt; FONT-FAMILY: Tahoma\">Thư của Đại tướng Võ Nguyên Giáp gửi BTC Giải thưởng Nhân tài đất Việt.</span></div><blockquote> <p> <em>Tôi gửi lời chúc mừng các nhà khoa học và các thí sinh được nhận giải thưởng “Nhân tài đất Việt” năm nay.</em></p> <p> <em>Mong rằng, các sản phẩm và các công trình nghiên cứu được trao giải sẽ được tiếp tục hoàn thiện và được ứng dụng rộng rãi trong đời sống, đem lại hiệu quả kinh tế và xã hội thiết thực.</em></p> <p> <em>Nhân ngày “Nhà giáo Việt Nam”, chúc Hội Khuyến học Việt nam, chúc các thầy giáo và cô giáo, với tâm huyết và trí tuệ của mình, sẽ đóng góp xứng đáng vào công cuộc đổi mới căn bản và toàn diện nền giáo dục nước nhà, để cho nền giáo dục Việt Nam thực sự là cội nguồn của nguyên khí quốc gia, đảm bảo cho mọi nhân cách và tài năng đất Việt được vun đắp và phát huy vì sự trường tồn, sự phát triển tiến bộ và bền vững của đất nước trong thời đại toàn cầu hóa và hội nhập quốc tế.</em></p> <p> <em>Chào thân ái,</em></p> <p> <strong><em>Chủ tịch danh dự Hội Khuyến học Việt Nam</em></strong></p> <p> <strong><em>Đại tướng Võ Nguyên Giáp</em></strong></p></blockquote><p> Phát biểu khai mạc Lễ trao giải, Nhà báo Phạm Huy Hoàn, TBT báo điện tử Dân trí, Trưởng Ban tổ chức, bày tỏ lời cám ơn chân thành về những tình cảm cao đẹp và sự quan tâm chăm sóc của Đại tướng Võ Nguyên Giáp và Chủ tịch nước Trương Tấn Sang đã và đang dành cho Nhân tài Đất Việt.</p><div> Nhà báo Phạm Huy Hoàn nhấn mạnh, Giải thưởng Nhân tài Đất Việt suốt 7 năm qua đều nhận được sự quan tâm của các vị lãnh đạo Đảng, Nhà nước và của toàn xã hội. Tại Lễ trao giải, Ban tổ chức luôn có vinh dự được đón tiếp&nbsp;các vị lãnh đạo&nbsp; Đảng và Nhà nước đến dự và trực tiếp trao Giải thưởng.</div><div> &nbsp;</div><div align=\"center\"> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/15_4670c.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div><div align=\"center\"> <span style=\"FONT-SIZE: 10pt; FONT-FAMILY: Tahoma\">Trưởng Ban tổ chức Phạm Huy Hoàn phát biểu khai mạc buổi lễ.</span></div><p> Năm 2011, Giải thưởng có 3 lĩnh vực được xét trao giải là CNTT, Khoa học tự nhiên và Y dược. Lĩnh&nbsp; vực CNTT đã đón nhận 204 sản phẩm tham dự từ mọi miền đất nước và cả nước ngoài như thí sinh Nguyễn Thái Bình từ bang California - Hoa Kỳ và một thí sinh ở Pháp cũng đăng ký tham gia.</p><div> “Cùng với lĩnh vực CNTT, năm nay, Hội đồng khoa học của Viện khoa học và công nghệ Việt Nam và Hội đồng khoa học - Bộ Y tế tiếp tục giới thiệu những nhà khoa học xuất&nbsp; sắc, có công trình nghiên cứu đem lại nhiều lợi ích cho xã hội trong lĩnh vực khoa học tự nhiên và lĩnh vực y dược. Đó là những bác sĩ tài năng, những nhà khoa học mẫn tuệ, những người đang ngày đêm thầm lặng cống hiến trí tuệ sáng tạo của mình cho xã hội trong công cuộc xây dựng đất nước.” - nhà báo Phạm Huy Hoàn nói.</div><div> &nbsp;</div><div align=\"center\"> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/14_6e18f.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div><div align=\"center\"> <span style=\"FONT-SIZE: 10pt; FONT-FAMILY: Tahoma\">Nhà báo Phạm Huy Hoàn, TBT báo điện tử Dân trí, Trưởng BTC Giải thưởng và ông Phan Hoàng Đức, Phó TGĐ Tập đoàn VNPT nhận lẵng hoa chúc mừng của Đại tướng Võ Nguyên Giáp và Chủ tịch nước Trương Tấn Sang.</span></div><p> Cũng theo Trưởng Ban tổ chức Phạm Huy Hoàn, đến nay, vị Chủ tịch danh dự đầu tiên của Hội Khuyến học Việt Nam, Đại tướng Võ Nguyên Giáp, đã bước qua tuổi 100 nhưng vẫn luôn dõi theo và động viên từng bước phát triển của Giải thưởng Nhân tài Đất Việt. Đại tướng luôn quan tâm chăm sóc Giải thưởng ngay từ khi Giải thưởng&nbsp; mới ra đời cách đây 7 năm.</p><p> Trước lễ trao giải, Đại tướng Võ Nguyên Giáp đã gửi thư chúc mừng, động viên Ban tổ chức. Trong thư, Đại tướng viết: “Mong rằng, các sản phẩm và các công trình nghiên cứu được trao giải sẽ được tiếp tục hoàn thiện và được ứng dụng rộng rãi trong đời sống, đem lại hiệu quả kinh tế và xã hội thiết thực.</p><p> Sau phần khai mạc, cả hội trường hồi hội chờ đợi phút vinh danh các nhà khoa học và các tác giả, nhóm tác giả đoạt giải.</p><div> <span style=\"FONT-WEIGHT: bold\">* Giải thưởng Khoa học Tự nhiên Việt Nam </span>thuộc về 2 nhà khoa học GS.TS Trần Đức Thiệp và GS.TS Nguyễn Văn Đỗ - Viện Vật lý, Viện Khoa học công nghệ Việt Nam với công trình “Nghiên cứu cấu trúc hạt nhân và các phản ứng hạt nhân”.</div><div> &nbsp;</div><div align=\"center\"> <div> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/khtn_d4aae.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div></div><p> Hai nhà khoa học đã tiến hành thành công các nghiên cứu về phản ứng hạt nhân với nơtron, phản ứng quang hạt nhân, quang phân hạch và các phản ứng hạt nhân khác có cơ chế phức tạp trên các máy gia tốc như máy phát nơtron, Microtron và các máy gia tốc thẳng của Việt Nam và Quốc tế. Các nghiên cứu này đã góp phần làm sáng tỏ cấu trúc hạt nhân và cơ chế phản ứng hạt nhân, đồng thời cung cấp nhiều số liệu hạt nhân mới có giá trị cho Kho tàng số liệu hạt nhân.</p><p> GS.TS Trần Đức Thiệp và GS.TS Nguyễn Văn Đỗ đã khai thác hiệu quả hai máy gia tốc đầu tiên của Việt Nam là máy phát nơtron NA-3-C và Microtron MT-17 trong nghiên cứu cơ bản, nghiên cứu ứng dụng và đào tạo nhân lực. Trên cơ sở các thiết bị này, hai nhà khoa học đã tiến hành thành công những nghiên cứu cơ bản thực nghiệm đầu tiên về phản ứng hạt nhân ở Việt Nam; nghiên cứu và phát triển các phương pháp phân tích hạt nhân hiện đại và áp dụng thành công ở Việt Nam.</p><div> Bà Nguyễn Thị Doan, Phó Chủ tịch nước CHXHCNVN và Giáo sư - Viện sỹ Nguyễn Văn Hiệu trao giải thưởng cho 2 nhà khoa học.</div><div> &nbsp;</div><div align=\"center\"> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/khtn2_e2865.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div><div align=\"center\"> <span style=\"FONT-SIZE: 10pt; FONT-FAMILY: Tahoma\">Phó Chủ tịch nước CHXHCNVN Nguyễn Thị Doan và Giáo sư - Viện sỹ Nguyễn Văn Hiệu trao giải thưởng cho 2 nhà khoa học GS.TS Trần Đức Thiệp và GS.TS Nguyễn Văn Đỗ.</span></div><p> GS.VS Nguyễn Văn Hiệu chia sẻ: “Cách đây không lâu, Chính phủ đã ký quyết định xây dựng nhà máy điện hạt nhân trong điều kiện đất nước còn nhỏ bé, nghèo khó và vì thế việc đào tạo nhân lực là nhiệm vụ số 1 hiện nay. Rất may, Việt Nam có 2 nhà khoa học cực kỳ tâm huyết và nổi tiếng trong cả nước cũng như trên thế giới. Hội đồng khoa học chúng tôi muốn xướng tên 2 nhà khoa học này để Chính phủ huy động cùng phát triển xây dựng nhà máy điện hạt nhân.”</p><p> GS.VS Hiệu nhấn mạnh, mặc dù điều kiện làm việc của 2 nhà khoa học không được quan tâm, làm việc trên những máy móc cũ kỹ được mua từ năm 1992 nhưng 2 ông vẫn xay mê cống hiến hết mình cho lĩnh Khoa học tự nhiên Việt Nam.</p><p> <span style=\"FONT-WEIGHT: bold\">* Giải thưởng Nhân tài Đất Việt trong lĩnh vực Y Dược:</span> 2 giải</p><div> <span style=\"FONT-WEIGHT: bold\">1.</span> Nhóm nghiên cứu của Bệnh viện Hữu nghị Việt - Đức với công trình <span style=\"FONT-STYLE: italic\">“Nghiên cứu triển khai ghép gan, thận, tim lấy từ người cho chết não”</span>.</div><div> &nbsp;</div><div align=\"center\"> <div> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/y_3dca2.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div></div><div> &nbsp;</div><div> Tại bệnh viện Việt Đức, tháng 4/2011, các ca ghép tạng từ nguồn cho là người bệnh chết não được triển khai liên tục. Với 4 người cho chết não hiến tạng, bệnh viện đã ghép tim cho một trường hợp,&nbsp;2 người được ghép gan, 8 người được ghép thận, 2 người được ghép van tim và tất cả các ca ghép này đều thành công, người bệnh được ghép đã có một cuộc sống tốt hơn với tình trạng sức khỏe ổn định.</div><div> &nbsp;</div><div align=\"center\"> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/y2_cb5a1.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div><div align=\"center\"> <span style=\"FONT-SIZE: 10pt; FONT-FAMILY: Tahoma\">Nguyên Tổng Bí Ban chấp hành TW Đảng CSVN Lê Khả Phiêu và ông Vũ Văn Tiền, Chủ tịch Hội đồng quản trị Ngân hàng An Bình trao giải thưởng cho nhóm nghiên cứu của BV Hữu nghị Việt - Đức.</span></div><p> Công trong việc ghép tạng từ người cho chết não không chỉ thể hiện năng lực, trình độ, tay nghề của bác sĩ Việt Nam mà nó còn mang một ý nghĩa nhân văn to lớn, mang một thông điệp gửi đến những con người giàu lòng nhân ái với nghĩa cử cao đẹp đã hiến tạng để cứu sống những người bệnh khác.</p><p> <span style=\"FONT-WEIGHT: bold\">2.</span> Hội đồng ghép tim Bệnh viện Trung ương Huế với công trình nghiên cứu <span style=\"FONT-STYLE: italic\">“Triển khai ghép tim trên người lấy từ người cho chết não”</span>.</p><div> Đề tài được thực hiện dựa trên ca mổ ghép tim thành công lần đầu tiên ở Việt Nam của chính 100% đội ngũ y, bác sĩ của Bệnh viện Trung ương Huế đầu tháng 3/2011. Bệnh nhân được ghép tim thành công là anh Trần Mậu Đức (26 tuổi, ở phường Phú Hội, TP. Huế).</div><div> &nbsp;</div><div align=\"center\"> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/y3_7768c.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div><div align=\"center\"> <span style=\"FONT-SIZE: 10pt; FONT-FAMILY: Tahoma\">Hội đồng ghép tim BV Trung ương Huế nhận Giải thưởng Nhân tài Đất Việt.</span></div><p> Ghép tim từ người cho chết não đến người bị bệnh tim cần được ghép tim phải đảm bảo các yêu cầu: đánh giá chức năng các cơ quan; đánh giá tương hợp miễn dịch và phát hiện nguy cơ tiềm ẩn có thể xảy ra trong và sau khi ghép tim để từ đó có phương thức điều trị thích hợp. Có tới 30 xét nghiệm cận lâm sàng trung và cao cấp tiến hành cho cả người cho tim chết não và người sẽ nhận ghép tim tại hệ thống labo của bệnh viện.</p><p> ---------------------</p><p> <span style=\"FONT-WEIGHT: bold\">* Giải thưởng Nhân tài đất Việt Lĩnh vực Công nghệ thông tin.</span></p><p> <span style=\"FONT-STYLE: italic\">Hệ thống sản phẩm đã ứng dụng thực tế:</span></p><p> <span style=\"FONT-STYLE: italic\">Giải Nhất:</span> Không có.</p><p> <span style=\"FONT-STYLE: italic\">Giải Nhì:</span> Không có</p><p> <span style=\"FONT-STYLE: italic\">Giải Ba:</span> 3 giải, mỗi giải trị giá 30 triệu đồng.</p><div> <span style=\"FONT-WEIGHT: bold\">1.</span> <span style=\"FONT-STYLE: italic\">“Bộ cạc xử lý tín hiệu HDTV”</span> của nhóm HD Việt Nam.</div><div> &nbsp;</div><div align=\"center\"> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/hdtv_13b10.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div><div align=\"center\"> <span style=\"FONT-SIZE: 10pt; FONT-FAMILY: Tahoma\">Nhóm HDTV Việt Nam lên nhận giải.</span></div><p> Đây là bộ cạc xử lý tín hiệu HDTV đầu tiên tại Việt Nam đạt tiêu chuẩn OpenGear. Bộ thiết bị bao gồm 2 sản phẩm là cạc khuếch đại phân chia tín hiệu HD DA và cạc xử lý tín hiệu HD FX1. Nhờ bộ cạc này mà người sử dụng cũng có thể điều chỉnh mức âm thanh hoặc video để tín hiệu của kênh tuân theo mức chuẩn và không phụ thuộc vào chương trình đầu vào.</p><div> <span style=\"FONT-WEIGHT: bold; FONT-STYLE: italic\">2.</span> <span style=\"FONT-STYLE: italic\">“Mã nguồn mở NukeViet”</span> của nhóm tác giả Công ty cổ phần phát triển nguồn mở Việt Nam (VINADES.,JSC).</div><div> &nbsp;</div><div align=\"center\"> <div> <img _fl=\"\" align=\"middle\" alt=\"NukeViet nhận giải ba Nhân tài đất Việt 2011\" src=\"/uploads/news/nukeviet-nhantaidatviet2011.jpg\" style=\"margin: 5px; width: 450px; height: 301px;\" /></div></div><p> NukeViet là CMS mã nguồn mở đầu tiên của Việt Nam có quá trình phát triển lâu dài nhất, có lượng người sử dụng đông nhất. Hiện NukeViet cũng là một trong những mã nguồn mở chuyên nghiệp đầu tiên của Việt Nam, cơ quan chủ quản của NukeViet là VINADES.,JSC - đơn vị chịu trách nhiệm phát triển NukeViet và triển khai NukeViet thành các ứng dụng cụ thể cho doanh nghiệp.</p><div> <span style=\"FONT-WEIGHT: bold\">3.</span> <span style=\"FONT-STYLE: italic\">“Hệ thống ngôi nhà thông minh homeON”</span> của nhóm Smart home group.</div><div> &nbsp;</div><div align=\"center\"> <div> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/PHN16132_82014.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div></div><p> Sản phẩm là kết quả từ những nghiên cứu miệt mài nhằm xây dựng một ngôi nhà thông minh, một cuộc sống xanh với tiêu chí: An toàn, tiện nghi, sang trọng và tiết kiệm năng lượng, hưởng ứng lời kêu gọi tiết kiệm năng lượng của Chính phủ.&nbsp;</p><p> <strong><span style=\"FONT-STYLE: italic\">* Hệ thống sản phẩm có tiềm năng ứng dụng:</span></strong></p><p> <span style=\"FONT-STYLE: italic\">Giải Nhất: </span>Không có.</p><div> <span style=\"FONT-STYLE: italic\">Giải Nhì:</span> trị giá 50 triệu đồng: <span style=\"FONT-STYLE: italic\">“Dịch vụ Thông tin và Tri thức du lịch ứng dụng cộng nghệ ngữ nghĩa - iCompanion”</span> của nhóm tác giả SIG.</div><div> &nbsp;</div><div align=\"center\"> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/nhi_7eee0.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div><div align=\"center\"> <span style=\"FONT-SIZE: 10pt; FONT-FAMILY: Tahoma\">Nhóm tác giả SIG nhận giải Nhì Nhân tài đất Việt 2011 ở hệ thống sản phẩm có tiềm năng ứng dụng.</span></div><p> ICompanion là hệ thống thông tin đầu tiên ứng dụng công nghệ ngữ nghĩa trong lĩnh vực du lịch - với đặc thù khác biệt là cung cấp các dịch vụ tìm kiếm, gợi ý thông tin “thông minh” hơn, hướng người dùng và kết hợp khai thác các tính năng hiện đại của môi trường di động.</p><p> Đại diện nhóm SIG chia sẻ: “Tinh thần sáng tạo và lòng khát khao muốn được tạo ra các sản phẩm mới có khả năng ứng dụng cao trong thực tiễn luôn có trong lòng của những người trẻ Việt Nam. Cảm ơn ban tổ chức và những nhà tài trợ đã giúp chúng tôi có một sân chơi thú vị để khuyến khích và chắp cánh thực hiện ước mơ của mình. Xin cảm ơn trường ĐH Bách Khoa đã tạo ra một môi trường nghiên cứu và sáng tạo, gắn kết 5 thành viên trong nhóm.”</p><p> <span style=\"FONT-STYLE: italic\">Giải Ba:</span> 2 giải, mỗi giải trị giá 30 triệu đồng.</p><div> <span style=\"FONT-WEIGHT: bold\">1. </span><span style=\"FONT-STYLE: italic\">“Bộ điều khiển IPNET”</span> của nhóm IPNET</div><div> &nbsp;</div><div align=\"center\"> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/PHN16149_ed58d.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div><div align=\"center\"> <span style=\"FONT-SIZE: 10pt; FONT-FAMILY: Tahoma\">Nhà báo Phạm Huy Hoàn, Trưởng Ban Tổ chức Giải thưởng NTĐV, Tổng Biên tập báo điện tử Dân trí và ông Tạ Hữu Thanh - Phó TGĐ Jetstar Pacific trao giải cho nhóm IPNET.</span></div><p> Bằng cách sử dụng kiến thức thiên văn học để tính giờ mặt trời lặn và mọc tại vị trí cần chiếu sáng được sáng định bởi kinh độ, vĩ độ cao độ, hàng ngày sản phẩm sẽ tính lại thời gian cần bật/tắt đèn cho phù hợp với giờ mặt trời lặn/mọc.</p><div> <span style=\"FONT-WEIGHT: bold\">2.</span> <span style=\"FONT-STYLE: italic\">“Hệ thống lập kế hoạch xạ trị ung thư quản lý thông tin bệnh nhân trên web - LYNX”</span> của nhóm LYNX.</div><div> &nbsp;</div><div align=\"center\"> <div> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/3tiem-nang_32fee.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div></div><p> Đây là loại phần mềm hoàn toàn mới ở Việt Nam, là hệ thống lập kế hoạch và quản lý thông tin của bệnh nhân ung thư qua Internet (LYNX) dựa vào nền tảng Silverlight của Microsoft và kiến thức chuyên ngành Vật lý y học. LYNX giúp ích cho các nhà khoa học, bác sĩ, kỹ sư vật lý, bệnh nhân và mọi thành viên trong việc quản lý và theo dõi hệ thống xạ trị ung thư một cách tổng thể. LYNX có thể được sử dụng thông qua các thiết bị như máy tính cá nhân, máy tính bảng… và các trình duyệt Internet Explorer, Firefox, Chrome…</p><div> Chương trình trao giải đã được truyền hình trực tiếp trên VTV2 - Đài Truyền hình Việt Nam và tường thuật trực&nbsp;tuyến trên báo điện tử Dân trí từ 20h tối 20/11/2011.</div><div> &nbsp;</div><div align=\"center\"> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/NVH0545_c898e.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div><div align=\"center\"> &nbsp;</div><div align=\"center\"> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/NVH0560_c995c.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div><div align=\"center\"> &nbsp;</div><div align=\"center\"> <img _fl=\"\" align=\"middle\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/File/2011/PHN16199_36a5c.jpg\" style=\"MARGIN: 5px\" width=\"450\" /></div><div align=\"center\"> &nbsp;</div><div align=\"center\"> <div align=\"center\"> <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" width=\"90%\"> <tbody> <tr> <td> <div> <span style=\"FONT-WEIGHT: bold\"><span style=\"FONT-WEIGHT: normal; FONT-SIZE: 10pt; FONT-FAMILY: Tahoma\">Khởi xướng từ năm 2005, Giải thưởng Nhân tài Đất Việt đã phát hiện và tôn vinh nhiều tài năng trong lĩnh vực CNTT-TT, Khoa học tự nhiên và Y dược, trở thành một sân chơi bổ ích cho những người yêu thích CNTT. Mỗi năm, Giải thưởng ngày càng thu hút số lượng tác giả và sản phẩm tham gia đông đảo và nhận được sự quan tâm sâu sắc của lãnh đạo Đảng, Nhà nước cũng như công chúng.</span></span></div> <div> <span style=\"FONT-WEIGHT: bold\">&nbsp;</span></div> <div> <span style=\"FONT-WEIGHT: bold\"><span style=\"FONT-WEIGHT: normal; FONT-SIZE: 10pt; FONT-FAMILY: Tahoma\">Đối tượng tham gia Giải thưởng trong lĩnh vực CNTT là những người Việt Nam ở mọi lứa tuổi, đang sinh sống trong cũng như ngoài nước. Năm 2006, Giải thưởng có sự tham gia của thí sinh đến từ 8 nước trên thế giới và 40 tỉnh thành của Việt Nam. Từ năm 2009, Giải thưởng được mở rộng sang lĩnh vực Khoa học tự nhiên, và năm 2010 là lĩnh vực Y dược, vinh danh những nhà khoa học trong các lĩnh vực này.</span>&nbsp;</span></div> <div> <span style=\"FONT-WEIGHT: bold\">&nbsp;</span></div> </td> </tr> </tbody> </table> </div></div>', '', '', NULL, 2, '', 0, 1, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_detail` (`id`, `titlesite`, `description`, `bodyhtml`, `keywords`, `sourcetext`, `files`, `imgposition`, `layout_func`, `copyright`, `allowed_send`, `allowed_print`, `allowed_save`) VALUES (11, '', '', '<div style=\"text-align: justify;\">Có hiệu lực từ ngày 20/1/2015, Thông tư này thay thế cho Thông tư 41/2009/TT-BTTTT (Thông tư 41) ngày 30/12/2009 ban hành Danh mục các sản phẩm phần mềm nguồn mở đáp ứng yêu cầu sử dụng trong cơ quan, tổ chức nhà nước.<br />
<br />
Sản phẩm phần mềm nguồn mở được ưu tiên mua sắm, sử dụng trong cơ quan, tổ chức nhà nước trong Thông tư 41/2009/TT-BTTTT vừa được Bộ TT&amp;TT ban hành, là những&nbsp;sản phẩm đã đáp ứng các tiêu chí về tính năng kỹ thuật cũng như tính mở và bền vững, và NukeViet là một trong số đó.</div>

<p style=\"text-align: justify;\">Cụ thể, theo Thông tư 20, sản phẩm phần mềm nguồn mở được ưu tiên mua sắm, sử dụng trong cơ quan, tổ chức nhà nước phải đáp các tiêu chí về chức năng, tính năng kỹ thuật bao gồm: phần mềm có các chức năng, tính năng kỹ thuật phù hợp với các yêu cầu nghiệp vụ hoặc các quy định, hướng dẫn tương ứng về ứng dụng CNTT trong các cơ quan, tổ chức nhà nước; phần mềm đáp ứng được yêu cầu tương thích với hệ thống thông tin, cơ sở dữ liệu hiện có của các cơ quan, tổ chức.</p>

<p style=\"text-align: justify;\">Bên cạnh đó, các sản phẩm phần mềm nguồn mở được ưu tiên mua sắm, sử dụng trong cơ quan, tổ chức nhà nước còn phải đáp ứng tiêu chí về tính mở và tính bền vững của phần mềm. Cụ thể, phần mềm phải đảm bảo các quyền: tự do sử dụng phần mềm không phải trả phí bản quyền, tự do phân phối lại phần mềm, tự do sửa đổi phần mềm theo nhu cầu sử dụng, tự do phân phối lại phần mềm đã chỉnh sửa (có thể thu phí hoặc miễn phí); phần mềm phải có bản mã nguồn, bản cài đặt được cung cấp miễn phí trên mạng; có điểm ngưỡng thất bại PoF từ 50 điểm trở xuống và điểm mô hình độ chín nguồn mở OSMM từ 60 điểm trở lên.</p>

<p style=\"text-align: justify;\">Căn cứ những tiêu chuẩn trên, thông tư 20 quy định cụ thể Danh mục 31 sản phẩm thuộc 11 loại phần mềm được ưu tiên mua sắm, sử dụng trong cơ quan, tổ chức nhà nước.&nbsp;NukeViet thuộc danh mục hệ quản trị nội dung nguồn mở. Chi tiết thông tư và danh sách 31 sản phẩm phần mềm nguồn mở được ưu tiên mua sắm, sử dụng trong cơ quan, tổ chức nhà nước có&nbsp;<a href=\"http://vinades.vn/vi/download/van-ban-luat/Thong-tu-20-2014-TT-BTTTT/\" target=\"_blank\">tại đây</a>.</p>

<p style=\"text-align: justify;\">Thông tư 20/2014/TT-BTTTT quy định rõ: Các cơ quan, tổ chức nhà nước khi có nhu cầu sử dụng vốn nhà nước để đầu tư xây dựng, mua sắm hoặc thuê sử dụng các loại phần mềm có trong Danh mục hoặc các loại phần mềm trên thị trường đã có sản phẩm phần mềm nguồn mở tương ứng thỏa mãn các tiêu chí trên (quy định tại Điều 3 Thông tư 20) thì phải&nbsp;ưu tiên lựa chọn các sản phẩm phần mềm nguồn mở tương ứng, đồng thời phải thể hiện rõ sự ưu tiên này trong các tài liệu&nbsp;như thiết kế sơ bộ, thiết kế thi công, kế hoạch đấu thầu, kế hoạch đầu tư, hồ sơ mời thầu, yêu cầu chào hàng, yêu cầu báo giá hoặc các yêu cầu mua sắm khác.</p>

<p style=\"text-align: justify;\">Đồng thời,&nbsp;các cơ quan, tổ chức nhà nước phải đảm bảo không đưa ra các yêu cầu, điều kiện, tính năng kỹ thuật có thể dẫn đến việc loại bỏ các sản phẩm phần mềm nguồn mở&nbsp;trong các tài liệu như thiết kế sơ bộ, thiết kế thi công, kế hoạch đấu thầu, kế hoạch đầu tư, hồ sơ mời thầu, yêu cầu chào hàng, yêu cầu báo giá hoặc các yêu cầu mua sắm khác.</p>

<p style=\"text-align: justify;\">Như vậy, sau thông tư số 08/2010/TT-BGDĐT của Bộ GD&amp;ĐT ban hành ngày 01-03-2010 quy định về sử dụng phần mềm tự do mã nguồn mở trong các cơ sở giáo dục trong đó đưa NukeViet vào danh sách các mã nguồn mở được khuyến khích sử dụng trong giáo dục, thông tư 20/2014/TT-BTTTT đã mở đường cho NukeViet vào sử dụng cho các cơ quan, tổ chức nhà nước. Các đơn vị hỗ trợ triển khai NukeViet cho các cơ quan nhà nước có thể sử dụng quy định này để được ưu tiên triển khai cho các dự án website, cổng thông tin cho các cơ quan, tổ chức nhà nước.<br />
<br />
Thời gian tới, Công ty cổ phần phát triển nguồn mở Việt Nam (<a href=\"http://vinades.vn/\" target=\"_blank\">VINADES.,JSC</a>) - đơn vị chủ quản của NukeViet - sẽ cùng với Ban Quản Trị NukeViet tiếp tục hỗ trợ các doanh nghiệp đào tạo nguồn nhân lực chính quy phát triển NukeViet nhằm cung cấp dịch vụ ngày một tốt hơn cho chính phủ và các cơ quan nhà nước, từng bước xây dựng và hình thành liên minh các doanh nghiệp phát triển NukeViet, đưa sản phẩm phần mềm nguồn mở Việt không những phục vụ tốt thị trường Việt Nam mà còn từng bước tiến ra thị trường khu vực và các nước đang phát triển khác trên thế giới nhờ vào lợi thế phần mềm nguồn mở đang được chính phủ nhiều nước ưu tiên phát triển.</p>', '', 'mic.gov.vn', NULL, 2, '', 0, 1, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_detail` (`id`, `titlesite`, `description`, `bodyhtml`, `keywords`, `sourcetext`, `files`, `imgposition`, `layout_func`, `copyright`, `allowed_send`, `allowed_print`, `allowed_save`) VALUES (12, '', '', '<div style=\"text-align: justify;\">Trong năm 2016, chúng tôi xác định là đơn vị sát cánh cùng các đơn vị giáo dục- là đơn vị xây dựng nhiều website cho ngành giáo dục nhất trên cả nước.<br  />Với phần mềm mã nguồn mở NukeViet hiện có nhiều lợi thế:<br  />+ Được Bộ giáo dục khuyến khích sử dụng.<br  />+ Được bộ thông tin truyền thông chỉ định sử dụng trong khối cơ quan nhà nước.<br  />+Được cục công nghệ thông tin ghi rõ tên sản phẩm NukeViet nên dùng theo hướng dẫn thực hiện CNTT 2015-2016.<br  />Chúng tôi cần các bạn góp phần xây dựng nền giáo dục nước nhà ngày càng phát triển.</div><div>&nbsp;</div><table align=\"left\" border=\"1\" cellpadding=\"20\" cellspacing=\"0\" class=\"table table-striped table-bordered table-hover\" style=\"width:100%;\" width=\"653\">	<tbody>		<tr>			<td style=\"width: 27.66%;\"><strong>Vị trí tuyển dụng:</strong></td>			<td style=\"width: 72.34%;\">Nhân viên kinh doanh</td>		</tr>		<tr>			<td style=\"width: 27.66%;\"><strong>Chức vụ:</strong></td>			<td style=\"width: 72.34%;\">Nhân viên</td>		</tr>		<tr>			<td style=\"width: 27.66%;\"><strong>Ngành nghề:</strong></td>			<td style=\"width: 72.34%;\"><strong>Sản phẩm:</strong><br  />			Cổng thông tin, website cho các phòng, sở giáo dục và đào tạo các trường học.</td>		</tr>		<tr>			<td style=\"width: 27.66%;\"><strong>Hình thức làm việc:</strong></td>			<td style=\"width: 72.34%;\">Toàn thời gian cố định</td>		</tr>		<tr>			<td style=\"width: 27.66%;\"><strong>Địa điểm làm việc:</strong></td>			<td style=\"width: 72.34%;\">Văn phòng công ty (Được đi công tác theo hợp đồng đã ký)</td>		</tr>		<tr>			<td style=\"width: 27.66%;\"><strong>Mức lương:</strong></td>			<td style=\"width: 72.34%;\">&nbsp;Lương cố định + Thưởng vượt doanh số + thưởng theo từng hợp đồng (từ 2-7%).</td>		</tr>		<tr>			<td style=\"width: 27.66%;\"><strong>Mô tả công việc:</strong></td>			<td style=\"width: 72.34%;\">Chúng tôi có khách hàng mục tiêu và danh sách khách hàng, công việc đòi hỏi ứng viên sử dụng thành thạo vi tính văn phòng, các phần mềm liên quan đến công việc và có laptop để phục vụ công việc.<br  />			- Sales Online, quảng bá ký kết, liên kết, với các đối tác qua INTERNET. Xây dưng mối quan hệ phát triển bền vững với các đối tác.<br  />			- Gọi điện, giới thiệu dịch vụ, sản phẩm của công ty đến đối tác.<br  />			- Xử lý các cuộc gọi của khách hàng liên quan đến, sản phẩm, dịch vụ công ty.<br  />			- Đàm phán, thương thuyết, ký kết hợp đồng với khách hàng đang có nhu cầu thiết kế website , SEO website , PR thương hiệu trên Internet&nbsp;<br  />			- Duy trì và chăm sóc mối quan hệ lâu dài với khách hàng, mở rộng khách hàng tiềm năng nhằm thúc đẩy doanh số bán hàng<br  />			- Hỗ trợ khách hàng khi được yêu cầu</td>		</tr>		<tr>			<td style=\"width: 27.66%;\"><strong>Số lượng cần tuyển:</strong></td>			<td style=\"width: 72.34%;\">05</td>		</tr>		<tr>			<td style=\"width: 27.66%;\"><strong>Quyền lợi được hưởng:</strong></td>			<td style=\"width: 72.34%;\">- Được đào tạo kĩ năng bán hàng, được công ty hỗ trợ tham gia khóa học bán hàng chuyên nghiệp.<br  />			- Lương cứng: 3.000.000 VNĐ+ hoa hồng dự án (2-7%/năm/hợp đồng). Lương trả qua ATM, được xét tăng lương 3 tháng một lần dựa trên doanh thu.<br  />			- Bậc lương xét trên năng lực bán hàng.<br  />			- Thưởng theo dự án, các ngày lễ tết.<br  />			- Hưởng các chế độ khác theo quy định của công ty và pháp luật: Bảo hiểm y tế, bảo hiểm xã hội.<br  />			- Cơ hội làm việc và gắn bó lâu dài trong công ty, được thưởng cổ phần nếu doanh thu tốt.</td>		</tr>		<tr>			<td style=\"width: 27.66%;\"><strong>Số năm kinh nghiệm:</strong></td>			<td style=\"width: 72.34%;\">Trên 6 tháng</td>		</tr>		<tr>			<td style=\"width: 27.66%;\"><strong>Yêu cầu bằng cấp:</strong></td>			<td style=\"width: 72.34%;\">Cao đẳng, Đại học</td>		</tr>		<tr>			<td style=\"width: 27.66%;\"><strong>Yêu cầu giới tính:</strong></td>			<td style=\"width: 72.34%;\">Không yêu cầu</td>		</tr>		<tr>			<td style=\"width: 27.66%;\"><strong>Yêu cầu độ tuổi:</strong></td>			<td style=\"width: 72.34%;\">Không yêu cầu</td>		</tr>		<tr>			<td style=\"width: 27.66%;\"><strong>Yêu cầu khác:</strong></td>			<td style=\"width: 72.34%;\">- Yêu thích và đam mê Internet Marketing, thích online, thương mại điện tử<br  />			- Giọng nói dễ nghe, không nói ngọng.<br  />			- Có khả năng giao tiếp qua điện thoại.<br  />			- Ngoại hình ưa nhìn là một lợi thế<br  />			- Có tính cẩn thận trong công việc, luôn cố gắng học hỏi.<br  />			- Kỹ năng sales online tốt.<br  />			-Trung thực, năng động, nhiệt tình,siêng năng, nhiệt huyết trong công việc.</td>		</tr>		<tr>			<td style=\"width: 27.66%;\"><strong>Hồ sơ bao gồm:</strong></td>			<td style=\"width: 72.34%;\"><strong>* Yêu cầu Hồ sơ:</strong><br  />			<strong>Cách thức đăng ký dự tuyển</strong>: Làm Hồ sơ xin việc (file mềm) và gửi về hòm thư <a href=\"mailto:tuyendung@vinades.vn\">tuyendung@vinades.vn</a><br  />			<br  />			<strong>Nội dung hồ sơ xin việc file mềm gồm</strong>:<br  />			<strong>+ Đơn xin việc:</strong>&nbsp;Theo hướng dẫn bên dưới.<br  />			<strong>+ Thông tin ứng viên:</strong>&nbsp;Theo mẫu của VINADES.,JSC <strong><em>(download tại đây:&nbsp;<a href=\"http://vinades.vn/vi/download/Tai-lieu/Ban-khai-so-yeu-ly-lich-kinh-doanh/\">Mẫu lý lịch ứng viên</a>)</em></strong><br  />			<strong>* Hồ sơ xin việc (Bản in thông thường) bao gồm</strong>:<br  />			- Giấy khám sức khoẻ của cơ quan y tế.<br  />			- Bản sao hộ khẩu (có công chứng)<br  />			- Bản sao giấy khai sinh (có công chứng)<br  />			- Bản sao quá trình học tập (bảng điểm tốt nghiệp), các văn -bằng chứng chỉ (có công chứng)<br  />			- Sơ yếu lý lịch có xác nhận của cơ quan công tác trước đó (nếu có) hoặc xác nhận của chính quyền địa phương nơi bạn đăng ký hộ khẩu thường trú.<br  />			- Thư giới thiệu (nếu có)<br  />			- Ảnh 4x6: 4 chiếc (đã bao gồm 1 chiếc gắn trên sơ yếu lý lịch).<br  />			<br  />			<strong>*Hướng dẫn</strong>:<br  />			- Với bản in của hồ sơ ứng tuyển, ứng viên sẽ phải nộp trước cho Ban tuyển dụng hoặc muộn nhất là mang theo khi có lịch phỏng vấn. Bản in sẽ không được trả lại ngay cả khi ứng viên không đạt yêu cầu.<br  />			- Nếu không thể bố trí thời gian phỏng vấn như sắp xếp của -Ban tuyển dụng, thí sinh cần thông báo ngay để được đổi lịch.<br  />			- Nếu có bất cứ thắc mắc gì bạn có thể liên hệ với Ms. Thu qua email: tuyendung@vinades.vn. Có thể gọi điện theo số điện thoại: 01255723353</td>		</tr>		<tr>			<td style=\"width: 27.66%;\"><strong>Hạn nộp hồ sơ:</strong></td>			<td style=\"width: 72.34%;\">Không hạn chế cho tới khi tuyển đủ.</td>		</tr>		<tr>			<td style=\"width: 27.66%;\"><strong>Hình thức nộp hồ sơ:</strong></td>			<td style=\"width: 72.34%;\">Qua Email</td>		</tr>		<tr>			<td colspan=\"2\" style=\"width:100.0%;\">			<h3>THÔNG TIN LIÊN HỆ</h3>			</td>		</tr>		<tr>			<td style=\"width: 27.66%;\"><strong>Điện thoại liên hệ:</strong></td>			<td style=\"width: 72.34%;\">01255723353- Ms. Thu</td>		</tr>		<tr>			<td style=\"width: 27.66%;\"><strong>Địa chỉ liên hệ:</strong></td>			<td style=\"width: 72.34%;\">Phòng 1706 - Tòa nhà CT2 Nàng Hương, 583 Nguyễn Trãi, Hà Nội.</td>		</tr>		<tr>			<td style=\"width: 27.66%;\"><strong>Email liên hệ:</strong></td><td style=\"width: 72.34%;\">tuyendung@vinades.vn</td></tr></tbody></table>', '', '', NULL, 2, '', 0, 1, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_detail` (`id`, `titlesite`, `description`, `bodyhtml`, `keywords`, `sourcetext`, `files`, `imgposition`, `layout_func`, `copyright`, `allowed_send`, `allowed_print`, `allowed_save`) VALUES (14, '', '', '<p style=\"text-align: justify;\">Nếu bạn yêu thích công nghệ, thích kinh doanh hoặc lập trình web và mong muốn trải nghiệm, học hỏi, thậm chí là đi làm ngay từ khi còn ngồi trên ghế nhà trường, hãy tham gia chương trình thực tập sinh tại công ty VINADES.</p><p style=\"text-align: justify;\">Công ty cổ phần phát triển nguồn mở Việt Nam (VINADES.,JSC) là đơn vị chịu trách nhiệm chính trong việc phát triển phần mềm NukeViet và có nhiệm vụ hỗ trợ cộng đồng người dùng NukeViet &#91;<u><a href=\"http://vinades.vn/vi/about/history/\" target=\"_blank\">xem thêm giới thiệu về lịch sử hình thành VINADES</a></u>&#93;. Là công ty được thành lập từ cộng đồng phần mềm nguồn mở, hàng năm công ty dành những vị trí đặc biệt cho các bạn sinh viên được học tập, trải nghiệm, làm việc tại công ty.<br  />&nbsp;</p><h2 style=\"text-align: justify;\"><b>C</b><b>ác vị trí thực tập</b></h2><ul>	<li style=\"text-align: justify;\"><strong>Kinh doanh:</strong> Cổng thông tin doanh nghiệp, Cổng thông tin giáo dục Edu Gate…</li>	<li style=\"text-align: justify;\"><strong>Kỹ thuật:</strong> Chuyên viên đồ họa, Lập trình viên…</li></ul><h2 style=\"text-align: justify;\"><b>Quyền lợi của thực tập sinh</b></h2><ul>	<li style=\"text-align: justify;\">Được&nbsp;tiếp xúc với văn hóa doanh nghiệp, trải nghiệm trong môi trường làm việc chuyên nghiệp, năng động.</li>	<li style=\"text-align: justify;\">Được&nbsp;giao tiếp và học hỏi kiến thức từ những SEO, các lập trình viên chính của đội code NukeViet; qua đó&nbsp;nâng cao không chỉ kỹ năng chuyên môn liên quan đến công việc mà còn các kỹ năng mềm trong quá trình làm việc hàng ngày.</li>	<li style=\"text-align: justify;\">Có cơ hội tìm hiểu, phát triển định hướng của bản thân.</li>	<li style=\"text-align: justify;\">Tham gia các chương trình ngoại khóa, các hoạt động nội bộ của công ty.</li>	<li style=\"text-align: justify;\">Cơ&nbsp;hội được học việc để trở thành nhân viên chính thức nếu có kết quả thực tập tốt.</li>	<li style=\"text-align: justify;\">Thực tập không hưởng lương nhưng có thể được trả thù lao cho một số công việc được giao theo đơn hàng.</li></ul><h2 style=\"text-align: justify;\"><b>Thời gian làm việc</b></h2><ul>	<li style=\"text-align: justify;\">Toàn thời gian cố định hoặc làm online.</li>	<li style=\"text-align: justify;\">Thời gian làm việc là:&nbsp;8:00 – 17:00, Thứ hai – Thứ sáu</li>	<li style=\"text-align: justify;\">Ngày làm việc và thời gian làm việc có thể thay đổi linh hoạt tùy thuộc vào điều kiện của ứng viên và tình hình thực tế.</li></ul><h2 style=\"text-align: justify;\"><b>Đối tượng và điều kiện ứng tuyển</b></h2><p style=\"text-align: justify;\">Tất cả các bạn sinh viên năm cuối/mới tốt nghiệp các trường CĐ - ĐH đáp ứng được những yêu cầu sau:</p><ul>	<li style=\"text-align: justify;\">Sinh viên khối ngành kinh tế: yêu thích marketing online, mong muốn thực tập trong lĩnh vực kinh doanh phần mềm.</li>	<li style=\"text-align: justify;\">Sinh viên khối ngành kỹ thuật: yêu thích thiết kế, lập trình web.</li></ul><p style=\"text-align: justify;\">Có kỹ năng giao tiếp và tư duy logic tốt, năng động và ham học hỏi.</p><p style=\"text-align: justify;\">Có máy tính xách tay để làm việc.</p><p style=\"text-align: justify;\">Ưu tiên các ứng viên đam mê phần mềm nguồn mở, đặc biệt là các ứng viên đã từng tham gia và có bài viết diễn đàn NukeViet (<a href=\"http://forum.nukeviet.vn/\">forum.nukeviet.vn</a>).</p><h2 style=\"text-align: justify;\"><b>Cách thức ứng tuyển</b></h2><p style=\"text-align: justify;\">Gửi bản mềm đơn đăng ký ứng tuyển tới:&nbsp;<a href=\"mailto:tuyendung@vinades.vn\">tuyendung@vinades.vn</a>;</p><p style=\"text-align: justify;\">Tiêu đề mail ghi rõ: &#91;Họ tên&#93; –Ứng tuyển thực tập &#91;Bộ phận ứng tuyển&#93;.</p><p style=\"text-align: justify;\">Ví dụ: Lê Văn Nam –&nbsp;Ứng tuyển thực tập sinh bộ phận đồ họa</p><p style=\"text-align: justify;\">Hồ sơ bản cứng cần chuẩn bị (sẽ gửi sau nếu đạt yêu cầu) gồm:</p><ul>	<li style=\"text-align: justify;\">Giấy khám sức khoẻ của cơ quan y tế</li>	<li style=\"text-align: justify;\">Bản sao giấy khai sinh (có công chứng).</li>	<li style=\"text-align: justify;\">Bản sao quá trình học tập (bảng điểm tốt nghiệp), các văn bằng chứng chỉ (có công chứng) nếu đã tốt nghiệp.</li>	<li style=\"text-align: justify;\">Sơ yếu lý lịch có xác nhận của cơ quan công tác trước đó (nếu có) hoặc xác nhận của chính quyền địa phương nơi bạn đăng ký hộ khẩu thường trú.</li>	<li style=\"text-align: justify;\">Chứng minh thư (photo không cần công chứng).</li>	<li style=\"text-align: justify;\">Thư giới thiệu (nếu có)</li>	<li style=\"text-align: justify;\">Ảnh 4x6: 4 chiếc (đã bao gồm 1 chiếc gắn trên sơ yếu lý lịch).</li></ul><p><br  /><strong>Chi tiết vui lòng tham khảo tại:</strong>&nbsp;<a href=\"http://vinades.vn/vi/news/Tuyen-dung/\" target=\"_blank\">http://vinades.vn/vi/news/Tuyen-dung/</a><br  /><br  /><strong>Mọi thắc mắc vui lòng liên hệ:</strong></p><blockquote><p><strong>Công ty cổ phần phát triển nguồn mở Việt Nam.</strong><br  />Trụ sở chính: Phòng 1706 - Tòa nhà CT2 Nàng Hương, 583 Nguyễn Trãi, Hà Nội.<br  /><br  />- Tel: +84-24-85872007 - Fax: +84-24-35500914<br  />- Email:&nbsp;<a href=\"mailto:contact@vinades.vn\">contact@vinades.vn</a>&nbsp;- Website:&nbsp;<a href=\"http://www.vinades.vn/\">http://www.vinades.vn</a></p></blockquote>', '', '', NULL, 2, '', 0, 1, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_detail` (`id`, `titlesite`, `description`, `bodyhtml`, `keywords`, `sourcetext`, `files`, `imgposition`, `layout_func`, `copyright`, `allowed_send`, `allowed_print`, `allowed_save`) VALUES (15, '', '', '<p style=\"text-align: justify;\">Công ty cổ phần phát triển nguồn mở Việt Nam (VINADES.,JSC) là đơn vị chịu trách nhiệm chính trong việc phát triển phần mềm NukeViet và có nhiệm vụ hỗ trợ cộng đồng người dùng NukeViet &#91;<u><a href=\"http://vinades.vn/vi/about/history/\" target=\"_blank\">xem thêm giới thiệu về lịch sử hình thành VINADES</a></u>&#93;.</p><p style=\"text-align: justify;\">Nếu bạn yêu thích phần mềm nguồn mở, triết lý của phần mềm tự do nguồn mở hoặc đơn giản là yêu NukeViet, hãy liên hệ ngay để gia nhập công ty VINADES, cùng chúng tôi phát triển NukeViet – Phần mềm nguồn mở Việt Nam – và tạo ra những sản phẩm web tuyệt vời cho cộng đồng.</p><h2 style=\"text-align: justify;\"><b>Các vị trí nhận học việc</b></h2><ul>	<li style=\"text-align: justify;\"><strong>Kinh doanh:</strong> Cổng thông tin doanh nghiệp, Cổng thông tin giáo dục Edu Gate…</li>	<li style=\"text-align: justify;\"><strong>Kỹ thuật:</strong> Chuyên viên đồ họa, Lập trình viên…</li></ul><h2 style=\"text-align: justify;\"><b>Quyền lợi của học viên</b></h2><ul>	<li style=\"text-align: justify;\">Được hưởng trợ cấp ăn trưa.</li>	<li style=\"text-align: justify;\">Được trợ cấp vé gửi xe.</li>	<li style=\"text-align: justify;\">Được hưởng lương khoán theo từng dự án (nếu có).</li>	<li style=\"text-align: justify;\">Được hỗ trợ học phí tham gia các khóa học nâng cao các kỹ năng (nếu có).</li>	<li style=\"text-align: justify;\">Được&nbsp;tiếp xúc với văn hóa doanh nghiệp, trải nghiệm trong môi trường làm việc chuyên nghiệp, năng động.</li>	<li style=\"text-align: justify;\">Được&nbsp;giao tiếp và học hỏi kiến thức từ những SEO, các lập trình viên chính của đội code NukeViet; qua đó&nbsp;nâng cao không chỉ kỹ năng chuyên môn liên quan đến công việc mà còn các kỹ năng mềm trong quá trình làm việc hàng ngày.</li>	<li style=\"text-align: justify;\">Tham gia các chương trình ngoại khóa, các hoạt động nội bộ của công ty.</li>	<li style=\"text-align: justify;\">Cơ&nbsp;hội ưu tiên (không cần qua thử việc) trở thành nhân viên chính thức nếu có kết quả học việc tốt.</li></ul><h2 style=\"text-align: justify;\"><b>Thời gian làm việc</b></h2><ul>	<li style=\"text-align: justify;\">Toàn thời gian cố định hoặc làm online.</li>	<li style=\"text-align: justify;\">Thời gian làm việc là:&nbsp;8:00 – 17:00, Thứ hai – Thứ sáu</li>	<li style=\"text-align: justify;\">Ngày làm việc và thời gian làm việc có thể thay đổi linh hoạt tùy thuộc vào điều kiện của ứng viên và tình hình thực tế.</li></ul><h2 style=\"text-align: justify;\"><b>Đối tượng</b></h2><p style=\"text-align: justify;\">Tất cả các bạn sinh viên năm cuối/mới tốt nghiệp các trường CĐ - ĐH đáp ứng được những yêu cầu sau:</p><ul>	<li style=\"text-align: justify;\">Sinh viên khối ngành kinh tế: yêu thích marketing online, mong muốn thực tập trong lĩnh vực kinh doanh phần mềm.</li>	<li style=\"text-align: justify;\">Sinh viên khối ngành kỹ thuật: yêu thích thiết kế, lập trình web.</li></ul><p style=\"text-align: justify;\">Có kỹ năng giao tiếp và tư duy logic tốt, năng động và ham học hỏi.</p><p style=\"text-align: justify;\">Ưu tiên các ứng viên đam mê phần mềm nguồn mở, đặc biệt là các ứng viên đã từng tham gia và có bài viết diễn đàn NukeViet (<a href=\"http://forum.nukeviet.vn/\">forum.nukeviet.vn</a>)</p><h2 style=\"text-align: justify;\"><b>Điều kiện</b></h2><p style=\"text-align: justify;\">Có máy tính xách tay để làm việc.</p><p style=\"text-align: justify;\">Ứng viên sẽ được ký hợp đồng học việc (có thời hạn cụ thể). Nếu được nhận vào làm việc chính thức, người lao động phải làm ở công ty ít nhất 2 năm, nếu không làm hoặc nghỉ trước thời hạn sẽ phải hoàn lại tiền đào tạo. Chi phí này được tính là 3.000.000 VND</p><p style=\"text-align: justify;\">Nếu được cử đi học, người lao động phải làm ở công ty ít nhất 2 năm, nếu không làm hoặc nghỉ trước thời hạn sẽ phải hoàn lại tiền học phí.</p><p style=\"text-align: justify;\">Thực hiện theo các quy định khác của công ty...</p><h2 style=\"text-align: justify;\"><b>Cách thức ứng tuyển</b></h2><p style=\"text-align: justify;\">Gửi bản mềm đơn đăng ký ứng tuyển tới:&nbsp;<a href=\"mailto:tuyendung@vinades.vn\">tuyendung@vinades.vn</a>;</p><p style=\"text-align: justify;\">Tiêu đề mail ghi rõ: &#91;Họ tên&#93; –Ứng tuyển học việc&#91;Bộ phận ứng tuyển&#93;;</p><p style=\"text-align: justify;\">Ví dụ: Lê Văn Nam –&nbsp;Ứng tuyển học việc bộ phận đồ họa</p><p style=\"text-align: justify;\">Hồ sơ bản cứng cần chuẩn bị (sẽ gửi sau nếu đạt yêu cầu) gồm:</p><ul>	<li style=\"text-align: justify;\">Giấy khám sức khoẻ của cơ quan y tế</li>	<li style=\"text-align: justify;\">Bản sao giấy khai sinh (có công chứng).</li>	<li style=\"text-align: justify;\">Bản sao quá trình học tập (bảng điểm tốt nghiệp), các văn bằng chứng chỉ (có công chứng) nếu đã tốt nghiệp.</li>	<li style=\"text-align: justify;\">Sơ yếu lý lịch có xác nhận của cơ quan công tác trước đó (nếu có) hoặc xác nhận của chính quyền địa phương nơi bạn đăng ký hộ khẩu thường trú.</li>	<li style=\"text-align: justify;\">Chứng minh thư (photo không cần công chứng).</li>	<li style=\"text-align: justify;\">Thư giới thiệu (nếu có)</li>	<li style=\"text-align: justify;\">Ảnh 4x6: 4 chiếc (đã bao gồm 1 chiếc gắn trên sơ yếu lý lịch).</li></ul><p style=\"text-align: justify;\"><br  /><strong>Chi tiết vui lòng tham khảo tại:</strong>&nbsp;<a href=\"http://vinades.vn/vi/news/Tuyen-dung/\" target=\"_blank\">http://vinades.vn/vi/news/Tuyen-dung/</a><br  /><br  /><strong>Mọi thắc mắc vui lòng liên hệ:</strong></p><blockquote><p style=\"text-align: justify;\"><strong>Công ty cổ phần phát triển nguồn mở Việt Nam.</strong><br  />Trụ sở chính: Phòng 1706 - Tòa nhà CT2 Nàng Hương, 583 Nguyễn Trãi, Hà Nội.<br  /><br  />- Tel: +84-24-85872007 - Fax: +84-24-35500914<br  />- Email:&nbsp;<a href=\"mailto:contact@vinades.vn\">contact@vinades.vn</a>&nbsp;- Website:&nbsp;<a href=\"http://www.vinades.vn/\">http://www.vinades.vn</a></p></blockquote>', '', '', NULL, 2, '', 0, 1, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_detail` (`id`, `titlesite`, `description`, `bodyhtml`, `keywords`, `sourcetext`, `files`, `imgposition`, `layout_func`, `copyright`, `allowed_send`, `allowed_print`, `allowed_save`) VALUES (16, '', '', '<div class=\"details-content clearfix\" id=\"bodytext\"><strong>Hướng dẫn thực hiện nhiệm vụ CNTT năm học 2015 - 2016 của Bộ Giáo dục và Đào tạo có gì mới?</strong><br  /><br  />Trong các hướng dẫn thực hiện nhiệm vụ CNTT từ năm 2010 đến nay liên tục chỉ đạo việc đẩy mạnh công tác triển khai sử dụng phần mềm nguồn mở trong nhà trường và các cơ quan quản lý giáo dục. Tuy nhiên Hướng dẫn thực hiện nhiệm vụ CNTT năm học 2015 - 2016 của Bộ Giáo dục và Đào tạo có nhiều thay đổi mạnh mẽ đáng chú ý, đặc biệt việc chỉ đạo triển khai các phần mềm nguồn mở vào trong các cơ sở quản lý giao dục được rõ ràng và cụ thể hơn rất nhiều.<br  /><br  />Một điểm thay đổi đáng chú ý đối với phần mềm nguồn mở, trong đó đã thay hẳn thuật ngữ &quot;phần mềm tự do mã nguồn mở&quot; hoặc &quot;phần mềm mã nguồn mở&quot; thành &quot;phần mềm nguồn mở&quot;, phản ánh xu thế sử dụng thuật ngữ phần mềm nguồn mở đã phổ biến trong cộng đồng nguồn mở thời gian vài năm trở lại đây.<br  /><br  /><strong>NukeViet - Phần mềm nguồn mở Việt - không chỉ được khuyến khích mà đã được hướng dẫn thực thi</strong><br  /><br  />Từ 5 năm trước, thông tư số 08/2010/TT-BGDĐT của Bộ GD&amp;ĐTquy định về sử dụng phần mềm tự do mã nguồn mở trong các cơ sở giáo dục, NukeViet đã được đưa vào danh sách các mã nguồn mở <strong>được khuyến khích sử dụng trong giáo dục</strong>. Tuy nhiên, việc sử dụng chưa được thực hiện một cách đồng bộ mà chủ yếu làm nhỏ lẻ rải rác tại một số trường, Phòng và Sở GD&amp;ĐT.<br  /><br  />Trong Hướng dẫn thực hiện nhiệm vụ CNTT năm học 2015 - 2016 của Bộ Giáo dục và Đào tạo lần này, NukeViet&nbsp; không chỉ được khuyến khích mà đã được hướng dẫn thực thi, không những thế NukeViet còn được đưa vào hầu hết các nhiệm vụ chính, cụ thể:<div><div><div>&nbsp;</div>- <strong>Nhiệm vụ số 5</strong> &quot;<strong>Công tác bồi dưỡng ứng dụng CNTT cho giáo viên và cán bộ quản lý giáo dục</strong>&quot;, mục 5.1 &quot;Một số nội dung cần bồi dưỡng&quot; có ghi &quot;<strong>Tập huấn sử dụng phần mềm nguồn mở NukeViet.</strong>&quot;<br  />&nbsp;</div>- <strong>Nhiệm vụ số 10 &quot;Khai thác, sử dụng và dạy học bằng phần mềm nguồn mở</strong>&quot; có ghi: &quot;<strong>Khai thác và áp dụng phần mềm nguồn mở NukeViet trong giáo dục.&quot;</strong><br  />&nbsp;</div>- Phụ lục văn bản, có trong nội dung &quot;Khuyến cáo khi sử dụng các hệ thống CNTT&quot;, hạng mục số 3 ghi rõ &quot;<strong>Không nên làm website mã nguồn đóng&quot; và &quot;Nên làm NukeViet: phần mềm nguồn mở&quot;.</strong><br  />&nbsp;<div>Hiện giờ văn bản này đã được đăng lên website của Bộ GD&amp;ĐT: <a href=\"http://moet.gov.vn/?page=1.10&amp;view=983&amp;opt=brpage\" target=\"_blank\">http://moet.gov.vn/?page=1.10&amp;view=983&amp;opt=brpage</a></div><p><br  />Hoặc có thể tải về tại đây: <a href=\"http://vinades.vn/vi/download/van-ban-luat/Huong-dan-thuc-hien-nhiem-vu-CNTT-nam-hoc-2015-2016/\" target=\"_blank\">http://vinades.vn/vi/download/van-ban-luat/Huong-dan-thuc-hien-nhiem-vu-CNTT-nam-hoc-2015-2016/</a></p><blockquote><p><em>Trên cơ sở hướng dẫn của Bộ GD&amp;ĐT, Công ty cổ phần phát triển nguồn mở Việt Nam và các doanh nghiệp phát triển NukeViet trong cộng đồng NukeViet đang tích cực công tác hỗ trợ cho các phòng GD&amp;ĐT, Sở GD&amp;ĐT triển khai 2 nội dung chính: Hỗ trợ công tác đào tạo tập huấn hướng dẫn sử dụng NukeViet và Hỗ trợ triển khai NukeViet cho các trường, Phòng và Sở GD&amp;ĐT.<br  /><br  />Các Phòng, Sở GD&amp;ĐT có nhu cầu có thể xem thêm thông tin chi tiết tại đây: <a href=\"http://vinades.vn/vi/news/thong-cao-bao-chi/Ho-tro-trien-khai-dao-tao-va-trien-khai-NukeViet-cho-cac-Phong-So-GD-DT-264/\" target=\"_blank\">Hỗ trợ triển khai đào tạo và triển khai NukeViet cho các Phòng, Sở GD&amp;ĐT</a></em></p></blockquote></div>', '', '', NULL, 2, '', 0, 1, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_detail` (`id`, `titlesite`, `description`, `bodyhtml`, `keywords`, `sourcetext`, `files`, `imgposition`, `layout_func`, `copyright`, `allowed_send`, `allowed_print`, `allowed_save`) VALUES (17, '', '', '<div class=\"details-content clearfix\" id=\"bodytext\"><span style=\"font-size:16px;\"><strong>Hỗ trợ công tác đào tạo tập huấn hướng dẫn sử dụng phần mềm nguồn mở NukeViet</strong></span><br  /><br  />Công tác hỗ trợ công tác đào tạo tập huấn hướng dẫn sử dụng phần mềm nguồn mở NukeViet sẽ được thực hiện bởi đội ngũ chuyên gia giàu kinh nghiệm về NukeViet được tuyển chọn từ lực lượng lập trình viên, chuyên viên kỹ thuật hiện đang tham gia phát triển và hỗ trợ về NukeViet từ Ban Quản Trị NukeViet và Công ty cổ phần phát triển nguồn mở Việt Nam và các đối tác thuộc Liên minh phần mềm giáo dục nguồn mở NukeViet.<br  /><br  />Với kinh nghiệm tập huấn đã được tổ chức thành công cho nhiều Phòng giáo dục và đào tạo, các chuyên gia về NukeViet sẽ giúp chuyển giao giáo trình, chương trình, kịch bản đào tạo cho các Phòng, Sở GD&amp;ĐT; hỗ trợ các giáo viên và cán bộ quản lý giáo dục sử dụng trong suốt thời gian sau đào tạo.<br  /><br  />Đặc biệt, đối với các đơn vị sử dụng NukeViet làm website và cổng thông tin đồng bộ theo quy mô cấp Phòng và Sở, cán bộ tập huấn của NukeViet sẽ có nhiều chương trình hỗ trợ khác như chương trình thi đua giữa các website sử dụng NukeViet trong cùng đơn vị cấp Phòng, Sở và trên toàn quốc; Chương trình báo cáo và giám sát và xếp hạng website hàng tháng; Chương trình tập huấn nâng cao trình độ sử dụng NukeViet hàng năm cho giáo viên và cán bộ quản lý giáo dục đang thực hiện công tác quản trị các hệ thống sử dụng nền tảng NukeViet.<br  /><br  /><span style=\"font-size:16px;\"><strong>Hỗ trợ triển khai NukeViet cho các trường, Phòng và Sở GD&amp;ĐT</strong></span><br  /><br  />Nhằm hỗ trợ triển khai NukeViet cho các trường, Phòng và Sở GD&amp;ĐT một cách toàn diện, đồng bộ và tiết kiệm, hiện tại, Liên minh phần mềm nguồn mở giáo dục NukeViet chuẩn bị ra mắt. Liên minh này do Công ty cổ phần phát triển nguồn mở Việt Nam đứng dầu và thực hiện việc điều phối công các hỗ trợ và phối hợp giữa các đơn vị trên toàn quốc. Thành viên của liên minh là các doanh nghiệp cung cấp sản phẩm và dịch vụ phần mềm hỗ trợ cho giáo dục (kể cả những đơn vị chỉ tham gia lập trình và những đơn vị chỉ tham gia khai thác thương mại). Liên minh sẽ cùng nhau làm việc để xây dựng một hệ thống phần mềm thống nhất cho giáo dục, có khả năng liên thông và kết nối với nhau, hoàn toàn dựa trên nền tảng phần mềm nguồn mở. Liên minh cũng hỗ trợ và phân phối phần mềm cho các đơn vị làm phần mềm trong ngành giáo dục với mục tiêu là tiết kiệm tối đa chi phí trong khâu thương mại, mang tới cơ hội cho các đơn vị làm phần mềm giáo dục mà không cần phải lo lắng về việc phân phối phần mềm. Các doanh nghiệp quan tâm đến cơ hội kinh doanh bằng phần mềm nguồn mở, muốn tìm hiểu và tham gia liên minh có thể đăng ký tại đây: <a href=\"http://edu.nukeviet.vn/lienminh-dangky.html\" target=\"_blank\">http://edu.nukeviet.vn/lienminh-dangky.html</a><br  /><br  />Liên minh phần mềm nguồn mở giáo dục NukeViet đang cung cấp giải pháp cổng thông tin chuyên dùng cho phòng và Sở GD&amp;ĐT (NukeViet Edu Gate) cung cấp dưới dạng dịch vụ công nghệ thông tin (theo mô hình của <a href=\"http://vinades.vn/vi/download/van-ban-luat/Quyet-dinh-80-ve-thue-dich-vu-CNTT/\" target=\"_blank\">Quyết định số 80/2014/QĐ-TTg của Thủ tướng Chính phủ</a>) có thể hỗ trợ cho các trường, Phòng và Sở GD&amp;ĐT triển khai NukeViet ngay lập tức.<br  /><br  />Giải pháp cổng thông tin chuyên dùng cho phòng và Sở GD&amp;ĐT (NukeViet Edu Gate) có tích hợp website các trường (liên thông 3 cấp: trường - phòng - sở) cho phép tích hợp hàng ngàn website của các trường cùng nhiều dịch vụ khác trên cùng một hệ thống giúp tiết kiệm chi phí đầu tư, chi phí triển khai và bảo trì hệ thống bởi toàn bộ hệ thống được vận hành bằng một phần mềm duy nhất. Ngoài giải pháp cổng thông tin giáo dục tích hợp, Liên minh phần mềm nguồn mở giáo dục NukeViet cũng đang phát triển một số&nbsp;sản phẩm phần mềm dựa trên phần mềm nguồn mở NukeViet và sẽ sớm ra mắt trong thời gian tới.<div><br  />Hiện nay,&nbsp;NukeViet Edu Gate cũng&nbsp;đã được triển khai rộng rãi và nhận được sự ủng hộ của&nbsp;nhiều Phòng, Sở GD&amp;ĐT trên toàn quốc.&nbsp;Các phòng, sở GD&amp;ĐT quan tâm đến giải pháp NukeViet Edu Gate có thể truy cập&nbsp;<a href=\"http://edu.nukeviet.vn/\" target=\"_blank\">http://edu.nukeviet.vn</a>&nbsp;để tìm hiểu thêm hoặc liên hệ:<br  /><br  /><span style=\"font-size:14px;\"><strong>Liên minh phần mềm nguồn mở giáo dục NukeViet</strong></span><br  />Đại diện: <strong>Công ty cổ phần phát triển nguồn mở Việt Nam (VINADES.,JSC)</strong><br  /><strong>Địa chỉ</strong>: Phòng 1706 - Tòa nhà CT2 Nàng Hương, 583 Nguyễn Trãi, Hà Nội<br  /><strong>Email</strong>: contact@vinades.vn, Tel: 024-85872007, <strong>Fax</strong>: 024-35500914,<br  /><strong>Hotline</strong>: 0904762534 (Mr. Hùng), 0936226385 (Ms. Ngọc),&nbsp;<span style=\"color: rgb(38, 38, 38); font-family: arial, sans-serif; font-size: 13px; line-height: 16px;\">0904719186 (Mr. Hậu)</span><br  />Các Phòng GD&amp;ĐT, Sở GD&amp;ĐT có thể đăng ký tìm hiểu, tổ chức hội thảo, tập huấn, triển khai NukeViet trực tiếp tại đây: <a href=\"http://edu.nukeviet.vn/dangky.html\" target=\"_blank\">http://edu.nukeviet.vn/dangky.html</a><br  /><br  /><span style=\"font-size:16px;\"><strong>Tìm hiểu về phương thức chuyển đổi các hệ thống website cổng thông tin sang NukeViet theo mô hình tích hợp liên thông từ trưởng, lên Phòng, Sở GD&amp;ĐT:</strong></span><br  /><br  />Đối với các Phòng, Sở GD&amp;ĐT, trường Nầm non, tiểu học, THCS, THPT... chưa có website, Liên minh phần mềm nguồn mở giáo dục NukeViet sẽ hỗ trợ triển khai NukeViet theo mô hình cổng thông tin liên cấp như quy định tại <a href=\"http://vinades.vn/vi/download/van-ban-luat/Thong-tu-quy-dinh-ve-ve-to-chuc-hoat-dong-su-dung-thu-dien-tu/\" target=\"_blank\">thông tư số <strong>53/2012/TT-BGDĐT</strong> của Bộ GD&amp;ĐT</a> ban hành ngày 20-12-2012 quy định về quy định về về tổ chức hoạt động, sử dụng thư điện tử và cổng thông tin điện tử tại sở giáo dục và đào tạo, phòng giáo dục và đào tạo và các cơ sở GDMN, GDPT và GDTX.<br  /><br  />Trường hợp các đơn vị có website và đang sử dụng NukeViet theo dạng rời rạc thì việc chuyển đổi và tích hợp các website NukeViet rời rạc vào NukeViet Edu Gate của Phòng và Sở có thể thực hiện dễ dàng và giữ nguyên toàn bộ dữ liệu.<br  /><br  />Trường hợp các đơn vị có website và nhưng không sử dụng NukeViet cũng có thể chuyển đổi sang sử dụng NukeViet để hợp nhất vào hệ thống cổng thông tin giáo dục cấp Phòng, Sở. Tuy nhiên mức độ và tỉ lệ dữ liệu được chuyển đổi thành công sẽ phụ thuộc vào tình hình thực tế của từng website.</div></div>', '', '', NULL, 2, '', 0, 1, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_detail` (`id`, `titlesite`, `description`, `bodyhtml`, `keywords`, `sourcetext`, `files`, `imgposition`, `layout_func`, `copyright`, `allowed_send`, `allowed_print`, `allowed_save`) VALUES (18, '', '', '<p dir=\"ltr\" style=\"text-align: justify;\">Trải qua hơn 10 năm phát triển, từ một mã nguồn chỉ mang tính cá nhân, NukeViet đã phát triển thành công theo hướng cộng đồng. Năm 2010, NukeViet 3 ra đời đánh dấu một mốc lớn trong quá trình đi lên của NukeViet, phát triển theo hướng chuyên nghiệp với sự hậu thuẫn của Công ty cổ phần phát triển nguồn mở Việt Nam (VINADES.,JSC). NukeViet 3 đã và được sử dụng rộng rãi trong cộng đồng, từ các cổng thông tin tổ chức, hệ thống giáo dục, cho đến các website cá nhân, thương mại, mang lại các trải nghiệm vượt trội của mã nguồn thương hiệu Việt so với các mã nguồn nổi tiếng khác trên thế giới.<br  /><br  />Năm 2016, NukeViet 4 ra đời được xem là một cuộc cách mạng lớn trong chuỗi sự kiện phát triển NukeViet, cũng như xu thế công nghệ hiện tại. Hệ thống gần như được đổi mới hoàn toàn từ nhân hệ thống đến giao diện, nâng cao đáng kể hiệu suất và trải nghiệm người dùng.<br  /><br  /><span style=\"line-height: 1.6;\"><strong>Dưới đây là một số thay đổi của NukeViet 4.</strong></span><br  /><strong><span style=\"line-height: 1.6;\">Các thay đổi từ nhân hệ thống:</span></strong></p><ul>	<li dir=\"ltr\">	<p dir=\"ltr\" style=\"text-align: justify;\"><strong>Các công nghệ mới được áp dụng.</strong></p>	<ul>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Sử dụng composer để quản lý các thư viện PHP được cài vào hệ thống.</p>		</li>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Từng bước áp dụng &nbsp;các tiêu chuẩn viết code PHP theo khuyến nghị của <a href=\"http://www.php-fig.org/psr/\">http://www.php-fig.org/psr/</a></p>		</li>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Sử dụng PDO để thay cho extension MySQL.</p>		</li>	</ul>	</li></ul><ul>	<li dir=\"ltr\">	<p dir=\"ltr\" style=\"text-align: justify;\"><strong>Tăng cường khả năng bảo mật</strong></p>	<ul>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Sau khi các chuyên giả bảo mật của HP gửi đánh giá, chúng tôi đã tối ưu NukeViet 4.0 để hệ thống an toàn hơn.</p>		</li>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Mã hóa các mật khẩu lưu trữ trong hệ thống: Các mật khẩu như FTP, SMTP,... đã được mã hóa, bảo mật thông tin người dùng.</p>		</li>	</ul>	</li></ul><ul>	<li dir=\"ltr\">	<p dir=\"ltr\" style=\"text-align: justify;\"><strong>Tối ưu SEO:</strong></p>	<ul>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">SEO được xem là một trong những ưu tiên hàng đầu được phát triển trong phiên bản này. NukeViet 4 tập trung tối ưu hóa SEO Onpage mạnh mẽ. Các công cụ hỗ trợ SEO được tập hợp lại qua module “Công cụ SEO”. Các chức năng được thêm mới:</p>		<ul>			<li dir=\"ltr\">			<p dir=\"ltr\" style=\"text-align: justify;\">Loại bỏ tên module khỏi URL khi không dùng đa ngôn ngữ</p>			</li>			<li dir=\"ltr\">			<p dir=\"ltr\" style=\"text-align: justify;\">Cho phép đổi đường dẫn module</p>			</li>			<li dir=\"ltr\">			<p dir=\"ltr\" style=\"text-align: justify;\">Thêm chức năng xác thực Google+ (Bản quyền tác giả)</p>			</li>			<li dir=\"ltr\">			<p dir=\"ltr\" style=\"text-align: justify;\">Thêm chức năng ping đến các công cụ tìm kiếm: Submit url mới đến google để việc hiển thị bài viết mới lên kết quả tìm kiếm nhanh chóng hơn.</p>			</li>			<li dir=\"ltr\">			<p dir=\"ltr\" style=\"text-align: justify;\">Hỗ trợ Meta OG của facebook</p>			</li>			<li dir=\"ltr\">			<p dir=\"ltr\" style=\"text-align: justify;\">Hỗ trợ chèn Meta GEO qua Cấu hình Meta-Tags</p>			</li>		</ul>		</li>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Cùng với đó, các module cũng được tối ưu hóa bằng các form hỗ trợ khai báo tiêu đề, mô tả (description), từ khóa (keywods) cho từng khu vực, từng trang. &nbsp;</p>		</li>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Với sự hỗ trợ tối đa này, người quản trị (admin) có thể tùy biến lại website theo phong cách SEO riêng biệt.</p>		</li>	</ul>	</li>	<li dir=\"ltr\">	<p dir=\"ltr\" style=\"text-align: justify;\"><strong>Thay đổi giao diện, sử dụng giao diện tuỳ biến</strong></p>	<ul>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Giao diện trong NukeViet 4 được làm mới, tương thích với nhiều màn hình hơn.</p>		</li>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Sử dụng thư viện bootstrap để việc phát triển giao diện thống nhất và dễ dàng hơn.</p>		</li>	</ul>	</li>	<li dir=\"ltr\">	<p dir=\"ltr\" style=\"text-align: justify;\"><strong>Hệ thống nhận thông báo:&nbsp;</strong><span style=\"line-height: 1.6;\">Có thể gọi đây là một tiện ích nhỏ, song nó rất hữu dụng để admin tương tác với hệ thống một cách nhanh chóng. Admin có thể nhận thông báo từ hệ thống (hoặc từ module) khi có sự kiện nào đó.</span></p>	</li></ul><p dir=\"ltr\" style=\"text-align: justify; margin-left: 40px;\"><strong>Ví dụ:</strong> Khi có khách gửi liên hệ (qua module contact) đến thì hệ thống xuất hiện biểu tượng thông báo “Có liên hệ mới” ở góc phải, Admin sẽ nhận được ngay lập tức thông báo khi người dùng đang ở Admin control panel (ACP).</p><ul>	<li dir=\"ltr\">	<p dir=\"ltr\" style=\"text-align: justify;\"><strong>Thay đổi cơ chế quản lý block:</strong></p>	<ul>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Nhận thấy việc hiển thị block ở lightbox trong NukeViet 3 dẫn đến một số bất tiện trong quá trình quản lý, NukeViet 4 đã thay thế cách hiển thị này ở dạng cửa sổ popup. Dễ nhận thấy sự thay đổi này khi admin thêm (hoặc sửa) một block nào đó.</p>		</li>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">“Cấu hình hiển thị block trên các thiết bị” cũng được đưa vào phần cấu hình block, admin có thể tùy chọn cho phép block hiển thị trên các thiết bị nào (tất cả thiết bị, thiết bị di động, máy tính bảng, thiết bị khác).<span style=\"line-height: 1.6;\">&nbsp;</span></p>		</li>	</ul>	</li></ul><ul>	<li dir=\"ltr\">	<p dir=\"ltr\" style=\"text-align: justify;\"><strong>Thêm ngôn ngữ tiếng Pháp:</strong> website cài đặt mới có sẵn 3 ngôn ngữ mặc định là Việt, Anh và Pháp.</p>	</li></ul><p dir=\"ltr\" style=\"text-align: justify;\"><strong>Các thay đổi của module:</strong></p><ul>	<li dir=\"ltr\">	<p dir=\"ltr\" style=\"text-align: justify;\"><strong>Module menu:</strong></p>	<ul>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Phương án quản lý menu được thay đổi hướng tới việc quản lý menu nhanh chóng, tiện lợi nhất cho admin. Admin có thể nạp nhanh menu theo các tùy chọn mà hệ thống cung cấp.</p>		</li>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Mẫu menu cũng được thay đổi, đa dạng và hiển thị tốt với các giao diện hiện đại.</p>		</li>	</ul>	</li>	<li dir=\"ltr\">	<p dir=\"ltr\" style=\"text-align: justify;\"><strong>Module contact (Liên hệ):</strong></p>	<ul>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Bổ sung các trường thông tin về bộ phận (Điện thoại, fax, email, các trường liên hệ khác,...).</p>		</li>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Admin có thể trả lời khách nhiều lần, hệ thống lưu lại lịch sử trao đổi đó.</p>		</li>	</ul>	</li>	<li dir=\"ltr\">	<p dir=\"ltr\" style=\"text-align: justify;\"><strong>Module users (Tài khoản):</strong></p>	<ul>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Thay thế OpenID bằng thư viện OAuth - hỗ trợ tích hợp đăng nhập qua tài khoản mạng xã hội</p>		</li>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Cho phép đăng nhập 1 lần tài khoản người dùng NukeViet với Alfresco, Zimbra, Moodle, Koha</p>		</li>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Thêm chức năng tùy biến trường dữ liệu thành viên</p>		</li>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Thêm chức năng phân quyền sử dụng module users</p>		</li>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Thêm cấu hình: Số ký tự username, độ phức tạp mật khẩu, tạo mật khảu ngẫu nhiên,....</p>		</li>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Cho phép sử dụng tên truy cập, hoặc email để đăng nhập</p>		</li>	</ul>	</li>	<li dir=\"ltr\">	<p dir=\"ltr\" style=\"text-align: justify;\"><strong>Module about:</strong></p>	<ul>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Module about ở NukeViet 3 được đổi tên thành module page</p>		</li>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Thêm các cấu hình hỗ trợ SEO: Ảnh minh họa, chú thích ảnh minh họa, mô tả, từ khóa cho bài viết, hiển thị các công cụ tương tác với các mạng xã hội.</p>		</li>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Thêm RSS</p>		</li>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Cấu hình phương án hiển thị các bài viết trên trang chính</p>		</li>	</ul>	</li>	<li dir=\"ltr\">	<p dir=\"ltr\" style=\"text-align: justify;\"><strong>Module news (Tin tức):</strong></p>	<ul>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Thêm phân quyền cho người quản lý module, đến từng chủ đề</p>		</li>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Thay đổi phương án lọc từ khóa bài viết, lọc từ khóa theo các từ khóa đã có trong tags thay vì đọc từ từ điển.</p>		</li>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Bổ sung các trạng thái bài viết</p>		</li>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Thêm cấu hình mặc định hiển thị ảnh minh họa trên trang xem chi tiết bài viết</p>		</li>		<li dir=\"ltr\">		<p dir=\"ltr\" style=\"text-align: justify;\">Thêm các công cụ tương tác với mạng xã &nbsp;hội.</p>		</li>	</ul>	</li></ul><p dir=\"ltr\" style=\"text-align: justify;\"><strong>Quản lý Bình luận</strong></p><ul>	<li dir=\"ltr\">	<p dir=\"ltr\" style=\"text-align: justify;\">Các bình luận của các module sẽ được tích hợp quản lý tập trung để cấu hình.</p>	</li>	<li dir=\"ltr\" style=\"text-align: justify;\">Khi xây dựng mới module, Chỉ cần nhúng 1 đoạn mã vào. Tránh phải việc copy mã code gây khó khăn cho bảo trì.</li></ul>', '', '', NULL, 2, '', 0, 1, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_detail` (`id`, `titlesite`, `description`, `bodyhtml`, `keywords`, `sourcetext`, `files`, `imgposition`, `layout_func`, `copyright`, `allowed_send`, `allowed_print`, `allowed_save`) VALUES (19, '', '', '<strong>Hệ thống:</strong><br  />- Sửa code theo khuyến nghị của codacy: https://www.codacy.com/app/nukeviet/nukeviet/dashboard<br  />- Cải thiện an ninh hệ thống theo đánh giá của các phần mềm bảo mật OWASP ZAP 2.6<br  />- Cải tiến chức năng Rewrite<br  />- Thêm tính năng bật tắt sitemap cho các module<br  />- Thêm link hướng dẫn sử dụng website dẫn tới từng chức năng tại https://wiki.nukeviet.vn/<br  />- Cập nhật trình soạn thảo&nbsp; CKEditor 4.7.1 để hỗ trợ việc copy nội dung từ Word, Excel, Hỗ trợ việc kéo thả ảnh, file từ máy tính vào trình soạn thảo tốt hơn: http://ckeditor.com/blog/CKEditor-4.7-released<br  />- Tích hợp thêm <a href=\"https://nukeviet.vn/vi/news/Tin-tuc/nukeviet-4-1-se-ho-tro-redis-de-cache-435.html\">Redis để cache</a> cho hệ thống<br  /><br  /><strong>Module Tài khoản:</strong><br  />- Tùy biến các trường hệ thống của module users giúp quản trị có thể cho ẩn/hiện khi đăng ký và đổi tên các trường này.<br  />- Thêm chức năng&nbsp; xác thực hai bước cho từng nhóm thành viên, Cấu hình yêu cầu xác thực hai bước cho từng nhóm thành viên.<br  />- Tích hợp reCAPTCHA<br  /><br  /><strong>Module Tin tức:</strong><br  />- Thêm cấu hình có bật tính năng copy bài viết, để dùng module này đăng cái bài viết có cạc trình bày tương tự nhau.<br  />- Cải thiện tính năng cho bài viết Facebook Instant Articles<br  />- Cảnh báo tránh cùng&nbsp; một lúc nhiều người sửa bài viết.<br  /><br  /><strong>Module banners</strong><br  />- Bỏ phần quản lý khách hàng tại quảng cáo, chuyển sang dùng tài khoản chung của site<br  />- Phần cấu hình khối quảng cáo được viết lại để cấu hình nhóm&nbsp; thành viên được đăng quảng cáo ngoài site, sau đó quản trị duyệt lại quảng cáo để hiển thị ngoài site.<br  />- Thêm cấu hình về thời gian chung áp dụng cho quảng cáo theo khối.<br  />- Sửa lại link quản cáo để tránh các click ảo.<br  />- Sửa hiển thị quản lý quảng cáo để tiện quản lý hơn.<br  /><br  />Và nhiều cập nhật sửa lỗi khác, xem chi tiết tại: https://github.com/nukeviet/nukeviet/blob/develop/CHANGELOG.txt<br  />', '', 'https://nukeviet.vn/vi/news/Tin-tuc/nukeviet-4-2-co-gi-moi-505.html', NULL, 2, '', 0, 1, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_detail` (`id`, `titlesite`, `description`, `bodyhtml`, `keywords`, `sourcetext`, `files`, `imgposition`, `layout_func`, `copyright`, `allowed_send`, `allowed_print`, `allowed_save`) VALUES (20, '', '', '<strong>Hệ thống:</strong><br  />- Thay đổi phần quản lý block để dễ dùng hơn khi module có quá nhiều chức năng.<br  />- Thêm các tham số cấu hình&nbsp; SSL cho&nbsp; SMTP<br  />- Module Upload: Thêm cấu hình có thể chia nhỏ các file khi upload để có thể upload<br  />- Plugin:Thêm vị trí chạy sau khi thực hiện module, cải tiến mỗi Plugin sẽ chạy được ở các vị trí nhất định theo người lập trình quy định.<br  />- Tích hợp thêm thư viện PDF.js<br  />- Thêm tính năng xuất dữ liệu mẫu để khi tiết hành cài đặt có thể dựng luôn site hoàn chỉnh tường tự như cài đặt NukeViet eGovernment<br  /><br  /><strong>Module comment: </strong><br  />- Cho phép cấu hình có sử dụng trình soạn thảo ở phần bình luận hay không.<br  />- Cho phép cấu hình có sử dụng file đính kèm ở phần bình luận hay không.<br  />- Module news: Allow deactive category, allow search for locked posts, Allows attaching files to posts<br  />- Config module display on admin index for authors<br  />&nbsp;<br  /><strong>Module Tài khoản:</strong><br  />- Module users: Allowed to delete and change status multiple account, fix block login, update Openid icon, fix sort groups, fix delete group<br  />- Người điều hành chung của site có thể cấu hình 1 số thông số. (Lúc trước chỉ quản trị tối cao mới cấu hình được)<br  />- Với mỗi tài khoản quản trị, có thể chọn module mặc định sau khi đăng nhập quản trị.<br  /><br  /><strong>Module Tin tức:</strong><br  />-&nbsp; Thay đổi chức năng quản lý chủ đề có thể: Hiển thị trên trang chủ, không hiển thị trên trang chủ hoặc Khóa chủ đề.<br  />-&nbsp; Cho phép đính kèm file vào các bài viết (Không cần thông qua trình soạn thảo)<br  />- Thêm tính năng sắp xếp các bài viết.<br  />- Cho phép cấu hình layout khi xem chi tiết bài viết (Tưong tự module page đã có trước)<br  /><br  /><strong>Module page</strong><br  />-&nbsp; Thêm cấu hình alias lower khi thêm bài viết mới.<br  /><br  />Và nhiều cập nhật sửa lỗi khác, xem chi tiết tại: <a href=\"https://github.com/nukeviet/nukeviet/blob/develop/CHANGELOG.txt\">https://github.com/nukeviet/nukeviet/blob/develop/CHANGELOG.txt</a>', '', 'https://nukeviet.vn/vi/news/Tin-tuc/nukeviet-4-3-co-gi-moi-540.html', NULL, 2, '', 0, 1, 1, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_logs`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_logs` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `sid` mediumint(8) NOT NULL DEFAULT 0,
  `userid` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `note` varchar(255) NOT NULL,
  `set_time` int(11) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `sid` (`sid`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_rows`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_rows` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT 0,
  `listcatid` varchar(255) NOT NULL DEFAULT '',
  `topicid` smallint(5) unsigned NOT NULL DEFAULT 0,
  `admin_id` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `author` varchar(250) DEFAULT '',
  `sourceid` mediumint(8) NOT NULL DEFAULT 0,
  `addtime` int(11) unsigned NOT NULL DEFAULT 0,
  `edittime` int(11) unsigned NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `weight` int(11) unsigned NOT NULL DEFAULT 0,
  `publtime` int(11) unsigned NOT NULL DEFAULT 0,
  `exptime` int(11) unsigned NOT NULL DEFAULT 0,
  `archive` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `hometext` text NOT NULL,
  `homeimgfile` varchar(255) DEFAULT '',
  `homeimgalt` varchar(255) DEFAULT '',
  `homeimgthumb` tinyint(4) NOT NULL DEFAULT 0,
  `inhome` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `allowed_comm` varchar(255) DEFAULT '',
  `allowed_rating` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `external_link` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `hitstotal` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `hitscm` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `total_rating` int(11) NOT NULL DEFAULT 0,
  `click_rating` int(11) NOT NULL DEFAULT 0,
  `instant_active` tinyint(1) NOT NULL DEFAULT 0,
  `instant_template` varchar(100) NOT NULL DEFAULT '',
  `instant_creatauto` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `catid` (`catid`),
  KEY `topicid` (`topicid`),
  KEY `admin_id` (`admin_id`),
  KEY `author` (`author`),
  KEY `title` (`title`),
  KEY `addtime` (`addtime`),
  KEY `edittime` (`edittime`),
  KEY `publtime` (`publtime`),
  KEY `exptime` (`exptime`),
  KEY `status` (`status`),
  KEY `instant_active` (`instant_active`),
  KEY `instant_creatauto` (`instant_creatauto`)
) ENGINE=MyISAM  AUTO_INCREMENT=21  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_rows` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (1, 1, '1,8,12', 0, 1, 'Quỳnh Nhi', 1, 1274989177, 1275318126, 1, 1, 1274989140, 0, 2, 'Ra mắt công ty mã nguồn mở đầu tiên tại Việt Nam', 'Ra-mat-cong-ty-ma-nguon-mo-dau-tien-tai-Viet-Nam', 'Mã nguồn mở NukeViet vốn đã quá quen thuộc với cộng đồng CNTT Việt Nam trong mấy năm qua. Tuy chưa hoạt động chính thức, nhưng chỉ trong khoảng 5 năm gần đây, mã nguồn mở NukeViet đã được dùng phổ biến ở Việt Nam, áp dụng ở hầu hết các lĩnh vực, từ tin tức đến thương mại điện tử, từ các website cá nhân cho tới những hệ thống website doanh nghiệp.', '', 'Thành lập VINADES.,JSC', 0, 1, '6', 1, 0, 2, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_rows` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (6, 12, '1,12', 0, 1, 'Nguyễn Thế Hùng', 7, 1453192444, 1453192444, 1, 12, 1453192444, 0, 2, 'Hãy trở thành nhà cung cấp dịch vụ của NukeViet&#33;', 'hay-tro-thanh-nha-cung-cap-dich-vu-cua-nukeviet', 'Nếu bạn là công ty hosting, là công ty thiết kế web có sử dụng mã nguồn NukeViet, là cơ sở đào tạo NukeViet hay là công ty bất kỳ có kinh doanh dịch vụ liên quan đến NukeViet... hãy cho chúng tôi biết thông tin liên hệ của bạn để NukeViet hỗ trợ bạn trong công việc kinh doanh nhé!', 'hoptac.jpg', '', 1, 1, '6', 1, 0, 13, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_rows` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (7, 11, '11', 0, 1, 'Phạm Quốc Tiến', 2, 1453192400, 1453192400, 1, 11, 1453192400, 0, 2, 'Tuyển dụng lập trình viên PHP phát triển NukeViet', 'Tuyen-dung-lap-trinh-vien-PHP', 'Bạn đam mê nguồn mở? Bạn đang cần tìm một công việc phù hợp với thế mạnh của bạn về PHP và MySQL? Hãy gia nhập VINADES.,JSC để xây dựng mã nguồn mở hàng đầu cho Việt Nam.', '', 'Tuyển dụng', 0, 1, '6', 1, 0, 0, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_rows` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (8, 11, '11', 0, 1, 'Phạm Quốc Tiến', 0, 1445391089, 1445394192, 1, 5, 1445391060, 0, 2, 'Tuyển dụng chuyên viên đồ hoạ phát triển NukeViet', 'Tuyen-dung-chuyen-vien-do-hoa', 'Bạn đam mê nguồn mở? Bạn là chuyên gia đồ họa? Chúng tôi sẽ giúp bạn hiện thực hóa ước mơ của mình với một mức lương đảm bảo. Hãy gia nhập VINADES.,JSC để xây dựng mã nguồn mở hàng đầu cho Việt Nam.', '', 'Tuyển dụng', 0, 1, '6', 1, 0, 0, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_rows` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (9, 11, '11', 0, 1, 'Phạm Quốc Tiến', 0, 1445391090, 1445394193, 1, 6, 1445391060, 0, 2, 'Tuyển dụng lập trình viên front-end (HTML/CSS/JS) phát triển NukeViet', 'Tuyen-dung-lap-trinh-vien-front-end-HTML-CSS-JS', 'Bạn đam mê nguồn mở? Bạn đang cần tìm một công việc phù hợp với thế mạnh của bạn về front-end (HTML/CSS/JS)? Hãy gia nhập VINADES.,JSC để xây dựng mã nguồn mở hàng đầu cho Việt Nam.', '', 'Tuyển dụng', 0, 1, '6', 1, 0, 0, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_rows` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (10, 1, '1,9', 0, 1, '', 3, 1322685920, 1322686042, 1, 2, 1322685920, 0, 2, 'Mã nguồn mở NukeViet giành giải ba Nhân tài đất Việt 2011', 'Ma-nguon-mo-NukeViet-gianh-giai-ba-Nhan-tai-dat-Viet-2011', 'Không có giải nhất và giải nhì, sản phẩm Mã nguồn mở NukeViet của VINADES.,JSC là một trong ba sản phẩm đã đoạt giải ba Nhân tài đất Việt 2011 - Lĩnh vực Công nghệ thông tin (Sản phẩm đã ứng dụng rộng rãi).', '', 'Mã nguồn mở NukeViet giành giải ba Nhân tài đất Việt 2011', 0, 1, '6', 1, 0, 1, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_rows` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (11, 1, '1', 0, 1, '', 4, 1445309676, 1445309676, 1, 3, 1445309520, 0, 2, 'NukeViet được ưu tiên mua sắm, sử dụng trong cơ quan, tổ chức nhà nước', 'nukeviet-duoc-uu-tien-mua-sam-su-dung-trong-co-quan-to-chuc-nha-nuoc', 'Ngày 5/12/2014, Bộ trưởng Bộ TT&TT Nguyễn Bắc Son đã ký ban hành Thông tư 20/2014/TT-BTTTT (Thông tư 20) quy định về các sản phẩm phần mềm nguồn mở (PMNM) được ưu tiên mua sắm, sử dụng trong cơ quan, tổ chức nhà nước. NukeViet (phiên bản 3.4.02 trở lên) là phần mềm được nằm trong danh sách này.', '', 'NukeViet được ưu tiên mua sắm, sử dụng trong cơ quan, tổ chức nhà nước', 0, 1, '4', 1, 0, 2, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_rows` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (12, 11, '11', 0, 1, 'Vũ Bích Ngọc', 0, 1445391061, 1445394203, 1, 4, 1445391000, 0, 2, 'Công ty VINADES tuyển dụng nhân viên kinh doanh', 'cong-ty-vinades-tuyen-dung-nhan-vien-kinh-doanh', 'Công ty cổ phần phát triển nguồn mở Việt Nam là đơn vị chủ quản của phần mềm mã nguồn mở NukeViet - một mã nguồn được tin dùng trong cơ quan nhà nước, đặc biệt là ngành giáo dục. Chúng tôi cần tuyển 05 nhân viên kinh doanh cho lĩnh vực này.', '', '', 0, 1, '4', 1, 0, 0, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_rows` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (14, 1, '1,11', 0, 1, 'Trần Thị Thu', 0, 1445391118, 1445394180, 1, 7, 1445391060, 0, 2, 'Chương trình thực tập sinh tại công ty VINADES', 'chuong-trinh-thuc-tap-sinh-tai-cong-ty-vinades', 'Cơ hội để những sinh viên năng động được học tập, trải nghiệm, thử thách sớm với những tình huống thực tế, được làm việc cùng các chuyên gia có nhiều kinh nghiệm của công ty VINADES.', '', '', 0, 1, '4', 1, 0, 0, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_rows` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (15, 11, '11', 0, 1, 'Trần Thị Thu', 0, 1445391135, 1445394444, 1, 8, 1445391120, 0, 2, 'Học việc tại công ty VINADES', 'hoc-viec-tai-cong-ty-vinades', 'Công ty cổ phần phát triển nguồn mở Việt Nam tạo cơ hội việc làm và học việc miễn phí cho những ứng viên có đam mê thiết kế web, lập trình PHP… được học tập và rèn luyện cùng đội ngũ lập trình viên phát triển NukeViet.', '', '', 0, 1, '4', 1, 0, 0, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_rows` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (16, 1, '1', 0, 1, '', 0, 1445391182, 1445394133, 1, 9, 1445391120, 0, 2, 'NukeViet được Bộ GD&amp;ĐT đưa vào Hướng dẫn thực hiện nhiệm vụ CNTT năm học 2015 - 2016', 'nukeviet-duoc-bo-gd-dt-dua-vao-huong-dan-thuc-hien-nhiem-vu-cntt-nam-hoc-2015-2016', 'Trong Hướng dẫn thực hiện nhiệm vụ CNTT năm học 2015 - 2016 của Bộ Giáo dục và Đào tạo, NukeViet được đưa vào các hạng mục: Tập huấn sử dụng phần mềm nguồn mở cho giáo viên và cán bộ quản lý giáo dục; Khai thác, sử dụng và dạy học; đặc biệt phần &quot;khuyến cáo khi sử dụng các hệ thống CNTT&quot; có chỉ rõ &quot;Không nên làm website mã nguồn đóng&quot; và &quot;Nên làm NukeViet: phần mềm nguồn mở&quot;.', '', '', 0, 1, '4', 1, 0, 0, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_rows` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (17, 1, '1,10', 0, 1, '', 0, 1445391217, 1445393997, 1, 10, 1445391180, 0, 2, 'Hỗ trợ tập huấn và triển khai NukeViet cho các Phòng, Sở GD&amp;ĐT', 'ho-tro-tap-huan-va-trien-khai-nukeviet-cho-cac-phong-so-gd-dt', 'Trên cơ sở Hướng dẫn thực hiện nhiệm vụ CNTT năm học 2015 - 2016 của Bộ Giáo dục và Đào tạo, Công ty cổ phần phát triển nguồn mở Việt Nam và các doanh nghiệp phát triển NukeViet trong cộng đồng NukeViet đang tích cực công tác hỗ trợ cho các phòng GD&ĐT, Sở GD&ĐT triển khai 2 nội dung chính: Hỗ trợ công tác đào tạo tập huấn hướng dẫn sử dụng NukeViet và Hỗ trợ triển khai NukeViet cho các trường, Phòng và Sở GD&ĐT', '', 'Tập huấn triển khai NukeViet tại Phòng Giáo dục và Đào tạo Hà Đông - Hà Nội', 0, 1, '4', 1, 0, 1, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_rows` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (18, 2, '2', 0, 1, 'VINADES', 0, 1453194455, 1453194455, 1, 13, 1453194455, 0, 2, 'NukeViet 4.0 có gì mới?', 'nukeviet-4-0-co-gi-moi', 'NukeViet 4 là phiên bản NukeViet được cộng đồng đánh giá cao, hứa hẹn nhiều điểm vượt trội về công nghệ đến thời điểm hiện tại. NukeViet 4 thay đổi gần như hoàn toàn từ nhân hệ thống đến chức năng, giao diện người dùng. Vậy, có gì mới trong phiên bản này?', '', '', 0, 1, '4', 1, 0, 2, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_rows` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (19, 2, '2', 0, 1, 'VINADES', 0, 1501837620, 1501837620, 1, 14, 1501837620, 0, 2, 'NukeViet 4.2 có gì mới?', 'nukeviet-4-2-co-gi-moi', 'NukeViet 4.2 là phiên bản nâng cấp của phiên bản NukeViet 4.0 tập trung vào việc fix các vấn đề bất cập còn tồn tại của NukeViet 4.0, Thêm các tính năng mới để tăng cường bảo mật của hệ thống cũng như tối ưu trải nghiệm của người dùng.', '', '', 0, 1, '4', 1, 1, 2, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_rows` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (20, 2, '2', 0, 1, 'VINADES', 0, 1510215907, 1510215907, 1, 15, 1510215907, 0, 2, 'NukeViet 4.3 có gì mới?', 'nukeviet-4-3-co-gi-moi', 'NukeViet 4.3 là phiên bản nâng cấp của phiên bản NukeViet 4.2 tập trung vào việc fix các vấn đề bất cập còn tồn tại, tối ưu trải nghiệm của người dùng.', '', '', 0, 1, '4', 1, 1, 2, 0, 0, 0, 0, '', 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_sources`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_sources` (
  `sourceid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL DEFAULT '',
  `link` varchar(255) DEFAULT '',
  `logo` varchar(255) DEFAULT '',
  `weight` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `add_time` int(11) unsigned NOT NULL,
  `edit_time` int(11) unsigned NOT NULL,
  PRIMARY KEY (`sourceid`),
  UNIQUE KEY `title` (`title`)
) ENGINE=MyISAM  AUTO_INCREMENT=5  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_sources` (`sourceid`, `title`, `link`, `logo`, `weight`, `add_time`, `edit_time`) VALUES (1, 'Báo Hà Nội Mới', 'http://hanoimoi.com.vn', '', 1, 1274989177, 1274989177)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_sources` (`sourceid`, `title`, `link`, `logo`, `weight`, `add_time`, `edit_time`) VALUES (2, 'VINADES.,JSC', 'http://vinades.vn', '', 2, 1274989787, 1274989787)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_sources` (`sourceid`, `title`, `link`, `logo`, `weight`, `add_time`, `edit_time`) VALUES (3, 'Báo điện tử Dân Trí', 'http://dantri.com.vn', '', 3, 1322685396, 1322685396)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_sources` (`sourceid`, `title`, `link`, `logo`, `weight`, `add_time`, `edit_time`) VALUES (4, 'Bộ Thông tin và Truyền thông', 'http://http://mic.gov.vn', '', 4, 1445309676, 1445309676)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_tags`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_tags` (
  `tid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `numnews` mediumint(8) NOT NULL DEFAULT 0,
  `alias` varchar(250) NOT NULL DEFAULT '',
  `image` varchar(255) DEFAULT '',
  `description` text DEFAULT NULL,
  `keywords` varchar(255) DEFAULT '',
  PRIMARY KEY (`tid`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  AUTO_INCREMENT=43  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (1, 0, 'nguồn-mở', '', '', 'nguồn mở')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (2, 0, 'quen-thuộc', '', '', 'quen thuộc')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (3, 0, 'cộng-đồng', '', '', 'cộng đồng')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (4, 0, 'việt-nam', '', '', 'việt nam')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (5, 0, 'hoạt-động', '', '', 'hoạt động')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (6, 0, 'tin-tức', '', '', 'tin tức')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (7, 1, 'thương-mại-điện', '', '', 'thương mại điện')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (8, 0, 'điện-tử', '', '', 'điện tử')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (9, 13, 'nukeviet', '', '', 'nukeviet')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (10, 8, 'vinades', '', '', 'vinades')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (11, 3, 'lập-trình-viên', '', '', 'lập trình viên')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (12, 3, 'chuyên-viên-đồ-họa', '', '', 'chuyên viên đồ họa')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (13, 3, 'php', '', '', 'php')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (14, 2, 'mysql', '', '', 'mysql')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (15, 1, 'nhân-tài-đất-việt-2011', '', '', 'nhân tài đất việt 2011')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (16, 9, 'mã-nguồn-mở', '', '', 'mã nguồn mở')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (17, 2, 'nukeviet4', '', '', 'nukeviet4')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (18, 1, 'mail', '', '', 'mail')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (19, 1, 'fpt', '', '', 'fpt')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (20, 1, 'smtp', '', '', 'smtp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (21, 1, 'bootstrap', '', '', 'bootstrap')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (22, 1, 'block', '', '', 'block')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (23, 1, 'modules', '', '', 'modules')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (24, 2, 'banner', '', '', 'banner')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (25, 1, 'liên-kết', '', '', 'liên kết')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (26, 2, 'hosting', '', '', 'hosting')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (27, 1, 'hỗ-trợ', '', '', 'hỗ trợ')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (28, 1, 'hợp-tác', '', '', 'hợp tác')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (29, 1, 'tốc-độ', '', '', 'tốc độ')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (30, 2, 'website', '', '', 'website')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (31, 1, 'bảo-mật', '', '', 'bảo mật')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (32, 4, 'giáo-dục', '', '', 'giáo dục')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (33, 1, 'edu-gate', '', '', 'edu gate')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (34, 2, 'lập-trình', '', '', 'lập trình')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (35, 1, 'logo', '', '', 'logo')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (36, 1, 'code', '', '', 'code')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (37, 1, 'thực-tập', '', '', 'thực tập')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (38, 1, 'kinh-doanh', '', '', 'kinh doanh')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (39, 1, 'nhân-viên', '', '', 'nhân viên')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (40, 1, 'bộ-gd&đt', '', '', 'Bộ GD&ĐT')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (41, 1, 'module', '', '', 'module')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags` (`tid`, `numnews`, `alias`, `image`, `description`, `keywords`) VALUES (42, 1, 'php-nuke', '', '', 'php-nuke')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_tags_id`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_tags_id` (
  `id` int(11) NOT NULL,
  `tid` mediumint(9) NOT NULL,
  `keyword` varchar(65) NOT NULL,
  UNIQUE KEY `id_tid` (`id`,`tid`),
  KEY `tid` (`tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (1, 7, 'thương mại điện')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (1, 9, 'nukeviet')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (7, 10, 'vinades')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (7, 9, 'nukeviet')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (7, 11, 'lập trình viên')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (7, 12, 'chuyên viên đồ họa')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (7, 13, 'php')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (7, 14, 'mysql')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (10, 15, 'Nhân tài đất Việt 2011')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (10, 16, 'mã nguồn mở')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (10, 9, 'nukeviet')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (18, 17, 'nukeviet4')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (18, 9, 'nukeviet')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (18, 10, 'vinades')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (18, 13, 'php')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (18, 14, 'mysql')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (18, 18, 'mail')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (18, 19, 'fpt')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (18, 20, 'smtp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (18, 21, 'bootstrap')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (18, 22, 'block')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (18, 23, 'modules')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (18, 16, 'mã nguồn mở')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (6, 16, 'mã nguồn mở')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (6, 9, 'nukeviet')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (6, 17, 'nukeviet4')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (6, 10, 'vinades')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (6, 24, 'banner')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (6, 25, 'liên kết')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (6, 26, 'hosting')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (6, 27, 'hỗ trợ')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (6, 28, 'hợp tác')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (17, 9, 'nukeviet')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (17, 32, 'giáo dục')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (17, 33, 'edu gate')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (15, 16, 'mã nguồn mở')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (15, 10, 'vinades')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (15, 9, 'nukeviet')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (15, 11, 'lập trình viên')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (15, 12, 'chuyên viên đồ họa')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (16, 9, 'nukeviet')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (16, 16, 'mã nguồn mở')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (16, 32, 'giáo dục')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (8, 10, 'vinades')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (8, 34, 'lập trình')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (8, 35, 'logo')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (8, 24, 'banner')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (8, 30, 'website')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (8, 36, 'code')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (8, 13, 'php')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (9, 16, 'mã nguồn mở')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (9, 10, 'vinades')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (9, 34, 'lập trình')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (9, 9, 'nukeviet')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (14, 37, 'thực tập')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (14, 10, 'vinades')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (14, 12, 'chuyên viên đồ họa')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (14, 11, 'lập trình viên')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (14, 9, 'nukeviet')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (14, 16, 'mã nguồn mở')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (12, 38, 'kinh doanh')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (12, 9, 'nukeviet')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (12, 32, 'giáo dục')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (12, 39, 'nhân viên')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (11, 16, 'mã nguồn mở')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (11, 9, 'nukeviet')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (11, 40, 'Bộ GD&ĐT')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (11, 32, 'giáo dục')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (1, 41, 'module')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (1, 16, 'mã nguồn mở')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_tags_id` (`id`, `tid`, `keyword`) VALUES (1, 42, 'php-nuke')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_tmp`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_tmp` (
  `id` mediumint(8) unsigned NOT NULL,
  `admin_id` int(11) NOT NULL DEFAULT 0,
  `time_edit` int(11) NOT NULL,
  `time_late` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_topics`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_topics` (
  `topicid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `image` varchar(255) DEFAULT '',
  `description` varchar(255) DEFAULT '',
  `weight` smallint(5) NOT NULL DEFAULT 0,
  `keywords` text DEFAULT NULL,
  `add_time` int(11) NOT NULL DEFAULT 0,
  `edit_time` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`topicid`),
  UNIQUE KEY `title` (`title`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  AUTO_INCREMENT=2  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_topics` (`topicid`, `title`, `alias`, `image`, `description`, `weight`, `keywords`, `add_time`, `edit_time`) VALUES (1, 'NukeViet 4', 'NukeViet-4', '', 'NukeViet 4', 1, 'NukeViet 4', 1445396011, 1445396011)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_notification_register`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_notification_register` (
  `userid` mediumint(8) unsigned NOT NULL,
  `endpoint` varchar(100) NOT NULL,
  UNIQUE KEY `userid` (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_notification_register` (`userid`, `endpoint`) VALUES (1, ' err e eg')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_page`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_page` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `alias` varchar(250) NOT NULL,
  `image` varchar(255) DEFAULT '',
  `imagealt` varchar(255) DEFAULT '',
  `imageposition` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `description` text DEFAULT NULL,
  `bodytext` mediumtext NOT NULL,
  `keywords` text DEFAULT NULL,
  `socialbutton` tinyint(4) NOT NULL DEFAULT 0,
  `activecomm` varchar(255) DEFAULT '',
  `layout_func` varchar(100) DEFAULT '',
  `weight` smallint(4) NOT NULL DEFAULT 0,
  `admin_id` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `add_time` int(11) NOT NULL DEFAULT 0,
  `edit_time` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `hitstotal` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `hot_post` tinyint(1) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_page_config`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_page_config` (
  `config_name` varchar(30) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  UNIQUE KEY `config_name` (`config_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_page_config` (`config_name`, `config_value`) VALUES ('viewtype', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_page_config` (`config_name`, `config_value`) VALUES ('facebookapi', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_page_config` (`config_name`, `config_value`) VALUES ('per_page', '20')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_page_config` (`config_name`, `config_value`) VALUES ('news_first', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_page_config` (`config_name`, `config_value`) VALUES ('related_articles', '5')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_page_config` (`config_name`, `config_value`) VALUES ('copy_page', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_page_config` (`config_name`, `config_value`) VALUES ('alias_lower', '1')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_products`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_products` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `catid` smallint(4) unsigned NOT NULL,
  `price` double unsigned NOT NULL,
  `vat` double unsigned NOT NULL DEFAULT 0,
  `price_unit` tinyint(1) NOT NULL,
  `url` text NOT NULL,
  `active` tinyint(1) unsigned NOT NULL DEFAULT 1,
  `note` text NOT NULL,
  `weight` smallint(4) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_products_cat`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_products_cat` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `weight` smallint(4) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=2  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_products_price_unit`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_products_price_unit` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `active` tinyint(1) unsigned NOT NULL DEFAULT 1,
  `weight` tinyint(2) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_projects`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_projects` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `customerid` mediumint(8) unsigned NOT NULL COMMENT 'ID khách hàng',
  `workforceid` varchar(255) NOT NULL COMMENT 'Nhân viên phụ trách',
  `title` varchar(255) NOT NULL,
  `begintime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL DEFAULT 0,
  `realtime` int(11) unsigned NOT NULL DEFAULT 0,
  `price` double unsigned NOT NULL DEFAULT 0,
  `vat` double unsigned NOT NULL DEFAULT 0,
  `url_code` text NOT NULL,
  `content` text NOT NULL,
  `files` text NOT NULL,
  `useradd` smallint(4) unsigned NOT NULL COMMENT 'Nhân viên tạo',
  `addtime` int(11) unsigned NOT NULL,
  `edittime` int(11) unsigned NOT NULL DEFAULT 0,
  `status` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `type_id` smallint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=20  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_projects_econtent`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_projects_econtent` (
  `action` varchar(100) NOT NULL,
  `econtent` text NOT NULL,
  PRIMARY KEY (`action`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_projects_econtent` (`action`, `econtent`) VALUES ('new_project', 'Xin chào <strong>&#91;CUSTOMER_LAST_NAME&#93; &#91;CUSTOMER_FISRT_NAME&#93;</strong>. Dự án&nbsp;<strong>&#91;TITLE&#93;</strong> đã được khởi tạo tại <strong>&#91;SITE_NAME&#93;</strong>. Dưới đây là thông tin chi tiết về dự án.
<ul>
	<li><strong>Tên dự án:</strong>&nbsp;&#91;TITLE&#93;</li>
	<li><strong>Thời gian bắt đầu: </strong>&#91;BEGIN_TIME&#93;</li>
	<li><strong>Thời gian hoàn thành (dự kiến):</strong>&nbsp;&#91;END_TIME&#93;</li>
	<li><strong>Trạng thái:&nbsp;</strong>&#91;STATUS&#93;</li>
</ul>
&#91;CONTENT&#93;<br  />
<br  />
Mọi thông tin, hoạt động đến dự án sẽ được thông báo qua thư này.<br  />
Chúc quý khách hàng một ngày làm làm việc hiệu quả!')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_projects_econtent` (`action`, `econtent`) VALUES ('print', '<div style=\"line-height: 27px\">
<div style=\"text-align: center;\"><span style=\"font-size:18px;\"><strong>THÔNG TIN DỰ ÁN</strong></span></div>

<div style=\"text-align: center;\"><strong>&#91;TITLE&#93;</strong></div>
<br  />
Danh mục dự án:&nbsp;<strong>&#91;CAT&#93;</strong><br  />
Họ tên khách hàng:&nbsp;<strong>&#91;CUSTOMER_FULLNAME&#93;</strong><br  />
Thời gian bắt đầu:&nbsp;<strong>&#91;BEGIN_TIME&#93;</strong><br  />
Thời gian hoàn thành dự kiến:&nbsp;<strong>&#91;END_TIME&#93;</strong><br  />
Thời gian hoàn thành thực tế:&nbsp;<strong>&#91;REAL_TIME&#93;</strong><br  />
Chi phí:&nbsp;<strong>&#91;PRICE&#93;</strong><br  />
Thuế:&nbsp;<strong>&#91;VAT&#93;%</strong><br  />
<strong>&#91;STATUS&#93;</strong>: Trạng thái<br  />
<br  />
&#91;CONTENT&#93;</div>')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_projects_field`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_projects_field` (
  `fid` mediumint(8) NOT NULL AUTO_INCREMENT,
  `field` varchar(25) NOT NULL,
  `weight` int(10) unsigned NOT NULL DEFAULT 1,
  `field_type` enum('number','date','textbox','textarea','editor','select','radio','checkbox','multiselect') NOT NULL DEFAULT 'textbox',
  `field_choices` text NOT NULL,
  `sql_choices` text NOT NULL,
  `match_type` enum('none','alphanumeric','email','url','regex','callback') NOT NULL DEFAULT 'none',
  `match_regex` varchar(250) NOT NULL DEFAULT '',
  `func_callback` varchar(75) NOT NULL DEFAULT '',
  `min_length` int(11) NOT NULL DEFAULT 0,
  `max_length` bigint(20) unsigned NOT NULL DEFAULT 0,
  `required` tinyint(3) unsigned NOT NULL DEFAULT 0,
  `show_profile` tinyint(4) NOT NULL DEFAULT 1,
  `class` varchar(50) NOT NULL DEFAULT '',
  `language` text NOT NULL,
  `default_value` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`fid`),
  UNIQUE KEY `field` (`field`)
) ENGINE=MyISAM  AUTO_INCREMENT=4  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_projects_info`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_projects_info` (
  `rows_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`rows_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_projects_performer`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_projects_performer` (
  `projectid` int(11) unsigned NOT NULL,
  `userid` mediumint(8) unsigned NOT NULL,
  `follow` tinyint(1) unsigned NOT NULL DEFAULT 1,
  UNIQUE KEY `projectid` (`projectid`,`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_projects_task`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_projects_task` (
  `taskid` int(11) unsigned NOT NULL,
  `projectid` mediumint(8) unsigned NOT NULL,
  `weight` smallint(4) unsigned NOT NULL DEFAULT 0,
  UNIQUE KEY `taskid` (`taskid`,`projectid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_projects_types`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_projects_types` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT 'Loại dự án',
  `note` text NOT NULL COMMENT 'Ghi chú',
  `weight` smallint(4) unsigned NOT NULL,
  `active` tinyint(1) unsigned NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=2  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_referer_stats`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_referer_stats` (
  `host` varchar(250) NOT NULL,
  `total` int(11) NOT NULL DEFAULT 0,
  `month01` int(11) NOT NULL DEFAULT 0,
  `month02` int(11) NOT NULL DEFAULT 0,
  `month03` int(11) NOT NULL DEFAULT 0,
  `month04` int(11) NOT NULL DEFAULT 0,
  `month05` int(11) NOT NULL DEFAULT 0,
  `month06` int(11) NOT NULL DEFAULT 0,
  `month07` int(11) NOT NULL DEFAULT 0,
  `month08` int(11) NOT NULL DEFAULT 0,
  `month09` int(11) NOT NULL DEFAULT 0,
  `month10` int(11) NOT NULL DEFAULT 0,
  `month11` int(11) NOT NULL DEFAULT 0,
  `month12` int(11) NOT NULL DEFAULT 0,
  `last_update` int(11) NOT NULL DEFAULT 0,
  UNIQUE KEY `host` (`host`),
  KEY `total` (`total`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_referer_stats` (`host`, `total`, `month01`, `month02`, `month03`, `month04`, `month05`, `month06`, `month07`, `month08`, `month09`, `month10`, `month11`, `month12`, `last_update`) VALUES ('mail.google.com', 15, 4, 10, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1525499947)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_referer_stats` (`host`, `total`, `month01`, `month02`, `month03`, `month04`, `month05`, `month06`, `month07`, `month08`, `month09`, `month10`, `month11`, `month12`, `last_update`) VALUES ('google.com', 30, 5, 1, 3, 1, 9, 7, 4, 0, 0, 0, 0, 0, 1531382144)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_referer_stats` (`host`, `total`, `month01`, `month02`, `month03`, `month04`, `month05`, `month06`, `month07`, `month08`, `month09`, `month10`, `month11`, `month12`, `last_update`) VALUES ('l.facebook.com', 4, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1529210195)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_referer_stats` (`host`, `total`, `month01`, `month02`, `month03`, `month04`, `month05`, `month06`, `month07`, `month08`, `month09`, `month10`, `month11`, `month12`, `last_update`) VALUES ('web.skype.com', 8, 0, 7, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1520820352)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_referer_stats` (`host`, `total`, `month01`, `month02`, `month03`, `month04`, `month05`, `month06`, `month07`, `month08`, `month09`, `month10`, `month11`, `month12`, `last_update`) VALUES ('onesignal.com', 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1517815908)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_referer_stats` (`host`, `total`, `month01`, `month02`, `month03`, `month04`, `month05`, `month06`, `month07`, `month08`, `month09`, `month10`, `month11`, `month12`, `last_update`) VALUES ('61.14.235.168', 9, 0, 3, 4, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1531387578)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_referer_stats` (`host`, `total`, `month01`, `month02`, `month03`, `month04`, `month05`, `month06`, `month07`, `month08`, `month09`, `month10`, `month11`, `month12`, `last_update`) VALUES ('yopmail.com', 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1526020309)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_referer_stats` (`host`, `total`, `month01`, `month02`, `month03`, `month04`, `month05`, `month06`, `month07`, `month08`, `month09`, `month10`, `month11`, `month12`, `last_update`) VALUES ('danhsach.cuudinh.vn', 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1527913036)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_referer_stats` (`host`, `total`, `month01`, `month02`, `month03`, `month04`, `month05`, `month06`, `month07`, `month08`, `month09`, `month10`, `month11`, `month12`, `last_update`) VALUES ('quantri.vidoco.vn', 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1529122248)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_referer_stats` (`host`, `total`, `month01`, `month02`, `month03`, `month04`, `month05`, `month06`, `month07`, `month08`, `month09`, `month10`, `month11`, `month12`, `last_update`) VALUES ('m.facebook.com', 2, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1529210180)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_referer_stats` (`host`, `total`, `month01`, `month02`, `month03`, `month04`, `month05`, `month06`, `month07`, `month08`, `month09`, `month10`, `month11`, `month12`, `last_update`) VALUES ('sandbox.vnpayment.vn', 8, 0, 0, 0, 0, 0, 0, 8, 0, 0, 0, 0, 0, 1530440711)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_searchkeys`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_searchkeys` (
  `id` varchar(32) NOT NULL DEFAULT '',
  `skey` varchar(250) NOT NULL,
  `total` int(11) NOT NULL DEFAULT 0,
  `search_engine` varchar(50) NOT NULL,
  KEY `id` (`id`),
  KEY `skey` (`skey`),
  KEY `search_engine` (`search_engine`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_services`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_services` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `price` double unsigned NOT NULL,
  `price_unit` tinyint(1) NOT NULL,
  `vat` double unsigned NOT NULL DEFAULT 0,
  `active` tinyint(1) unsigned NOT NULL DEFAULT 1,
  `note` text NOT NULL,
  `weight` smallint(4) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=8  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_services_customer`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_services_customer` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `customerid` mediumint(8) NOT NULL,
  `serviceid` smallint(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `price` double unsigned NOT NULL DEFAULT 0,
  `month` smallint(4) unsigned NOT NULL COMMENT 'Số tháng thanh toán',
  `begintime` int(11) unsigned NOT NULL DEFAULT 0,
  `endtime` int(11) unsigned NOT NULL DEFAULT 0,
  `addtime` int(11) unsigned NOT NULL,
  `useradd` mediumint(8) unsigned NOT NULL,
  `edittime` int(11) unsigned NOT NULL DEFAULT 0,
  `useredit` mediumint(8) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_services_price_unit`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_services_price_unit` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `active` tinyint(1) unsigned NOT NULL DEFAULT 1,
  `weight` tinyint(2) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_siteterms`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_siteterms` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `alias` varchar(250) NOT NULL,
  `image` varchar(255) DEFAULT '',
  `imagealt` varchar(255) DEFAULT '',
  `imageposition` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `description` text DEFAULT NULL,
  `bodytext` mediumtext NOT NULL,
  `keywords` text DEFAULT NULL,
  `socialbutton` tinyint(4) NOT NULL DEFAULT 0,
  `activecomm` varchar(255) DEFAULT '',
  `layout_func` varchar(100) DEFAULT '',
  `weight` smallint(4) NOT NULL DEFAULT 0,
  `admin_id` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `add_time` int(11) NOT NULL DEFAULT 0,
  `edit_time` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `hitstotal` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `hot_post` tinyint(1) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_siteterms` (`id`, `title`, `alias`, `image`, `imagealt`, `imageposition`, `description`, `bodytext`, `keywords`, `socialbutton`, `activecomm`, `layout_func`, `weight`, `admin_id`, `add_time`, `edit_time`, `status`, `hitstotal`, `hot_post`) VALUES (1, 'Chính sách bảo mật (Quyền riêng tư)', 'privacy', '', '', 0, 'Tài liệu này cung cấp cho bạn (người truy cập và sử dụng website) chính sách liên quan đến bảo mật và quyền riêng tư của bạn', '<strong><a id=\"index\" name=\"index\"></a>Danh mục</strong><br /> <a href=\"#1\">Điều 1: Thu thập thông tin</a><br /> <a href=\"#2\">Điều 2: Lưu trữ &amp; Bảo vệ thông tin</a><br /> <a href=\"#3\">Điều 3: Sử dụng thông tin </a><br /> <a href=\"#4\">Điều 4: Tiếp nhận thông tin từ các đối tác </a><br /> <a href=\"#5\">Điều 5: Chia sẻ thông tin với bên thứ ba</a><br /> <a href=\"#6\">Điều 6: Thay đổi chính sách bảo mật</a>  <hr  /> <h2 style=\"text-align: justify;\"><a id=\"1\" name=\"1\"></a>Điều 1: Thu thập thông tin</h2>  <h3 style=\"text-align: justify;\">1.1. Thu thập tự động:</h3>  <div style=\"text-align: justify;\">Hệ thống này được xây dựng bằng mã nguồn NukeViet. Như mọi website hiện đại khác, chúng tôi sẽ thu thập địa chỉ IP và các thông tin web tiêu chuẩn khác của bạn như: loại trình duyệt, các trang bạn truy cập trong quá trình sử dụng dịch vụ, thông tin về máy tính &amp; thiết bị mạng v.v… cho mục đích phân tích thông tin phục vụ việc bảo mật và giữ an toàn cho hệ thống.</div>  <h3 style=\"text-align: justify;\">1.2. Thu thập từ các khai báo của chính bạn:</h3>  <div style=\"text-align: justify;\">Các thông tin do bạn khai báo cho chúng tôi trong quá trình làm việc như: đăng ký tài khoản, liên hệ với chúng tôi... cũng sẽ được chúng tôi lưu trữ phục vụ công việc chăm sóc khách hàng sau này.</div>  <h3 style=\"text-align: justify;\">1.3. Thu thập thông tin thông qua việc đặt cookies:</h3>  <p style=\"text-align: justify;\">Như mọi website hiện đại khác, khi bạn truy cập website, chúng tôi (hoặc các công cụ theo dõi hoặc thống kê hoạt động của website do các đối tác cung cấp) sẽ đặt một số File dữ liệu gọi là Cookies lên đĩa cứng hoặc bộ nhớ máy tính của bạn.</p>  <p style=\"text-align: justify;\">Một trong số những Cookies này có thể tồn tại lâu để thuận tiện cho bạn trong quá trình sử dụng, ví dụ như: lưu Email của bạn trong trang đăng nhập để bạn không phải nhập lại v.v…</p>  <h3 style=\"text-align: justify;\">1.4. Thu thập và lưu trữ thông tin trong quá khứ:</h3>  <p style=\"text-align: justify;\">Bạn có thể thay đổi thông tin cá nhân của mình bất kỳ lúc nào bằng cách sử dụng chức năng tương ứng. Tuy nhiên chúng tôi sẽ lưu lại những thông tin bị thay đổi để chống các hành vi xóa dấu vết gian lận.</p>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <h2 style=\"text-align: justify;\"><a id=\"2\" name=\"2\"></a>Điều 2: Lưu trữ &amp; Bảo vệ thông tin</h2>  <div style=\"text-align: justify;\">Hầu hết các thông tin được thu thập sẽ được lưu trữ tại cơ sở dữ liệu của chúng tôi.<br /> <br /> Chúng tôi bảo vệ dữ liệu cá nhân của các bạn bằng các hình thức như: mật khẩu, tường lửa, mã hóa cùng các hình thức thích hợp khác và chỉ cấp phép việc truy cập và xử lý dữ liệu cho các đối tượng phù hợp, ví dụ chính bạn hoặc các nhân viên có trách nhiệm xử thông tin với bạn thông qua các bước xác định danh tính phù hợp.<br /> <br /> Mật khẩu của bạn được lưu trữ và bảo vệ bằng phương pháp mã hoá trong cơ sở dữ liệu của hệ thống, vì thế nó rất an toàn. Tuy nhiên, chúng tôi khuyên bạn không nên dùng lại mật khẩu này trên các website khác. Mật khẩu của bạn là cách duy nhất để bạn đăng nhập vào tài khoản thành viên của mình trong website này, vì thế hãy cất giữ nó cẩn thận. Trong mọi trường hợp bạn không nên cung cấp thông tin mật khẩu cho bất kỳ người nào dù là người của chúng tôi, người của NukeViet hay bất kỳ người thứ ba nào khác trừ khi bạn hiểu rõ các rủi ro khi để lộ mật khẩu. Nếu quên mật khẩu, bạn có thể sử dụng chức năng “<a href=\"/users/lostpass/\">Quên mật khẩu</a>” trên website. Để thực hiện việc này, bạn cần phải cung cấp cho hệ thống biết tên thành viên hoặc địa chỉ Email đang sử dụng của mình trong tài khoản, sau đó hệ thống sẽ tạo ra cho bạn mật khẩu mới và gửi đến cho bạn để bạn vẫn có thể đăng nhập vào tài khoản thành viên của mình.  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p> </div>  <h2 style=\"text-align: justify;\"><a id=\"3\" name=\"3\"></a>Điều 3: Sử dụng thông tin</h2>  <p style=\"text-align: justify;\">Thông tin thu thập được sẽ được chúng tôi sử dụng để:</p>  <div style=\"text-align: justify;\">- Cung cấp các dịch vụ hỗ trợ &amp; chăm sóc khách hàng.</div>  <div style=\"text-align: justify;\">- Thực hiện giao dịch thanh toán &amp; gửi các thông báo trong quá trình giao dịch.</div>  <div style=\"text-align: justify;\">- Xử lý khiếu nại, thu phí &amp; giải quyết sự cố.</div>  <div style=\"text-align: justify;\">- Ngăn chặn các hành vi có nguy cơ rủi ro, bị cấm hoặc bất hợp pháp và đảm bảo tuân thủ đúng chính sách “Thỏa thuận người dùng”.</div>  <div style=\"text-align: justify;\">- Đo đạc, tùy biến &amp; cải tiến dịch vụ, nội dung và hình thức của website.</div>  <div style=\"text-align: justify;\">- Gửi bạn các thông tin về chương trình Marketing, các thông báo &amp; chương trình khuyến mại.</div>  <div style=\"text-align: justify;\">- So sánh độ chính xác của thông tin cá nhân của bạn trong quá trình kiểm tra với bên thứ ba.</div>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <h2 style=\"text-align: justify;\"><a id=\"4\" name=\"4\"></a>Điều 4: Tiếp nhận thông tin từ các đối tác</h2>  <div style=\"text-align: justify;\">Khi sử dụng các công cụ giao dịch và thanh toán thông qua internet, chúng tôi có thể tiếp nhận thêm các thông tin về bạn như địa chỉ username, Email, số tài khoản ngân hàng... Chúng tôi kiểm tra những thông tin này với cơ sở dữ liệu người dùng của mình nhằm xác nhận rằng bạn có phải là khách hàng của chúng tôi hay không nhằm giúp việc thực hiện các dịch vụ cho bạn được thuận lợi.<br /> <br /> Các thông tin tiếp nhận được sẽ được chúng tôi bảo mật như những thông tin mà chúng tôi thu thập được trực tiếp từ bạn.</div>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <h2><a id=\"5\" name=\"5\"></a>Điều 5: Chia sẻ thông tin với bên thứ ba</h2>  <p style=\"text-align: justify;\">Chúng tôi sẽ không chia sẻ thông tin cá nhân, thông tin tài chính... của bạn cho các bên thứ 3 trừ khi được sự đồng ý của chính bạn hoặc khi chúng tôi buộc phải tuân thủ theo các quy định pháp luật hoặc khi có yêu cầu từ cơ quan công quyền có thẩm quyền.</p>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <h2><a id=\"6\" name=\"6\"></a>Điều 6: Thay đổi chính sách bảo mật</h2>  <p style=\"text-align: justify;\">Chính sách Bảo mật này có thể thay đổi theo thời gian. Chúng tôi sẽ không giảm quyền của bạn theo Chính sách Bảo mật này mà không có sự đồng ý rõ ràng của bạn. Chúng tôi sẽ đăng bất kỳ thay đổi Chính sách Bảo mật nào trên trang này và, nếu những thay đổi này quan trọng, chúng tôi sẽ cung cấp thông báo nổi bật hơn (bao gồm, đối với một số dịch vụ nhất định, thông báo bằng email về các thay đổi của Chính sách Bảo mật).</p>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <p style=\"text-align: right;\">Chính sách bảo mật mặc định này được xây dựng cho <a href=\"http://nukeviet.vn\" target=\"_blank\">NukeViet CMS</a>, được tham khảo từ website <a href=\"http://webnhanh.vn/vi/thiet-ke-web/detail/Chinh-sach-bao-mat-Quyen-rieng-tu-Privacy-Policy-2147/\">webnhanh.vn</a></p>', '', 0, '4', '', 1, 1, 1557363838, 1557363838, 1, 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_siteterms` (`id`, `title`, `alias`, `image`, `imagealt`, `imageposition`, `description`, `bodytext`, `keywords`, `socialbutton`, `activecomm`, `layout_func`, `weight`, `admin_id`, `add_time`, `edit_time`, `status`, `hitstotal`, `hot_post`) VALUES (2, 'Điều khoản và điều kiện sử dụng', 'terms-and-conditions', '', '', 0, 'Đây là các điều khoản và điều kiện áp dụng cho website này. Truy cập và sử dụng website tức là bạn đã đồng ý với các quy định này.', '<div style=\"text-align: justify;\">Cảm ơn bạn đã sử dụng. Xin vui lòng đọc các Điều khoản một cách cẩn thận, và <a href=\"/contact/\">liên hệ</a> với chúng tôi nếu bạn có bất kỳ câu hỏi. Bằng việc truy cập hoặc sử dụng website của chúng tôi, bạn đồng ý bị ràng buộc bởi các <a href=\"/siteterms/terms-and-conditions.html\">Điều khoản và điều kiện</a> sử dụng cũng như <a href=\"/siteterms/privacy.html\">Chính sách bảo mật</a> của chúng tôi. Nếu không đồng ý với các quy định này, bạn vui lòng ngưng sử dụng website.<br /> <br /> <strong><a id=\"index\" name=\"index\"></a>Danh mục</strong><br /> <a href=\"#1\">Điều 1: Điều khoản liên quan đến phần mềm vận hành website</a><br /> <a href=\"#2\">Điều 2: Giới hạn cho việc sử dụng Website và các tài liệu trên website</a><br /> <a href=\"#3\">Điều 3: Sử dụng thương hiệu</a><br /> <a href=\"#4\">Điều 4: Các hành vi bị nghiêm cấm</a><br /> <a href=\"#5\">Điều 5: Các đường liên kết đến các website khác</a><br /> <a href=\"#6\">Điều 6: Từ chối bảo đảm</a><br /> <a href=\"#7\">Điều 7: Luật áp dụng và cơ quan giải quyết tranh chấp</a><br /> <a href=\"#8\">Điều 8: Thay đổi điều khoản và điều kiện sử dụng</a></div>  <hr  /> <h2 style=\"text-align: justify;\"><a id=\"1\" name=\"1\"></a>Điều khoản liên quan đến phần mềm vận hành website</h2>  <p style=\"text-align: justify;\">- Website của chúng tôi sử dụng hệ thống NukeViet, là giải pháp về website/ cổng thông tin nguồn mở được phát hành theo giấy phép bản quyền phần mềm tự do nguồn mở “<a href=\"http://www.gnu.org/licenses/old-licenses/gpl-2.0.html\" target=\"_blank\">GNU General Public License</a>” (viết tắt là GNU/GPL hay GPL) và có thể tải về miễn phí tại trang web <a href=\"http://www.nukeviet.vn\" target=\"_blank\">www.nukeviet.vn</a>.<br /> - Website này do chúng tôi sở hữu, điều hành và duy trì. NukeViet (hiểu ở đây là “hệ thống NukeViet” (bao gồm nhân hệ thống NukeViet và các sản phẩm phái sinh như NukeViet CMS, NukeViet Portal, <a href=\"http://edu.nukeviet.vn\" target=\"_blank\">NukeViet Edu Gate</a>...), “www.nukeviet.vn”, “tổ chức NukeViet”, “ban điều hành NukeViet”, &quot;Ban Quản Trị NukeViet&quot; và nói chung là những gì liên quan đến NukeViet...) không liên quan gì đến việc chúng tôi điều hành website cũng như quy định bạn được phép làm và không được phép làm gì trên website này.<br /> - Hệ thống NukeViet là bộ mã nguồn được phát triển để xây dựng các website/ cổng thông tin trên mạng. Chúng tôi (chủ sở hữu, điều hành và duy trì website này) không hỗ trợ và khẳng định hay ngụ ý về việc có liên quan đến NukeViet. Để biết thêm nhiều thông tin về NukeViet, hãy ghé thăm website của NukeViet tại địa chỉ: <a href=\"http://nukeviet.vn\" target=\"_blank\">http://nukeviet.vn</a>.</p>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <h2 style=\"text-align: justify;\"><a id=\"2\" name=\"2\"></a>Giới hạn cho việc sử dụng Website và các tài liệu trên website</h2>  <p style=\"text-align: justify;\">- Tất cả các quyền liên quan đến tất cả tài liệu và thông tin được hiển thị và/ hoặc được tạo ra sẵn cho Website này (ví dụ như những tài liệu được cung cấp để tải về) được quản lý, sở hữu hoặc được cho phép sử dụng bởi chúng tôi hoặc chủ sở hữu tương ứng với giấy phép tương ứng. Việc sử dụng các tài liệu và thông tin phải được tuân thủ theo giấy phép tương ứng được áp dụng cho chúng.<br /> - Ngoại trừ các tài liệu được cấp phép rõ ràng dưới dạng giấy phép tư liệu mở&nbsp;Creative Commons (gọi là giấy phép CC) cho phép bạn khai thác và chia sẻ theo quy định của giấy phép tư liệu mở, đối với các loại tài liệu không ghi giấy phép rõ ràng thì bạn không được phép sử dụng (bao gồm nhưng không giới hạn việc sao chép, chỉnh sửa toàn bộ hay một phần, đăng tải, phân phối, cấp phép, bán và xuất bản) bất cứ tài liệu nào mà không có sự cho phép trước bằng văn bản của chúng tôi ngoại trừ việc sử dụng cho mục đích cá nhân, nội bộ, phi thương mại.<br /> - Một số tài liệu hoặc thông tin có những điều khoản và điều kiện áp dụng riêng cho chúng không phải là giấy phép tư liệu mở, trong trường hợp như vậy, bạn được yêu cầu phải chấp nhận các điều khoản và điều kiện đó khi truy cập vào các tài liệu và thông tin này.</p>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <h2 style=\"text-align: justify;\"><a id=\"3\" name=\"3\"></a>Sử dụng thương hiệu</h2>  <p style=\"text-align: justify;\">- VINADES.,JSC, NukeViet và thương hiệu gắn với NukeViet (ví dụ NukeViet CMS, NukeViet Portal, NukeViet Edu Gate...), logo công ty VINADES thuộc sở hữu của Công ty cổ phần phát triển nguồn mở Việt Nam.<br /> - Những tên sản phẩm, tên dịch vụ khác, logo và/ hoặc những tên công ty được sử dụng trong Website này là những tài sản đã được đăng ký độc quyền và được giữ bản quyền bởi những người sở hữu và/ hoặc người cấp phép tương ứng.</p>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <h2 style=\"text-align: justify;\"><a id=\"4\" name=\"4\"></a>Các hành vi bị nghiêm cấm</h2>  <p style=\"text-align: justify;\">Người truy cập website này không được thực hiện những hành vi dưới đây khi sử dụng website:<br /> - Xâm phạm các quyền hợp pháp (bao gồm nhưng không giới hạn đối với các quyền riêng tư và chung) của người khác.<br /> - Gây ra sự thiệt hại hoặc bất lợi cho người khác.<br /> - Làm xáo trộn trật tự công cộng.<br /> - Hành vi liên quan đến tội phạm.<br /> - Tải lên hoặc phát tán thông tin riêng tư của tổ chức, cá nhân khác mà không được sự chấp thuận của họ.<br /> - Sử dụng Website này vào mục đích thương mại mà chưa được sự cho phép của chúng tôi.<br /> - Nói xấu, làm nhục, phỉ báng người khác.<br /> - Tải lên các tập tin chứa virus hoặc các tập tin bị hư mà có thể gây thiệt hại đến sự vận hành của máy tính khác.<br /> - Những hoạt động có khả năng ảnh hưởng đến hoạt động bình thường của website.<br /> - Những hoạt động mà chúng tôi cho là không thích hợp.<br /> - Những hoạt động bất hợp pháp hoặc bị cấm bởi pháp luật hiện hành.</p>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <h2 style=\"text-align: justify;\"><a id=\"5\" name=\"5\"></a>Các đường liên kết đến các website khác</h2>  <p style=\"text-align: justify;\">- Các website của các bên thứ ba (không phải các trang do chúng tôi quản lý) được liên kết đến hoặc từ website này (&quot;Các website khác&quot;) được điều hành và duy trì hoàn toàn độc lập bởi các bên thứ ba đó và không nằm trong quyền điều khiển và/hoặc giám sát của chúng tôi. Việc truy cập các website khác phải được tuân thủ theo các điều khoản và điều kiện quy định bởi ban điều hành của website đó.<br /> - Chúng tôi không chịu trách nhiệm cho sự mất mát hoặc thiệt hại do việc truy cập và sử dụng các website bên ngoài, và bạn phải chịu mọi rủi ro khi truy cập các website đó.<br /> - Không có nội dung nào trong Website này thể hiện như một sự đảm bảo của chúng tôi về nội dung của các website khác và các sản phẩm và/ hoặc các dịch vụ xuất hiện và/ hoặc được cung cấp tại các website khác.</p>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <h2 style=\"text-align: justify;\"><a id=\"6\" name=\"6\"></a>Từ chối bảo đảm</h2>  <p style=\"text-align: justify;\">NGOẠI TRỪ PHẠM VI BỊ CẤM THEO LUẬT PHÁP HIỆN HÀNH, CHÚNG TÔI SẼ:<br /> - KHÔNG CHỊU TRÁCH NHIỆM HAY BẢO ĐẢM, MỘT CÁCH RÕ RÀNG HAY NGỤ Ý, BAO GỒM SỰ BẢO ĐẢM VỀ TÍNH CHÍNH XÁC, MỨC ĐỘ TIN CẬY, HOÀN THIỆN, PHÙ HỢP CHO MỤC ĐÍCH CỤ THỂ, SỰ KHÔNG XÂM PHẠM QUYỀN CỦA BÊN THỨ 3 VÀ/HOẶC TÍNH AN TOÀN CỦA NỘI DỤNG WEBSITE NÀY, VÀ NHỮNG TUYÊN BỐ, ĐẢM BẢO CÓ LIÊN QUAN.<br /> - KHÔNG CHỊU TRÁCH NHIỆM CHO BẤT KỲ SỰ THIỆT HẠI HAY MẤT MÁT PHÁT SINH TỪ VIỆC TRUY CẬP VÀ SỬ DỤNG WEBSITE HAY VIỆC KHÔNG THỂ SỬ DỤNG WEBSITE.<br /> - CHÚNG TÔI CÓ THỂ THAY ĐỔI VÀ/HOẶC THAY THẾ NỘI DUNG CỦA WEBSITE NÀY, HOẶC TẠM HOÃN HOẶC NGƯNG CUNG CẤP CÁC DỊCH VỤ QUA WEBSITE NÀY VÀO BẤT KỲ THỜI ĐIỂM NÀO MÀ KHÔNG CẦN THÔNG BÁO TRƯỚC. CHÚNG TÔI SẼ KHÔNG CHỊU TRÁCH NHIỆM CHO BẤT CỨ THIỆT HẠI NÀO PHÁT SINH DO SỰ THAY ĐỔI HOẶC THAY THẾ NỘI DUNG CỦA WEBSITE.</p>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <h2 style=\"text-align: justify;\"><a id=\"7\" name=\"7\"></a>Luật áp dụng và cơ quan giải quyết tranh chấp</h2>  <p style=\"text-align: justify;\">- Các Điều Khoản và Điều Kiện này được điều chỉnh và giải thích theo luật của Việt Nam trừ khi có điều khoản khác được cung cấp thêm. Tất cả tranh chấp phát sinh liên quan đến website này và các Điều Khoản và Điều Kiện sử dụng này sẽ được giải quyết tại các tòa án ở Việt Nam.<br /> - Nếu một phần nào đó của các Điều Khoản và Điều Kiện bị xem là không có giá trị, vô hiệu, hoặc không áp dụng được vì lý do nào đó, phần đó được xem như là phần riêng biệt và không ảnh hưởng đến tính hiệu lực của phần còn lại.<br /> - Trong trường hợp có sự mâu thuẫn giữa bản Tiếng Anh và bản Tiếng Việt của bản Điều Khoản và Điều Kiện này, bản Tiếng Việt sẽ được ưu tiên áp dụng.</p>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <h2 style=\"text-align: justify;\"><a id=\"8\" name=\"8\"></a>Thay đổi điều khoản và điều kiện sử dụng</h2>  <div style=\"text-align: justify;\">Điều khoản và điều kiện sử dụng có thể thay đổi theo thời gian. Chúng tôi bảo lưu quyền thay đổi hoặc sửa đổi bất kỳ điều khoản và điều kiện cũng như các quy định khác, bất cứ lúc nào và theo ý mình. Chúng tôi sẽ có thông báo trên website khi có sự thay đổi. Tiếp tục sử dụng trang web này sau khi đăng các thay đổi tức là bạn đã chấp nhận các thay đổi đó. <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p> </div>', '', 0, '4', '', 2, 1, 1557363838, 1557363838, 1, 0, 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_siteterms_config`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_siteterms_config` (
  `config_name` varchar(30) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  UNIQUE KEY `config_name` (`config_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_siteterms_config` (`config_name`, `config_value`) VALUES ('viewtype', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_siteterms_config` (`config_name`, `config_value`) VALUES ('facebookapi', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_siteterms_config` (`config_name`, `config_value`) VALUES ('per_page', '20')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_siteterms_config` (`config_name`, `config_value`) VALUES ('news_first', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_siteterms_config` (`config_name`, `config_value`) VALUES ('related_articles', '5')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_siteterms_config` (`config_name`, `config_value`) VALUES ('copy_page', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_siteterms_config` (`config_name`, `config_value`) VALUES ('alias_lower', '1')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_voting`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_voting` (
  `vid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(250) NOT NULL,
  `link` varchar(255) DEFAULT '',
  `acceptcm` int(2) NOT NULL DEFAULT 1,
  `active_captcha` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `admin_id` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `groups_view` varchar(255) DEFAULT '',
  `publ_time` int(11) unsigned NOT NULL DEFAULT 0,
  `exp_time` int(11) unsigned NOT NULL DEFAULT 0,
  `act` tinyint(1) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`vid`),
  UNIQUE KEY `question` (`question`)
) ENGINE=MyISAM  AUTO_INCREMENT=4  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_voting` (`vid`, `question`, `link`, `acceptcm`, `active_captcha`, `admin_id`, `groups_view`, `publ_time`, `exp_time`, `act`) VALUES (2, 'Bạn biết gì về NukeViet 4?', '', 1, 0, 1, '6', 1275318563, 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_voting` (`vid`, `question`, `link`, `acceptcm`, `active_captcha`, `admin_id`, `groups_view`, `publ_time`, `exp_time`, `act`) VALUES (3, 'Lợi ích của phần mềm nguồn mở là gì?', '', 1, 0, 1, '6', 1275318563, 0, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_voting_rows`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_voting_rows` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `vid` smallint(5) unsigned NOT NULL,
  `title` varchar(245) NOT NULL DEFAULT '',
  `url` varchar(255) DEFAULT '',
  `hitstotal` int(11) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `vid` (`vid`,`title`)
) ENGINE=MyISAM  AUTO_INCREMENT=14  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_voting_rows` (`id`, `vid`, `title`, `url`, `hitstotal`) VALUES (5, 2, 'Một bộ sourcecode cho web hoàn toàn mới.', '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_voting_rows` (`id`, `vid`, `title`, `url`, `hitstotal`) VALUES (6, 2, 'Mã nguồn mở, sử dụng miễn phí.', '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_voting_rows` (`id`, `vid`, `title`, `url`, `hitstotal`) VALUES (7, 2, 'Sử dụng HTML5, CSS3 và hỗ trợ Ajax', '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_voting_rows` (`id`, `vid`, `title`, `url`, `hitstotal`) VALUES (8, 2, 'Tất cả các ý kiến trên', '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_voting_rows` (`id`, `vid`, `title`, `url`, `hitstotal`) VALUES (9, 3, 'Liên tục được cải tiến, sửa đổi bởi cả thế giới.', '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_voting_rows` (`id`, `vid`, `title`, `url`, `hitstotal`) VALUES (10, 3, 'Được sử dụng miễn phí không mất tiền.', '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_voting_rows` (`id`, `vid`, `title`, `url`, `hitstotal`) VALUES (11, 3, 'Được tự do khám phá, sửa đổi theo ý thích.', '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_voting_rows` (`id`, `vid`, `title`, `url`, `hitstotal`) VALUES (12, 3, 'Phù hợp để học tập, nghiên cứu vì được tự do sửa đổi theo ý thích.', '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_voting_rows` (`id`, `vid`, `title`, `url`, `hitstotal`) VALUES (13, 3, 'Tất cả các ý kiến trên', '', 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_workforce`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_workforce` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT,
  `userid` mediumint(8) unsigned NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` tinyint(1) unsigned NOT NULL DEFAULT 1,
  `birthday` int(11) unsigned NOT NULL DEFAULT 0,
  `main_phone` varchar(20) NOT NULL,
  `other_phone` varchar(255) NOT NULL,
  `main_email` varchar(100) NOT NULL,
  `other_email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `knowledge` text NOT NULL COMMENT 'Thông tin học vấn',
  `image` varchar(255) NOT NULL,
  `jointime` int(11) unsigned NOT NULL DEFAULT 0,
  `position` varchar(100) NOT NULL,
  `part` varchar(100) NOT NULL COMMENT 'Thuộc bộ phận',
  `addtime` int(11) unsigned NOT NULL,
  `edittime` int(11) unsigned NOT NULL DEFAULT 0,
  `createtime` int(11) unsigned NOT NULL DEFAULT 0,
  `duetime` int(11) unsigned NOT NULL DEFAULT 0,
  `cycle` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `useradd` mediumint(8) unsigned NOT NULL,
  `weight` smallint(4) unsigned NOT NULL DEFAULT 0,
  `branch_id` smallint(4) unsigned NOT NULL DEFAULT 0,
  `status` tinyint(1) unsigned NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=4  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_workforce` (`id`, `userid`, `first_name`, `last_name`, `gender`, `birthday`, `main_phone`, `other_phone`, `main_email`, `other_email`, `address`, `knowledge`, `image`, `jointime`, `position`, `part`, `addtime`, `edittime`, `createtime`, `duetime`, `cycle`, `useradd`, `weight`, `branch_id`, `status`) VALUES (1, 1, 'Triển', 'Hồ Ngọc', 1, 1560875039, '0905908430', '', 'admin@mail.com', '', '161 Tôn Thất Thuyết, Đông Hà', '', '', 1561479839, '', '1', 1561459450, 1561459602, 0, 0, 0, 1, 1, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_workforce` (`id`, `userid`, `first_name`, `last_name`, `gender`, `birthday`, `main_phone`, `other_phone`, `main_email`, `other_email`, `address`, `knowledge`, `image`, `jointime`, `position`, `part`, `addtime`, `edittime`, `createtime`, `duetime`, `cycle`, `useradd`, `weight`, `branch_id`, `status`) VALUES (2, 2, 'Ha', 'Hồ Ngọc', 1, 1560270239, '0905908430', '', 'tranviethuy1970@gmail.cm', '', '161 Tôn Thất Thuyết, Đông Hà', '', '', 0, '', '1', 1561699350, 1561699350, 0, 0, 0, 1, 1, 3, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_workforce_field`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_workforce_field` (
  `fid` mediumint(8) NOT NULL AUTO_INCREMENT,
  `field` varchar(25) NOT NULL,
  `weight` int(10) unsigned NOT NULL DEFAULT 1,
  `field_type` enum('number','date','textbox','textarea','editor','select','radio','checkbox','multiselect') NOT NULL DEFAULT 'textbox',
  `field_choices` text NOT NULL,
  `sql_choices` text NOT NULL,
  `match_type` enum('none','alphanumeric','email','url','regex','callback') NOT NULL DEFAULT 'none',
  `match_regex` varchar(250) NOT NULL DEFAULT '',
  `func_callback` varchar(75) NOT NULL DEFAULT '',
  `min_length` int(11) NOT NULL DEFAULT 0,
  `max_length` bigint(20) unsigned NOT NULL DEFAULT 0,
  `required` tinyint(3) unsigned NOT NULL DEFAULT 0,
  `show_profile` tinyint(4) NOT NULL DEFAULT 1,
  `class` varchar(50) NOT NULL DEFAULT '',
  `language` text NOT NULL,
  `default_value` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`fid`),
  UNIQUE KEY `field` (`field`)
) ENGINE=MyISAM  AUTO_INCREMENT=2  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_workforce_history_salary`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_workforce_history_salary` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `userid` mediumint(8) unsigned NOT NULL,
  `salary` double unsigned NOT NULL,
  `allowance` double unsigned NOT NULL DEFAULT 0 COMMENT 'Phụ cấp',
  `useradd` mediumint(8) NOT NULL,
  `addtime` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `userid` (`userid`,`addtime`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_workforce_info`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_workforce_info` (
  `rows_id` mediumint(8) unsigned NOT NULL,
  `fdrfdrf` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`rows_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_workforce_part`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_workforce_part` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` smallint(4) unsigned NOT NULL DEFAULT 0,
  `title` varchar(255) NOT NULL COMMENT 'Tên gọi bộ phận',
  `alias` varchar(255) NOT NULL DEFAULT '',
  `office` varchar(255) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(20) NOT NULL DEFAULT '',
  `fax` varchar(20) NOT NULL DEFAULT '',
  `website` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `note` tinytext NOT NULL COMMENT 'Ghi chú',
  `lev` smallint(4) unsigned NOT NULL DEFAULT 0,
  `numsub` smallint(4) unsigned NOT NULL DEFAULT 0,
  `subid` varchar(255) DEFAULT '',
  `sort` smallint(4) unsigned NOT NULL DEFAULT 0,
  `weight` smallint(4) unsigned NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL COMMENT 'Trạng thái',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=4  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_workforce_part` (`id`, `parentid`, `title`, `alias`, `office`, `address`, `phone`, `fax`, `website`, `email`, `note`, `lev`, `numsub`, `subid`, `sort`, `weight`, `status`) VALUES (1, 0, 'Administrator', 'Administrator', '', '', '', '', '', '', '', 0, 0, '', 1, 1, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_workforce_part_detail`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_workforce_part_detail` (
  `userid` mediumint(8) unsigned NOT NULL,
  `part` smallint(4) NOT NULL COMMENT 'Thuộc bộ phận',
  UNIQUE KEY `userid` (`userid`,`part`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_workforce_part_detail` (`userid`, `part`) VALUES (1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_workforce_part_detail` (`userid`, `part`) VALUES (2, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_workreport`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_workreport` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` mediumint(8) unsigned NOT NULL,
  `fortime` int(11) unsigned NOT NULL,
  `time` float NOT NULL,
  `content` text NOT NULL,
  `addtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
