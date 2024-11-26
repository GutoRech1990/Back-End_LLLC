<?php
require_once __DIR__ . "/config/database.php";
require_once __DIR__ . "/products/get_all.php";

$products = getAllProducts();

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

    <style>
        .card {
            cursor: pointer;
            transition: transfor 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3) !important;
        }
    </style>

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container mt-5">
            <div class="d-flex justify-content-between align-itens-center mb-4">
                <h1 class="mb-4">Liste de Produits</h1>
                <a href="products_create.php" class="btn btn-primary">+ Nouveau Produit</a>
            </div>
            <div class="row">
                <?php foreach ($products as $product) { ?>
                    <!-- PHP va répeter ce qui se trouve ici pour chaque produit -->
                    <div class="col-md-4 mb-4">
                        <div class="card shadow"
                            onclick="window.location.href='product_details.php?id=<?php echo $product['id'] ?>'">
                            <div class="card-body">
                                <h4 class="text-primary"><?php echo $product["nom"] ?></h4>
                                <p class="card-text"><?php echo $product["description"] ?></p>
                                <p class="card-text"><?php echo $product["prix"] ?> €</p>
                                <p class="card-text"><?php echo $product["stock"] ?></p>
                            </div>
                        </div>
                    </div>

                <?php } ?>
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