<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren | Webshop Het Gewitte Kippetje</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
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
    </main>
</body>
</html>