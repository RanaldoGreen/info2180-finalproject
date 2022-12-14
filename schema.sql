DROP DATABASE IF EXISTS dolphin;
GRANT ALL PRIVILEGES ON dolphin.* TO 'admin'@'localhost' IDENTIFIED BY 'password123';
CREATE DATABASE dolphin;
USE dolphin;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
    `id` integer(15) NOT NULL auto_increment,
    `firstname` varchar(35) NOT NULL default '',
    `lastname` varchar(35) NOT NULL default '',
    `password` varchar(500) NOT NULL default '',
    `email` varchar(35) NOT NULL default '',
    `role` varchar(20) NOT NULL default '',
    `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY  (`id`)
);

INSERT INTO `users` VALUES(1,'Yannick','Lyn Fatt','password123','admin@project2.com','Admin',CURRENT_TIMESTAMP); 

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
    `id` integer(15) NOT NULL auto_increment,
    `title` varchar(15) NOT NULL default '',
    `firstname` varchar(35) NOT NULL default '',
    `lastname` varchar(35) NOT NULL default '',
    `email` varchar(35) NOT NULL default '',
    `telephone` varchar(20) NOT NULL default '',
    `company` varchar(35) NOT NULL default '',
    `type` varchar(35) NOT NULL default '',
    `assigned_to` integer(15) NOT NULL default '0',
    `created_by` integer(35) NOT NULL default '0',
    `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `notes`;
CREATE TABLE `notes` (
    `id` integer(15) NOT NULL auto_increment,
    `contact_id` integer(15) NOT NULL default '0',
    `comment` text NOT NULL default '',
    `created_by` integer(15) NOT NULL default '0',
    `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY  (`id`)
);


