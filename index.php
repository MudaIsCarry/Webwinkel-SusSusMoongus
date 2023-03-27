<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoofdpagina | Nostalgaming</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <section class="nav-branding">
            <img src="img/logo4.png" alt="Webshop" />
            <h1>Witte Kip</h1>
        </section>
        <section class="nav-items">
            <a href="login.php">Inloggen</a><br />
            <a href="register.php">Registeren</a>
        </section>
    </nav>

    <main>
        <h1>Startpagina</h1>
        <h2><?= $_SESSION['fullname'] ?></h2>
        <h2>ID: <?= $_SESSION['user_id'] ?></h2>
    </main>
</body>
</html>