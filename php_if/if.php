<?php

// variable état serveur
// $serverStatus = "OK";
include "status.php";

// Si serveurstatus est identique a ok
if ($serverStatus === "OK") {
    echo "Bienvenue sur notre Website!";
} elseif ($serverStatus === "maintenance") {
    echo "Maintenance en cours...";
} else {
    echo "ERROR";
} 

?>