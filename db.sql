/* mysql -h dbsrv2.cs.fsu.edu -u bollock -p1hSObrpVvNhq */

use bollockdb;
--
-- Table structure for table People
--

drop table if exists People;
CREATE TABLE People (
  USERNAME varchar(20) NOT NULL PRIMARY KEY,
  PASSWD varchar(80) NOT NULL,
  email varchar(100) DEFAULT NULL
);

--
-- Dumping data for table People
--

INSERT INTO People VALUES 
('admin','21232f297a57a5a743894a0e4a801fc3',NULL),('emailtest','03acf143972b7978b70352bbd136789f','wbollock@gmail.com'),('hashpw','9fc09b2cf1c47a52c4589290a994a791',NULL),('hashpw2','f643d771dff67fc7a720301dcba3626a',NULL),('teamtest','202cb962ac59075b964b07152d234b70',NULL),('test','098f6bcd4621d373cade4e832627b4f6',NULL),('test1','8eee3efdde1eb6cf6639a58848362bf4',NULL),('test3','6d0007e52f7afb7d5a0650b0ffb8a4d1',NULL),('test5','6d0007e52f7afb7d5a0650b0ffb8a4d1',NULL),('test6','4cfad7076129962ee70c36839a1e3e15',NULL);


--
-- Table structure for table Players
--

DROP TABLE IF EXISTS Players;
CREATE TABLE Players (
  PLAYER_ID varchar(40) NOT NULL PRIMARY KEY,
  TEAM_NAME varchar(40) NOT NULL,
  PLAYER_FNAME varchar(20) NOT NULL,
  PLAYER_LNAME varchar(20) NOT NULL,
  PLAYER_POS varchar(20) NOT NULL
);

--
-- Dumping data for table Players
--


INSERT INTO Players VALUES 
('1','Test_Team', 'Josh','Woodrum','QB'),
('2','Test_Team', 'Trent','Richardson','RB'),
('3','Test_team', 'Charles', 'Johnson','WR'),
('4','None','Garrett','Gilbert','QB'),
('5','None','Christian','Hackenberg','QB'),
('6','None','Rashad','Ross','WR'),
('7','None','Keith','Reaser','CB'),
('8','None','John','Wolford','QB'),
('9','None','Logan','Woodside','QB'),
('10','None','Denard','Robinson','RB'),
('11','None','Adam','Vinnetari','K'),
('12','None','John','Walford','QB'),
('13','None','Larry','Rose','RB'),
('14','None','Richard','Mullaney','WR'),
('15','None','Thomas','Duarte','TE'),
('16','None','Peter','Pujal','QB'),
('17','None','Duke','Johnson','RB'),
('18','None','Seantavius','Jones','WR'),
('19','None','Charles','Standberry','TE'),
('20','None','Luis','Perez','QB'),
('21','None','Lardarius','Perkins','RB'),
('22','None','Amba','Etta-Tawo','WR'),
('23','None','Conner','Davis','TE'),
('24','None','Zach','Mettenberger','QB'),
('25','None','Zac','Stacy','RB'),
('26','None','David','Lucien','WR'),
('27','None','Brandon','Barnes','TE'),
('28','None','Austin','Appleby','QB'),
('29','None','Dearnest','Johnson','RB'),
('30','None','Ishmael','Hyman','WR'),
('31','None','Sean','Price','TE'),
('32','None','Elliot','Fry','K'),
('33','None','Austin','Allen','QB'),
('34','None','Terrel','Newby','RB'),
('35','None','Sam','Mobely','WR'),
('36','None','Tanner','Balderree','TE'),
('37','None','Taylor','Bertolet','K'),
('38','None','Dustin','Vaughn','QB'),
('39','None','David','Cobb','RB'),
('40','None','Josh','Stewart','WR'),
('41','None','Stehly','Reden','TE'),
('42','None','Nick','Rose','K'),
('43','None','Mike','Berevici','QB'),
('44','None','Terrel','Watson','RB'),
('45','None','Bryan','Brown','WR'),
('46','None','Marcus','Baugh','TE'),
('47','None','Nick','Novac','K'),
('48','None','Elliot','Stabler','K'),
('49','None','John','Munch','QB'),
('50','None','Odafin','Tutuola','RB');





--
-- Table structure for table Teams
--

DROP TABLE IF EXISTS Teams;
CREATE TABLE Teams (
  TEAM_NAME varchar(40) NOT NULL PRIMARY KEY,
  USERNAME varchar(20) NOT NULL
);
INSERT INTO Teams VALUES ('emailtest','emailtest'),('HASHTEST','hashpw'),('None','admin'),('Pughes','test3'),('Roughriders','teamtest'),('tes6','test6'),('test','test5'),('Test_Team','test1'),('YOLO2','hashpw2');