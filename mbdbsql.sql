DROP DATABASE IF EXISTS MBDB;

CREATE DATABASE MBDB;

USE MBDB;

CREATE TABLE User
(
uname varchar(255),
pwd varchar(255),
email varchar(255),
addr varchar(255),
fb varchar(255),
PRIMARY KEY (uname)
);

CREATE TABLE Mood
(
name varchar(255),
img varchar(255),
PRIMARY KEY (name)
);

CREATE TABLE U_M
(
name varchar(255),
uname varchar(255),
lat DOUBLE(6,6),
lot DOUBLE(6,6),
PRIMARY KEY (name,uname),
FOREIGN KEY (name) REFERENCES Mood(name),
FOREIGN KEY (uname) REFERENCES User(uname)
);

CREATE TABLE Atom
(
id varchar(255),
PRIMARY KEY (id)
);

CREATE TABLE A_M
(
id varchar(255),
name varchar(255),
PRIMARY KEY (name,id),
FOREIGN KEY (name) REFERENCES Mood(name),
FOREIGN KEY (id) REFERENCES Atom(id)
);

CREATE TABLE Content
(
link varchar(255),
rating DOUBLE(2,2),
uname varchar(255),
PRIMARY KEY (link,uname),
FOREIGN KEY (uname) REFERENCES User(uname)
);


CREATE TABLE A_C
(
id varchar(255),
uname varchar(255),
link varchar(255),
PRIMARY KEY (link,id,uname),
FOREIGN KEY (link) REFERENCES Content(link),
FOREIGN KEY (id) REFERENCES Atom(id)
);

ALTER TABLE A_C ADD CONSTRAINT FK_A_C_uname FOREIGN KEY (uname) REFERENCES Content (uname);


CREATE TABLE M_C
(
name varchar(255),
uname varchar(255),
link varchar(255),
PRIMARY KEY (link,name,uname),
FOREIGN KEY (link) REFERENCES Content(link),
FOREIGN KEY (name) REFERENCES Mood(name)
);

ALTER TABLE M_C ADD CONSTRAINT FK_M_C_uname FOREIGN KEY (uname) REFERENCES Content (uname);

INSERT INTO Atom VALUES ("happy");
INSERT INTO Atom VALUES ("sad");
INSERT INTO Atom VALUES ("angry");
INSERT INTO Atom VALUES ("disgusted");
INSERT INTO Atom VALUES ("afraid");
INSERT INTO Atom VALUES ("surprised");

INSERT INTO Mood VALUES ("happy","http://www.thelawofattraction.org/wp-content/uploads/2013/06/happy.jpg");
INSERT INTO Mood VALUES ("sad","http://ghcorps.org/wp-content/uploads//2013/01/Sad-Cat.jpg");
INSERT INTO Mood VALUES ("angry","https://selectresource.com/wp-content/uploads/2015/01/bigstock-portrait-of-young-angry-man-52068682.jpg");
INSERT INTO Mood VALUES ("disgusted","https://readbodylanguage.files.wordpress.com/2011/05/cf2102-f4_default.gif");
INSERT INTO Mood VALUES ("afraid","http://www.thedailymind.com/wp-content/uploads/2012/04/94_anxious.jpg");
INSERT INTO Mood VALUES ("surprised","http://i.livescience.com/images/i/000/019/601/i02/surprised-guy.jpg?1314908791");

INSERT INTO A_M SELECT Atom.id, Mood.name FROM Atom, Mood WHERE Mood.name = Atom.id;

