<?php
// Données de connexion à la base de données 
$db_name = 'clinique_de_vaccination';
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';

$pdo = new PDO("mysql:dbname=" . $db_name . ";host=" . $db_host, $db_user, $db_password);
