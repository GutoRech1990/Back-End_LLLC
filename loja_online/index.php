<?php
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM produits");

if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main class="container">
        <h1>Liste de Produits</h1>
        <a href="create.php"><button class="btn btn-success mb-3">Create New</button></a>
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
            <?php foreach ($lista as $produit): ?>
                <tr>
                    <td><?= $produit['id']; ?></td>
                    <td><?= $produit['nom']; ?></td>
                    <td><?= $produit['description']; ?></td>
                    <td><?= $produit['prix']; ?></td>
                    <td><?= $produit['stock']; ?></td>
                    <td>
                        <a href="update.php?id=<?= $produit['id']; ?>"><button class="btn btn-secondary">Update</button></a>
                        <a href="delete.php?id=<?= $produit['id']; ?>"
                            onclick="return confirm('Tem certeza que quer excluir?');"><button
                                class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </table>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>