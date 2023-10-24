create database Register;
use Register;

create table UserData(
                         Name NVARCHAR(30) NOT NULL,
                         Surname NVARCHAR(50) NOT NULL,
                         Email NVARCHAR(50) NOT NULL,
                         Password NVARCHAR(50) NOT NULL,
                         PhoneNumber INT NOT NULL,
                         BirthDate DATE NOT NULL,
                         IdentityCardNumber VARCHAR(20) NOT NULL PRIMARY KEY
);