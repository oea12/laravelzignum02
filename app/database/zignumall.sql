CREATE TABLE `migrations` (`migration` VARCHAR(50) not null, `batch` integer not null);
INSERT INTO migrations VALUES('2014_09_06_013610_confide_setup_users_table',1);
INSERT INTO migrations VALUES('2014_09_06_013610_entrust_setup_tables',1);
INSERT INTO migrations VALUES('2014_09_06_013611_create_thor_languages_table',1);
INSERT INTO migrations VALUES('2014_09_06_013612_create_thor_images_table',1);
INSERT INTO migrations VALUES('2014_09_06_013613_create_thor_pages_table',1);
INSERT INTO migrations VALUES('2014_09_06_013614_add_remember_token_to_users_table',1);
INSERT INTO migrations VALUES('2014_09_06_013615_create_thor_modules_table',1);
INSERT INTO migrations VALUES('2014_09_12_000032_create_thor_cocktails_table',2);

INSERT INTO migrations VALUES('2014_09_18_215918_create_thor_cocktails_table',8);

INSERT INTO migrations VALUES('2014_09_30_005415_create_thor_cocktails_table',12);
INSERT INTO migrations VALUES('2014_09_30_010635_create_thor_cocktails_table',13);
INSERT INTO migrations VALUES('2014_09_30_013353_create_thor_places_table',14);
INSERT INTO migrations VALUES('2014_10_03_001648_create_thor_places_table',15);
INSERT INTO migrations VALUES('2014_10_03_001847_create_thor_fruits_table',16);
INSERT INTO migrations VALUES('2014_10_03_002011_create_thor_companions_table',17);
INSERT INTO migrations VALUES('2014_10_03_002243_create_thor_cocktails_table',18);
INSERT INTO migrations VALUES('2014_10_03_220617_create_thor_cocktails_table',19);
INSERT INTO migrations VALUES('2014_10_03_221324_create_thor_cocktails_table',20);
INSERT INTO migrations VALUES('2014_10_03_221610_create_thor_cocktails_table',21);
INSERT INTO migrations VALUES('2014_10_06_213309_create_thor_albums_table',22);
INSERT INTO migrations VALUES('2014_10_06_220115_create_thor_pictures_table',23);
INSERT INTO migrations VALUES('2014_10_07_013727_create_thor_pictures_table',24);
INSERT INTO migrations VALUES('2014_10_10_001113_create_thor_vines_table',25);
INSERT INTO migrations VALUES('2014_10_16_224834_create_thor_albums_table',26);

CREATE TABLE `users` (
	`id` integer not null primary key AUTO_INCREMENT,
	`username` VARCHAR(100) not null, 
	`email` VARCHAR(100) not null, 
	`password` VARCHAR(100) not null, 
	`confirmation_code` VARCHAR(50) not null, 
	`confirmed` tinyint not null DEFAULT '0', 
	`created_at` DATETIME not null, 
	`updated_at` DATETIME not null, 
	`remember_token` VARCHAR(50) null
);

INSERT INTO users VALUES(1,'developer','delirable@gmail.com',"$2y$10$dpkwYk0e4AI5xZ0N1Vy/dukOZ7pIz6sFIcB7r8DgYttruE/Z9HnU2",'a84df569acfc4c90342da8b9974cf182',1,'2014-09-06 01:36:15','2014-10-17 00:15:00','C1ToA1YbK4200gJ8G5jHKUWdS0e2pO8zVrwygRmu9j2rLB6l3jOdCAQG39o5');
INSERT INTO users VALUES(2,'admin','zignum.mez@gmail.com',"$2y$10$21HxB5cSsNktcwQ09FNi2O0H0PfbNogYN002.tS2ZoXlZQ1R1dw1y",'be058757640566cd9dcd2ac7f217612f',1,'2014-09-06 01:36:15','2014-10-17 00:31:17','J17p65unIcANHWcW9PUgj3Yej6yVdparRnMcCwtOfHmC1Vu6itRHvAIF0Wz0');
INSERT INTO users VALUES(11,'ellemiranda','eduardo.miranda@grupojaque.com','$2y$10$JV4ERf35Kcw3eGWKI8noA.kpU17IEv903CXr8kteQ8s1DsZEPKzHe','b8a50f8fa437f7d30a8147181f74baf7',1,'2014-09-08 22:07:00','2014-10-17 00:22:11','aFZu7TjTy5b4Jt3f5lI8QQ4GNMv0xIBQl97hoPYoAoY71YmorqxNBO2eWgDo');

CREATE TABLE `password_reminders` (
	`email` VARCHAR(50) not null, 
	`token` VARCHAR(50) not null, 
	`created_at` DATETIME not null
	);

INSERT INTO password_reminders VALUES('eduardomiranda@ciencias.unam.mx','84cc468f90c81a742871454d495295e0','2014-09-06 01:47:34');
INSERT INTO password_reminders VALUES('delirable@gmail.com','63a6ebd19116abbabf1e34a8115f9625','2014-09-06 01:51:32');
INSERT INTO password_reminders VALUES('delirable@gmail.com','a08a1ff9eb8eeb31f450b37addbd9239','2014-09-06 02:22:10');
INSERT INTO password_reminders VALUES('yovasx2@hotmail.com','6df13efcf5b00d85a1a458c0eccbab67','2014-09-08 20:41:52');
INSERT INTO password_reminders VALUES('yovasx2@hotmail.com','1462ae5db07f998875c3570891aa592e','2014-09-08 20:44:35');
INSERT INTO password_reminders VALUES('yovasx2@hotmail.com','66ed0579a706c646508a7f6c44d1d93c','2014-09-08 21:05:45');
INSERT INTO password_reminders VALUES('yovasx2@hotmail.com','5f68210afb5aeda4cae73dda551aa540','2014-09-08 21:06:15');
INSERT INTO password_reminders VALUES('yovasx2@hotmail.com','cb552f31750a660a44f21eaea31e2579','2014-09-08 21:06:37');
INSERT INTO password_reminders VALUES('yovasx2@hotmail.com','c688eaa69b9b244dfcd893aafc676cc5','2014-09-08 21:10:39');

CREATE TABLE `roles` (
	`id` integer not null primary key AUTO_INCREMENT, 
	`name` VARCHAR(50) not null, 
	`created_at` DATETIME not null, 
	`updated_at` DATETIME not null
);

INSERT INTO roles VALUES(1,'administrator','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO roles VALUES(2,'developer','2014-09-06 01:36:15','2014-09-06 01:36:15');

CREATE TABLE `assigned_roles` (
	`id` integer not null primary key AUTO_INCREMENT, 
	`user_id` integer not null, 
	`role_id` integer not null, 
	foreign key(`user_id`) references users(`id`) on delete cascade on update cascade, 
	foreign key(`role_id`) references `roles`(`id`)
);

INSERT INTO assigned_roles VALUES(1,1,2);
INSERT INTO assigned_roles VALUES(2,2,1);
INSERT INTO assigned_roles VALUES(11,11,2);

CREATE TABLE `permissions` (
	`id` integer not null primary key AUTO_INCREMENT, 
	`name` VARCHAR(50) not null, 
	`display_name` VARCHAR(50) not null, 
	`created_at` DATETIME not null, 
	`updated_at` DATETIME not null
);

INSERT INTO permissions VALUES(1,'access_backend','Access Backend','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(2,'list_languages','List Languages','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(3,'create_languages','Create Languages','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(4,'read_languages','Read Languages','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(5,'update_languages','Update Languages','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(6,'delete_languages','Delete Languages','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(7,'list_pages','List Pages','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(8,'create_pages','Create Pages','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(9,'read_pages','Read Pages','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(10,'update_pages','Update Pages','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(11,'delete_pages','Delete Pages','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(12,'list_roles','List Roles','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(13,'create_roles','Create Roles','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(14,'read_roles','Read Roles','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(15,'update_roles','Update Roles','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(16,'delete_roles','Delete Roles','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(17,'list_permissions','List Permissions','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(18,'create_permissions','Create Permissions','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(19,'read_permissions','Read Permissions','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(20,'update_permissions','Update Permissions','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(21,'delete_permissions','Delete Permissions','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(22,'list_users','List Users','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(23,'create_users','Create Users','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(24,'read_users','Read Users','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(25,'update_users','Update Users','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(26,'delete_users','Delete Users','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(27,'list_modules','List Modules','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(28,'create_modules','Create Modules','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(29,'read_modules','Read Modules','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(30,'update_modules','Update Modules','2014-09-06 01:36:15','2014-09-06 01:36:15');
INSERT INTO permissions VALUES(31,'delete_modules','Delete Modules','2014-09-06 01:36:15','2014-09-06 01:36:15');

INSERT INTO permissions VALUES(82,'list_places','List Places','2014-10-03 00:16:48','2014-10-03 00:16:48');
INSERT INTO permissions VALUES(83,'create_places','Create Places','2014-10-03 00:16:48','2014-10-03 00:16:48');
INSERT INTO permissions VALUES(84,'read_places','Read Places','2014-10-03 00:16:48','2014-10-03 00:16:48');
INSERT INTO permissions VALUES(85,'update_places','Update Places','2014-10-03 00:16:48','2014-10-03 00:16:48');
INSERT INTO permissions VALUES(86,'delete_places','Delete Places','2014-10-03 00:16:48','2014-10-03 00:16:48');
INSERT INTO permissions VALUES(87,'list_fruits','List Fruits','2014-10-03 00:18:47','2014-10-03 00:18:47');
INSERT INTO permissions VALUES(88,'create_fruits','Create Fruits','2014-10-03 00:18:47','2014-10-03 00:18:47');
INSERT INTO permissions VALUES(89,'read_fruits','Read Fruits','2014-10-03 00:18:47','2014-10-03 00:18:47');
INSERT INTO permissions VALUES(90,'update_fruits','Update Fruits','2014-10-03 00:18:47','2014-10-03 00:18:47');
INSERT INTO permissions VALUES(91,'delete_fruits','Delete Fruits','2014-10-03 00:18:47','2014-10-03 00:18:47');
INSERT INTO permissions VALUES(92,'list_companions','List Companions','2014-10-03 00:20:11','2014-10-03 00:20:11');
INSERT INTO permissions VALUES(93,'create_companions','Create Companions','2014-10-03 00:20:11','2014-10-03 00:20:11');
INSERT INTO permissions VALUES(94,'read_companions','Read Companions','2014-10-03 00:20:11','2014-10-03 00:20:11');
INSERT INTO permissions VALUES(95,'update_companions','Update Companions','2014-10-03 00:20:11','2014-10-03 00:20:11');
INSERT INTO permissions VALUES(96,'delete_companions','Delete Companions','2014-10-03 00:20:11','2014-10-03 00:20:11');

INSERT INTO permissions VALUES(107,'list_cocktails','List Cocktails','2014-10-03 22:16:10','2014-10-03 22:16:10');
INSERT INTO permissions VALUES(108,'create_cocktails','Create Cocktails','2014-10-03 22:16:10','2014-10-03 22:16:10');
INSERT INTO permissions VALUES(109,'read_cocktails','Read Cocktails','2014-10-03 22:16:10','2014-10-03 22:16:10');
INSERT INTO permissions VALUES(110,'update_cocktails','Update Cocktails','2014-10-03 22:16:10','2014-10-03 22:16:10');
INSERT INTO permissions VALUES(111,'delete_cocktails','Delete Cocktails','2014-10-03 22:16:10','2014-10-03 22:16:10');

INSERT INTO permissions VALUES(122,'list_pictures','List Pictures','2014-10-07 01:37:27','2014-10-07 01:37:27');
INSERT INTO permissions VALUES(123,'create_pictures','Create Pictures','2014-10-07 01:37:27','2014-10-07 01:37:27');
INSERT INTO permissions VALUES(124,'read_pictures','Read Pictures','2014-10-07 01:37:27','2014-10-07 01:37:27');
INSERT INTO permissions VALUES(125,'update_pictures','Update Pictures','2014-10-07 01:37:27','2014-10-07 01:37:27');
INSERT INTO permissions VALUES(126,'delete_pictures','Delete Pictures','2014-10-07 01:37:27','2014-10-07 01:37:27');
INSERT INTO permissions VALUES(127,'list_vines','List Vines','2014-10-10 00:11:14','2014-10-10 00:11:14');
INSERT INTO permissions VALUES(128,'create_vines','Create Vines','2014-10-10 00:11:14','2014-10-10 00:11:14');
INSERT INTO permissions VALUES(129,'read_vines','Read Vines','2014-10-10 00:11:14','2014-10-10 00:11:14');
INSERT INTO permissions VALUES(130,'update_vines','Update Vines','2014-10-10 00:11:14','2014-10-10 00:11:14');
INSERT INTO permissions VALUES(131,'delete_vines','Delete Vines','2014-10-10 00:11:14','2014-10-10 00:11:14');
INSERT INTO permissions VALUES(132,'list_albums','List Albums','2014-10-16 22:48:35','2014-10-16 22:48:35');
INSERT INTO permissions VALUES(133,'create_albums','Create Albums','2014-10-16 22:48:35','2014-10-16 22:48:35');
INSERT INTO permissions VALUES(134,'read_albums','Read Albums','2014-10-16 22:48:35','2014-10-16 22:48:35');
INSERT INTO permissions VALUES(135,'update_albums','Update Albums','2014-10-16 22:48:35','2014-10-16 22:48:35');
INSERT INTO permissions VALUES(136,'delete_albums','Delete Albums','2014-10-16 22:48:35','2014-10-16 22:48:35');

CREATE TABLE `permission_role` (
	`id` integer not null primary key AUTO_INCREMENT,
	`permission_id` integer not null, 
	`role_id` integer not null, 
	foreign key(`permission_id`) references `permissions`(`id`), 
	foreign key(`role_id`) references `roles`(`id`)
);

INSERT INTO permission_role VALUES(1,1,1);
INSERT INTO permission_role VALUES(2,2,1);
INSERT INTO permission_role VALUES(3,3,1);
INSERT INTO permission_role VALUES(4,4,1);
INSERT INTO permission_role VALUES(5,5,1);
INSERT INTO permission_role VALUES(6,6,1);
INSERT INTO permission_role VALUES(7,7,1);
INSERT INTO permission_role VALUES(8,8,1);
INSERT INTO permission_role VALUES(9,9,1);
INSERT INTO permission_role VALUES(10,10,1);
INSERT INTO permission_role VALUES(11,11,1);
INSERT INTO permission_role VALUES(12,22,1);
INSERT INTO permission_role VALUES(13,23,1);
INSERT INTO permission_role VALUES(14,24,1);
INSERT INTO permission_role VALUES(15,25,1);
INSERT INTO permission_role VALUES(16,26,1);
INSERT INTO permission_role VALUES(17,1,2);
INSERT INTO permission_role VALUES(18,2,2);
INSERT INTO permission_role VALUES(19,3,2);
INSERT INTO permission_role VALUES(20,4,2);
INSERT INTO permission_role VALUES(21,5,2);
INSERT INTO permission_role VALUES(22,6,2);
INSERT INTO permission_role VALUES(23,7,2);
INSERT INTO permission_role VALUES(24,8,2);
INSERT INTO permission_role VALUES(25,9,2);
INSERT INTO permission_role VALUES(26,10,2);
INSERT INTO permission_role VALUES(27,11,2);
INSERT INTO permission_role VALUES(28,12,2);
INSERT INTO permission_role VALUES(29,13,2);
INSERT INTO permission_role VALUES(30,14,2);
INSERT INTO permission_role VALUES(31,15,2);
INSERT INTO permission_role VALUES(32,16,2);
INSERT INTO permission_role VALUES(33,17,2);
INSERT INTO permission_role VALUES(34,18,2);
INSERT INTO permission_role VALUES(35,19,2);
INSERT INTO permission_role VALUES(36,20,2);
INSERT INTO permission_role VALUES(37,21,2);
INSERT INTO permission_role VALUES(38,22,2);
INSERT INTO permission_role VALUES(39,23,2);
INSERT INTO permission_role VALUES(40,24,2);
INSERT INTO permission_role VALUES(41,25,2);
INSERT INTO permission_role VALUES(42,26,2);
INSERT INTO permission_role VALUES(43,27,2);
INSERT INTO permission_role VALUES(44,28,2);
INSERT INTO permission_role VALUES(45,29,2);
INSERT INTO permission_role VALUES(46,30,2);
INSERT INTO permission_role VALUES(47,31,2);

INSERT INTO permission_role VALUES(98,82,2);
INSERT INTO permission_role VALUES(99,83,2);
INSERT INTO permission_role VALUES(100,84,2);
INSERT INTO permission_role VALUES(101,85,2);
INSERT INTO permission_role VALUES(102,86,2);
INSERT INTO permission_role VALUES(103,87,2);
INSERT INTO permission_role VALUES(104,88,2);
INSERT INTO permission_role VALUES(105,89,2);
INSERT INTO permission_role VALUES(106,90,2);
INSERT INTO permission_role VALUES(107,91,2);
INSERT INTO permission_role VALUES(108,92,2);
INSERT INTO permission_role VALUES(109,93,2);
INSERT INTO permission_role VALUES(110,94,2);
INSERT INTO permission_role VALUES(111,95,2);
INSERT INTO permission_role VALUES(112,96,2);
INSERT INTO permission_role VALUES(123,107,2);
INSERT INTO permission_role VALUES(124,108,2);
INSERT INTO permission_role VALUES(125,109,2);
INSERT INTO permission_role VALUES(126,110,2);
INSERT INTO permission_role VALUES(127,111,2);

INSERT INTO permission_role VALUES(138,122,2);
INSERT INTO permission_role VALUES(139,123,2);
INSERT INTO permission_role VALUES(140,124,2);
INSERT INTO permission_role VALUES(141,125,2);
INSERT INTO permission_role VALUES(142,126,2);
INSERT INTO permission_role VALUES(143,127,2);
INSERT INTO permission_role VALUES(144,128,2);
INSERT INTO permission_role VALUES(145,129,2);
INSERT INTO permission_role VALUES(146,130,2);
INSERT INTO permission_role VALUES(147,131,2);
INSERT INTO permission_role VALUES(148,132,2);
INSERT INTO permission_role VALUES(149,133,2);
INSERT INTO permission_role VALUES(150,134,2);
INSERT INTO permission_role VALUES(151,135,2);
INSERT INTO permission_role VALUES(152,136,2);
INSERT INTO permission_role VALUES(153,85,1);
INSERT INTO permission_role VALUES(154,86,1);
INSERT INTO permission_role VALUES(155,87,1);
INSERT INTO permission_role VALUES(156,88,1);
INSERT INTO permission_role VALUES(157,89,1);
INSERT INTO permission_role VALUES(158,90,1);
INSERT INTO permission_role VALUES(159,91,1);
INSERT INTO permission_role VALUES(160,92,1);
INSERT INTO permission_role VALUES(161,93,1);
INSERT INTO permission_role VALUES(162,94,1);
INSERT INTO permission_role VALUES(163,95,1);
INSERT INTO permission_role VALUES(164,96,1);
INSERT INTO permission_role VALUES(165,107,1);
INSERT INTO permission_role VALUES(166,108,1);
INSERT INTO permission_role VALUES(167,109,1);
INSERT INTO permission_role VALUES(168,110,1);
INSERT INTO permission_role VALUES(169,111,1);
INSERT INTO permission_role VALUES(170,127,1);
INSERT INTO permission_role VALUES(171,128,1);
INSERT INTO permission_role VALUES(172,129,1);
INSERT INTO permission_role VALUES(173,130,1);
INSERT INTO permission_role VALUES(174,131,1);
INSERT INTO permission_role VALUES(175,132,1);
INSERT INTO permission_role VALUES(176,133,1);
INSERT INTO permission_role VALUES(177,134,1);
INSERT INTO permission_role VALUES(178,135,1);
INSERT INTO permission_role VALUES(179,136,1);
INSERT INTO permission_role VALUES(181,123,1);
INSERT INTO permission_role VALUES(182,125,1);
INSERT INTO permission_role VALUES(183,126,1);
INSERT INTO permission_role VALUES(184,124,1);
INSERT INTO permission_role VALUES(185,122,1);

CREATE TABLE `languages` (
	`id` integer not null primary key AUTO_INCREMENT, 
	`name` VARCHAR(50) not null, 
	`code` VARCHAR(50) not null, 
	`locale` VARCHAR(50) not null, 
	`is_active` tinyint not null DEFAULT '1', 
	`sorting` integer not null DEFAULT '0', 
	`created_at` DATETIME not null, 
	`updated_at` DATETIME not null
);
INSERT INTO languages VALUES(1,'English','en','en_US',1,1,'2014-09-06 01:36:14','2014-09-06 01:36:14');
INSERT INTO languages VALUES(2,'Español','es','es_ES',1,2,'2014-09-06 01:36:14','2014-09-06 01:36:14');

CREATE TABLE `pages` (
	`id` integer not null primary key AUTO_INCREMENT, 
	`taxonomy` VARCHAR(50) null DEFAULT 'page', 
	`controller` VARCHAR(50) null, 
	`action` VARCHAR(50) null, 
	`view` VARCHAR(50) null, 
	`is_https` tinyint null DEFAULT 0, 
	`is_indexable` tinyint null DEFAULT 1, 
	`is_deletable` tinyint null DEFAULT 1, 
	`sorting` integer null DEFAULT 0, 
	`status` VARCHAR(50) null DEFAULT 'draft', 
	`parent_id` integer null, 
	`created_at` DATETIME not null, 
	`updated_at` DATETIME not null, 
	foreign key(`parent_id`) references pages(`id`)
);

CREATE TABLE `page_texts` (
	`id` integer not null primary key AUTO_INCREMENT, 
	`page_id` integer not null, 
	`language_id` integer not null, 
	`title` VARCHAR(50) null, 
	`content` text null, 
	`slug` text null, 
	`window_title` VARCHAR(50) null, 
	`meta_description` VARCHAR(50) null, 
	`meta_keywords` VARCHAR(50) null, 
	`canonical_url` VARCHAR(50) null, 
	`redirect_url` VARCHAR(50) null, 
	`redirect_code` VARCHAR(50) null, 
	`is_translated` tinyint null, 
	`created_at` DATETIME not null, 
	`updated_at` DATETIME not null, 
	foreign key(`page_id`) references pages(`id`) on delete cascade, 
	foreign key(`language_id`) references languages(`id`) on delete cascade
);

CREATE TABLE `modules` (`id` integer not null primary key AUTO_INCREMENT, `name` VARCHAR(50) null, `display_name` VARCHAR(50) null, `icon` VARCHAR(50) null, `description` text null, `is_pageable` tinyint null, `model_class` VARCHAR(50) null, `controller_class` VARCHAR(50) null, `metadata` text null, `is_active` tinyint null, `sorting` integer null, `created_at` DATETIME not null, `updated_at` DATETIME not null);
INSERT INTO modules VALUES(1,'page','Pages','fa-bookmark','Pages module',1,'\\Thor\\Models\\Page','\\Thor\\Backend\\PagesController','',1,-99,'2014-09-06 01:36:26','2014-09-06 01:36:26');
INSERT INTO modules VALUES(12,'place','Place','fa-globe','Here you can add, edit, delete, information about the places as the name and also upload a picture of this.',0,'\\Thor\\Models\\Place','\\Thor\\Backend\\PlacesController','a:2:{s:5:input;a:14:{s:6:_token;s:40:YVYEXG3yWVfa4Do8jkyL70nO4nhp1GLKCqDpZoNo;s:4:name;s:5:place;s:12:display_name;s:5:Place;s:4:icon;s:8:fa-globe;s:11:description;s:107:Here you can add, edit, delete, information about the places as the name and also upload a picture of this.;s:9:is_active;s:1:1;s:7:sorting;s:1:2;s:10:behaviours;a:2:{i:0;s:12:translatable;i:1;s:9:imageable;}s:14:general_fields;s:34:title:string:text,icon:string:file;s:19:translatable_fields;s:17:title:string:text;s:15:listable_fields;s:9:Name,Icon;s:11:is_pageable;b:0;s:16:controller_class;s:30:\\Thor\\Backend\\PlacesController;s:11:model_class;s:18:\\Thor\\Models\\Place;}s:8:resolver;a:27:{s:8:singular;s:5:place;s:6:plural;s:6:places;s:13:generalFields;a:2:{s:5:title;O:19:Thor\\Support\\Object:1:{s:8:',1,2,'2014-10-03 00:16:48','2014-10-03 00:16:48');
INSERT INTO modules VALUES(13,'fruit','Fruit','fa-lemon-o','Here you can add, edit, delete, information about the fruits as the name and also upload a picture of this. This is shown in the game.',0,'\\Thor\\Models\\Fruit','\\Thor\\Backend\\FruitsController','a:2:{s:5:input;a:14:{s:6:_token;s:40:YVYEXG3yWVfa4Do8jkyL70nO4nhp1GLKCqDpZoNo;s:4:name;s:5:fruit;s:12:display_name;s:5:Fruit;s:4:icon;s:10:fa-lemon-o;s:11:description;s:134:Here you can add, edit, delete, information about the fruits as the name and also upload a picture of this. This is shown in the game.;s:9:is_active;s:1:1;s:7:sorting;s:1:3;s:10:behaviours;a:2:{i:0;s:12:translatable;i:1;s:9:imageable;}s:14:general_fields;s:34:title:string:text,icon:string:file;s:19:translatable_fields;s:17:title:string:text;s:15:listable_fields;s:9:Name,Icon;s:11:is_pageable;b:0;s:16:controller_class;s:30:\\Thor\\Backend\\FruitsController;s:11:model_class;s:18:\\Thor\\Models\\Fruit;}s:8:resolver;a:27:{s:8:singular;s:5:fruit;s:6:plural;s:6:fruits;s:13:generalFields;a:2:{s:5:title;O:19:Thor\\Support\\Object:1:{s:8:',1,3,'2014-10-03 00:18:47','2014-10-03 00:18:47');
INSERT INTO modules VALUES(14,'companion','Companion','fa-group','Here you can add, edit, delete, information about the companion as the name and also upload a picture of this. This is shown in the game.',0,'\\Thor\\Models\\Companion','\\Thor\\Backend\\CompanionsController','a:2:{s:5:input;a:14:{s:6:_token;s:40:YVYEXG3yWVfa4Do8jkyL70nO4nhp1GLKCqDpZoNo;s:4:name;s:9:companion;s:12:display_name;s:9:Companion;s:4:icon;s:8:fa-group;s:11:description;s:137:Here you can add, edit, delete, information about the companion as the name and also upload a picture of this. This is shown in the game.;s:9:is_active;s:1:1;s:7:sorting;s:1:4;s:10:behaviours;a:2:{i:0;s:12:translatable;i:1;s:9:imageable;}s:14:general_fields;s:34:title:string:text,icon:string:file;s:19:translatable_fields;s:17:title:string:text;s:15:listable_fields;s:9:Name,Icon;s:11:is_pageable;b:0;s:16:controller_class;s:34:\\Thor\\Backend\\CompanionsController;s:11:model_class;s:22:\\Thor\\Models\\Companion;}s:8:resolver;a:27:{s:8:singular;s:9:companion;s:6:plural;s:10:companions;s:13:generalFields;a:2:{s:5:title;O:19:Thor\\Support\\Object:1:{s:8:',1,4,'2014-10-03 00:20:11','2014-10-03 00:20:11');
INSERT INTO modules VALUES(17,'cocktail','Cockatil','fa-glass','Here you can add, edit, delete, information about the cocktails as the name and instructions for preparation, also upload a picture of this.',0,'\\Thor\\Models\\Cocktail','\\Thor\\Backend\\CocktailsController','a:2:{s:5:input;a:14:{s:6:_token;s:40:oAgBUJVNEOBcG1n652iiWK4y1F52TUNfk3m1kh42;s:4:name;s:8:cocktail;s:12:display_name;s:8:Cockatil;s:4:icon;s:8:fa-glass;s:11:description;s:140:Here you can add, edit, delete, information about the cocktails as the name and instructions for preparation, also upload a picture of this.;s:9:is_active;s:1:1;s:7:sorting;s:1:5;s:10:behaviours;a:2:{i:0;s:12:translatable;i:1;s:9:imageable;}s:14:general_fields;s:122:product:string:select,name:string:text,cocktailimage:string:file,cocktailicon:string:file,instructions:mediumText:textarea;s:19:translatable_fields;s:71:product:string:select,name:string:text,instructions:mediumText:textarea;s:15:listable_fields;s:54:Product,Name,Cocktail_Image,Cocktail_Icon,Instructions;s:11:is_pageable;b:0;s:16:controller_class;s:33:\\Thor\\Backend\\CocktailsController;s:11:model_class;s:21:\\Thor\\Models\\Cocktail;}s:8:resolver;a:27:{s:8:singular;s:8:cocktail;s:6:plural;s:9:cocktails;s:13:generalFields;a:5:{s:7:product;O:19:Thor\\Support\\Object:1:{s:8:',1,5,'2014-10-03 22:16:10','2014-10-03 22:16:10');
INSERT INTO modules VALUES(20,'picture','Picture','fa-picture-o','Here you can add, edit, delete and show the pictures from an album and his name..',0,'\\Thor\\Models\\Picture','\\Thor\\Backend\\PicturesController','a:2:{s:5:input;a:14:{s:6:_token;s:40:nNAgTm5GK7UsCPTAzuNZpjMjlvFbxEvuAZ6tM5JW;s:4:name;s:7:picture;s:12:display_name;s:7:Picture;s:4:icon;s:12:fa-picture-o;s:11:description;s:81:Here you can add, edit, delete and show the pictures from an album and his name..;s:9:is_active;s:1:1;s:7:sorting;s:1:7;s:10:behaviours;a:1:{i:0;s:9:imageable;}s:14:general_fields;s:62:album_id:int:text:albums,title:string:text,picture:string:file;s:19:translatable_fields;s:42:album_id:int:text:albums,title:string:text;s:15:listable_fields;s:13:Title,Picture;s:11:is_pageable;b:0;s:16:controller_class;s:32:\\Thor\\Backend\\PicturesController;s:11:model_class;s:20:\\Thor\\Models\\Picture;}s:8:resolver;a:27:{s:8:singular;s:7:picture;s:6:plural;s:8:pictures;s:13:generalFields;a:3:{s:8:album_id;O:19:Thor\\Support\\Object:1:{s:8:',1,7,'2014-10-07 01:37:28','2014-10-07 01:37:28');
INSERT INTO modules VALUES(21,'vine','Vine',' fa-vine','Here you can add the link to a Vine video.',0,'\\Thor\\Models\\Vine','\\Thor\\Backend\\VinesController','a:2:{s:5:input;a:13:{s:6:_token;s:40:e2xqF1nfwSQ0tlrcdGp6NpzS8O7lO4hsG81qTpsJ;s:4:name;s:4:vine;s:12:display_name;s:4:Vine;s:4:icon;s:8: fa-vine;s:11:description;s:42:Here you can add the link to a Vine video.;s:9:is_active;s:1:1;s:7:sorting;s:1:8;s:14:general_fields;s:16:vine:string:text;s:19:translatable_fields;s:0:;s:15:listable_fields;s:4:Vine;s:11:is_pageable;b:0;s:16:controller_class;s:29:\\Thor\\Backend\\VinesController;s:11:model_class;s:17:\\Thor\\Models\\Vine;}s:8:resolver;a:27:{s:8:singular;s:4:vine;s:6:plural;s:5:vines;s:13:generalFields;a:1:{s:4:vine;O:19:Thor\\Support\\Object:1:{s:8:',1,8,'2014-10-10 00:11:14','2014-10-10 00:11:14');
INSERT INTO modules VALUES(22,'album','Event','fa-camera-retro','Here you can add, edit, delete an album name and its description.',0,'\\Thor\\Models\\Album','\\Thor\\Backend\\AlbumsController','a:2:{s:5:input;a:14:{s:6:_token;s:40:M1unA7L87kdk3q60IgaQteMoKJiBzIBTnEODKRYk;s:4:name;s:5:album;s:12:display_name;s:5:Album;s:4:icon;s:15:fa-camera-retro;s:11:description;s:65:Here you can add, edit, delete an album name and its description.;s:9:is_active;s:1:1;s:7:sorting;s:1:7;s:10:behaviours;a:1:{i:0;s:12:translatable;}s:14:general_fields;s:48:album_name:string:text,description:text:textarea;s:19:translatable_fields;s:48:album_name:string:text,description:text:textarea;s:15:listable_fields;s:22:Album_Name,Description;s:11:is_pageable;b:0;s:16:controller_class;s:30:\\Thor\\Backend\\AlbumsController;s:11:model_class;s:18:\\Thor\\Models\\Album;}s:8:resolver;a:27:{s:8:singular;s:5:album;s:6:plural;s:6:albums;s:13:generalFields;a:2:{s:10:album_name;O:19:Thor\\Support\\Object:1:{s:8:',1,7,'2014-10-16 22:48:35','2014-10-16 22:48:35');

CREATE TABLE `places` (
	`id` integer not null primary key AUTO_INCREMENT, 
	`title` VARCHAR(50) null, 
	`icon` VARCHAR(50) null, 
	`created_at` DATETIME not null, 
	`updated_at` DATETIME not null
);

INSERT INTO places VALUES(1,'','','2014-10-21 15:47:54','2014-10-21 15:47:54');
INSERT INTO places VALUES(2,'','','2014-10-21 15:47:55','2014-10-21 15:47:55');
INSERT INTO places VALUES(3,'','','2014-10-21 15:47:55','2014-10-21 15:47:55');
INSERT INTO places VALUES(4,'','','2014-10-21 15:47:56','2014-10-21 15:47:56');
INSERT INTO places VALUES(5,'','','2014-10-21 15:47:57','2014-10-21 15:47:57');
INSERT INTO places VALUES(6,'','','2014-10-21 15:47:57','2014-10-21 15:47:57');
INSERT INTO places VALUES(7,'','','2014-10-21 15:47:58','2014-10-21 15:47:58');
INSERT INTO places VALUES(8,'','','2014-10-21 15:47:59','2014-10-21 15:47:59');
INSERT INTO places VALUES(9,'','','2014-10-21 15:47:59','2014-10-21 15:47:59');
INSERT INTO places VALUES(10,'','','2014-10-21 15:48:00','2014-10-21 15:48:00');
INSERT INTO places VALUES(11,'','','2014-10-21 15:48:00','2014-10-21 15:48:00');
INSERT INTO places VALUES(12,'','','2014-10-21 15:48:01','2014-10-21 15:48:01');
INSERT INTO places VALUES(13,'','','2014-10-21 15:48:02','2014-10-21 15:48:02');
INSERT INTO places VALUES(14,'','','2014-10-21 15:48:02','2014-10-21 15:48:02');
INSERT INTO places VALUES(15,'','','2014-10-21 15:48:03','2014-10-21 15:48:03');
INSERT INTO places VALUES(16,'','','2014-10-21 15:48:03','2014-10-21 15:48:03');

CREATE TABLE `place_texts` (`id` integer not null primary key AUTO_INCREMENT, 
	`place_id` integer not null, 
	`language_id` integer not null, 
	`title` VARCHAR(50) null, 
	`is_translated` tinyint null, 
	`created_at` DATETIME not null, 
	`updated_at` DATETIME not null, 
	foreign key(`place_id`) references `places`(`id`) on delete cascade, 
	foreign key(`language_id`) references `languages`(`id`) on delete cascade
);

CREATE TABLE `fruits` (
	`id` integer not null primary key AUTO_INCREMENT, 
	`title` VARCHAR(50) null, `icon` VARCHAR(50) null, 
	`created_at` DATETIME not null, 
	`updated_at` DATETIME not null
);

INSERT INTO fruits VALUES(1,'','','2014-10-21 15:44:48','2014-10-21 15:44:48');
INSERT INTO fruits VALUES(2,'','','2014-10-21 15:45:33','2014-10-21 15:45:33');
INSERT INTO fruits VALUES(3,'','','2014-10-21 15:46:15','2014-10-21 15:46:15');
INSERT INTO fruits VALUES(4,'','','2014-10-21 15:46:19','2014-10-21 15:46:19');
INSERT INTO fruits VALUES(5,'','','2014-10-21 15:46:21','2014-10-21 15:46:21');
INSERT INTO fruits VALUES(6,'','','2014-10-21 15:46:23','2014-10-21 15:46:23');
INSERT INTO fruits VALUES(7,'','','2014-10-21 15:46:45','2014-10-21 15:46:45');
INSERT INTO fruits VALUES(8,'','','2014-10-21 15:46:47','2014-10-21 15:46:47');
INSERT INTO fruits VALUES(9,'','','2014-10-21 15:46:48','2014-10-21 15:46:48');
INSERT INTO fruits VALUES(10,'','','2014-10-21 15:46:49','2014-10-21 15:46:49');
INSERT INTO fruits VALUES(11,'','','2014-10-21 15:46:50','2014-10-21 15:46:50');
INSERT INTO fruits VALUES(12,'','','2014-10-21 15:46:51','2014-10-21 15:46:51');

CREATE TABLE `fruit_texts` (
	`id` integer not null primary key AUTO_INCREMENT, 
	`fruit_id` integer not null, 
	`language_id` integer not null, 
	`title` VARCHAR(50) null, 
	`is_translated` tinyint null, 
	`created_at` DATETIME not null, 
	`updated_at` DATETIME not null, 
	foreign key(`fruit_id`) references `fruits`(`id`) on delete cascade, 
	foreign key(`language_id`) references `languages`(`id`) on delete cascade
);

CREATE TABLE `companions` (
	`id` integer not null primary key AUTO_INCREMENT, 
	`title` VARCHAR(50) null, 
	`icon` VARCHAR(50) null, 
	`created_at` DATETIME not null, 
	`updated_at` DATETIME not null
);

INSERT INTO companions VALUES(1,'','','2014-10-21 15:48:46','2014-10-21 15:48:46');
INSERT INTO companions VALUES(2,'','','2014-10-21 15:48:46','2014-10-21 15:48:46');
INSERT INTO companions VALUES(3,'','','2014-10-21 15:48:47','2014-10-21 15:48:47');
INSERT INTO companions VALUES(4,'','','2014-10-21 15:48:48','2014-10-21 15:48:48');
INSERT INTO companions VALUES(5,'','','2014-10-21 15:48:48','2014-10-21 15:48:48');
INSERT INTO companions VALUES(6,'','','2014-10-21 15:48:49','2014-10-21 15:48:49');
INSERT INTO companions VALUES(7,'','','2014-10-21 15:48:49','2014-10-21 15:48:49');
INSERT INTO companions VALUES(8,'','','2014-10-21 15:48:50','2014-10-21 15:48:50');

CREATE TABLE `companion_texts` (
	`id` integer not null primary key AUTO_INCREMENT, 
	`companion_id` integer not null, 
	`language_id` integer not null, 
	`title` VARCHAR(50) null, 
	`is_translated` tinyint null, 
	`created_at` DATETIME not null, 
	`updated_at` DATETIME not null, 
	foreign key(`companion_id`) references `companions`(`id`) on delete cascade, 
	foreign key(`language_id`) references `languages`(`id`) on delete cascade
);

CREATE TABLE `cocktails` (
	`id` integer not null primary key AUTO_INCREMENT, 
	`product` VARCHAR(50) null, `name` VARCHAR(50) null, 
	`cocktailimage` VARCHAR(50) null, 
	`cocktailicon` VARCHAR(50) null, 
	`instructions` text null, 
	`created_at` DATETIME not null, 
	`updated_at` DATETIME not null
);

CREATE TABLE `cocktail_texts` (
	`id` integer not null primary key AUTO_INCREMENT, 
	`cocktail_id` integer not null, 
	`language_id` integer not null, 
	`product` VARCHAR(50) null, 
	`name` VARCHAR(50) null, 
	`instructions` text null, 
	`is_translated` tinyint null, 
	`created_at` DATETIME not null, 
	`updated_at` DATETIME not null, 
	foreign key(`cocktail_id`) references `cocktails`(`id`) on delete cascade, 
	foreign key(`language_id`) references `languages`(`id`) on delete cascade
);

CREATE TABLE `vines` (
	`id` integer not null primary key AUTO_INCREMENT, 
	`vine` VARCHAR(50) null, 
	`created_at` DATETIME not null, 
	`updated_at` DATETIME not null
);

INSERT INTO vines VALUES(1,'OAA9tpgF7nz','2014-10-10 00:11:55','2014-10-10 00:11:55');

CREATE TABLE `albums` (
	`id` integer not null primary key AUTO_INCREMENT, 
	`album_name` VARCHAR(50) null, 
	`description` text null, 
	`created_at` DATETIME not null, 
	`updated_at` DATETIME not null
);

CREATE TABLE `album_texts` (
	`id` integer not null primary key AUTO_INCREMENT, 
	`album_id` integer not null, 
	`language_id` integer not null, 
	`album_name` VARCHAR(50) null, 
	`description` text null, 
	`is_translated` tinyint null, 
	`created_at` DATETIME not null, 
	`updated_at` DATETIME not null, 
	foreign key(`album_id`) references `albums`(`id`) on delete cascade, 
	foreign key(`language_id`) references `languages`(`id`) on delete cascade
);

CREATE TABLE `pictures` (
	`id` integer not null primary key AUTO_INCREMENT, 
	`album_id` integer null, `title` VARCHAR(50) null, 
	`picture` VARCHAR(50) null, 
	`created_at` DATETIME not null, 
	`updated_at` DATETIME not null, 
	foreign key(`album_id`) references `albums`(`id`)
);

CREATE TABLE `picture_texts` (
	`id` integer not null primary key AUTO_INCREMENT, 
	`picture_id` integer not null, 
	`language_id` integer not null, 
	`album_id` integer null, 
	`title` VARCHAR(50) null, 
	`is_translated` tinyint null, 
	`created_at` DATETIME not null, 
	`updated_at` DATETIME not null, 
	foreign key(`picture_id`) references `pictures`(`id`) on delete cascade, 
	foreign key(`language_id`) references `languages`(`id`) on delete cascade, 
	foreign key(`album_id`) references `albums`(`id`) on delete cascade
);

CREATE UNIQUE INDEX roles_name_unique on roles (name);
CREATE UNIQUE INDEX permissions_name_unique on permissions (name);
CREATE UNIQUE INDEX languages_code_unique on languages (code);
CREATE UNIQUE INDEX languages_locale_unique on languages (locale);