<?php

require_once './model/ProductHoeveelheid.php';

class ProductHoeveelheidDAO {

    public static function getProductHoeveelheden() {
        $een = new ProductHoeveelheid(1, 1, 1, 3.50);
        $twee = new ProductHoeveelheid(2, 2, 1, 4.50);
        $drie = new ProductHoeveelheid(3, 3, 1, 6);
        $vier = new ProductHoeveelheid(4, 4, 1, 12);
        
        $vijf = new ProductHoeveelheid(5, 1, 2, 3.50);
        $zes = new ProductHoeveelheid(6, 2, 2, 4.50);
        $zeven = new ProductHoeveelheid(7, 3, 2, 6);
        $acht = new ProductHoeveelheid(8, 4, 2, 12);

        $arr = array($een, $twee, $drie, $vier, $vijf, $zes, $zeven,$acht);
        return $arr;
    }

    public static function getProductHoeveelheidById($id) {
        $arr = self::getProductHoeveelheden();

        foreach ($arr as $value) {
            if ($value->getProductHoeveelheidId() == $id) {
                return $value;
            }
        }
    }
    
    public static function getProductHoeveelheidByProductId($productId) {
        $arr = self::getProductHoeveelheden();

        
        foreach ($arr as $value) {
            if ($value->getProductId() == $productId) {
                $returnArr[] =  $value;
            }
        }
        return $returnArr;
    }
    
    public static function getProductHoeveelheidByHoeveelheidIdEnProductId($hoeveelheidId, $productId){
        $arr = self::getProductHoeveelheden();

        foreach ($arr as $value) {
            if ($value->getHoeveelheidId() == $hoeveelheidId && $value->getProductId() == $productId) {
                return $value;
            }
        }
    }

}
