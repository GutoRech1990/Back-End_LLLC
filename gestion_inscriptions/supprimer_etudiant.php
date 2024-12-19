<?php
include 'fonctions.php';

$id = $_GET['id'];
supprimerEtudiant($id);
header('Location: index.php');
?>
