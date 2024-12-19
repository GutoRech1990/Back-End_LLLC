<?php
include 'fonctions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_etudiant = $_POST['id_etudiant'];
    $id_cours = $_POST['id_cours'];
    inscrireEtudiant($id_etudiant, $id_cours);
    header('Location: index.php');
}
$etudiants = obtenirTousLesEtudiants();
$cours = obtenirTousLesCours();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Inscrire un Étudiant</title>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Inscrire un Étudiant</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="id_etudiant" class="form-label">Étudiant</label>
                <select class="form-control" id="id_etudiant" name="id_etudiant">
                    <?php foreach ($etudiants as $etudiant): ?>
                        <option value="<?= $etudiant['id'] ?>"><?= htmlspecialchars($etudiant['nom']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_cours" class="form-label">Cours</label>
                <select class="form-control" id="id_cours" name="id_cours">
                    <?php foreach ($cours as $coursItem): ?>
                        <option value="<?= $coursItem['id'] ?>"><?= htmlspecialchars($coursItem['titre']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Inscrire</button>
        </form>
    </div>
</body>
</html>
