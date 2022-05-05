-- STRUCTURED QUERY LANGUAGE (Sequel or SQL)
-- @block

CREATE DATABASE `GrassBandits`;

USE `GrassBandits`

CREATE TABLE `requests` (
    `id` int NOT NULL UNIQUE AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `contact_info` varchar(255) NOT NULL,
    `service_address` varchar(200) NOT NULL,
    `job_needed` varchar(50) NOT NULL,
    `date` varchar(100) NOT NULL,



);

CREATE TABLE `users` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(50) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL
    
);

CREATE TABLE `staff_login` (
    `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `username` VARCHAR(50) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL

);


);

ALTER TABLE `requests` 
    ADD PRIMARY KEY (`id`);
    
ALTER TABLE `users` 
    ADD PRIMARY KEY (`id`);

ALTER TABLE `staff_login` 
    ADD PRIMARY KEY (`id`);
