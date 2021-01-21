<?php include ROOT.'/views/layouts/header.php';
include ROOT.'/config/config.php';
?>

<!-- Intro -->
<div class="intro" id="intro">
    <div class="container">
        <div class="intro__inner">
            <h1 class="intro__title ">
                Каждый хороший альбом имеет историю
            </h1>
            <h2 class="intro__subtitle">Проработан и спрессован реальными людьми </h2>
            <div class="intro_batton">
                <a class= "ripple btn" href="shop.php">Перейти в магазин</a>
                <a class= "ripple btn btn--two" href="">Присоединиться к клубу</a>
            </div>
        </div>
    </div>
</div>

<!-- Journey-->
<div class="container">
    <div class="journey__item">
        <img class="journey__photo" src="/template/img/journey/58254a6b98954.jpg" alt="">
        <div class="journey__content">
            <div class="journey__title">Childish Gambino — «Awaken, My Love!</div>
            <div class="journey__text">Под конец прошлого года мир увидел совершенно нового Childish Gambino – его третий альбом «Awaken, My Love!» не имеет практически ничего общего с творческим прошлым Гловера. Те, кто внимательно следили за его творчеством, могли заметить коренной перелом в EP «Kauai» 2014 г., когда на смену четкому пацанскому рэпу во многом пришли мелодичные R&B-напевы. Но «Awaken, My Love!» по-настоящему удивляет – здесь речитатива нет почти совсем, а Дональд демонстрирует несколько различных вокальных техник на фоне аранжировок с сильным влиянием ранних соула и фанка, а также их более поздних психоделических вариаций.</div>

            <a href="jornal.php" class="test__link">Перейти к журналу<span>➤</span></a>
        </div>
    </div>
</div>



<!-- TEST(Members) -->
<div class="container">
    <div class="test__content" id="RecordsofMonth">
        <div class="test__table">
            <h1 class="test__text">Стать участником</h1>
            <p>Получайте эксклюзивные записи ежемесячно всего за 1500 руб./ мес.</p>
            <a href="" class="test__link">Записи этого месяца</a>
        </div>
        <div class="test">
            <div class="test__item">
                <img class="test__photo" src="/template/img/works/works-1.png" alt="" title="The Soft Bulletin">
            </div>

            <div class="test__item">
                <img class="test__photo" src="/template/img/works/works-2.png" alt="" title="Dirty Projectors Bitte Orca">
            </div>

            <div class="test__item">
                <img class="test__photo" src="/template/img/works/works-3.png" alt=""
                     title="N.E.R.D. Fly or Die">
            </div>

            <div class="test__item">
                <img class="test__photo" src="/template/img/works/works-4.png" alt="" title="Hud Dreems">
            </div>

            <div class="test__item">
                <img class="test__photo" src="/template/img/works/works-5.png" alt="" title="Herbie Hancock Mr. Hands">
            </div>

            <div class="test__item">
                <img class="test__photo" src="/template/img/works/works-6.png" alt="" title="Nothing Great About Britain">
            </div>

            <div class="test__item">
                <img class="test__photo" src="/template/img/works/works-7.png" alt="" title="Overgrown">
            </div>

            <div class="test__item">
                <img class="test__photo" src="/template/img/works/works-8.png" alt="" title="Phrenology">
            </div>

            <div class="test__item">
                <img class="test__photo" src="/template/img/works/works-9.png" alt="" title="The Soft Bulletin">
            </div>
            <div class="test__item">
                <img class="test__photo" src="/template/img/works/works-10.png" alt="" title="Go For Your Guns">
            </div>
        </div>
    </div>
</div>

<!--
<select id="select">
  <option value="1"><a href="#shop__new" class="shop__link border">Новое на этой неделе</a> </option>
  <option value="2"><a href="#shop__exck" class="shop__link">Эксклюзив</a></option>
  <option value="3"><a href="#shop__sale" class="shop__link">Распродажа</a></option>
</select>
-->

<!-- Shop -->
<div class="in_shop" id="shop">
    <div class="shop__go">
        <h2>В магазине</h2>
        <a class="test__link" href="shop.php">Перейти в магазин</a>
    </div>
    <ul class="shop__list">
        <li>
            <a href="#shop__new" class="shop__link border">Новое на этой неделе</a>
        </li>
        <li>
            <a href="#shop__exck" class="shop__link">Эксклюзив</a>
        </li>
        <li>
            <a href="#shop__sale" class="shop__link">Распродажа</a>
        </li>

        <!-- shop__new -->
        <div class="shop__new shop__block show" id="shop__new">
            <?php foreach ($goods1 as $good): ?>
                <div class="shop" id="shop">
                    <div class="shop__item">
                        <img class="shop__photo" src="/uploads/goods/<?php echo $good['image']; ?> " alt="">
                        <a href="/product/<?php echo $good['id']; ?>" class="link">
                            <h2><?php echo $good['author']; ?></h2>
                            <h3><?php echo $good['title']; ?> </h3>
                            <h2><?php echo $good['price']; ?> долларов</h2>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- shop__exck -->
        <div class="shop__exck shop__block" id="shop__exck">
            <?php foreach ($goods2 as $good): ?>
                <div class="shop" id="shop">
                    <div class="shop__item">
                        <img class="shop__photo" src="/uploads/goods/<?php echo $good['image']; ?> " alt="">
                        <a href="/product/<?php echo $good['id']; ?>" class="link">
                            <h2><?php echo $good['author']; ?></h2>
                            <h3><?php echo $good['title']; ?> </h3>
                            <h2><?php echo $good['price']; ?> долларов</h2>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- shop__sale -->
        <?php
        $goods = mysqli_query($connection, "SELECT * FROM goods WHERE category_id = 3 ORDER BY id DESC LIMIT 4");
        ?>
        <div class="shop__sale shop__block" id="shop__sale">
            <?php
            while ($good = mysqli_fetch_assoc($goods))
            {
                ?>
                <div class="shop" id="shop">
                    <div class="shop__item">
                        <img class="shop__photo" src="/uploads/goods/<?php echo $good['image']; ?> " alt="">
                        <a href="/product/<?php echo $good['id']; ?>" class="link">
                            <h2><?php echo $good['author']; ?></h2>
                            <h3><?php echo $good['title']; ?> </h3>
                            <h2><?php echo $good['price']; ?> долларов</h2>
                        </a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </ul>
</div>


<!-- Magazine" -->

<div class="in_magazine">
    <div class="magazine__go">
        <h2>В журнале</h2>
        <a class="test__link" href="">Перейти к журналу</a>
    </div>
    <ul>
        <li class="border"> <a href="#one__magazine" class="magazine__link border">Новости</a> </li>

        <li class="border"> <a href="#two__magazine" class="magazine__link">Интервью</a> </li>

        <li class="border"> <a href="#tree__magazine" class="magazine__link">Записи этого месяца</a> </li>
    </ul>
    <?php
    $articles = mysqli_query($connection, "SELECT * FROM articles WHERE articles_id = 3 ORDER BY id DESC LIMIT 3");
    ?>

    <div class="one__magazine magazine__block show" id="one__magazine">
        <?php
        while ($article = mysqli_fetch_assoc($articles))
        {
            ?>

            <div class="works__item">
                <img class="works__photo" src="/uploads/news/<?php echo $article['image']; ?> " alt="">
                <div class="works__content">
                    <div class="works__content1">
                        <div class="works__title"><?php echo $article['title']; ?></div>
                        <a href="" class="works__btn"><?php echo $article['title']; ?></a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>

    <?php
    $articles = mysqli_query($connection, "SELECT * FROM articles WHERE articles_id = 2 ORDER BY id DESC LIMIT 3");
    ?>


    <div class="two__magazine magazine__block" id="two__magazine">
        <?php
        while ($article = mysqli_fetch_assoc($articles))
        {
            ?>

            <div class="works__item">
                <img class="works__photo" src="/uploads/news/<?php echo $article['image']; ?> " alt="">
                <div class="works__content">
                    <div class="works__content1">
                        <div class="works__title"><?php echo $article['title']; ?></div>
                        <a href="" class="works__btn"><?php echo $article['title']; ?></a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>

    <?php
    $articles = mysqli_query($connection, "SELECT * FROM articles WHERE articles_id = 1 ORDER BY id DESC LIMIT 3");
    ?>

    <div class="tree__magazine magazine__block" id="tree__magazine">
        <?php
        while ($article = mysqli_fetch_assoc($articles))
        {
            ?>
            <div class="works__item">
                <img class="works__photo" src="/uploads/news/<?php echo $article['image']; ?> " alt="">
                <div class="works__content">
                    <div class="works__content1">
                        <div class="works__title"><?php echo $article['title']; ?></div>
                        <a href="" class="works__btn"><?php echo $article['title']; ?></a>
                    </div>
                </div>

            </div>
            <?php
        }
        ?>
    </div>

</div>



<!-- Insagram -->
<div class="container">
    <div class="insagram__inner">
        <div class="instagram__block">
            <img src="/template/img/instagram/inst1.jpg" alt="">
        </div>
        <div class="instagram__block instagram__block--text">
            <h2>Узнай нас.</h2>
            <div class="inst__text">Следуйте за эксклюзивными предложениями и поглощениями художников. Кроме того, узнавайте первыми о новых виниловых каплях и играйте вместе с нашим ежемесячным #GuessMePlease.</div>
            <a href="https://www.instagram.com/vinylmeplease/" class="test__link inst">Присоединяйтесь к нам </a>
        </div>
        <div class="instagram__block">
            <img src="/template/img/instagram/inst2.jpg" alt="">
        </div>
        <div class="instagram__block">
            <img src="/template/img/instagram/inst3.jpg" alt="">
        </div>
        <div class="instagram__block">
            <img src="/template/img/instagram/inst4.jpg" alt="">
        </div>
        <div class="instagram__block">
            <img src="/template/img/instagram/inst5.jpg" alt="">
        </div>
    </div>
    <h2 class="inst__follow">follow <a href="https://www.instagram.com/vinylmeplease/">@mikesvinyl</a> </h2>
</div>

<?php include ROOT.'/views/layouts/footer.php'?>