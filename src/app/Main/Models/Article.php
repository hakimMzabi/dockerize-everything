<?php


namespace Main\Models;


class Article
{
    public function createArticle($db){
        //$db->execute("INSERT INTO article ");
    }
    public function readArticle($db){
        return $db->query("SELECT * FROM article",null);
    }
    public function updateArticle($db,$id,$values){

    }

    public function deleteArticle($db,$id){

    }
}