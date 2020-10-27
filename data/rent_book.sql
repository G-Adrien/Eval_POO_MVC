DROP DATABASE IF EXISTS rent_book;
CREATE DATABASE rent_book CHARACTER SET 'utf8';
USE rent_book;

DROP USER IF EXISTS 'RentBook'@'Localhost';
CREATE USER 'RentBook'@'Localhost';
GRANT ALL PRIVILEGES ON rent_book.* To 'RentBook'@'Localhost' IDENTIFIED BY 'book27';

CREATE TABLE User(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  lastname VARCHAR(100) NOT NULL,
  firstname VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  address VARCHAR(100) NOT NULL,
  sex CHAR(1) NOT NULL,
  birth_date DATE NOT NULL,
  PRIMARY KEY (id)
)
ENGINE=InnoDB;

INSERT INTO User(lastname, firstname, email, address, sex, birth_date)
VALUES
("Deuf", "John", "johndeuf@gmail.com", "70, rue Jean Vilar 25000 BESANÇON", "h", "1980-05-03"),
("Crok", "Odile", "crok-odile@hotmail.com", "30, boulevard d\'Alsace 56000 VANNES", "f", "1995-09-12");

CREATE TABLE Book(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    tilte VARCHAR(100) NOT NULL,
    author VARCHAR(100) NOT NULL,
    summary TEXT(500) NULL,
    publication DATE NOT NULL,
    user_id INT,
    PRIMARY KEY (id)
)
ENGINE = InnoDB; 

INSERT INTO Book(tilte, author, summary, publication)
VALUES
("Fullmetal Alchemist - Tome 1", "Hiromu Arakawa", " Les frères Elric (Edward et Alphonse) ont hérité leur talent d'alchimiste de leur père mystérieusement disparu. À la suite de la mort de leur mère, les deux jeunes tentent de la faire revivre grâce à l\'alchimie, en faisant une transmutation humaine malgré l\'interdit.",
 "2001-07-12"),
 ("Harry Potter à l\'école des sorciers", "J. K. Rowling", "Orphelin, le jeune Harry Potter peut enfin quitter ses tyranniques oncle et tante Dursley lorsqu'un curieux messager lui révèle qu\'il est un sorcier. À 11 ans, Harry va enfin pouvoir intégrer la légendaire école de sorcellerie de Poudlard, y trouver une famille digne de ce nom et des amis, développer ses dons, et préparer son glorieux avenir.",
 "1998-10-09"),
 ("Hunger Games","Suzanne Collins", "Katniss Everdeen, une adolescente de 16 ans, qui vit dans une Amérique post-apocalyptique, connue sous le nom de Panem. Un puissant gouvernement répressif, le Capitole, qui s\'est formé après une période de troubles et de destruction, contrôle les douze districts qui forment Panem.",
 "2008-09-14"),
 ("Le Seigneur des anneaux", "J. R. R. Tolkien", "Le Seigneur des anneaux est un roman en trois volumes de J. R. R. Tolkien paru en 1954 et 1955. Prenant place dans le monde de fiction de la Terre du Milieu, il suit la quête du hobbit Frodon Sacquet, qui doit détruire l\'Anneau unique afin que celui-ci ne tombe pas entre les mains de Sauron, le Seigneur des ténèbres.",
 "1954-07-29"),
 ("Les Aventures d\'Alice au pays des merveilles", "Lewis Carroll", "Assise au bord de la rivière, Alice s\'ennuyait un peu quand soudain, venu de nulle part, surgit un lapin blanc pressé de regagner son terrier. N\'hésitant pas à le suivre, Alice pénètre dans un monde de prodiges et de menaces qui n'est autre que le royaume de l\'enfance.",
 "1865-07-04")
 ;