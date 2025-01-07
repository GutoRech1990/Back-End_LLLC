CREATE TABLE patient (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    age INT(11) NOT NULL,
    adresse VARCHAR(100) NOT NULL,
    date_naissance DATE NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE vaccin (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    fournisseur VARCHAR(100) NOT NULL,
    fabricant VARCHAR(100) NOT NULL,
    prix DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE vaccination (
    id INT(11) NOT NULL AUTO_INCREMENT,
    id_patient INT(11) NOT NULL,
    id_vaccin INT(11) NOT NULL,
    date_vaccination TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (id_patient) REFERENCES patient(id),
    FOREIGN KEY (id_vaccin) REFERENCES vaccin(id)
);