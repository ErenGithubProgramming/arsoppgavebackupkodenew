/*
Bruk disse kodene for å vå websiden til å funke på en ordentlig måte, vi trenger alt dette for å lagre informasjon på databasen.
*/

create database Pcinfo;

use Pcinfo;

create table info_om_Kunde (
    username varchar(40),
    password varchar(40)
);

--Hvis du bruker en annen MariaDB enn den som blir installert med XAMPP, må du kjøre denne i MariaDB
ALTER USER root@localhost IDENTIFIED VIA mysql_native_password;
SET PASSWORD = PASSWORD('foo'); --bytt ut 'foo' med ditt passord, f.eks. 'Admin'