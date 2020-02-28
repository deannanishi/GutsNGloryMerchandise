<?php
// CONNECT TO DB
// data source name
$dsn = "mysql:host=localhost;dbname=nish0018_php_final";
$un = "nish0018";
$pw = "Evan0neill";

// PDO stands for PHP DATA OBJECT
try {
    $pdo = new PDO($dsn, $un, $pw);
} catch (PDOException $err) {
    $connectionError = $err->getMessage();
}
//print_r($pdo);
?>