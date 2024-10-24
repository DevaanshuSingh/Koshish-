-- First Table
CREATE TABLE `performance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `currentPos` int(100) DEFAULT 1,
  `start` int(1) DEFAULT 0,
  `now_turn` varchar(25) DEFAULT '4',
  `dice` int(6) DEFAULT 0,
  PRIMARY KEY (`id`)
);

-- Second TABLE
CREATE TABLE `user_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `profile` blob DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `background_color` varchar(9) DEFAULT NULL,
  `mode` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
);f