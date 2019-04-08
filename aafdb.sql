use bollockdb;
/* People table will have our users */
/* to connect: login to ww2.cs.fsu.edu w/ ssh
then enter:
mysql -h dbsrv2.cs.fsu.edu -u bollock -p1hSObrpVvNhq
*/
drop table if exists People;

CREATE TABLE People
   (	
    USERNAME VARCHAR(20) NOT NULL PRIMARY KEY, 
	PASSWD VARCHAR(20)
	 );
INSERT INTO People VALUES ('test1','testpw'); /* values for testing */



drop table if exists Teams;
/* teams will just be a list of teams assigned to certain users */
/* question: do we want TEAMS to have PLAYER_POS? or just assign players to team w/out position */
CREATE TABLE Teams
    (
        TEAM_NAME VARCHAR(40) NOT NULL PRIMARY KEY,
        USERNAME VARCHAR(20) NOT NULL REFERENCES PEOPLE
    );
INSERT INTO Teams VALUES ('Test_Team', 'test1');



drop table if exists Players;
/* one team will have many players */
/* source for player data: https://www.fantasypros.com/2019/03/aaf-fantasy-football-player-rankings-week-8/ */
CREATE TABLE Players
    (
        PLAYER_ID VARCHAR(40) NOT NULL PRIMARY KEY,
        TEAM_NAME VARCHAR(40) NOT NULL REFERENCES TEAMS,
        PLAYER_FNAME VARCHAR(20) NOT NULL,
        PLAYER_LNAME VARCHAR(20) NOT NULL,
        PLAYER_POS VARCHAR(20) NOT NULL /* player position */
    );
INSERT INTO Players (PLAYER_ID, TEAM_NAME, PLAYER_FNAME, PLAYER_LNAME, PLAYER_POS)
VALUES 
('1','Test_Team', 'Josh','Woodrum','QB'),
('2','Test_Team', 'Trent','Richardson','RB'),
('3','Test_team', 'Charles', 'Johnson','WR');