<?php
include 'fonctions.php';

$etudiants = obtenirTousLesEtudiants();
$cours = obtenirTousLesCours();
$enrollments = obtenirToutesInscriptions();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Gestion des Étudiants et des Cours</title>
</head>

<body>
    <div class="container">
        <h1 class="my-4">Gestion des Étudiants et des Cours</h1>

        <!-- Section Étudiants -->
        <div class="mb-5">
            <h2>Étudiants</h2>
            <a href="ajouter_etudiant.php" class="btn btn-primary mb-3">Ajouter un Étudiant</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($etudiants as $etudiant): ?>
                    <tr>
                        <td><?= $etudiant['id'] ?></td>
                        <td><?= htmlspecialchars($etudiant['nom']) ?></td>
                        <td><?= htmlspecialchars($etudiant['email']) ?></td>
                        <td>
                            <a href="modifier_etudiant.php?id=<?= $etudiant['id'] ?>"
                                class="btn btn-warning btn-sm">Modifier</a>
                            <a href="supprimer_etudiant.php?id=<?= $etudiant['id'] ?>"
                                class="btn btn-danger btn-sm">Supprimer</a>
                            <a href="inscrire.php?id_etudiant=<?= $etudiant['id'] ?>"
                                class="btn btn-info btn-sm">Inscrire à un Cours</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Section Cours -->
        <div class="mb-5">
            <h2>Cours</h2>
            <a href="ajouter_cours.php" class="btn btn-primary mb-3">Ajouter un Cours</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cours as $coursItem): ?>
                    <tr>
                        <td><?= $coursItem['id'] ?></td>
                        <td><?= htmlspecialchars($coursItem['titre']) ?></td>
                        <td><?= htmlspecialchars($coursItem['description']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Section Inscription -->
        <div>
            <h2>Inscriptions</h2>
            <a href="inscrire.php" class="btn btn-primary mb-3">Inscrire un Étudiant à un Cours</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Étudiant</th>
                        <th>Cours</th>
                        <th>Date d'inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($enrollments as $enrollment): ?>
                    <tr>
                        <td><?= htmlspecialchars($enrollment['nom_etudiant']) ?></td>
                        <td><?= htmlspecialchars($enrollment['titre_cours']) ?></td>
                        <td><?= $enrollment['date_inscription'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>