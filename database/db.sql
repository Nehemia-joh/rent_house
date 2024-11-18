create database house_rent;

use house_rent;

CREATE TABLE `categories` (
  `id` int(30) primary key NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL
) ;

CREATE TABLE `houses` (
  `id` int(30) primary key NOT NULL AUTO_INCREMENT,
  `house_no` varchar(50) NOT NULL,
  `category_id` int(30) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL
) ;

CREATE TABLE `payments` (
  `id` int(30) primary key NOT NULL AUTO_INCREMENT,
  `tenant_id` int(30) NOT NULL,
  `amount` float NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
);

CREATE TABLE `payments1` (
  `id` int(30) primary key NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `amount` float NOT NULL,
  timeframe int(3),
  date_from date,
  date_to date
  
);
--`invoice` varchar(50) NOT NULL,
  --`date_created` datetime NOT NULL DEFAULT current_timestamp()

CREATE TABLE `system_settings` (
  `id` int(30) primary key NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cover_img` text NOT NULL,
  `about_content` text NOT NULL
);

CREATE TABLE `tenants` (
  `id` int(30) primary key NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `house_id` int(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = active, 0= inactive',
  `date_in` date NOT NULL
);

CREATE TABLE `users` (
  `id` int(30) primary key NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=Admin,2=Staff'
);
CREATE TABLE announcement(
  aid int(10) primary key AUTO_INCREMENT,
  username varchar(100),
  announcement text,
  date date,
  type int(2)
);

create TABLE request(
  rid int(10) primary key AUTO_INCREMENT,
  house_id int(4),
  username varchar(30),
  request text
);