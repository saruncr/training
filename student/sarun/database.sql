CREATE DATABASE StudentDb;

CREATE TABLE `StudentDb`.`students` ( `StudentId` INT(10) NOT NULL AUTO_INCREMENT , `RollNo` INT(10) NULL , `StudentFirstName` VARCHAR(255) NULL ,`StudentLastName` VARCHAR(255) NULL , `Gender` VARCHAR(10) NULL , `Email` VARCHAR(50) NULL , `Address` TEXT NOT NULL , PRIMARY KEY (`StudentId`)) ENGINE = InnoDB; 