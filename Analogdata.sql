
--
-- Table structure for table `AnalogCollarData`
--

DROP TABLE IF EXISTS `AnalogCollarData`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AnalogCollarData` (
 `CollarDataID` int(11) NOT NULL AUTO_INCREMENT,
  `RecordDate` date NOT NULL,
  `HeartBeat` int(11) NOT NULL,
  `Respire` int(11) NOT NULL,
  `Location` varchar(45) NOT NULL,
  `Power` varchar(45) DEFAULT NULL,
  `Connection` varchar(45) DEFAULT NULL,
  `RecycleDate` date DEFAULT NULL,
  `CollarID` int(11) NOT NULL,
  `Temperature` varchar(45) NOT NULL,
  PRIMARY KEY (`CollarDataID`,`RecordDate`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `collardata-ani`
--

LOCK TABLES `AnalogCollarData` WRITE;
/*!40000 ALTER TABLE `AnalogCollarData` DISABLE KEYS */;
INSERT INTO `AnalogCollarData` VALUES (1,'2017-02-16',90,36,'31.03,103.19','1','1','2017-01-17',8,37),(2,'2017-02-16',96,35,'31.03,103.19','1','1','2017-01-18',8,36.9),(3,'2017-02-16',89,37,'31.03,103.19','1','1','2017-01-19',8,37.5),(4,'2017-02-16',170,56,'31.03,103.19','1','1','2017-01-20',8,39.6),(5,'2017-02-16',169,59,'31.03,103.19','1','1','2017-01-21',8,40.5),(6,'2017-02-16',185,52,'31.03,103.19','1','1','2017-01-22',8,38.4),(7,'2017-02-16',170,40,'31.03,103.19','1','1','2017-01-23',8,38.1),(8,'2017-02-16',168,38,'31.03,103.19','1','1','2017-01-24',8,36.1),(9,'2017-02-16',150,62,'31.03,103.19','1','1','2017-01-25',8,36.1);
/*!40000 ALTER TABLE `AnalogCollarData` ENABLE KEYS */;
UNLOCK TABLES;






--
-- Table structure for table `AnalogSensorData`
--

DROP TABLE IF EXISTS `AnalogSensorData`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AnalogSensorData` (
  `SensorDataID` int(11) NOT NULL AUTO_INCREMENT,
  `RecordDate` date NOT NULL,
  `Bloodpressure` int(11) NOT NULL,
  `Power` int(11) DEFAULT NULL,
  `Connection` int(11) DEFAULT NULL,
  `SensorID` int(11) NOT NULL,
  `Bioelectricity` int(11) NOT NULL,
  `PH` varchar(45) NOT NULL,
  PRIMARY KEY (`SensorDataID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;


--
-- Dumping data for table `sensordata-ani`
--

LOCK TABLES `AnalogSensorData` WRITE;
/*!40000 ALTER TABLE `AnalogSensorData` DISABLE KEYS */;
INSERT INTO `AnalogSensorData` VALUES (1,'2017-02-16',140,1,1,4,500,7.12),(2,'2017-02-16',120,1,1,4,400,7.01),(3,'2017-02-16',168,1,1,4,300,7.01),(4,'2017-02-16',170,1,1,4,500,7.5),(5,'2017-02-16',160,1,1,4,400,6.5),(6,'2017-02-16',130,1,1,4,350,6.8);
	/*!40000 ALTER TABLE `AnalogSensorData` ENABLE KEYS */;
UNLOCK TABLES;



/* 原来sql文件中关于CollarData-ani和sensorData-ani两个表的插入语句注释掉*/




--
-- 帮助计数用的表，没有实际意义
--
drop table if exists times;
create table times(
id int not null,
times int default 0
);
insert into times values (1,1);
insert into times values (2,1);