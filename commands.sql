CREATE TABLE IF NOT EXISTS `users`
(
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `name` CHAR(100) NOT NULL,
    `email` CHAR(255) UNIQUE NOT NULL,
    `age` TINYINT UNSIGNED DEFAULT NULL,
    `gender` ENUM('male', 'female'),
    `password` CHAR(255) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
    `deleted_at` TIMESTAMP DEFAULT NULL
    ) ENGINE = InnoDB CHARACTER SET utf8


    INSERT INTO `users`(`name`, `email`, `age`, `gender`, `password`)
    VALUES ('Mike', 'mike@gmail.com', 35, 'male', 'testetestsetset'),
('Kim', 'kim@gmail.com', 33, 'male', 'testetestsetset')



SELECT * FROM `users`;
SELECT `name`, `email` FROM `users`;

SELECT * FROM `users` WHERE `id` = 1;

SELECT * FROM `users` WHERE `gender` = 'female' AND `age` > 25;

SELECT * FROM `users` WHERE `gender` = 'female' OR `age` > 25;

SELECT * FROM `users` WHERE `gender` = 'male' OR `age` > 32;

SELECT * FROM `users` WHERE `id` < 5 AND (`gender` = 'male' OR `age` > 32);


SELECT * FROM `users` WHERE `created_at` > '2024-05-07 18:00:00';

SELECT * FROM `users` WHERE `deleted_at` IS NULL;
SELECT * FROM `users` WHERE `deleted_at` IS NOT NULL;

SELECT * FROM `users` WHERE `email` LIKE '%@gmail.com';
SELECT * FROM `users` WHERE `email` LIKE '%@gmail.com%';
SELECT * FROM `users` WHERE `email` LIKE '@gmail.com%';
SELECT * FROM `users` WHERE `email` LIKE 'kate%';

SELECT * FROM `users` WHERE `id` IN (5,6,7,8);
SELECT * FROM `users` WHERE `id` NOT IN (5,6,7,8);

SELECT * FROM `users` ORDER BY `name`;
SELECT * FROM `users` ORDER BY `name` DESC;

SELECT * FROM `users` ORDER BY `age`;
SELECT * FROM `users` ORDER BY `age` DESC;

SELECT * FROM `users` ORDER BY `name`,`age` DESC;

SELECT * FROM `users` LIMIT 1,2
SELECT * FROM `users` LIMIT 1
SELECT * FROM `users` LIMIT 2,2

SELECT `id`, `name` FROM `users` WHERE `age` > 25 ORDER BY `name` DESC LIMIT 5

DELETE FROM `users` WHERE `id` = 1

UPDATE `users` SET `deleted_at` = CURRENT_TIMESTAMP WHERE `id` = 3
UPDATE `users` SET `deleted_at` = NULL, `name` = 'Undeleted' WHERE `id` = 3

SELECT COUNT(`id`) as counter FROM `users` WHERE `age` > 25
SELECT AVG(`age`) as avg_age FROM `users`
SELECT SUM(`age`) as sum_age FROM `users`
