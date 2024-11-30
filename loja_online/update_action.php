<?php
require 'config.php';

// Receber os dados do POST
$id = filter_input(INPUT_POST, "id");
$nom = filter_input(INPUT_POST, 'nom');
$description = filter_input(INPUT_POST, 'description');
$prix = filter_input(INPUT_POST, 'prix');
$stock = filter_input(INPUT_POST, 'stock');


if ($id && $nom && $description && $prix && $stock) {
    try {
        $sql = $pdo->prepare("UPDATE produits SET nom = :nom, description = :description, prix = :prix, stock = :stock WHERE id = :id");
        $sql->bindValue(':nom', $nom);
        $sql->bindValue(':description', $description);
        $sql->bindValue(':prix', $prix);
        $sql->bindValue(':stock', $stock);
        $sql->bindValue(':id', $id);

        if ($sql->execute()) {
            echo "<script>alert('Atualizado com sucesso!'); window.location.href='index.php';</script>";
            // header("Location: index.php");
            exit;
        } else {
            echo "Erro ao atualizar o registro";
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
} else {
    header("Location: index.php");
    exit;
}
