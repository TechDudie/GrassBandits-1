-- SQL DATABASE FOR GRASSBANDITS
-- @block

CREATE DATABASE `GrassBandits`

CREATE TABLE `requests` (
    `id` int NOT NULL UNIQUE,
    `name` varchar(255) NOT NULL,
    `service_house_number` int(7) NOT NULL,
    `service_street` varchar(300) NOT NULL,
    `job_needed` varchar(50) NOT NULL,
    `status` boolean NOT NULL,


);

ALTER TABLE `requests` 
    ADD PRIMARY KEY (`id`);

