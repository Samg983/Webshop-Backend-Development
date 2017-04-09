<?php
include_once './model/ProductHoeveelheid.php';
include_once './DAO/Verbinding/DatabaseFactory.php';

class ProductHoeveelheidDAO {

    private static function getVerbinding() {
        return DatabaseFactory::getDatabase();
    }

    public static function getProductHoeveelheden() {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM ProductHoeveelheid");
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getProductHoeveelheidByProductId($productId) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM ProductHoeveelheid WHERE productId =?", array($productId));
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getProductHoeveelheidByHoeveelheidIdEnProductId($hoeveelheidId, $productId) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM ProductHoeveelheid WHERE hoeveelheidId=? AND productId=?", array($hoeveelheidId, $productId));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }
    }
    
    public static function getProductHoeveelheidById($id) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM ProductHoeveelheid WHERE productHoeveelheidId=?", array($id));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }
    }

    public static function insert($productHoeveelheid) {
        return self::getVerbinding()->voerSqlQueryUit("INSERT INTO ProductHoeveelheid(hoeveelheidId, productId, prijsExclBtw) VALUES ('?', '?', '?')", array($productHoeveelheid->getHoeveelheidId(), $productHoeveelheid->getProductId(), $productHoeveelheid->getPrijsExclBtw()));
    }

    public static function deleteById($id) {
        return self::getVerbinding()->voerSqlQueryUit("DELETE FROM ProductHoeveelheid WHERE productHoeveelheidId=?", array($id));
    }

    public static function delete($productHoeveelheid) {
        return self::deleteById($productHoeveelheid->getProductHoeveelheidId());
    }

    public static function update($productHoeveelheid) {
        return self::getVerbinding()->voerSqlQueryUit("UPDATE ProductHoeveelheid SET hoeveelheidId='?', productId='?', prijsExclBtw='?' WHERE productHoeveelheidId=?", array($productHoeveelheid->getHoeveelheidId(), $productHoeveelheid->getProductId(), $productHoeveelheid->getPrijsExclBtw(), $productHoeveelheid->getProductHoeveelheidId()));
    }

    protected static function converteerRijNaarObject($databaseRij) {
        return new ProductHoeveelheid($databaseRij['productHoeveelheidId'], $databaseRij['hoeveelheidId'], $databaseRij['productId'], $databaseRij['prijsExclBtw']);
    }

}






