<?php

require_once './Model/Review.php';

class ReviewDAO {
    
    public static function getReviews() {
        
        $review1 = new Review(1, "Mike Itchen", "Awesome", "lorum ispum", 4, 1);
        $review2 = new Review(2, "Sam Goeman", "Slecht", "lorum ispum", 1, 1);
        $review3 = new Review(3, "Arno Stalpaert", "Verfrissend", "lorum ispum", 3, 1);
        
        
        $arr = array($review1, $review2, $review3);
        
        return $arr;
    }

    public static function getReviewById($id) {
        $arr = self::getReviews();

        foreach ($arr as $value) {
            if ($value->getReviewId() == $id) {
                return $value;
            }
        }
    }
    
    public static function getReviewByProductId($productId) {
        $arr = self::getReviews();

        foreach ($arr as $value) {
            if ($value->getProductId() == $productId) {
                $returnArr[] = $value;
            }
        }
        return $returnArr;
    }
}

