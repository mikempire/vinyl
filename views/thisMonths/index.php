<?php
include ROOT . '/views/layouts/header.php';
include ROOT . '/config/config.php';

$articles = mysqli_query($connection, "SELECT * FROM articles WHERE articles_id = 1 ORDER BY id DESC LIMIT 3");
?>
<div class="intros" id="intro">
    <div class="tree__magazine magazine" id="tree__magazine">
        <?php
        while ($article = mysqli_fetch_assoc($articles))
        {
            ?>
            <div class="works__item">
                <img class="works__photo" src="/uploads/news/<?php echo $article['image']; ?> " alt="">
                <div class="works__content">
                    <div class="works__content1">
                        <div class="works__title"><?php echo $article['title']; ?></div>
                        <a href="/article/<?php echo $article['id']; ?>" class="works__btn"><?php echo $article['title']; ?></a>
                    </div>
                </div>

            </div>
            <?php
        }
        ?>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer.php' ?>