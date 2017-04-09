<?php
include_once './model/ProductTag.php';
include_once './DAO/Verbinding/DatabaseFactory.php';

class ProductTagDAO {

    private static function getVerbinding() {
        return DatabaseFactory::getDatabase();
    }

    public static function getProductTags() {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM ProductTag");
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getProductTagByProductId($productId) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM ProductTag WHERE productId ='?'", array($productId));
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }


    public static function insert($productTag) {
        return self::getVerbinding()->voerSqlQueryUit("INSERT INTO ProductTag(tagId, productId) VALUES ('?', '?')", array($productTag->getTagId(), $productTag->getProductId()));
    }

    public static function deleteById($id) {
        return self::getVerbinding()->voerSqlQueryUit("DELETE FROM ProductTag WHERE productTagId=?", array($id));
    }

    public static function delete($productTag) {
        return self::deleteById($productTag->getProductTagId());
    }

    public static function update($productTag) {
        return self::getVerbinding()->voerSqlQueryUit("UPDATE ProductTag SET tagId='?', productId='?' WHERE productTagId=?", array($productTag->getTagId(), $productTag->getProductId(), $productTag->getProductTagId()));
    }

    protected static function converteerRijNaarObject($databaseRij) {
        return new ProductTag($databaseRij['productTagId'], $databaseRij['tagId'], $databaseRij['productId']);
    }

}



