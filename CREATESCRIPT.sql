-- Create the CrimeDatabase database
CREATE DATABASE IF NOT EXISTS CrimeDatabase;
USE CrimeDatabase;

-- Create the aangifte table
CREATE TABLE IF NOT EXISTS aangifte (
    -- add ID Auto increment
    
    Voornaam VARCHAR(255),
    Achternaam VARCHAR(255),
    Anoniem BOOLEAN,
    Adres VARCHAR(255),
    Misdaad VARCHAR(255),
    Omschrijving_verdachte TEXT,
    PRIMARY KEY (Voornaam, Achternaam) -- Adjust the primary key as needed
);
