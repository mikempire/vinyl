<?php include ROOT . '/views/layouts/header.php' ?>
<link rel="stylesheet" href="/template/css/cabinet.css">

<section>
    <div class="intros">
    <div class="popup_wrapper" id="intro">
        <div class="popup2">
            <h1>Кабинет пользователя</h1>
            <h3>Привет, <?php echo $user['name'];?></h3>
            <ul>
                <li><a href="/cabinet/edit">Редактировать данные</a></li>
                <li><a href="/user/history">Список покупок</a></li>
            </ul>
        </div>
    </div>
    </div>
</section>


<?php include ROOT.'/views/layouts/footer.php'?>
