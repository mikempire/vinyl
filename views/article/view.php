<?php
include ROOT . '/views/layouts/header.php';
?>
    <div class="intros" id="intro">
        <div class="works__item">
                        <img class="works__photo" src="/uploads/news/<?php echo $article['image']; ?> " alt="">
                        <div class="works__content">
                            <div class="works__content1">
                                <div class="works__title"><?php echo $article['title']; ?></div>
        <a href="/article/<?php echo $article['id']; ?>" class="works__btn"><?php echo $article['title']; ?></a>
        </div>
        </div>

        </div>
    </div>
<?php include ROOT . '/views/layouts/footer.php' ?>