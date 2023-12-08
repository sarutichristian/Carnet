
CREATE TABLE IF NOT EXISTS proprietaire(
    -- identifiantLocataire INT NOT NULL AUTO_INCREMENT;
    numProprietaire INT NOT NULL,
    nomProprietaire VARCHAR (120) NOT NULL,
    prenomProprietaire VARCHAR (120) NOT NULL,
    adresse1Proprietaire VARCHAR (120) NOT NULL,
    -- photo VARCHAR (150) NOT NULL,
    numTel1Proprietaire INT NOT NULL,
    emailProprietaire VARCHAR(150) NOT NULL,
    PRIMARY KEY (numProprietaire)
);






