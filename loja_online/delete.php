<?php

require 'config.php';

$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $sql = $pdo->prepare("DELETE FROM produits WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
}

echo "<script>alert('Apagado com sucesso!'); window.location.href='index.php';</script>";
// header("Location: index.php");