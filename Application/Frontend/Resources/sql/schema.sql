/** Create Database **/
CREATE DATABASE towel;
GRANT ALL PRIVILEGES ON towel.* TO 'towel_usr'@'localhost' IDENTIFIED BY 'towel_pass';


/** Pics Table **/
CREATE TABLE pic (
  id BIGINT NOT NULL AUTO_INCREMENT,
  pic VARCHAR(255) NOT NULL,
  created INT NOT NULL,
  object_id BIGINT NOT NULL,
  object_type VARCHAR(50) NOT NULL,
  PRIMARY KEY (id)
);

/** User Table **/
CREATE TABLE app_user (
  id BIGINT NOT NULL AUTO_INCREMENT ,
  username VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
);