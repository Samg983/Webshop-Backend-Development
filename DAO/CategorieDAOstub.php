<?php

require_once './model/Categorie.php';

class CategorieDAO {

    public static function getCategorieen() {
        
        $fruit = new Categorie(1, "Fruit");
        $groente = new Categorie(2, "Groente");
        $hartig = new Categorie(3, "Hartig");
        $toebehoren = new Categorie(4, "Toebehoren");

        $arr = array($groente, $fruit, $hartig, $toebehoren);
        return $arr;
    }

    public static function getCategorieById($id) {
        $arr = self::getCategorieen();

        foreach ($arr as $value) {
            if ($value->getCategorieId() == $id) {
                return $value;
            }
        }
    }

}

