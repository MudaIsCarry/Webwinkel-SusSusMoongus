<?php
session_start();

$page_title = 'Registreren';

@require_once('src/helpers/nav-helpers.php');
@require_once('src/templates/bovenstukhtml.php');
?>

        <form action="src/formhandlers/register.php" method="POST">
            <h1>Registeren</h1>
            <div>
                <label for="voornaam">Voornaam</label>
                <input type="text" id="voornaam" name="firstname" />
            </div>
            <div>
                <label for="achternaam">Achternaam</label>
                <input type="text" id="achternaam" name="lastname" />
            </div>
            <div>
                <label for="tussenvoegsels">Tussenvoegsels</label>
                <input type="text" id="tussenvoegsels" name="prefix" />
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" />
            </div>
            <div>
                <label for="wachtwoord">Wachtwoord</label>
                <input type="password" id="wachtwoord" name="password" />
            </div>
            <button type="submit">Registreren</button>
        </form>

<?php
@require_once('src/templates/onderstukhtml.php');