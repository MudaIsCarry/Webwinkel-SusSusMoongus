<?php 

if($_SERVER['REQUEST_METHOD'] != 'POST' &&
    $_SERVER) {
    die('fuck off');
}

$voornaam = htmlentities($_POST['firstname']);
echo $voornaam

echo '<pre>';
print_r($_SERVER)
print_r($_POST)