<?php

class SiteController
{
    public function actionIndex()
    {

$goods1 = Goods::getCategory1Goods();
$goods2 = Goods::getCategory2Goods();
$goods3 = Goods::getCategory3Goods();

        require_once (ROOT.'/views/site/index.php');
        return true;
    }
}