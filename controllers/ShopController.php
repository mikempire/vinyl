<?php
include_once ROOT . '/models/Product.php';

class ShopController
{
    public function actionIndex()
    {
        $goods = Product::getAllProducts();

        require_once (ROOT.'/views/shop/index.php');
        return true;
    }
}