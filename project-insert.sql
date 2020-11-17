INSERT INTO BankAccount VALUES(1, 'TD', '2020-10-23');
INSERT INTO BankAccount VALUES(2, 'BMO', '2020-11-23');
INSERT INTO BankAccount VALUES(3, 'CIBC', '2020-10-24');
INSERT INTO BankAccount VALUES(4, 'RBC', '2023-10-23');
INSERT INTO BankAccount VALUES(5, 'Scotia', '2020-10-23');

INSERT INTO Player VALUES(1, 'anon1', '12345', 'Asia');
INSERT INTO Player VALUES(2, 'john', 's122135', 'Africa');
INSERT INTO Player VALUES(3, 'jane', 'err45', 'North America');
INSERT INTO Player VALUES(4, 'smith', '67675u7', 'Europe');
INSERT INTO Player VALUES(5, 'anon5', 'htrt', 'Asia');

INSERT INTO HasBankAccount_Player VALUES(1, 1);
INSERT INTO HasBankAccount_Player VALUES(2, 2);
INSERT INTO HasBankAccount_Player VALUES(3. 3);
INSERT INTO HasBankAccount_Player VALUES(4, 4);
INSERT INTO HasBankAccount_Player VALUES(5, 5);

INSERT INTO IsFriendOf VALUES(1, 2);
INSERT INTO IsFriendOf VALUES(1, 3);
INSERT INTO IsFriendOf VALUES(1, 4);
INSERT INTO IsFriendOf VALUES(2, 5);
INSERT INTO IsFriendOf VALUES(3, 4);

INSERT INTO Device VALUES(1, 'macbook pro');
INSERT INTO Device VALUES(2, 'desktop1');
INSERT INTO Device VALUES(3, 'desktop2');
INSERT INTO Device VALUES(4, 'asus');
INSERT INTO Device VALUES(5, 'iphone');

INSERT INTO HasPlayer_Device VALUES(1, 5);
INSERT INTO HasPlayer_Device VALUES(2, 4);
INSERT INTO HasPlayer_Device VALUES(3, 3);
INSERT INTO HasPlayer_Device VALUES(4, 2);
INSERT INTO HasPlayer_Device VALUES(5, 1);

INSERT INTO Game VALUES(1, 'CyberPunk2077', 'RPG', '1.0');
INSERT INTO Game VALUES(2, 'Dont Starve', 'RPG', '2.0');
INSERT INTO Game VALUES(3, 'Fall Guys', 'Action', '1.0');
INSERT INTO Game VALUES(4, 'Human Fall Flat', 'Puzzle', '1.5');
INSERT INTO Game VALUES(5, 'Oxygen Not Included', 'Strategy', '1.0');
INSERT INTO Game VALUES(6, 'Plants vs Zombies', 'Strategt', '1.0');
INSERT INTO Game VALUES(7, 'PUBG', 'Shooting', '3.0');
INSERT INTO Game VALUES(8, 'Stardew Valley', 'Simulation', '3.0');
INSERT INTO Game VALUES(9, 'The Sims', 'Simulation', '3.0');

INSERT INTO Accomplishment2 VALUES('100exp', 'gold'); 
INSERT INTO Accomplishment2 VALUES('90exp', 'silver'); 
INSERT INTO Accomplishment2 VALUES('80exp', 'bronze'; 
INSERT INTO Accomplishment2 VALUES('500exp', 'diamond'); 
INSERT INTO Accomplishment2 VALUES('1000exp', 'ultimate'); 

INSERT INTO Accomplishment VALUES(1, 'gold'); 
INSERT INTO Accomplishment VALUES(2, 'silver'); 
INSERT INTO Accomplishment VALUES(3, 'bronze'; 
INSERT INTO Accomplishment VALUES(4, 'diamond'); 
INSERT INTO Accomplishment VALUES(5, 'ultimate'); 

INSERT INTO HasPlayer_Game_Accomplishment VALUES(1, 1, 1, 5, 100, '2020-10-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(4, 3, 3, 4, 20, '2020-01-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(2, 4, 5, 3, 40, '2020-02-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(5, 3, 4, 2, 20, '2020-01-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(3, 3, 2, 1, 20, '2020-01-01');

INSERT INTO Producer VALUES(1, 'CD projekt Red', '12345', 'Europe', 1);
INSERT INTO Producer VALUES(2, 'Klei', '12345', 'North America', 2);
INSERT INTO Producer VALUES(3, 'EA', 'dsfsdf', 'North America', 2);
INSERT INTO Producer VALUES(4, 'No Brake Games', 'sdsa', 'Europe', 1);
INSERT INTO Producer VALUES(5, 'Bluehole', 'dfsdds', 'Asia', 1);
INSERT INTO Producer VALUES(6, 'Chucklefish', 'ddfds', 'Europe', 1);
INSERT INTO Producer VALUES(7, 'Mediatonic', 'ddsdsa', 'Europe', 1);

INSERT INTO GoldMember VALUES(1);
INSERT INTO GoldMember VALUES(2);
INSERT INTO GoldMember VALUES(3);

INSERT INTO RegularMember VALUES(4);
INSERT INTO RegularMember VALUES(5);

INSERT INTO Gift2 VALUES('100 pack', 100);
INSERT INTO Gift2 VALUES('200 pack', 200);
INSERT INTO Gift2 VALUES('300 pack', 300);
INSERT INTO Gift2 VALUES('400 pack', 400);
INSERT INTO Gift2 VALUES('500 pack', 500);

INSERT INTO Gift VALUES(1, '100 pack');
INSERT INTO Gift VALUES(2, '200 pack');
INSERT INTO Gift VALUES(3, '300 pack');
INSERT INTO Gift VALUES(4, '400 pack');
INSERT INTO Gift VALUES(5, '500 pack');

INSERT INTO MakesComments VALUES('2020-07-27 09:00:30.75', "good game", 1, 2);
INSERT INTO MakesComments VALUES('2020-10-10 09:00:30.75', "good game", 3, 2);
INSERT INTO MakesComments VALUES('2020-01-27 10:00:30.00', "very good", 4, 5);
INSERT INTO MakesComments VALUES('2020-08-27 09:00:30.75', "good game", 2, 1);
INSERT INTO MakesComments VALUES('2020-07-27 09:00:30.75', "interesting", 5, 4);

INSERT INTO PublishUpdateGame VALUES(1, 1, '2000-01-01');
INSERT INTO PublishUpdateGame VALUES(2, 2, '2000-01-01');
INSERT INTO PublishUpdateGame VALUES(3, 7, '2000-01-01');
INSERT INTO PublishUpdateGame VALUES(4, 4, '2000-01-01');
INSERT INTO PublishUpdateGame VALUES(5, 2, '2000-01-01');
INSERT INTO PublishUpdateGame VALUES(6, 3, '2000-01-01');
INSERT INTO PublishUpdateGame VALUES(7, 5, '2000-01-01');
INSERT INTO PublishUpdateGame VALUES(8, 6, '2000-01-01');
INSERT INTO PublishUpdateGame VALUES(9, 3, '2000-01-01');

INSERT INTO ReceivesGoldMember_Gift VALUES(1, 5, '2020-10-01');
INSERT INTO ReceivesGoldMember_Gift VALUES(2, 4, '2020-10-01');
INSERT INTO ReceivesGoldMember_Gift VALUES(3, 2, '2020-10-01');









