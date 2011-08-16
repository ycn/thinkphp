-- Table `altiny_sys_log`
DROP TABLE IF EXISTS `altiny_sys_log`;
CREATE TABLE `altiny_sys_log` (
  `id` int unsigned NOT NULL auto_increment,
  `level` ENUM('debug','notice','info','warn','err','fatal') NOT NULL default 'debug',
  `msg` text NOT NULL,
  `cdate` int unsigned NOT NULL,
  `uri` varchar(100) NOT NULL default '',
  `type` int unsigned NOT NULL default 0,
  `data` text NOT NULL default '',
) ENGINE=MyISAM;
