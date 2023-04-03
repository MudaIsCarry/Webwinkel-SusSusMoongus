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

// Connectie is geslaagd, dus nu kunnen we de gegevens vastleggen in de database
$firstname = htmlentities( $_POST['firstname'] );
$lastname = htmlentities( $_POST['lastname'] );
$prefix = htmlentities( $_POST['prefix'] );
$email = htmlentities( $_POST['email'] );
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO `users`(`firstname`, `lastname`, `prefix`, `email`, `password`)
        VALUES(:firstname, :lastname, :prefix, :email, :password)";
$placeholders = [
    ':firstname' => $firstname,
    ':lastname' => $lastname,
    ':prefix' => $prefix,
    ':email' => $email,
    ':password' => $password
];

$db_statement = $db_connection->prepare($sql);
$db_statement->execute($placeholders);

// Na het succesvol vastleggen in de database laten we de gebruiker
// terugkeren naar het login scherm
header('location: ../../login.php');
exit();
