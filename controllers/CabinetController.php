<?php

class CabinetController
{
    public function actionIndex()
    {
        // получаем идентификатор пользовтеля из сессии
        $userId = User::checkLogged();
        //  получаем информация о пользовтетеле из БД
        $user = User::getUserById($userId);
        $_SESSION['users'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "email" => $user['email']
        ];

        require_once (ROOT. '/views/cabinet/index.php');

        return true;
    }


    public function actionExit()
    {
        unset($_SESSION["user"]);
        header("Location: /");
    }

    public function actionEdit()
    {

    }
}