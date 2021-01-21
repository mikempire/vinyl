<?php
include ROOT . '/views/layouts/header.php';
include ROOT.'/config/config.php';
?>
    <link rel="stylesheet" href="/template/css/journal.css">
<div class="intros" id="intro"></div>

<div class="container2">
    <div class="j_center">
          <div class="jcont">
              <a class="j_btn">Кнопка</a>
            <h1 class="j_title">Why We Picked The White Stripes’ ‘De Stijl’ As Our Essentials Record This Month</h1>
        </div>
    </div>
</div>

<?php
$goods = mysqli_query($connection, "SELECT * FROM goods ORDER BY id ASC LIMIT 4");
?>

<div class="container2">
    <div class="j_content">
        <div class="content_block">
<!--            <h4>Наши товары</h4>-->
                <div class="j_vinil_2">
                    <?php
                        while ($good = mysqli_fetch_assoc($goods))
                        {
                            ?>
                            <a href="/product/<?php echo $good['id']; ?>" class="journal__link">
                            <img src="/uploads/goods/<?php echo $good['image']; ?>" alt="" class="goods">
                            <p><?php echo $good['author']; ?>-</p>
                            <p><?php echo $good['title']; ?></p>
                     </a>
                                <?php
                        }
                                ?>
                </div>
        </div>

        <div class="content_block2">
            <a class="j_btn">Кнопка</a>
        </div>
    </div>
</div>

<?php
$goods = mysqli_query($connection, "SELECT * FROM goods ORDER BY id DESC LIMIT 4");
?>

<div class="container2">
    <div class="j_content">
        <div class="content_block2">
            <a class="j_btn">Кнопка</a>
        </div>
        <div class="content_block">
            <!--            <h4>Наши товары</h4>-->
            <div class="j_vinil_2">
                    <?php
                    while ($good = mysqli_fetch_assoc($goods))
                    {
                        ?>
                        <a href="/product/<?php echo $good['id']; ?>" class="journal__link">
                            <img src="/uploads/goods/<?php echo $good['image']; ?>" alt="" class="goods">
                            <p><?php echo $good['author']; ?>-</p>
                            <p><?php echo $good['title']; ?></p>
                        </a>
                        <?php
                    }
                    ?>
               </div>
            </div>
        </div>
    </div>
</div>
<?php
include ROOT . '/views/layouts/footer.php';
?>