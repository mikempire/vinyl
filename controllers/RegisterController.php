<?php

class RegisterController
{
    public static function actionIndex()
    {
        $name = '';
        $email = '';
        $password = '';
        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2х символов';
            }

            if (!User::checkEmail($email)) {
                $errors[] = 'Email не подходит';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должно быть короче 6 символов';
            }

            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой Email уже сущесвует';
            }

            if ($errors == false) {
                $result = User::register($name, $email, $password);
            }
        }

        require_once(ROOT . '/views/register/index.php');

        return true;
    }
}