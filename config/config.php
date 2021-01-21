<?php

$config = array(
    'server' => 'localhost',
    'username' => 'root',
    'password' => '',
    'name' => 'vinylbd'
);

$connection = mysqli_connect(
    $config['server'],
    $config['username'],
    $config['password'],
    $config['name']
);
$connection->set_charset("utf8");

?>
