<?php
include_once './model/Categorie.php';
include_once './DAO/Verbinding/DatabaseFactory.php';

class CategorieDAO {

    private static function getVerbinding() {
        return DatabaseFactory::getDatabase();
    }

    public static function getCategorieen() {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Categorie");
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getAllByName($naam) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Categorie WHERE naam ='?'", array($naam));
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getCategorieById($id) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Categorie WHERE categorieId=?", array($id));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }
    }

    public static function insert($categorie) {
        return self::getVerbinding()->voerSqlQueryUit("INSERT INTO Categorie(naam) VALUES ('?')", array($categorie->getNaam()));
    }

    public static function deleteById($id) {
        return self::getVerbinding()->voerSqlQueryUit("DELETE FROM Categorie where categorieId=?", array($id));
    }

    public static function delete($categorie) {
        return self::deleteById($categorie->getCategorieId());
    }

    public static function update($categorie) {
        return self::getVerbinding()->voerSqlQueryUit("UPDATE Categorie SET naam='?' WHERE categorieId=?", array($categorie->getNaam(), $categorie->getCategorieId()));
    }

    protected static function converteerRijNaarObject($databaseRij) {
        return new Categorie($databaseRij['categorieId'], $databaseRij['naam']);
    }

}



