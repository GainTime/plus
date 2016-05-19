-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Table `users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(32) NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `level` INT NOT NULL,
  `createdAt` DATETIME,
  `updatedAt` DATETIME,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `idusers_UNIQUE` (`id` ASC) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- View 'users_vw'
-- -----------------------------------------------------
DROP VIEW IF EXISTS `users_vw`;
CREATE VIEW `users_vw` AS select
`users`.`id` AS `id`,
`users`.`name` AS `name`,
`users`.`email` AS `email`,
`users`.`level` AS `level`
from (`users`);

-- -----------------------------------------------------
-- Table `projects`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `description` TEXT NOT NULL,
  `createdAt` DATETIME,
  `updatedAt` DATETIME,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `idprojects_UNIQUE` (`id` ASC))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- View 'projects_vw'
-- -----------------------------------------------------
DROP VIEW IF EXISTS `projects_vw`;
CREATE VIEW `projects_vw` AS select
`projects`.`id` AS `id`,
`projects`.`title` AS `title`,
`projects`.`description` AS `description`
from (`projects`);

-- -----------------------------------------------------
-- Table `services`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `description` TEXT NOT NULL,
  `image` TEXT,
  `createdAt` DATETIME,
  `updatedAt` DATETIME,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `idservices_UNIQUE` (`id` ASC))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- View 'services_vw'
-- -----------------------------------------------------
DROP VIEW IF EXISTS `services_vw`;
CREATE VIEW `services_vw` AS select
`services`.`id` AS `id`,
`services`.`title` AS `title`,
`services`.`description` AS `description`,
`services`.`image` AS `image`
from (`services`);

-- -----------------------------------------------------
-- Table `partners`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `partners`;
CREATE TABLE IF NOT EXISTS `partners` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `description` TEXT NOT NULL,
  `image` TEXT,
  `createdAt` DATETIME,
  `updatedAt` DATETIME,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `idpartners_UNIQUE` (`id` ASC))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- View 'partners_vw'
-- -----------------------------------------------------
DROP VIEW IF EXISTS `partners_vw`;
CREATE VIEW `partners_vw` AS select
`partners`.`id` AS `id`,
`partners`.`name` AS `name`,
`partners`.`description` AS `description`,
`partners`.`image` AS `image`
from (`partners`);

-- -----------------------------------------------------
-- Table `companys`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `companys`;
CREATE TABLE IF NOT EXISTS `companys` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `company` VARCHAR(255),
  `description` TEXT,
  `address` VARCHAR(255),
  `city` VARCHAR(255),
  `map` VARCHAR(255),
  `room` VARCHAR(255),
  `phone` VARCHAR(255),
  `email` VARCHAR(255),
  `facebook` VARCHAR(255),
  `instagram` VARCHAR(255),
  `linkedin` VARCHAR(255),
  `createdAt` DATETIME,
  `updatedAt` DATETIME,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `idcompany_UNIQUE` (`id` ASC))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- View 'company_vw'
-- -----------------------------------------------------
DROP VIEW IF EXISTS `companys_vw`;
CREATE VIEW `companys_vw` AS select
`companys`.`id` AS `id`,
`companys`.`company` AS `company`,
`companys`.`description` AS `description`,
`companys`.`address` AS `address`,
`companys`.`city` AS `city`,
`companys`.`map` AS `map`,
`companys`.`room` AS `room`,
`companys`.`phone` AS `phone`,
`companys`.`email` AS `email`,
`companys`.`facebook` AS `facebook`,
`companys`.`instagram` AS `instagram`,
`companys`.`linkedin` AS `linkedin`
from (`companys`);
