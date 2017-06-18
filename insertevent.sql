-- 
	drop event if exists insertCollarEvent;
	-- insert one line in one second
	SET GLOBAL event_scheduler = 1;
	CREATE EVENT insertCollarEvent
		ON SCHEDULE 
		every 1 second starts now()
		DO
		call insertCollarData();
-- 	-- alter event insertCollarEvent on completion preserve disable;
-- 		
-- 	-- insert into `collardata-ani` select * from AnalogCollarData where AnalogCollarData.CollarDataID = 1;
-- 

-- insert into `collardata-ani` select * from AnalogCollarData where AnalogCollarData.CollarDataID = 2;



	SELECT * FROM testdb.AnalogCollarData;




	select * from animal;
	select * from sickanimal;
	select * from times;
	select * from `sensordata-ani`;
	select * from `collardata-ani`;
    
	select * from `animal-ani`;
