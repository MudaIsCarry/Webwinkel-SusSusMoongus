<?php

if($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Geen toegang');
}

// Database credentials
$dbHost = '127.0.0.1'; 
$dbName = 'wittekip41b';
$dbUser = 'root';
$dbPass = 'root';

// Globale variabelen voor het werken met de database
$db_connection = null;
$db_statement = null;

// Connectie maken met de database
try {
    $db_connection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
} catch(PDOException $error) {
    header('location: ../../register.php');
    exit(); // die()
}   
echo 'Gelukt';