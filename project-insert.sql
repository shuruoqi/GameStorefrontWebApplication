INSERT INTO BankAccount VALUES('1111-1111-1111-1111', 'TD', '2020-10-23');
INSERT INTO BankAccount VALUES('2222-2222-2222-2222', 'BMO', '2020-11-23');
INSERT INTO BankAccount VALUES('3333-3333-3333-3333', 'CIBC', '2020-10-24');
INSERT INTO BankAccount VALUES('4444-4444-4444-4444', 'RBC', '2023-10-23');
INSERT INTO BankAccount VALUES('5555-5555-5555-5555', 'Scotia', '2020-10-23');
INSERT INTO BankAccount VALUES('6666-6666-6666-6666', 'TD', '2021-10-23');
INSERT INTO BankAccount VALUES('7777-7777-7777-7777', 'BMO', '2021-11-23');
INSERT INTO BankAccount VALUES('8888-8888-8888-8888', 'CIBC', '2021-10-24');
INSERT INTO BankAccount VALUES('9999-9999-9999-9999', 'RBC', '2024-10-23');
INSERT INTO BankAccount VALUES('1234-5678-1234-5678', 'Scotia', '2021-10-23');

INSERT INTO Player VALUES(1, 'test', 'test', 'Asia');
INSERT INTO Player VALUES(2, 'john', 's122135', 'Asia');
INSERT INTO Player VALUES(3, 'jane', 'err45', 'Asia');
INSERT INTO Player VALUES(4, 'smith', '67675u7', 'Asia');
INSERT INTO Player VALUES(5, 'anon5', 'aaa', 'Asia');
INSERT INTO Player VALUES(6, 'julia', 'bbb', 'Asia');
INSERT INTO Player VALUES(7, 'peter', 'ccc', 'Africa');
INSERT INTO Player VALUES(8, 'mia', 'ddd', 'Africa');
INSERT INTO Player VALUES(9, 'jacob', 'eee', 'Africa');
INSERT INTO Player VALUES(10, 'dexter', 'fff', 'Europe');
INSERT INTO Player VALUES(11, 'melissa', 'ggg', 'Europe');
INSERT INTO Player VALUES(12, 'lily', 'hhh', 'Europe');
INSERT INTO Player VALUES(13, 'david', 'iii', 'North America');
INSERT INTO Player VALUES(14, 'daniel', 'jjj', 'North America');
INSERT INTO Player VALUES(15, 'chole', 'kkk', 'North America');
INSERT INTO Player VALUES(16, 'vivan', 'lll', 'North America');
INSERT INTO Player VALUES(17, 'joe', 'mmm', 'South America');
INSERT INTO Player VALUES(18, 'carol', 'nnn', 'South America');
INSERT INTO Player VALUES(19, 'paul', 'ooo', 'South America');
INSERT INTO Player VALUES(20, 'lucy', 'ppp', 'South America');

INSERT INTO HasBankAccount_Player VALUES('1111-1111-1111-1111', 1);
INSERT INTO HasBankAccount_Player VALUES('2222-2222-2222-2222', 2);
INSERT INTO HasBankAccount_Player VALUES('3333-3333-3333-3333', 3);
INSERT INTO HasBankAccount_Player VALUES('4444-4444-4444-4444', 4);
INSERT INTO HasBankAccount_Player VALUES('5555-5555-5555-5555', 5);
INSERT INTO HasBankAccount_Player VALUES('6666-6666-6666-6666', 6);
INSERT INTO HasBankAccount_Player VALUES('7777-7777-7777-7777', 7);
INSERT INTO HasBankAccount_Player VALUES('8888-8888-8888-8888', 8);
INSERT INTO HasBankAccount_Player VALUES('9999-9999-9999-9999', 9);
INSERT INTO HasBankAccount_Player VALUES('1234-5678-1234-5678', 10);
INSERT INTO HasBankAccount_Player VALUES('1111-1111-1111-1111', 11);
INSERT INTO HasBankAccount_Player VALUES('2222-2222-2222-2222', 12);
INSERT INTO HasBankAccount_Player VALUES('3333-3333-3333-3333', 13);
INSERT INTO HasBankAccount_Player VALUES('4444-4444-4444-4444', 14);
INSERT INTO HasBankAccount_Player VALUES('5555-5555-5555-5555', 15);
INSERT INTO HasBankAccount_Player VALUES('6666-6666-6666-6666', 16);
INSERT INTO HasBankAccount_Player VALUES('7777-7777-7777-7777', 17);
INSERT INTO HasBankAccount_Player VALUES('8888-8888-8888-8888', 18);
INSERT INTO HasBankAccount_Player VALUES('9999-9999-9999-9999', 19);
INSERT INTO HasBankAccount_Player VALUES('1234-5678-1234-5678', 20);

INSERT INTO IsFriendOf VALUES(1, 2);
INSERT INTO IsFriendOf VALUES(1, 3);
INSERT INTO IsFriendOf VALUES(1, 4);
INSERT INTO IsFriendOf VALUES(2, 5);
INSERT INTO IsFriendOf VALUES(3, 4);

INSERT INTO HasPlayer_Device VALUES(1, 5, 'macbook pro');
INSERT INTO HasPlayer_Device VALUES(2, 4, 'desktop1');
INSERT INTO HasPlayer_Device VALUES(3, 3, 'desktop2');
INSERT INTO HasPlayer_Device VALUES(4, 2, 'asus');
INSERT INTO HasPlayer_Device VALUES(5, 1, 'iphone');
INSERT INTO HasPlayer_Device VALUES(6, 10, 'macbook pro');
INSERT INTO HasPlayer_Device VALUES(7, 9, 'desktop1');
INSERT INTO HasPlayer_Device VALUES(8, 8, 'desktop2');
INSERT INTO HasPlayer_Device VALUES(9, 7, 'asus');
INSERT INTO HasPlayer_Device VALUES(10, 6, 'iphone');
INSERT INTO HasPlayer_Device VALUES(11, 5, 'macbook pro');
INSERT INTO HasPlayer_Device VALUES(12, 4, 'desktop1');
INSERT INTO HasPlayer_Device VALUES(13, 3, 'desktop2');
INSERT INTO HasPlayer_Device VALUES(14, 2, 'asus');
INSERT INTO HasPlayer_Device VALUES(15, 1, 'iphone');
INSERT INTO HasPlayer_Device VALUES(16, 10, 'macbook pro');
INSERT INTO HasPlayer_Device VALUES(17, 9, 'desktop1');
INSERT INTO HasPlayer_Device VALUES(18, 8, 'desktop2');
INSERT INTO HasPlayer_Device VALUES(19, 7, 'asus');
INSERT INTO HasPlayer_Device VALUES(20, 6, 'iphone');


INSERT INTO Game VALUES(1, 'CyberPunk2077', 'RPG', '1.0');
INSERT INTO Game VALUES(2, 'Dont Starve', 'RPG', '2.0');
INSERT INTO Game VALUES(3, 'Fall Guys', 'Action', '1.0');
INSERT INTO Game VALUES(4, 'Human Fall Flat', 'Puzzle', '1.5');
INSERT INTO Game VALUES(5, 'Oxygen Not Included', 'Strategy', '1.0');
INSERT INTO Game VALUES(6, 'Plants vs Zombies', 'Strategy', '1.0');
INSERT INTO Game VALUES(7, 'PUBG', 'Shooting', '3.0');
INSERT INTO Game VALUES(8, 'Stardew Valley', 'Simulation', '3.0');
INSERT INTO Game VALUES(9, 'The Sims', 'Simulation', '3.0');

INSERT INTO Accomplishment2 VALUES('100exp', 'gold'); 
INSERT INTO Accomplishment2 VALUES('90exp', 'silver'); 
INSERT INTO Accomplishment2 VALUES('80exp', 'bronze'); 
INSERT INTO Accomplishment2 VALUES('500exp', 'diamond'); 
INSERT INTO Accomplishment2 VALUES('1000exp', 'ultimate'); 

INSERT INTO Accomplishment VALUES(1, 'gold'); 
INSERT INTO Accomplishment VALUES(2, 'silver'); 
INSERT INTO Accomplishment VALUES(3, 'bronze'); 
INSERT INTO Accomplishment VALUES(4, 'diamond'); 
INSERT INTO Accomplishment VALUES(5, 'ultimate');

--Asia player
INSERT INTO HasPlayer_Game_Accomplishment VALUES(1, 1, 1, 5, 50, '2020-10-05');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(1, 2, 2, 3, 100, '2020-11-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(1, 3, 1, 2, 150, '2020-12-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(2, 1, 2, 1, 70, '2020-10-10');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(2, 4, 2, 1, 70, '2020-10-09');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(2, 5, 1, 1, 60, '2020-10-14');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(2, 6, 1, 1, 35, '2020-10-15');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(3, 2, 1, 5, 10, '2020-10-05');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(3, 7, 1, 5, 10, '2020-10-05');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(3, 8, 2, 3, 5, '2020-11-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(3, 9, 1, 2, 200, '2020-12-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(4, 4, 2, 1, 400, '2020-10-09');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(4, 5, 1, 1, 10, '2020-10-14');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(4, 6, 1, 1, 70, '2020-10-15');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(5, 1, 1, 5, 100, '2020-10-05');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(5, 2, 2, 3, 90, '2020-11-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(5, 3, 1, 2, 100, '2020-12-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(5, 4, 1, 2, 100, '2020-12-11');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(6, 4, 2, 1, 130, '2020-10-09');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(6, 5, 1, 1, 100, '2020-10-14');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(6, 6, 1, 1, 170, '2020-10-15');

--Africa
INSERT INTO HasPlayer_Game_Accomplishment VALUES(7, 1, 1, 1, 120, '2020-10-14');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(7, 2, 2, 2, 210, '2020-02-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(7, 3, 3, 3, 10, '2020-03-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(7, 4, 1, 4, 60, '2020-04-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(7, 5, 2, 5, 20, '2020-05-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(7, 6, 3, 1, 30, '2020-06-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(8, 4, 1, 1, 120, '2020-10-14');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(8, 5, 2, 2, 210, '2020-02-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(8, 6, 3, 3, 10, '2020-03-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(8, 7, 1, 4, 60, '2020-04-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(8, 8, 2, 5, 20, '2020-05-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(8, 9, 3, 1, 30, '2020-06-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(9, 2, 1, 1, 120, '2020-10-14');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(9, 3, 2, 2, 210, '2020-02-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(9, 4, 3, 3, 10, '2020-03-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(9, 5, 1, 4, 60, '2020-04-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(9, 6, 2, 5, 20, '2020-05-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(9, 7, 3, 1, 30, '2020-06-01');

--EU
INSERT INTO HasPlayer_Game_Accomplishment VALUES(10, 1, 1, 1, 120, '2020-10-14');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(10, 2, 2, 2, 210, '2020-02-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(10, 3, 3, 3, 10, '2020-03-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(10, 4, 1, 4, 60, '2020-04-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(10, 5, 2, 5, 20, '2020-05-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(10, 6, 3, 1, 30, '2020-06-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(11, 4, 1, 1, 120, '2020-10-14');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(11, 5, 2, 2, 210, '2020-02-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(11, 6, 3, 3, 10, '2020-03-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(11, 7, 1, 4, 60, '2020-04-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(11, 8, 2, 5, 20, '2020-05-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(11, 9, 3, 1, 30, '2020-06-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(12, 2, 1, 1, 120, '2020-10-14');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(12, 3, 2, 2, 210, '2020-02-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(12, 4, 3, 3, 10, '2020-03-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(12, 5, 1, 4, 60, '2020-04-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(12, 6, 2, 5, 20, '2020-05-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(12, 7, 3, 1, 30, '2020-06-01');

--NA
INSERT INTO HasPlayer_Game_Accomplishment VALUES(13, 1, 1, 1, 120, '2020-10-14');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(13, 2, 2, 2, 210, '2020-02-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(13, 3, 3, 3, 10, '2020-03-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(13, 4, 1, 4, 60, '2020-04-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(13, 5, 2, 5, 20, '2020-05-01');

INSERT INTO HasPlayer_Game_Accomplishment VALUES(14, 4, 1, 1, 120, '2020-10-14');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(14, 5, 2, 2, 210, '2020-02-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(14, 6, 3, 3, 10, '2020-03-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(14, 8, 2, 5, 20, '2020-05-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(14, 9, 3, 1, 30, '2020-06-01');

INSERT INTO HasPlayer_Game_Accomplishment VALUES(15, 3, 2, 2, 210, '2020-02-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(15, 4, 3, 3, 10, '2020-03-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(15, 5, 1, 4, 60, '2020-04-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(15, 6, 2, 5, 20, '2020-05-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(15, 7, 3, 1, 30, '2020-06-01');

INSERT INTO HasPlayer_Game_Accomplishment VALUES(16, 1, 2, 2, 210, '2020-02-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(16, 4, 3, 3, 10, '2020-03-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(16, 7, 1, 4, 60, '2020-04-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(16, 8, 2, 5, 20, '2020-05-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(16, 9, 3, 1, 30, '2020-06-01');

--SA
INSERT INTO HasPlayer_Game_Accomplishment VALUES(17, 1, 1, 1, 120, '2020-10-14');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(17, 2, 2, 2, 210, '2020-02-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(17, 3, 3, 3, 10, '2020-03-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(17, 4, 1, 4, 60, '2020-04-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(17, 5, 2, 5, 20, '2020-05-01');

INSERT INTO HasPlayer_Game_Accomplishment VALUES(18, 4, 1, 1, 120, '2020-10-14');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(18, 5, 2, 2, 210, '2020-02-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(18, 6, 3, 3, 10, '2020-03-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(18, 8, 2, 5, 20, '2020-05-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(18, 9, 3, 1, 30, '2020-06-01');

INSERT INTO HasPlayer_Game_Accomplishment VALUES(19, 3, 2, 2, 210, '2020-02-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(19, 4, 3, 3, 10, '2020-03-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(19, 5, 1, 4, 60, '2020-04-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(19, 6, 2, 5, 20, '2020-05-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(19, 7, 3, 1, 30, '2020-06-01');

INSERT INTO HasPlayer_Game_Accomplishment VALUES(20, 1, 2, 2, 210, '2020-02-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(20, 4, 3, 3, 10, '2020-03-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(20, 7, 1, 4, 60, '2020-04-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(20, 8, 2, 5, 20, '2020-05-01');
INSERT INTO HasPlayer_Game_Accomplishment VALUES(20, 9, 3, 1, 30, '2020-06-01');

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
INSERT INTO GoldMember VALUES(4);
INSERT INTO GoldMember VALUES(5);
INSERT INTO GoldMember VALUES(6);
INSERT INTO GoldMember VALUES(7);
INSERT INTO GoldMember VALUES(8);
INSERT INTO GoldMember VALUES(9);

INSERT INTO RegularMember VALUES(10);
INSERT INTO RegularMember VALUES(11);
INSERT INTO RegularMember VALUES(12);
INSERT INTO RegularMember VALUES(13);
INSERT INTO RegularMember VALUES(14);
INSERT INTO RegularMember VALUES(15);
INSERT INTO RegularMember VALUES(16);
INSERT INTO RegularMember VALUES(17);
INSERT INTO RegularMember VALUES(18);
INSERT INTO RegularMember VALUES(19);
INSERT INTO RegularMember VALUES(20);


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
INSERT INTO MakesComments VALUES('2020-07-27 09:00:30.75', "interesting", 6, 5);
INSERT INTO MakesComments VALUES('2020-07-27 09:00:30.75', "interesting", 7, 1);
INSERT INTO MakesComments VALUES('2020-07-27 09:00:30.75', "good game", 8, 4);


INSERT INTO PublishUpdateGame VALUES(1, 1, '2000-01-01');
INSERT INTO PublishUpdateGame VALUES(2, 2, '2000-01-01');
INSERT INTO PublishUpdateGame VALUES(3, 7, '2000-01-01');
INSERT INTO PublishUpdateGame VALUES(4, 4, '2000-01-01');
INSERT INTO PublishUpdateGame VALUES(5, 2, '2000-01-01');
INSERT INTO PublishUpdateGame VALUES(6, 3, '2000-01-01');
INSERT INTO PublishUpdateGame VALUES(7, 5, '2000-01-01');
INSERT INTO PublishUpdateGame VALUES(8, 6, '2000-01-01');
INSERT INTO PublishUpdateGame VALUES(9, 3, '2000-01-01');

INSERT INTO ReceivesGoldMember_Gift VALUES(1, 1, '2020-10-01');
INSERT INTO ReceivesGoldMember_Gift VALUES(1, 2, '2020-10-01');
INSERT INTO ReceivesGoldMember_Gift VALUES(1, 3, '2020-10-01');
INSERT INTO ReceivesGoldMember_Gift VALUES(1, 4, '2020-10-01');
INSERT INTO ReceivesGoldMember_Gift VALUES(1, 5, '2020-10-01');
INSERT INTO ReceivesGoldMember_Gift VALUES(1, 6, '2020-10-01');
INSERT INTO ReceivesGoldMember_Gift VALUES(1, 7, '2020-10-01');
INSERT INTO ReceivesGoldMember_Gift VALUES(1, 8, '2020-10-01');
INSERT INTO ReceivesGoldMember_Gift VALUES(1, 9, '2020-10-01');
INSERT INTO ReceivesGoldMember_Gift VALUES(2, 1, '2020-10-01');
INSERT INTO ReceivesGoldMember_Gift VALUES(2, 2, '2020-10-01');
INSERT INTO ReceivesGoldMember_Gift VALUES(2, 3, '2020-10-01');
INSERT INTO ReceivesGoldMember_Gift VALUES(2, 4, '2020-10-01');
INSERT INTO ReceivesGoldMember_Gift VALUES(2, 5, '2020-10-01');
INSERT INTO ReceivesGoldMember_Gift VALUES(2, 6, '2020-10-01');
INSERT INTO ReceivesGoldMember_Gift VALUES(2, 7, '2020-10-01');
INSERT INTO ReceivesGoldMember_Gift VALUES(2, 8, '2020-10-01');
INSERT INTO ReceivesGoldMember_Gift VALUES(2, 9, '2020-10-01');