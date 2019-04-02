use bollockdb;
/* People table will have our users */

CREATE TABLE  "PEOPLE" 
   (	
    USERNAME VARCHAR(20) NOT NULL PRIMARY KEY, 
	PASSWD VARCHAR(20)
	 );
INSERT INTO PEOPLE VALUES ('test1','testpw'); /* values for testing */




/* teams will just be a list of teams assigned to certain users */
/* question: do we want TEAMS to have PLAYER_POS? or just assign players to team w/out position */
CREATE TABLE "TEAMS"
    (
        "TEAM_NAME" VARCHAR(40) NOT NULL PRIMARY KEY,
        "USERNAME" VARCHAR(20) NOT NULL REFERENCES PEOPLE
    )
INSERT INTO TEAMS VALUES ('Test_Team', 'test1');




/* one team will have many players */
/* source for player data: https://www.fantasypros.com/2019/03/aaf-fantasy-football-player-rankings-week-8/ */
CREATE TABLE "PLAYERS"
    (
        "PLAYER_ID" VARCHAR(40) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        "TEAM_NAME" VARCHAR(40) NOT NULL REFERENCES TEAMS,
        "PLAYER_FNAME" VARCHAR(20) NOT NULL,
        "PLAYER_LNAME" VARCHAR(20) NOT NULL,
        "PLAYER_POS" VARCHAR(20) NOT NULL /* player position */
    )
INSERT INTO PLAYERS (TEAM_NAME, PLAYER_FNAME, PLAYER_LNAME, PLAYER_POS)
VALUES 
('Test_Team', 'Josh','Woodrum','QB');
('Test_Team', 'Trent','Richardson','RB');
('Test_team', 'Charles', 'Johnson','WR');