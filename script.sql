DROP DATABASE IF EXISTS  acr05;
CREATE DATABASE acr05;

USE acr05;

DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users 
(
	ID int(11) NOT NULL AUTO_INCREMENT
    ,Username varchar(100)
	,Name varchar(100)
	,Address varchar(100)
    ,Email varchar(100)
	,PRIMARY KEY (`ID`)
);

DROP PROCEDURE IF EXISTS create_new_user;
DELIMITER //
CREATE PROCEDURE create_new_user
(
    pUsername VARCHAR(100)
    ,pName VARCHAR(100)
    ,pAddress VARCHAR(100)
    ,pEmail VARCHAR(100)
)
BEGIN
	INSERT INTO users
    (
        Username
        ,Name
        ,Address
        ,Email
	)
    VALUES
    (
        pUsername
        ,pName
        ,pAddress
        ,pEmail
    );
END//


DROP PROCEDURE IF EXISTS get_all_users;
DELIMITER //
CREATE PROCEDURE get_all_users()
BEGIN
	SELECT 
    	*
    FROM
    	users;
END//