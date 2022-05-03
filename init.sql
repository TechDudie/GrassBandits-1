-- STRUCTURED QUERY LANGUAGE (Sequel or SQL)
-- @block

CREATE DATABASE `GrassBandits`;

CREATE TABLE `requests` (
    `id` int NOT NULL UNIQUE AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `service_house_number` int(7) NOT NULL,
    `service_street_and_city` varchar(300) NOT NULL,
    `job_needed` varchar(50) NOT NULL,
    `date` date NOT NULL,
    `time` int NOT NULL UNIQUE,
    `status` boolean NOT NULL


);

CREATE TABLE `staff_login` (
    `id` int NOT NULL UNIQUE AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `uname` int(7) NOT NULL,
    `password` varchar(300) NOT NULL


);

ALTER TABLE `requests` 
    ADD PRIMARY KEY (`id`);

ALTER TABLE `staff_login` 
    ADD PRIMARY KEY (`id`);
