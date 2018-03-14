CREATE TABLE `exercice_3` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NULL,
  `actors` VARCHAR(255) NULL,
  `director` VARCHAR(255) NULL,
  `producer` VARCHAR(255) NULL,
  `year_of_prod` YEAR NULL,
  `language` VARCHAR(255) NULL,
  `category` ENUM NULL,
  `storyline` TEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;