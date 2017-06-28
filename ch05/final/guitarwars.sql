CREATE TABLE `guitarwars` (
  `id` INT AUTO_INCREMENT,
  `date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `name` VARCHAR(32),
  `score` INT,
  `screenshot` VARCHAR(64),
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
);

INSERT INTO `guitarwars` VALUES (1, '2008-04-22 14:37:34', 'Paco Jastorius', 127650, '../1.4.1.HeadFirstPhpSQL/ch05/final/guitarwars/images/pacosscore.gif');
INSERT INTO `guitarwars` VALUES (2, '2008-04-22 21:27:54', '../1.4.1.HeadFirstPhpSQL/ch05/final/guitarwars/images/Nevil Johansson', 98430, 'nevilsscore.gif');
INSERT INTO `guitarwars` VALUES (4, '2008-04-23 09:12:53', 'Belita Chevy', 282470, '../1.4.1.HeadFirstPhpSQL/ch05/final/guitarwars/images/belitasscore.gif');
INSERT INTO `guitarwars` VALUES (6, '2008-04-23 14:09:50', 'Kenny Lavitz', 64930, '../1.4.1.HeadFirstPhpSQL/ch05/final/guitarwars/images/kennysscore.gif');
INSERT INTO `guitarwars` VALUES (7, '2008-04-24 08:13:52', 'Phiz Lairston', 186580, '../1.4.1.HeadFirstPhpSQL/ch05/final/guitarwars/images/phizsscore.gif');
INSERT INTO `guitarwars` VALUES (8, '2008-04-25 07:22:19', 'Jean Paul Jones', 243260, '../1.4.1.HeadFirstPhpSQL/ch05/final/guitarwars/images/jeanpaulsscore.gif');
INSERT INTO `guitarwars` VALUES (9, '2008-04-25 11:49:23', '../1.4.1.HeadFirstPhpSQL/ch05/final/guitarwars/images/Jacob Scorcherson', 389740, '../1.4.1.HeadFirstPhpSQL/ch05/final/guitarwars/images/jacobsscore.gif');
