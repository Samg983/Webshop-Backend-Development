<?php
include_once './model/Product.php';
include_once './DAO/Verbinding/DatabaseFactory.php';

class ProductDAO {

    private static function getVerbinding() {
        return DatabaseFactory::getDatabase();
    }

    public static function getProducts() {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Product");
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getProductByCategorieId($categorieId) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Product WHERE categorieId ='?'", array($categorieId));
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getProductById($id) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Product WHERE productId=?", array($id));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }
    }

    public static function insert($product) {
        return self::getVerbinding()->voerSqlInsertQueryUit("INSERT INTO Product(naam, beschrijving, btwPercentage, locatieFoto, categorieId) VALUES ('?', '?', '?', '?', '?')", array($product->getNaam(), $product->getBeschrijving(), $product->getBtwPercentage(), $product->getLocatieFoto(), $product->getCategorieId()));
    }

    public static function deleteById($id) {
        return self::getVerbinding()->voerSqlQueryUit("DELETE FROM Product where productId=?", array($id));
    }

    public static function delete($product) {
        return self::deleteById($product->getProductId());
    }

    public static function update($product) {
        return self::getVerbinding()->voerSqlQueryUit("UPDATE Product SET naam='?', beschrijving='?', btwPercentage='?', locatieFoto='?', categorieId='?' WHERE productId=?", array($product->getNaam(), $product->getBeschrijving(), $product->getBtwPercentage(), $product->getLocatieFoto(), $product->getCategorieId(), $product->getProductId()));
    }

    protected static function converteerRijNaarObject($databaseRij) {
        return new Product($databaseRij['productId'], $databaseRij['naam'], $databaseRij['beschrijving'], $databaseRij['btwPercentage'], $databaseRij['locatieFoto'], $databaseRij['categorieId']);
    }

}






