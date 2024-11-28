<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/get-one.php';
function updateProduct($id, $data)
{
    try {
        $pdo = getPDOConnection();
        $sql = "UPDATE produits
SET nom = :nom, description = :description, prix = :prix, stock = :stock WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            'id' => $id,
            'nom' => $data['nom'],
            'description' => $data['description'],
            'prix' => $data['prix'],
            'stock' => $data['stock']
        ]);
    } catch (PDOException $e) {
        die("Erreur lors de la mise à jour du produit : " . $e->getMessage());
    }
}
// Récupération du produit existant
if (!isset($_GET['id'])) {
    header('Location: ../index.php');
    exit;
}
$product = getProductById($_GET['id']);
if (!$product) {
    header('Location: ../index.php');
    exit;
}
// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updatedProduct = [
        'nom' => $_POST['nom'] ?? '',
        'description' => $_POST['description'] ?? '',
        'prix' => $_POST['prix'] ?? 0,
        'stock' => $_POST['stock'] ?? 0
    ];
    if (updateProduct($_GET['id'], $updatedProduct)) {
        header('Location: ../index.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Modifier un Produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Modifier un Produit</h1>
        <form method="POST" class="mt-4">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom"
                    value="<?= htmlspecialchars($product['nom']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description"
                    rows="3"><?= htmlspecialchars($product['description']) ?></textarea>
            </div>
            <div class="mb-3">
                <label for="prix" class="form-label">Prix</label>
                <input type="number" step="0.01" class="form-control" id="prix" name="prix"
                    value="<?= htmlspecialchars($product['prix']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock"
                    value="<?= htmlspecialchars($product['stock']) ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour le
                produit</button>
        </form>
    </div>
</body>

</html>