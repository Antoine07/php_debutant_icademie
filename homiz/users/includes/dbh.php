<?php
// constantes de l'application
require_once __DIR__ . '/config.php';

try {
    // connexion à la base de données
    $dbh = new PDO(DB_LINK, DB_USER, DB_PASSWORD);
    var_dump($dbh);
// $e est l'objet d'erreur
} catch (PDOException $e) {
    print(sprintf("Error : %s with db : %s", $e->getMessage(), DB_NAME));
    die();
}
