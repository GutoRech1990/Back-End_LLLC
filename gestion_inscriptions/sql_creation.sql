
CREATE TABLE etudiants (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE cours (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(100) NOT NULL,
    description TEXT
);

CREATE TABLE inscriptions (
    id_etudiant INT NOT NULL,
    id_cours INT NOT NULL,
    date_inscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id_etudiant, id_cours),
    FOREIGN KEY (id_etudiant) REFERENCES etudiants(id) ON DELETE CASCADE,
    FOREIGN KEY (id_cours) REFERENCES cours(id) ON DELETE CASCADE
);
