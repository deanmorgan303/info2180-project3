DROP DATABASE IF databasename;
CREATE DATABASE databasename;

DROP TABLE IF EXISTS `users`;
CREATE TABLE users (
    `id` int(11) NOT NULL auto_increment PRIMARY KEY,
    `firstname` char(35) NOT NULL,
    `lastname` char(35) NOT NULL,
    `password` char(35) NOT NULL,
    `telephone` char(35) NOT NULL,
    `email` char(35) NOT NULL,
    `date_joined` datetime not null
);
DROP TABLE IF EXISTS `Jobs`;
CREATE TABLE Jobs (
    `id` int(11) NOT NULL auto_increment PRIMARY KEY,
    `job_title` char(35) NOT NULL,
    `job_description` char(35) NOT NULL,
    `category` char(35) NOT NULL,
    `company_name` char(35) NOT NULL,
    `company_location` char(35) NOT NULL,
    `date_posted` datetime not null
);
DROP TABLE IF EXISTS `Jobs_Applied_For`;
CREATE TABLE Jobs_Applied_For (
    `id` int(11) NOT NULL auto_increment PRIMARY KEY,
    `job_id` char(35) NOT NULL,
    `user_id` char(35) NOT NULL,
    `date_applied` datetime not null
);

INSERT INTO users (email, password) VALUES ('admin@hireme.com',MD5('password123'));