SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `Scheduling` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `Scheduling` ;

-- -----------------------------------------------------
-- Table `Scheduling`.`Date`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Scheduling`.`Date` (
  `Date` DATE NOT NULL,
  `Day of Week` VARCHAR(10) NOT NULL,
  `Year` VARCHAR(45) NULL,
  `Month` VARCHAR(45) NULL,
  `Day of Month` VARCHAR(45) NULL,
  `isHoliday?` TINYINT(1) NOT NULL,
  `isWeekend?` TINYINT(1) NOT NULL,
  PRIMARY KEY (`Date`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Scheduling`.`Employees`
-- -----------------------------------------------------
CREATE TABLE `Scheduling`.`Employees` (
  `EID` INT NOT NULL,
  `LName` VARCHAR(20) NULL,
  `FName` VARCHAR(20) NULL,
  `Address` VARCHAR(50) NULL,
  `Phone Number` VARCHAR(45) NULL,
  `isManager?` TINYINT(1) NULL,
  `Wage` DECIMAL(2,2) NULL,
  `Weekly Hours` INT NULL,
  `Annual Hours` INT NULL,
  `Career Hours` INT NULL,
  `Week Earned` DECIMAL(4,2) NULL,
  `Year Earned` DECIMAL(5,2) NULL,
  `Career Earned` DECIMAL(6,2) NULL,
  PRIMARY KEY (`EID`));


-- -----------------------------------------------------
-- Table `Scheduling`.`Schedule`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Scheduling`.`Schedule` (
  `SID` INT NOT NULL,
  `EID` INT NULL,
  `Date` DATE NULL,
  `Shift Start` VARCHAR(5) NULL,
  `Shift End` VARCHAR(5) NULL,
  `Hours` INT NULL,
  PRIMARY KEY (`SID`),
  UNIQUE INDEX `SID_UNIQUE` (`SID` ASC),
  CONSTRAINT `Date`
    FOREIGN KEY ()
    REFERENCES `Scheduling`.`Date` ()
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `EID`
    FOREIGN KEY ()
    REFERENCES `Scheduling`.`Employees` ()
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
