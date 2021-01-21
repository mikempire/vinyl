<?php
include ROOT . '/views/layouts/header.php';
?>
    <link rel="stylesheet" href="/template/css/enter.css">
    <div class="intros" id="intro">
        <div class="popup_wrapper" id="popupWindow">
            <?php if ($result): ?>
                <p>Вы зарегистрированы!</p>
            <?php else: ?>
                        <div class="popup3">
                            <form action="#" method="post" enctype="multipart/form-data" class="reg_form">
                                <lable>Имя</lable>
                                <input type="text" name="name" placeholder="Введите имя" value="<?php echo $name ;?>">
                                <lable>Почта:</lable>
                                <input type="text" name="email" placeholder="Введите свою эл. почту" value="<?php echo $email ;?>">
            <!--                    <lable>Изображение профиля</lable>-->
            <!--                    <input type="file"  name="avatar" >-->
                                <lable>Пароль:</lable>
                                <input type="password" name="password" placeholder="Введите пароль">
                                <button type="submit" name="submit">Зарегистрироваться</button>
                            </form>
                            <?php if (isset($errors) and is_array($errors)) : ?>
                                <ul class="error">
                                    <?php foreach ($errors as $error): ?>
                                        <li>- <?php echo $error;?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
            <?php endif; ?>
        </div>
    </div>

<?php
include ROOT . '/views/layouts/footer.php';
?>