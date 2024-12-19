<?php
include 'connexion.php';

//********************** */
// Gestion des étudiants
//********************** */
function ajouterEtudiant($nom, $email)
{
    $pdo = obtenirConnexionPDO();
    $stmt = $pdo->prepare('INSERT INTO etudiants (nom, email) VALUES (:nom, :email)');
    return $stmt->execute(['nom' => $nom, 'email' => $email]);
}

function modifierEtudiant($id, $nom, $email)
{
    $pdo = obtenirConnexionPDO();
    $stmt = $pdo->prepare('UPDATE etudiants SET nom = :nom, email = :email WHERE id = :id');
    return $stmt->execute(['nom' => $nom, 'email' => $email, 'id' => $id]);
}

function supprimerEtudiant($id)
{
    $pdo = obtenirConnexionPDO();
    $stmt = $pdo->prepare('DELETE FROM etudiants WHERE id = :id');
    return $stmt->execute(['id' => $id]);
}

function obtenirTousLesEtudiants()
{
    $pdo = obtenirConnexionPDO();
    return $pdo->query('SELECT * FROM etudiants')->fetchAll();
}

function obtenirEtudiantParId($id)
{
    $pdo = obtenirConnexionPDO();
    $stmt = $pdo->prepare('SELECT * FROM etudiants WHERE id = :id');
    $stmt->execute(['id' => $id]);
    return $stmt->fetch();
}

//********************** */
// Gestion des cours
//********************** */
function ajouterCours($titre, $description)
{
    $pdo = obtenirConnexionPDO();
    $stmt = $pdo->prepare('INSERT INTO cours (titre, description) VALUES (:titre, :description)');
    return $stmt->execute(['titre' => $titre, 'description' => $description]);
}

function obtenirTousLesCours()
{
    $pdo = obtenirConnexionPDO();
    return $pdo->query('SELECT * FROM cours')->fetchAll();
}

//********************** */
// Gestion des inscriptions
//********************** */
function inscrireEtudiant($id_etudiant, $id_cours)
{
    $pdo = obtenirConnexionPDO();
    $stmt = $pdo->prepare('INSERT INTO inscriptions (id_etudiant, id_cours) VALUES (:id_etudiant, :id_cours)');
    return $stmt->execute(['id_etudiant' => $id_etudiant, 'id_cours' => $id_cours]);
}

function obtenirCoursParEtudiant($id_etudiant)
{
    $pdo = obtenirConnexionPDO();
    $stmt = $pdo->prepare('SELECT c.* FROM cours c JOIN inscriptions i ON c.id = i.id_cours WHERE i.id_etudiant = :id_etudiant');
    $stmt->execute(['id_etudiant' => $id_etudiant]);
    return $stmt->fetchAll();
}

function obtenirEtudiantsParCours($id_cours)
{
    $pdo = obtenirConnexionPDO();
    $stmt = $pdo->prepare('SELECT e.* FROM etudiants e JOIN inscriptions i ON e.id = i.id_etudiant WHERE i.id_cours = :id_cours');
    $stmt->execute(['id_cours' => $id_cours]);
    return $stmt->fetchAll();
}

function obtenirToutesInscriptions()
{
    $pdo = obtenirConnexionPDO();
    $sql = "SELECT s.nom AS nom_etudiant, c.titre AS titre_cours, e.date_inscription
            FROM inscriptions e
            JOIN etudiants s ON e.id_etudiant = s.id
            JOIN cours c ON e.id_cours = c.id
            ORDER BY c.titre, e.date_inscription";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll();
}
