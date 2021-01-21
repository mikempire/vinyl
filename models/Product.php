<?php

class Product
{

    public static function getProductById($id)
    {
        $id = intval($id);

        if ($id){
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM goods WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }


    public static function getProductsByIds($idsArray)
    {
        $products = array();

        $db = Db::getConnection();
        $idsString = implode(',', $idsArray);

        $sql = "SELECT * FROM goods WHERE id IN ($idsString)";

        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['author'] = $row['author'];
            $products[$i]['title'] = $row['title'];
            $products[$i]['price'] = $row['price'];
            $i++;
        }
            return $products;
    }


    public static function getAllProducts()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Получение и возврат результатов
        $result = $db->query('SELECT * FROM goods');
        $good = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $goods[$i]['id'] = $row['id'];
            $goods[$i]['author'] = $row['author'];
            $goods[$i]['image'] = $row['image'];
            $goods[$i]['title'] = $row['title'];
            $goods[$i]['price'] = $row['price'];
            $i++;
        }
        return $goods;
    }

}







        //$result = $db->query('SELECT id, name, price, image, is_new FROM `product`' .'WHERE status = "1"' .'ORDER BY id DESC ' .'LIMIT ' . $count);

