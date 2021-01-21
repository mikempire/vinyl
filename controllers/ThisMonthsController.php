<?php

class ThisMonthsController
{

    public function actionIndex()
    {

        require_once (ROOT.'/views/thisMonths/index.php');
        return true;
    }
}