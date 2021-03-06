-- MySQL Script generated by MySQL Workbench
-- Wed Jul  1 22:14:09 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema php
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema php
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `php` DEFAULT CHARACTER SET utf8 ;
USE `php` ;

-- -----------------------------------------------------
-- Table `php`.`marca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `php`.`marca` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NOT NULL,
  `data_cadastro` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `php`.`modelo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `php`.`modelo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `marca_id` INT NOT NULL,
  `nome` VARCHAR(60) NOT NULL,
  `data_cadastro` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_modelo_marca_idx` (`marca_id` ASC) VISIBLE,
  CONSTRAINT `fk_modelo_marca`
    FOREIGN KEY (`marca_id`)
    REFERENCES `php`.`marca` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
