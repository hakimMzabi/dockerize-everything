<?php


namespace Main\Controllers;


use Core\Resources\App;
use Core\Resources\Database;

class Administration
{
    public function start() {

        $db = new Database();
        $admin = new \Main\Models\Article();
        if(isset($_POST['create_article'])){
            $admin->createArticle($db,$_POST['create_article']);
        }
        $articles = $admin->readArticle($db);
        App::show('administration',['articles' => $articles]);
    }
}