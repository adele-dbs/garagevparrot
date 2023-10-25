CREATE DATABASE garage ; 

CREATE TABLE garage.rights (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL
);

CREATE TABLE garage.users (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(50) NOT NULL,
  lastname VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL,
  right_id INT(11) NOT NULL,
    FOREIGN KEY (right_id) 
	  REFERENCES rights(id)
);

CREATE TABLE garage.timetables (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  hours TIME NOT NULL
);
