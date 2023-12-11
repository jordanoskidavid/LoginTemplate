create database Register;
use Register;

create table UserData(
                         Name NVARCHAR(30) NOT NULL,
                         Surname NVARCHAR(50) NOT NULL,
                         Email NVARCHAR(50) NOT NULL PRIMARY KEY,
                         Password NVARCHAR(50) NOT NULL,
                         PhoneNumber NVARCHAR(50) NOT NULL,
                         BirthDate DATE NOT NULL
);