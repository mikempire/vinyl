<?php
class ArticleController
{
    public function actionView($id)
    {
        $article = Article::getArticleById($id);
        require_once (ROOT.'/views/article/view.php');

        return true;
    }
}