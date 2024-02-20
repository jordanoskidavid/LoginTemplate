create database Register;
use Register;

create table UserData(
                         Email NVARCHAR(50) NOT NULL PRIMARY KEY,
                         Name NVARCHAR(30) NOT NULL,
                         Surname NVARCHAR(50) NOT NULL,
                         Password NVARCHAR(5000) NOT NULL,
                         PhoneNumber NVARCHAR(50) NOT NULL,
                         BirthDate DATE NOT NULL
);