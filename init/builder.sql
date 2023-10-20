create database Register;
use Register;

create table UserData(
    IdentityCardNumber VARCHAR(20) NOT NULL PRIMARY KEY,
    Name NVARCHAR(30) NOT NULL,
    MiddleName NVARCHAR(30),
    Surname NVARCHAR(50) NOT NULL,
    Email NVARCHAR(50) NOT NULL,
    PhoneNumber INT NOT NULL,
    BirthDate DATE NOT NULL
);