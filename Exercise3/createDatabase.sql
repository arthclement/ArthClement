CREATE TABLE `exercice_3` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, -- Unique ID of every element
  `title` VARCHAR(255),
  `actors` VARCHAR(255),
  `director` VARCHAR(255),
  `producer` VARCHAR(255),
  `year_of_prod` YEAR, -- Year to be stored
  `language` VARCHAR(255),
  `category` ENUM('horror', 'action', 'comedy'), -- ENUM requires parameters and will only accepts these values
  `storyline` TEXT, -- Storyline can contain lots of text, so TEXT type and not VARCHAR
  `video` VARCHAR(255),
  PRIMARY KEY (`id`)) -- Setting ID as primary key
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8 -- Setting CHARSET
COLLATE = utf8_bin;