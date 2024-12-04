<?php

class Category{
    function getAllCategory(){
        require 'db.php';
        $stmt=$conn->prepare("SELECT * FROM categories");
        $stmt->execute();
        $categorylist=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $categorylist;
    }
}
