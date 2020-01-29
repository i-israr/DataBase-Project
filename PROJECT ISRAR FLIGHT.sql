CREATE Database flight_management;
use flight_management;
CREATE TABLE `PASSENGER` (
  `CNIC` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `phone no` VARCHAR(45) NULL,
  `gender` VARCHAR(45) NULL,
  `passport id` VARCHAR(45) NULL,

  
  PRIMARY KEY (`CNIC`)
  );



-- -----------------------------------------------------
-- Table `TICKET`
-- -----------------------------------------------------
CREATE TABLE `TICKET` (
  `seat no` VARCHAR(45) NULL,
  `passenger type` VARCHAR(45) NULL,
  `ticket amount` VARCHAR(45) NULL,
  `TICKETid` VARCHAR(45) NOT NULL,
  PRIMARY KEY ( `TICKETid`),
  
    
    );


-- -----------------------------------------------------
-- Table `BOOKING_OFFICE`
-- -----------------------------------------------------
CREATE TABLE `BOOKING_OFFICE` (
  `office address` VARCHAR(45) NULL,
  `office name` VARCHAR(45) NULL,
  `office Phone no` VARCHAR(45) NOT NULL,
  `office id` INT NOT NULL,
  `TICKETid` VARCHAR(45) NOT NULL,
 
  PRIMARY KEY (`office id`),

    FOREIGN KEY (`TICKETid`)
    REFERENCES `TICKET` (`TICKETid`));


-- -----------------------------------------------------
-- Table `AIRPORT`
-- -----------------------------------------------------
CREATE TABLE `AIRPORT` (
  `airport code` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `no of planes` VARCHAR(45) NULL,
  `address` VARCHAR(45) NULL,
  
  PRIMARY KEY (`airport code`));


-- -----------------------------------------------------
-- Table `mydb`.`FLIGHT`
-- -----------------------------------------------------
CREATE TABLE `FLIGHT` (
  `flight code` INT NOT NULL,
  `arrival` VARCHAR(45) NULL,
  `departure` VARCHAR(45) NULL,
  `airplane` VARCHAR(45) NULL,
  `airline` VARCHAR(45) NULL,
  
   `airport code` INT NOT NULL,
   `office id` INT NOT NULL,
   Primary key(`flight code`),
     Foreign key(`airport code`) references `AIRPORT`(`airport code`),
       Foreign key(`office id`) references `BOOKING_OFFICE`(`office id`)
);   