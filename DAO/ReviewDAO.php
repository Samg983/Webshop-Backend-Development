<?php
include_once './model/Review.php';
include_once './DAO/Verbinding/DatabaseFactory.php';

class ReviewDAO {

    private static function getVerbinding() {
        return DatabaseFactory::getDatabase();
    }

    public static function getReviews() {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Review");
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getReviewByProductId($productId) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Review WHERE productId ='?'", array($productId));
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getReviewById($id) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Review WHERE reviewId=?", array($id));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }
    }

    public static function insert($review) {
        return self::getVerbinding()->voerSqlQueryUit("INSERT INTO Review(klantNaam, reviewTekst, aantalSterren, productId) VALUES ('?', '?','?','?')", array($review->getKlantNaam(), $review->getReviewTekst(), $review->getAantalSterren(), $review->getProductId()));
    }

    public static function deleteById($id) {
        return self::getVerbinding()->voerSqlQueryUit("DELETE FROM Review WHERE reviewId=?", array($id));
    }

    public static function delete($review) {
        return self::deleteById($review->getReviewId());
    }

    public static function update($review) {
        return self::getVerbinding()->voerSqlQueryUit("UPDATE Review SET klantNaam='?', reviewTekst='?', aantalSterren='?', productId='?' WHERE reviewId=?", array($review->getKlantNaam(), $review->getReviewTekst(), $review->getAantalSterren(), $review->getProductId(), $review->getReviewId()));
    }

    protected static function converteerRijNaarObject($databaseRij) {
        return new Review($databaseRij['reviewId'], $databaseRij['klantNaam'], $databaseRij['reviewTekst'],$databaseRij['aantalSterren'],$databaseRij['productId']);
    }

}



