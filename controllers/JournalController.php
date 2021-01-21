<?php

class journalController
{
    public function actionIndex()
{

        require_once (ROOT.'/views/journal/index.php');
        return true;
}
}