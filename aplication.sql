DROP DATABASE IF EXISTS aplication;

CREATE DATABASE aplication CHARACTER SET utf8 COLLATE utf8_general_ci;

use aplication;

CREATE TABLE users (
    user_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    user_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    user_name VARCHAR(255) NOT NULL,
    user_email VARCHAR(255) NOT NULL,
    user_password VARCHAR(255) NOT NULL,
    user_avatar VARCHAR(255) NOT NULL,
    user_birth DATE NOT NULL,
    user_bio TEXT,
    user_type ENUM('admin','moderator','user') DEFAULT 'user',
    user_status ENUM('on', 'off', 'deleted') DEFAULT 'on'     
);

INSERT INTO `users` (`user_id`, `user_date`, `user_name`, `user_email`, `user_password`, `user_avatar`, `user_birth`, `user_bio`, `user_type`, `user_status`) VALUES
(1, '2022-08-10 02:42:46', 'JRodrigo de Oliveira', 'Ro@oliver.com', '1646da3cfe8e1164a4ab22333e0783e299859bfe', 'https://randomuser.me/api/portraits/men/29.jpg', '2010-04-18', 'Podcaster, Musico, gamer e budista.', 'admin', 'deleted'),
(2, '2022-08-10 02:51:18', 'Micael de Oliveira Santana', 'cael.oliver78@hotmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'https://randomuser.me/api/portraits/men/19.jpg', '2001-11-29', 'Tento ser um programador', '', 'on'),
(3, '2022-08-10 03:31:35', 'Mizkai zenusk', 'cael.oliver78@gmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'https://randomuser.me/api/portraits/men/19.jpg', '2014-11-28', 'top', 'user', 'deleted'),
(4, '2022-08-10 03:45:06', 'Luciana ', 'Elipse.qe@tutut', '6ce7a1a472386f1639bfbf41ae7c608abe3c9182', 'https://randomuser.me/api/portraits/women/19.jpg', '1987-03-04', 'iau', '', 'on');