<?php

namespace application\model;
class Article extends Model {
    public function all(){
        $query= "SELECT * FROM `articles`";
        $result = $this->query($query)->fetchAll();
        $this->closeConnection();
        return $result;
    }
    public function find($id){
$query = "SELECT * ,(SELECT `name` FROM `categories` WHERE `categories`.`id` = `articles`.`cat_id` ;) as category FROM `articles` WHERE id = ? ";
$result=$this->query($query , [$id])->fetch();
$this->closeConnection();
return $result ;
    }
    public function insert($values){

    }
    public function update($id , $values){

    }
    public function delete($id){

    }
}