<?php
require 'config.php';

$produit = [];
$id = filter_input(INPUT_GET, "id");

if ($id) {
    $sql = $pdo->prepare("SELECT * FROM produits WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $produit = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header("Location: index.php");
        exit;
    }
} else {
    header("Location: index.php");
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
        <h1>Edit produit</h1>
        <form action="update_action.php" method="post">
            <input type="hidden" name="id" value="<?= $produit['id']; ?>">
            <label for="" class="form-control"> Nom...........:
                <input type="text" name="nom" value="<?= $produit['nom']; ?>" id="">
            </label>
            <label for="" class="form-control"> Description:
                <input type="text" name="description" value="<?= $produit['description']; ?>" id="">
            </label>
            <label for="" class="form-control"> Prix............:
                <input type="text" name="prix" value="<?= $produit['prix']; ?>" id="">
            </label>
            <label for="" class="form-control"> Stock.........:
                <input type="text" name="stock" value="<?= $produit['stock']; ?>" id="">
            </label>
            <input class="btn btn-primary mt-3" type="submit" value="Update">
        </form>
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