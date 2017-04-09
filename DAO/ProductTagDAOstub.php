<?php

require_once './model/ProductTag.php';

class ProductTagDAO {

    public static function getProductTags() {
        $tag1 = new ProductTag(1, 1, 1);
        $tag2 = new ProductTag(2, 2, 1);
        $tag3 = new ProductTag(3, 3, 1);
        $tag4 = new ProductTag(4, 4, 1);

        $tag5 = new ProductTag(5, 1, 2);
        $tag6 = new ProductTag(6, 2, 2);
        $tag7 = new ProductTag(7, 3, 2);
        $tag8 = new ProductTag(8, 4, 2);

        $arr = array($tag1, $tag2, $tag3, $tag4, $tag5, $tag6, $tag7, $tag8);
        return $arr;
    }

    public static function getProductTagByProductId($productId) {
        $arr = self::getProductTags();


        foreach ($arr as $value) {
            if ($value->getProductId() == $productId) {
                $returnArr[] = $value;
            }
        }
        return $returnArr;
    }

}
