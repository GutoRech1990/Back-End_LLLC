<?php

require_once __DIR__ . "/config/database.php";
require_once __DIR__ . "/products/get-one.php";

// Vérifier si un ID est fourni dans GET
if (!isset($_GET["id"])) {
    header("Location: index.php");
}
// Récuperer le produit correpondant 
$product = getProductById($_GET["id"]);


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
    <main>
        <div class="container mt-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                    <li class="breadcrumb-item"><?php echo $product["nom"] ?></li>
                </ol>
            </nav>

            <div class="card shadow">
                <div class="card-body">
                    <h1 class="card-title text-primary"><?php echo $product["nom"] ?></h1>
                    <p class="card-text"><?php echo $product["description"] ?></p>
                    <a href="products/update.php?id=<?php echo $product['id'] ?>" class="btn btn-warning">Update</a>
                    <a href="products/delete.php?id=<?php echo $product['id'] ?>" class="btn btn-danger"
                        onclick="return confirm('Do you really want to delete this product?')">Supprimer</a>
                </div>
            </div>
        </div>
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