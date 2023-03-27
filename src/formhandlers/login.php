<?php
session_start();

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

$email = htmlentities( $_POST['email'] );
$password = $_POST['password'];

$sql = "SELECT * FROM `users` WHERE `users`.`email` = :email";
$placeholders = [
    ':email' => $email
];

$db_statement = $db_connection->prepare($sql);
$db_statement->execute($placeholders);
$user = $db_statement->fetch(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($user);
echo '</pre>';

if(password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['fullname'] = "{$user['firstname']} {$user['prefix']} {$user['lastname'] }";
    header('location: ../../index.php');
    exit();
} 

header('location: ../../login.php');
exit();