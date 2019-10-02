create database perceptyx;
create user candidate;
grant all privileges on perceptyx.* to 'candidate'@'localhost' identified by 'password';
flush privileges;
use perceptyx


CREATE TABLE employee (  id INT NOT NULL AUTO_INCREMENT,   sex VARCHAR(10) NOT NULL,   name VARCHAR(255) , hiredate DATE, birthdate DATE,  PRIMARY KEY (id));

INSERT INTO employee  (sex,name,hiredate,birthdate) VALUES   ('MALE', 'TOLU', '1990-02-01','1965-02-01'),   ('MALE', 'ROB', '1995-02-01','1965-02-01'),   ('FEMALE', 'LOLA', '1975-03-15','1965-03-15'),   ('MALE', 'ALEX', '1965-12-15','1965-03-15'),   ('MALE', 'ANDREA', '1935-03-15','1965-03-15'),   ('FEMALE', 'NIKE', '1985-03-15','1965-03-15'),   ('MALE', 'TOLANI', '1965-09-15','1965-03-15');

