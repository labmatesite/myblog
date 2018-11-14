create database test;

use test;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `post` varchar(100) NOT NULL,
  `artname` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);