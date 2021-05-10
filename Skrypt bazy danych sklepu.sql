-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema shop
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `shop` ;

-- -----------------------------------------------------
-- Schema shop
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `shop` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci ;
USE `shop` ;

-- -----------------------------------------------------
-- Table `shop`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `shop`.`user` ;

CREATE TABLE IF NOT EXISTS `shop`.`user` (
  `id_user` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_polish_ci' NOT NULL,
  `password` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_polish_ci' NOT NULL,
  `role` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_polish_ci' NOT NULL,
  PRIMARY KEY (`id_user`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `shop`.`stock`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `shop`.`stock` ;

CREATE TABLE IF NOT EXISTS `shop`.`stock` (
  `id_stock` INT NOT NULL AUTO_INCREMENT,
  `product` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_polish_ci' NOT NULL,
  `quantity` INT NOT NULL,
  PRIMARY KEY (`id_stock`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `shop`.`address`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `shop`.`address` ;

CREATE TABLE IF NOT EXISTS `shop`.`address` (
  `id_address` INT NOT NULL AUTO_INCREMENT,
  `city` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_polish_ci' NOT NULL,
  `post_code` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_polish_ci' NOT NULL,
  `street` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_polish_ci' NOT NULL,
  `house_number` INT NOT NULL,
  `apartment_number` INT NOT NULL,
  PRIMARY KEY (`id_address`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `shop`.`order`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `shop`.`order` ;

CREATE TABLE IF NOT EXISTS `shop`.`order` (
  `id_order` INT NOT NULL AUTO_INCREMENT,
  `order_date` DATE NOT NULL,
  `product` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_polish_ci' NOT NULL,
  `price` DOUBLE NOT NULL,
  `quantity` INT NOT NULL,
  `total` DOUBLE NOT NULL,
  `id_user` INT NOT NULL,
  `id_address` INT NOT NULL,
  PRIMARY KEY (`id_order`),
  INDEX `fk_order_user1_idx` (`id_user` ASC) VISIBLE,
  INDEX `fk_order_address1_idx` (`id_address` ASC) VISIBLE,
  CONSTRAINT `fk_order_user1`
    FOREIGN KEY (`id_user`)
    REFERENCES `shop`.`user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_order_address1`
    FOREIGN KEY (`id_address`)
    REFERENCES `shop`.`address` (`id_address`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `shop`.`product`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `shop`.`product` ;

CREATE TABLE IF NOT EXISTS `shop`.`product` (
  `id_product` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_polish_ci' NOT NULL,
  `price_net` DOUBLE NOT NULL,
  `price_gross` DOUBLE NOT NULL,
  `id_stock` INT NOT NULL,
  `id_order` INT NOT NULL,
  PRIMARY KEY (`id_product`),
  INDEX `fk_product_stock1_idx` (`id_stock` ASC) VISIBLE,
  INDEX `fk_product_order1_idx` (`id_order` ASC) VISIBLE,
  CONSTRAINT `fk_product_stock1`
    FOREIGN KEY (`id_stock`)
    REFERENCES `shop`.`stock` (`id_stock`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_product_order1`
    FOREIGN KEY (`id_order`)
    REFERENCES `shop`.`order` (`id_order`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
