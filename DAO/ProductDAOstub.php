<?php

require_once './model/Product.php';

class ProductDAO {

    public static function getProducts() {
        $product1 = new Product(1, "Beetroot Lime", "Tralalala", 21, "img/smoothie_strawberry.jpeg", 1);
        $product2 = new Product(2, "Strawberry Mango", "beschrijving", 21,  "img/smoothie.jpg", 1);
        $product3 = new Product(3, "Carrot", "beschrijving", 21,  "img/smoothie.jpg", 1);
        $product4 = new Product(4, "smoothie4", "Tralalala", 21,  "img/smoothie_strawberry.jpeg", 2);
        $product5 = new Product(5, "smoothie5", "beschrijving", 21,  "img/smoothie.jpg", 2);
        $product6 = new Product(6, "smoothie6", "beschrijving", 21,  "img/smoothie.jpg", 2);
        $product7 = new Product(7, "smoothie7", "Tralalala", 21,  "img/smoothie_strawberry.jpeg", 3);
        $product8 = new Product(8, "smoothie8", "beschrijving", 21,  "img/smoothie.jpg", 3);
        $product9 = new Product(9, "smoothie9", "beschrijving", 21,  "img/smoothie.jpg", 3);
        $product10 = new Product(10, "smoothie10", "Tralalala", 21,  "img/smoothie_strawberry.jpeg", 4);
        $product11 = new Product(11, "smoothie11", "beschrijving", 21,  "img/smoothie.jpg", 4);
        $product12 = new Product(12, "smoothie12", "beschrijving", 21,  "img/smoothie.jpg", 4);

        $arr = array($product1, $product2, $product3, $product4, $product5, $product6, $product7, $product8, $product9, $product10, $product11, $product12);
        
        return $arr;
    }

    public static function getProductById($id) {
        $arr = self::getProducts();

        foreach ($arr as $value) {
            if ($value->getProductId() == $id) {
                return $value;
            }
        }
    }
    
    public static function getProductByCategorieId($categorieId) {
        $arr = self::getProducts();

        foreach ($arr as $value) {
            if ($value->getCategorieId() == $categorieId) {
                $returnArr[] = $value;
            }
        }
        return $returnArr;
    }

}
