-- SQL Statements needed to create the tables

CREATE DATABASE `groupdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `groupdb`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `availdates` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `userid` int(8) NOT NULL AUTO_INCREMENT,
  `days` varchar(100) NOT NULL
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci AUTO_INCREMENT=1 ;
