-- Table `altiny_sys_log`
DROP TABLE IF EXISTS `altiny_sys_log`;
CREATE TABLE `altiny_sys_log` (
  `id` int unsigned NOT NULL auto_increment,
  `level` ENUM('DEBUG','NOTICE','INFO','WARN','ERR','FATAL') NOT NULL default 'DEBUG',
  `type` int unsigned NOT NULL default '0',
  `uid` int unsigned NOT NULL default '0',
  `cdate` int unsigned NOT NULL,
  `msg` text NOT NULL,
  `pageurl` varchar(100) NOT NULL default '',
  `browser` varchar(10) NOT NULL default '',
  `method` varchar(5) NOT NULL default '',
  `ip` varchar(15) NOT NULL default '',
  PRIMARY KEY(`id`),
  INDEX `level` (`level`),
  INDEX `type` (`type`),
  INDEX `uid` (`uid`)
) ENGINE=MyISAM;
