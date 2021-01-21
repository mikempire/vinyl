<header class="header" id="header">
        <div class="container">
            <div class="header__inner">
               <a href="/index.php">
               <img src ="/img/logo4.svg" alt="" class="logo" >
                <img src="/img/ActiveBox-logo.png" alt="">
                </a>
                <img class="nav_cart nav__imgs cart__icon" src="/img/cart.png" alt="">
                     <nav class="nav" id ="nav">
                            <a class="nav__link" href="thisMonts.php" data-scroll="#RecordsofMonth" >Записи этого месяца</a>
                            <a class="nav__link" href="jornal.php" data-scroll="#works">Журнал</a>
                            <a class="nav__link" href="shop.php" data-scroll="#shop">Магазин</a>
                        <?php
                        if(isset($_SESSION['user']) == ''):
                        ?>
                            <a class="nav__link" href="/enter.php" data-scroll="#download">Войти</a>
                        <?php else: ?>
                           <a class="nav__link" href="/enter.php" data-scroll="#download"><?=$_SESSION['user']['name'] ?></a>
                        <?php endif;?>
                            <img class="nav__link nav__imgs search__icon" src="/img/search.svg" alt="">
                            <img class="nav__link nav__imgs cart__icon" src="/img/cart.png" alt="">
                    </nav>

                    <button class="burger" type="button" id="navToggle">
                        <span class="burger__item">Menu</span>
                    </button>
            </div>
        </div>
</header>




<?php
    include("modal.php")
?>
