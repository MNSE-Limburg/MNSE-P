-- Create the CrimeDatabase database
CREATE DATABASE IF NOT EXISTS aangiftes;
USE aangiftes;

-- Create the aangifte table
CREATE TABLE IF NOT EXISTS aangifte (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Naam VARCHAR(255),
    Email VARCHAR(255),
    Anoniem BOOLEAN,
    Locatie VARCHAR(255),
    Misdaad VARCHAR(255),
    Omschrijving_verdachte TEXT
);
