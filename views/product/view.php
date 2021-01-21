<?php
include ROOT . '/views/layouts/header.php';
include_once ROOT . '/models/Product.php';
?>
    <link rel="stylesheet" href="/template/css/product.css">
    <div class="intros" id="intro">
                    <div class="product_page">
                        <div class="product__photo">
                            <a href="/product/<?php echo $good['id']; ?>" class="shop_link">
                                <img class="product__photo" src="/uploads/goods/<?php echo $good['image']; ?> " alt="">
                            </a>
                        </div>
                        <div class="product__info">
                            <h2><?php echo $good['author']; ?></h2>
                            <h3><?php echo $good['title']; ?> </h3>
                            <h2 class="product__price"><?php echo $good['price']; ?> долларов</h2>
                            <a href="#" data-id="<?php echo $good['id'] ?>" class="button7 add-to-cart">В корзину</a>
                        </div>
                    </div>
    </div>


<?php include ROOT.'/views/layouts/footer.php'?>