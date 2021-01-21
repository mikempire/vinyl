<?php

class Cart
{
    public static function addProduct($id)
    {
        $id = intval($id);

        // Пустой масив для товаров в корзине
        $productsInCart = array();

        // Если в корзине уже есть товары (они хранятся в сессии)
        if (isset($_SESSION['products'])) {
            // то заплняем наш массив товарами
            $productsInCart = $_SESSION['products'];
        }

        // Если товары есть в корзине, но был добавлен еще раз увеличим количество
        if (array_key_exists($id, $productsInCart)) {
            $productsInCart[$id]++;
        } else {
            // добавление нового товара в корзину
            $productsInCart[$id] = 1;
        }
        $_SESSION['products'] = $productsInCart;

        return self::countItem();
    }


    public static function countItem()
    {
        if (isset($_SESSION['products'])) {
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            return 0;
        }
    }

    public static function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }

    public static function getTotalPrice($products)
    {
        $productsInCart = self::getProducts();

        $total = 0;

        if ($productsInCart) {
            $total = 0;
            foreach ($products as $item) {
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }
        return $total;
    }

    public static function deleteProduct($id)
    {
        $productsInCart = self::getProducts();

        unset($productsInCart[$id]);

        $_SESSION['products'] = $productsInCart;
    }

    public static function clear()
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
    }
}