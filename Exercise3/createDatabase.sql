CREATE TABLE `exercice_3` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255),
  `actors` VARCHAR(255),
  `director` VARCHAR(255),
  `producer` VARCHAR(255),
  `year_of_prod` YEAR,
  `language` VARCHAR(255),
  `category` ENUM('horror', 'action', 'comedy'),
  `storyline` TEXT,
  `video` VARCHAR(255),
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;