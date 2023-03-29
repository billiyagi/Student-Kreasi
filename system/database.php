<?php

$dbUser = 'billy';
$dbPassword = 'root';
$dsn = 'mysql:host=localhost;dbname=billypw';

try {
    $dbh = new PDO($dsn, $dbUser, $dbPassword);
} catch (PDOException $e) {
    echo $e->getMessage();
    echo $e->getTrace();
    die();
}
