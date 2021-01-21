<?php

class Goods
{
    public static function getGoods()
    {

    }

    public static function getCategory1Goods()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $result = $db->query('SELECT * FROM goods WHERE category_id = 1 ORDER BY id DESC LIMIT 4');

        // Получение и возврат результатов
        $i = 0;
        $goods1 = array();
        while ($row = $result->fetch()) {
            $goods1[$i]['id'] = $row['id'];
            $goods1[$i]['author'] = $row['author'];
            $goods1[$i]['title'] = $row['title'];
            $goods1[$i]['price'] = $row['price'];
            $goods1[$i]['image'] = $row['image'];
            $i++;
        }
        return $goods1;
    }

    public static function getCategory2Goods()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $result = $db->query('SELECT * FROM goods WHERE category_id = 2 ORDER BY id DESC LIMIT 4');
        // Получение и возврат результатов
        $i = 0;
        $goods2 = array();
        while ($row = $result->fetch()) {
            $goods2[$i]['id'] = $row['id'];
            $goods2[$i]['author'] = $row['author'];
            $goods2[$i]['title'] = $row['title'];
            $goods2[$i]['price'] = $row['price'];
            $goods2[$i]['image'] = $row['image'];
            $i++;
        }
        return $goods2;
    }

    public static function getCategory3Goods()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $result = $db->query('SELECT * FROM goods WHERE category_id = 3 ORDER BY id DESC LIMIT 4');

        // Получение и возврат результатов
        $i = 0;
        $goods3 = array();
        while ($row = $result->fetch()) {
            $goods3[$i]['id'] = $row['id'];
            $goods3[$i]['author'] = $row['author'];
            $goods3[$i]['title'] = $row['title'];
            $goods3[$i]['price'] = $row['price'];
            $goods3[$i]['image'] = $row['image'];
            $i++;
        }
        return $goods3;
    }

}



//$goods = mysqli_query($connection, "SELECT * FROM goods WHERE category_id = 1 ORDER BY id DESC LIMIT 4")