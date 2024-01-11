-- Create a database named 'aangiftes'
 CREATE DATABASE aangiftes;

-- Connect to the 'aangiftes' database
\c aangiftes;

-- Create a table to store crime information

-- Create the aangifte table
CREATE TABLE aangifte (
    Naam VARCHAR(255),
    Email VARCHAR(255),
    Anoniem BOOLEAN,
    Locatie VARCHAR(255),
    Misdaad VARCHAR(255),
    Omschrijving_verdachte VARCHAR(255)
);


-- Optional: Add an index on the date column for faster queries
CREATE INDEX idx_date ON crime_table (date);
