		/*

		---------------------Triggers----------------------
		*/-- 没有实际意义，帮助计数
		/*add 1 after choose one analog data to insert，prepare to choose next one line*/
		drop trigger if exists manageCollarInsert;
		delimiter |

		CREATE TRIGGER manageCollarInsert after INSERT ON `collardata-ani`
		  FOR EACH ROW
		  BEGIN
			 update times set times = times+1 where times.id = 1;
		  END;
		|

		delimiter ;

-- 帮助计数，没有实际意义
		drop trigger if exists manageSensorInsert;
		delimiter |

		CREATE TRIGGER manageSensorInsert after INSERT ON `sensordata-ani`
		  FOR EACH ROW
		  BEGIN
			 update times set times = times+1 where times.id = 2;
		  END;
		|

		delimiter ;
	  /*  useless right now
		
			-- check left power of collar 
		drop trigger if exists manageCollarInsert;
		delimiter |

		CREATE TRIGGER manageCollarInsert after INSERT ON `collardata-ani`
		  FOR EACH ROW
		  BEGIN
		  if(New.Power = 0)then
			 INSERT INTO sickanimal (AnimalID,Location,Status)values ((select AnimalID from `collar-ani`where `CollarID` =New.CollarID), New.Location,4);
			 -- 在这里暂时设定了status = 4的时候代表没电了   tempraryly set status = 4 means low power
			 end if;
		  END;
		|

		delimiter ;
		
			-- check if it is recycle date
		drop trigger if exists manageCollarInsert;
		delimiter |

		CREATE TRIGGER manageCollarInsert after INSERT ON `collardata-ani`
		  FOR EACH ROW
		  BEGIN
		  if ((SELECT DATE_FORMAT(NOW(),'%Y-%m-%d'))= New.RecycleDate)then
			 INSERT INTO sickanimal (AnimalID,Location,Status)values ((select AnimalID from `collar-ani`where `CollarID` =New.CollarID), New.Location,5);
			 -- 在这里暂时设定status= 5是表示到了回收时间了 tempraryly set status = 5 means it is time to recycle
		  end if;
		  END;
		|

		delimiter ;
		
		*/
		
		-- 在这里调用check方法，返回2 的时候，在animal-ani里的status加1，当status=3的时候调用插入sensordata的方法alter
        -- 当返回1同时前一个状态大于1的时候，status减 1
        -- 当status>3的时候update位置gps和status
		-- Once we think it is sick/injured , after 'multiCheck function' ,send a signal to sickanimal table
		drop trigger if exists sendSignal;
		delimiter |
		CREATE TRIGGER sendSignal after INSERT ON `collardata-ani`
		  FOR EACH ROW
		  BEGIN
		  declare result int;
          
		  set @parID = New.CollarDataID;
		  call multiCheck(@parID,result);
          set @oldStatus = (select Status from `animal-ani`);
          set @newStatus = @oldStatus;
          if(select result = 1 and @oldStatus >1)then
          -- set @oldStatus = (select Status from `animal-ani`);
		      set @newStatus = @oldStatus -1;
		  
		  elseIF(select result = 2)THEN
		  -- set @oldStatus = (select Status from `animal-ani`);
			  set @newStatus = @oldStatus +1;
          end if;
		  update `animal-ani` set Status = @newStatus where AnimalID in (select AnimalID from `collar-ani` where CollarID = New.CollarID);
		  if(@newStatus = 3)then
              INSERT INTO sickanimal (AnimalID,Location,Status)values ((select AnimalID from `collar-ani`where `CollarID` =New.CollarID), New.Location,(select Status from `animal-ani`where animalID = (select AnimalID from `collar-ani`where `CollarID` =New.CollarID)));
		     
		  -- if(New.Connection =1)then  -- 暂时用来判定是否有网，有网就发送，没网也不会吧status减一，有网络之后还是会重新发送. 
									-- tempraryly used to check if it is connected, even it is not coneccted, won't delete one, 
                                    -- will send the signal later to remind people emergency happened
		  elseif (@newStatus >3)then 
              update `sickanimal` set Status = @newStatus where AnimalID = (select AnimalID from `collar-ani` where CollarID = New.CollarID);
		  
         	--  end if;
		  end if;

		  END;
		|

		delimiter ;
		
        -- 在插入sickanimal之后，调用插入sensordata的storeprocedure，一次全都插入
		-- once checked it is sick, before insert(to avoid errors) into sickanimal table, activate sensor, insert data into sensordata-ani
		drop trigger if exists insertSensorData;
		delimiter |
		CREATE TRIGGER insertSensorData after INSERT ON sickanimal
		  FOR EACH ROW
		  BEGIN
		      if((select Status from `animal-ani`) = 3)then
				  call insertSensorTogether();
		      end if;
		  END;
		|

		delimiter ;
        
        -- 在插入sickanimal之后，更改中心电脑里面的animal表中的status从 1 到 2
		-- after insert into sickanimal, change status of animal table  :  0 uninstalled  1 healthy 2 sick 3 dead */ 
		drop trigger if exists changeStatus;
		delimiter |
		CREATE TRIGGER changeStatus after INSERT ON sickanimal
		  FOR EACH ROW
		  BEGIN
		 update Animal set Status = 2 where AnimalID = New.AnimalID;
		  END;
		|

		delimiter ;
        
        
        -- 在update更改sickanimal里的信息时候，也更改中心电脑里的animal的status
		drop trigger if exists changeStatus;
		delimiter |
		CREATE TRIGGER changeStatus after update ON sickanimal
		  FOR EACH ROW
		  BEGIN
			  update Animal set Status = 2 where AnimalID = New.AnimalID;
		  END;
		|

		delimiter ;


		/*

		--------------------Store procedures----------------------
		*/
        -- 设置times里面的ID=1的那个数字是@cc,当cc小于10的时候，向collarData-ani插入一条数据
        -- 当cc大于等于10的时候，关闭停止event
		-- used to insert into collardata-ani ,store procedure
		drop procedure if exists insertCollarData;
		delimiter |
		create procedure insertCollarData()
		begin
			set @cc = (select times from times where times.id =1);
			if (@cc <10)
				then
				insert into `collardata-ani` select * from AnalogCollarData where AnalogCollarData.CollarDataID = @cc;
			else
				alter event insertCollarEvent on completion preserve disable;
			end if;
		end; 
		|
		delimiter ;


		-- 插入sensorData-ani，
		-- insert into sensordata-ani  together
        -- in trigger , can not call "alter evet insertSensorEvent  enable;"
		drop procedure if exists insertSensorTogether;
		delimiter |
		create procedure insertSensorTogether()
		begin
        -- transaction in store procedure
        start transaction;

		insert into `sensordata-ani` select * from AnalogSensorData;

        commit;
		end; 
		|
		delimiter ;





		/*
        当任意一个参数不在正常范围内时候，返回2，
        全都在正常范围内的时候，返回 1
		--------------------check function----------------------
		*/
		-- when continuous three physical conditions are unnormal, decide it is sick, return 2
		drop procedure if exists multiCheck;
		delimiter |
		create procedure multiCheck(inout parID int,inout parStat int)
		begin
			set @hb = (select HeartBeat from `collardata-ani` where CollarDataID = parID);
			set @rs = (select Respire from `collardata-ani` where CollarDataID = parID);
			set @te = (select Temperature from `collardata-ani` where CollarDataID = parID);
			set @minhb = (select MinHeartbeat from `standard-ani`);
			set @maxhb = (select MaxHeartbeat from `standard-ani`);
			set @minrs = (select MinRespire from `standard-ani`);
			set @maxrs = (select MaxRespire from `standard-ani`);
			set @minte = (select MinTemp from `standard-ani`);
			set @maxte = (select MaxTemp from `standard-ani`);
			if(@hb<@minhb or @hb>@maxhb or @rs<@minrs or @rs>@maxrs or @te<@minte or @te>@maxte)
				then 
				set parStat = 2;
			else 
				set parStat = 1;
			end if;
		end; 
		|
		delimiter ;
