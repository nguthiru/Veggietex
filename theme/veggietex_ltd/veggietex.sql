
CREATE DATABASE veggietexproject;
USE veggietexproject;

CREATE TABLE clienttable (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    code mediumint(50) NOT NULL,
    status text NOT NULL,
    donoraccountstatus text NOT NULL
    
    
);

