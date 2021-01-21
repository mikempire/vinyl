<?php

class EnterController
{

    public static function actionIndex()
    {
        $email = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            //Валидация полей
            if (!User::checkEmail($email)) {
                $errors[] = 'Email не подходит';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должно быть короче 6 символов';
            }

            //Проверяем существование пользовтеля

            $userId = User::checkUserDate($email, $password);

            if ($userId == false) {
                $errors[] = 'Не правильные данные для входа на сайт';
            } else {
                User::auth($userId);

                header("Location: /cabinet/");
            }

        }

        require_once(ROOT . '/views/enter/index.php');
        return true;
    }
}