<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $page_title ?> | Webshop Het Gewitte Kippetje</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <section class="nav-branding">
            <a href="index.php">
                <img src="img/logo4.png" alt="Webshop" />
                <h1>SusSusMoegus</h1>
            </a>
        </section>
        <section class="nav-items">
            <a href="index.php" class="<?= isActiveNavItem('index') ? 'nav-items__active' : '' ?>"><i class="fa-solid fa-house"></i><span class="nav-item__text">Huisie</span></a>
            <a href="login.php" class="<?= isActiveNavItem('login') ? 'nav-items__active' : '' ?>"><i class="fa-solid fa-arrow-right-to-bracket"></i><span class="nav-item__text">Inloguh</span></a>
            <a href="register.php" class="<?= isActiveNavItem('register') ? 'nav-items__active' : '' ?>"><i class="fa-regular fa-address-card"></i><span class="nav-item__text">Registreruh</span></a>

            <a href="src/auth/logout.php" class="<?= isActiveNavItem('logout') ? 'nav-items__active' : '' ?>"><i class="fa-solid fa-arrow-right-from-bracket"></i><span class="nav-item__text">Afmelduh</span></a>
            <a href=""><i class="fa-solid fa-cart-shopping" class="<?= isActiveNavItem('cart') ? 'nav-items__active' : '' ?>"></i><span class="nav-item__text">Winkelwagentjuh</span></a>
        </section>
    </nav>

        
<div class="navbar2">
    <div class="dropdown">
        <button class="dropbtn">
            <h2>Categorieën 2</h2>
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <a href="#"><h3>Link 1</h3></a>
        <a href="#"><h3>Link 2</h3></a>
        <a href="#"><h3>Link 3</h3></a>
        </div>
    </div>

    <div class="dropdown">
        <button class="dropbtn">
            <h2>Categorieën </h2>
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <a href="#"><h3>Link 1</h3></a>
        <a href="#"><h3>Link 2</h3></a>
        <a href="#"><h3>Link 3</h3></a>
        </div>
    </div>

    <div class="dropdown">
        <button class="dropbtn">
            <h2>Aanbiedingen</h2> 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <a href="#"><h3>Link 1</h3></a>
        <a href="#"><h3>Link 2</h3></a>
        <a href="#"><h3>Link 3</h3></a>
        </div>
    </div> 
</div>

<main>