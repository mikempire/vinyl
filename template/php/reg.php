<?php
session_start();
$login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);

$name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);

$password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);

$password = md5($password."182");


$mysqli = new mysqli('localhost', 'root', '', 'vinylbd');
$mysqli->set_charset("utf8");

 $path = 'uploads/avatar/' . time() . $_FILES['avatar']['name'];
//        if (move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
//            $_SESSION['message'] = 'ошибка при загрузке сообщения';
//            header('Location: ../register.php');
//        }

$mysqli->query("INSERT INTO users (login, name, password, avatar) VALUES ('$login', '$name', '$password', '$path')") ;

$mysqli->close();

header('Location: /enter.php');

?>