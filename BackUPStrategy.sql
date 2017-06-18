-- backing up whole db
-- mysqldump -uroot -proot testdb > "C:\backups\AnimalDBBackUp.sql"


-- for collar ---------------------------------------------------------
DROP TABLE IF EXISTS `testdb`.`CollarData_Back` ;

CREATE TABLE IF NOT EXISTS `testdb`.`CollarData_Back` (
  `CollarDataID` INT NOT NULL AUTO_INCREMENT,
  `RecordDate` DATE NOT NULL,
  `HeartBeat` INT NOT NULL,
  `Respire` INT NOT NULL,
  `Location` VARCHAR(45) NOT NULL,
  `CollarID` INT NOT NULL,
  `Temperature` VARCHAR(45) NULL,
  PRIMARY KEY (`CollarDataID`),
  INDEX `fk_CollarData_Collar1_idx` (`CollarID` ASC),
  CONSTRAINT `fk_CollarData_Collar1`
    FOREIGN KEY (`CollarID`)
    REFERENCES `testdb`.`Collar` (`CollarID`)
 --    ON DELETE NO ACTION
 --    ON UPDATE NO ACTION
 );

DROP EVENT if exists collarBackUp1;
SET GLOBAL event_scheduler = 1;
CREATE EVENT collarBackUp1
ON schedule
    EVERY 1 week starts now()   -- for exe purposes, it will actually be done on a weekly basis 
    DO
      INSERT INTO CollarData_Back (CollarDataID,RecordDate,HeartBeat,Respire,Location,CollarID,Temperature) (SELECT t1.CollarDataID,t1.RecordDate,t1.HeartBeat,t1.Respire,t1.Location,t1.CollarID,t1.Temperature FROM CollarData t1 left join CollarData_Back t2 on t1.CollarDataID=t2.CollarDataID where t2.CollarDataID is null);
      
-- alter event myevent1 on completion preserve disable;  

-- DROP EVENT if exists collarBackUp2;
-- SET GLOBAL event_scheduler = 1;
-- CREATE EVENT collarBackUp2
-- ON schedule
   -- EVERY 2 second starts now()
    -- DO
	  -- DELETE from CollarData_Back;

-- for sensor ----------------------------------------------------

DROP TABLE IF EXISTS `testdb`.`SensorData_Back` ;

CREATE TABLE IF NOT EXISTS `testdb`.`SensorData_Back` (
  `SensorDataID` INT NOT NULL AUTO_INCREMENT,
  `RecordDate` DATE NOT NULL,
  `Bloodpressure` INT NOT NULL,
  `SensorID` INT NOT NULL,
  `Bioelectricity` INT NOT NULL,
  `PH` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`SensorDataID`),
  INDEX `fk_SensorData_Sensor1_idx` (`SensorID` ASC),
  CONSTRAINT `fk_SensorData_Sensor1`
    FOREIGN KEY (`SensorID`)
    REFERENCES `testdb`.`Sensor` (`SensorID`)
--     ON DELETE NO ACTION
 --    ON UPDATE NO ACTION
 );

DROP EVENT if exists sensorBackUp1;
SET GLOBAL event_scheduler = 1;
CREATE EVENT sensorBackUp
ON schedule
    EVERY 1 second starts now()   -- for exe purposes, it will actually be done on a weekly basis 
    DO
      INSERT INTO SensorData_Back (SensorDataID,RecordDate,Bloodpressure,SensorID,Bioelectricity,PH) (SELECT t1.SensorDataID,t1.RecordDate,t1.Bloodpressure,t1.SensorID,t1.Bioelectricity,t1.PH FROM SensorData t1 left join SensorData_Back t2 on t1.SensorDataID=t2.SensorDataID where t2.SensorDataID is null);
      
-- alter event myevent1 on completion preserve disable;  

-- DROP EVENT if exists sensorBackUp2;
-- SET GLOBAL event_scheduler = 1;
-- CREATE EVENT sensorBackUp2
-- ON schedule
   -- EVERY 2 second starts now()
    -- DO
	  -- DELETE from SensorData;