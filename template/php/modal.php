<!-- Cart -->
<div class="cart">
   <div class="cart_cont">
        <div class="cart__hat">
            <div class="cart__text">Shopping Cart</div>
            <img src="/img/krest.png" class="close"alt="">
        </div>
        <div class="cart__item">
               <img src="/img/iconCart.png" alt="">
            <div class="cart_text">Корзина пуста как твой желудок</div>
            <button>вернуться к покупкам</button>
        </div>
    </div>
</div>

<!-- MobilMenu -->
<div class="mobMenu" id="mobMenu">
    <div class="mobMenu__had">
         <a href="">
            <img src ="/img/logo4.svg" alt="" class="logo_mob" >
            <img src="/img/ActiveBox-logo.png" alt="" class="logoName_mob">
         </a>
         <img src="/img/krest.png" class="close"alt="">
     </div>

    <ul class="navigation">
        <li class="nav-item"><a href="/thisMonts.php">Записи этого месяца</a></li>
        <li class="nav-item"><a href="/jornal.php">Журнал</a></li>
        <li class="nav-item"><a href="/shop.php">Магазин</a></li>
                <?php
                    if(isset($_SESSION['user']) == ''):
                ?>
        <li class="nav-item"><a href="/enter.php">Войти</a></li>
                <?php else: ?>
        <li class="nav-item"><a href="/enter.php"><?=$_SESSION['user']['name'] ?></a></li>
                        <?php endif;?>
    </ul>
    
    <ul class="navigation navSearch">
        <li class="nav-item navSearch_item">
            <img class="nav__link nav__imgs search__icon search__icon_mob" src="/img/search.svg" alt="">
            <a href="">Поиск</a>
        </li>
    </ul>

    
</div>

<!-- Search -->
<div class="search">
   <img src="/img/krest.png" class="close cloSearch" alt="">
   <div class="searchContainer">
        <form action="">
            <input type="search" placeholder="типа тут поиск" class="searchControl" >
            <p>Энтер искать</p>
        </form>
    </div>
</div>