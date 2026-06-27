CREATE DATABASE smm;

USE smm;


CREATE TABLE usuarios(

id INT AUTO_INCREMENT PRIMARY KEY,

nome VARCHAR(100),

email VARCHAR(100),

senha VARCHAR(255),

saldo DECIMAL(10,2) DEFAULT 0

);



CREATE TABLE pedidos(

id INT AUTO_INCREMENT PRIMARY KEY,

usuario INT,

servico VARCHAR(100),

link TEXT,

quantidade INT,

status VARCHAR(50)

);



CREATE TABLE admin(

id INT AUTO_INCREMENT PRIMARY KEY,

usuario VARCHAR(50),

senha VARCHAR(255)

);



INSERT INTO admin(usuario,senha)

VALUES(

'admin',

'123456'

);