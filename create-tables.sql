CREATE TABLE BankAccount
(accountID	  INTEGER NOT NULL, 
 bankName     varchar(50) NOT NULL, 
 expiryDate   DATE NOT NULL,
 PRIMARY KEY (accountID));

CREATE TABLE Player
(playerID	INTEGER NOT NULL, 
 username	varchar(50) NOT NULL, 
 playerPW   varchar(50) NOT NULL, 
 region		varchar(50), 
 PRIMARY KEY (playerID));

CREATE TABLE HasBankAccount_Player
(accountID	INTEGER NOT NULL, 
 playerID	INTEGER NOT NULL,
 PRIMARY KEY (accountID, playerID),
 FOREIGN KEY (accountID) REFERENCES BankAccount(accountID),
 FOREIGN KEY (playerID) REFERENCES Player(playerID));

CREATE TABLE IsFriendOf
(playerID1	INTEGER NOT NULL, 
 playerID2	INTEGER NOT NULL,
 PRIMARY KEY (playerID1,playerID2),
 FOREIGN KEY (playerID1) REFERENCES Player(playerID),
 FOREIGN KEY (playerID2) REFERENCES Player(playerID));

CREATE TABLE Device
(deviceID	INTEGER, 
 devicename	varchar(50), 
 PRIMARY KEY (deviceID));

CREATE TABLE HasPlayer_Device
(playerID		INTEGER NOT NULL, 
 deviceID		INTEGER NOT NULL,
 PRIMARY KEY (playerID, deviceID),
 FOREIGN KEY (playerID) REFERENCES Player(playerID),
 FOREIGN KEY (deviceID) REFERENCES Device (deviceID));

CREATE TABLE Game
(gameID			INTEGER, 
 gameName	    varchar(50) NOT NULL, 
 gameType		varchar(50) NOT NULL, 
 latestVersion	varchar(50) NOT NULL, 
 PRIMARY KEY (gameID),
 UNIQUE (gameName));

CREATE TABLE Accomplishment2
(reward					varchar(50), 
 accomplishLevel		varchar(50), 
 PRIMARY KEY (accomplishLevel));

CREATE TABLE Accomplishment
(accomplishmentID		INTEGER NOT NULL, 
 accomplishLevel		varchar(50), 
 PRIMARY KEY (accomplishmentID),
 FOREIGN KEY (accomplishLevel) REFERENCES Accomplishment2 (accomplishLevel));

CREATE TABLE HasPlayer_Game_Accomplishment
(playerID			INTEGER NOT NULL, 
 gameID				INTEGER NOT NULL,
 accomplishmentID   INTEGER NOT NULL,
 rating				INTEGER,
 timeSpent			INTEGER,
 obtainedDate 		INTEGER,
 PRIMARY KEY (playerID, gameID, accomplishmentID),
 FOREIGN KEY (playerID) REFERENCES Player(playerID),
 FOREIGN KEY (GameID) REFERENCES Game(gameID),
 FOREIGN KEY (accomplishmentID) REFERENCES Accomplishment(accomplishmentID));

CREATE TABLE Producer
(companyID		    INTEGER, 
 companyName	    varchar(50) NOT NULL, 
 companyPW          varchar(50) NOT NULL, 
 totalProduced		INTEGER, 
 PRIMARY KEY (companyID),
 UNIQUE (companyName));

CREATE TABLE GoldMember
(playerID	        INTEGER NOT NULL, 
 membershipRate     INTEGER NOT NULL,
 PRIMARY KEY (playerID),
 FOREIGN KEY (playerID) REFERENCES Player(playerID));

CREATE TABLE RegularMember
(playerID	INTEGER NOT NULL, 
 PRIMARY KEY (playerID),
 FOREIGN KEY (playerID) REFERENCES Player(playerID));

CREATE TABLE Gift2
(giftName 	    varchar(50),
 giftValue		INTEGER,
 PRIMARY KEY (giftName));

CREATE TABLE Gift
(giftID		INTEGER,
 giftName 	varchar(50) NOT NULL,
 PRIMARY KEY (giftID),
 FOREIGN KEY (giftName) REFERENCES Gift2(giftName));

CREATE TABLE MakesComments
(commentTime			TIMESTAMP,
 content				varchar(200) NOT NULL,
 playerID				INTEGER NOT NULL,
 gameID 				INTEGER NOT NULL,
 PRIMARY KEY (commentTime,playerID,gameID),
 FOREIGN KEY (playerID) REFERENCES Player(playerID),
 FOREIGN KEY (gameID) REFERENCES Game(gameID));

CREATE TABLE PublishUpdateGame
(gameID	        INTEGER NOT NULL,
 companyID	    INTEGER NOT NULL,
 releaseDate	DATE NOT NULL,
 PRIMARY KEY (gameID,companyID),
 FOREIGN KEY (gameID) REFERENCES Game(gameID),
 FOREIGN KEY (companyID) REFERENCES Producer(companyID));

CREATE TABLE ReceivesGoldMember_Gift
(giftID		        INTEGER NOT NULL, 
 playerID	        INTEGER NOT NULL, 
 receivedSate		DATE NOT NULL, 
 PRIMARY KEY (playerID,GiftID),
 FOREIGN KEY (playerID) REFERENCES Player(playerID),
 FOREIGN KEY (giftID) REFERENCES Gift(giftID));
