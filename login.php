<?php
session_start();

$page_title = 'Aanmelden';

@require_once('src/helpers/nav-helpers.php');
@require_once('src/templates/bovenstukhtml.php');
?>

        <form action="src/formhandlers/login.php" method="POST">
            <h1>Inloggen</h1>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" />
            </div>
            <div>
                <label for="wachtwoord">Wachtwoord</label>
                <input type="password" id="wachtwoord" name="password" />
            </div>
            <button type="submit">Inloggen</button>
        </form>
        

<?php
@require_once('src/templates/onderstukhtml.php');