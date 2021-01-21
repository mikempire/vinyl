<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates|Raleway:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/template/css/style.css">
    <link href="/template/css/font-awesome.min.css" rel="stylesheet">

    <script src="/template/js/jquery-3.3.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Магазин винила</title>


</head>
<body style='overflow-x:hidden;'>

<div class="overlay"></div>
<header class="header" id="header">
    <div class="container">
        <div class="header__inner">
            <a href="/">
                <img src ="/template/img/logo4.svg" alt="" class="logo" >
                <img src="/template/img/ActiveBox-logo.png" alt="">
            </a>
                <img class="nav_cart nav__imgs cart__icon" src="/template/img/cart.png" alt="">
            <span id="cart-count" class="navbar-main-mobil nav_cart"><?php echo Cart::countItem(); ?></span>
            <nav class="nav" id ="nav">
                <a class="nav__link" href="/thisMonths" data-scroll="#RecordsofMonth" >Записи этого месяца</a>
                <a class="nav__link" href="/journal" data-scroll="#works">Журнал</a>
                <a class="nav__link" href="/shop" data-scroll="#shop">Магазин</a>
                <?php
                if(empty($_SESSION["user"])):
                    ?>
                    <a class="nav__link" href="/enter" data-scroll="#download">Войти</a>
                <?php else: ?>
                    <a class="nav__link" href="/cabinet/" data-scroll="#download"><?php echo $_SESSION['users']['name'];?></a>
                    <a class="nav__link" href="/cabinet/exit" data-scroll="#download">Выйти</a>
                <?php endif;?>
                <img class="nav__link nav__imgs search__icon" src="/template/img/search.svg" alt="">
                <a href="/cart"><img class="nav__link nav__imgs cart__icon" src="/template/img/cart.png" alt="">
                    <span id="cart-count" class="navbar-main"><?php echo Cart::countItem(); ?></span>
                </a>
            </nav>

            <button class="burger" type="button" id="navToggle">
                <span class="burger__item">Menu</span>
            </button>
        </div>
    </div>
</header>

<!-- MobilMenu -->
<div class="mobMenu" id="mobMenu">
    <div class="mobMenu__had">
        <a href="">
            <img src ="/template/img/logo4.svg" alt="" class="logo_mob" >
            <img src="/template/img/ActiveBox-logo.png" alt="" class="logoName_mob">
        </a>
        <img src="/template/img/krest.png" class="close"alt="">
    </div>

    <ul class="navigation">
        <li class="nav-item"><a href="/thisMonths">Записи этого месяца</a></li>
        <li class="nav-item"><a href="/journal">Журнал</a></li>
        <li class="nav-item"><a href="/shop">Магазин</a></li>
        <?php
        if(empty($_SESSION["user"])):
            ?>
            <li class="nav-item"><a href="/enter">Войти</a></li>
        <?php else: ?>
            <li class="nav-item"> <a href="/cabinet/" data-scroll="#download"><?php echo $_SESSION['users']['name'];?></li>
            <li class="nav-item"> <a href="/cabinet/exit" data-scroll="#download">Выйти</li>
        <?php endif;?>
    </ul>

    <ul class="navigation navSearch">
        <li class="nav-item navSearch_item">
            <img class="nav__link nav__imgs search__icon search__icon_mob" src="/template/img/search.svg" alt="">
            <a href="">Поиск</a>
        </li>
    </ul>


</div>

<!-- Search -->
<div class="search">
    <img src="/template/img/krest.png" class="close cloSearch" alt="">
    <div class="searchContainer">
        <form action="">
            <input type="search" placeholder="типа тут поиск" class="searchControl" id="searchControl" >
            <p>Начните вводить текст</p>
        </form>
        <div id="result" class="search_result"></div>
    </div>

</div>
