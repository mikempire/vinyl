<?php
session_start();
$login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);

$password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);


$password = md5($password."182");
$mysqli = new mysqli('localhost', 'root', '', 'vinylbd');
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT * FROM users WHERE login ='$login' AND password = '$password'");

$user = $result->fetch_assoc();
//var_dump($user);
//die();

if (isset ($user) == 0) {
  echo "Такой пользователь не найден";
  exit;
}

 $_SESSION['user'] = [
        "id" => $user['id'],
        "name" => $user['name'],
        "avatar" => $user['avatar'],
        "login" => $user['login']
    ];

$mysqli->close();

header('Location: ../enter.php');

?>