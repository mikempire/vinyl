<?php
include ROOT . '/views/layouts/header.php';

?>
    <link rel="stylesheet" href="/template/css/enter.css">
<div class="intros" id="intro">
    <div class="popup_wrapper" id="popupWindow">
<!--        --><?php
//        if(isset($_SESSION['user']) == ''):
//            ?>
            <div class="popup2">

                <div class="close_button" id="closeButton"></div>
                <form action="#" method="post" class="signin_form">
                    <lable>Логин:</lable>
                    <input type="text" name="email" placeholder="Введите логин" value="<?php echo $email ;?>">
                    <lable>Пароль:</lable>
                    <input type="password" name="password" placeholder="Введите пароль">
                    <button type="submit" class="login-btn" name="submit">Войти</button>
                    <a href="/register">Зарегистроваться</a>
                    <?php if (isset($errors) and is_array($errors)) : ?>
                        <ul class="error">
                            <?php foreach ($errors as $error): ?>
                                <li>- <?php echo $error;?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
<!--                    <p class="msg none">Проверьте правильность полей</p>-->
                </form>
            </div>

<!--        --><?php //else: ?>
<!--            <div class="popup4">-->
<!--                <h1>ЙО это твой личный кабинет</h1>-->
<!--                <img src="--><?//= $_SESSION['user'] ?><!--" alt="" style="width: 500px;">-->
<!--            </div>-->
<!--        --><?php //endif;?>
    </div>
</div>
<?php
include ROOT . '/views/layouts/footer.php';
?>