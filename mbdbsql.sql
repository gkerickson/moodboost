CREATE DATABASE MBDB

USE MBDB

CREATE TABLE User
(
uname varchar(255),
pwd varchar(255),
email varchar(255),
addr varchar(255),
fb varchar(255)
PRIMARY KEY (P_Id)
);

CREATE TABLE Mood
(
name varchar(255)
PRIMARY KEY (P_Id)
);