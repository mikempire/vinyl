<?php
include ROOT . '/views/layouts/header.php';
include ROOT . '/config/config.php';

//$goods = mysqli_query($connection, "SELECT * FROM goods LIMIT 8");
?>
    <link rel="stylesheet" href="/template/css/shop.css">
<div class="intros" id="intro">
    <h1 class="goods_shop">Наши товары:</h1>
    <div class="shop_page">

<!--        --><?php
//        while ($good = mysqli_fetch_assoc($goods))
//        {
//        ?>
            <?php foreach ($goods as $good): ?>
                <div class="shop" id="shop">
                    <div class="shop__item">
                        <a href="/product/<?php echo $good['id']; ?>" class="shop_link">
                            <img class="shop__photo" src="/uploads/goods/<?php echo $good['image']; ?> " alt="">
                            <h2><?php echo $good['author']; ?></h2>
                            <h3><?php echo $good['title']; ?> </h3>
                        </a>
                        <h2 class="good_h2"><?php echo $good['price']; ?> долларов</h2>
                        <a href="#" data-id="<?php echo $good['id'] ?>" class="button7 add-to-cart">В корзину</a>
                    </div>
                </div>
            <?php endforeach; ?>
<!--            --><?php
//        }
//        ?>

    </div>
</div>

<?php include ROOT.'/views/layouts/footer.php'?>