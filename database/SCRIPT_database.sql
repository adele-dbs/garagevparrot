CREATE DATABASE garage; 

CREATE TABLE garage.rights (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL
);

CREATE TABLE garage.users (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(50) NOT NULL,
  lastname VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  password VARCHAR(250) NOT NULL,
  right_id INT(11) NOT NULL,
    FOREIGN KEY (right_id) 
	  REFERENCES rights(id)
);

CREATE TABLE garage.timetables (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  hours VARCHAR(50)9h NOT NULL
);

CREATE TABLE garage.days (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  timetable_id INT(11) NOT NULL,
    FOREIGN KEY (timetable_id) 
	  REFERENCES timetables(id)
);

CREATE TABLE garage.services (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  description VARCHAR(250) NOT NULL
);

CREATE TABLE garage.validations (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  valid VARCHAR(3) NOT NULL
);

CREATE TABLE garage.commentaries (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(50) NOT NULL,
  commentary VARCHAR(250) NOT NULL,
  rating INT(11) NOT NULL,
  valid_id INT(11) NOT NULL DEFAULT 1,
    FOREIGN KEY (valid_id) 
	  REFERENCES validations(id)
);

CREATE TABLE garage.options (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL
);

CREATE TABLE garage.equipments (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL
);

CREATE TABLE garage.cars_models (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL
);

CREATE TABLE garage.brands (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  brand_id INT(11) NOT NULL,
    FOREIGN KEY (brand_id) 
	  REFERENCES brands(id),
);

CREATE TABLE garage.cars (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  picture1 VARCHAR(250) NOT NULL,
  picture2 VARCHAR(250),
  picture3 VARCHAR(250),
  picture4 VARCHAR(250),
  picture5 VARCHAR(250),
  price INT(11) NOT NULL,
  year INT(11) NOT NULL,
  mileage INT(11) NOT NULL,
  brand_id INT(11) NOT NULL,
    FOREIGN KEY (brand_id) 
	  REFERENCES brands(id),
  model_id INT(11) NOT NULL,
    FOREIGN KEY (model_id) 
	  REFERENCES models(id)
);

CREATE TABLE garage.questions (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  firstname VARCHAR(50) NOT NULL,
  lastname VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  phone_number VARCHAR(50) NOT NULL,
  message VARCHAR(250) NOT NULL,
  car_id INT(11) NOT NULL DEFAULT 0,
    FOREIGN KEY (car_id) 
	  REFERENCES cars(id),
  reply_id INT(11) NOT NULL DEFAULT 1,
    FOREIGN KEY (reply_id) 
	  REFERENCES validations(id)
);

CREATE TABLE garage.car_option (
  option_id INT(11) NOT NULL,
    FOREIGN KEY (option_id) 
	  REFERENCES options(id),
  car_id INT(11) NOT NULL,
    FOREIGN KEY (car_id) 
	  REFERENCES cars(id)
);

CREATE TABLE garage.car_equipment (
  equipment_id INT(11) NOT NULL,
    FOREIGN KEY (equipment_id) 
	  REFERENCES equipments(id),
  car_id INT(11) NOT NULL,
    FOREIGN KEY (car_id) 
	  REFERENCES cars(id)
);



