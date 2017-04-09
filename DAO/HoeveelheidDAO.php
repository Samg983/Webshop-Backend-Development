<?php
include_once './model/Hoeveelheid.php';
include_once './DAO/Verbinding/DatabaseFactory.php';

class HoeveelheidDAO {

    private static function getVerbinding() {
        return DatabaseFactory::getDatabase();
    }

    public static function getHoeveelheden() {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Hoeveelheid");
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getAllByName($naam) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Hoeveelheid WHERE naam ='?'", array($naam));
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getHoeveelheidById($id) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Hoeveelheid WHERE hoeveelheidId=?", array($id));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }
    }

    public static function insert($hoeveelheid) {
        return self::getVerbinding()->voerSqlQueryUit("INSERT INTO Hoeveelheid(naam) VALUES ('?')", array($hoeveelheid->getNaam()));
    }

    public static function deleteById($id) {
        return self::getVerbinding()->voerSqlQueryUit("DELETE FROM Hoeveelheid where hoeveelheidId=?", array($id));
    }

    public static function delete($hoeveelheid) {
        return self::deleteById($hoeveelheid->getHoeveelheidId());
    }

    public static function update($hoeveelheid) {
        return self::getVerbinding()->voerSqlQueryUit("UPDATE Hoeveelheid SET naam='?' WHERE hoeveelheidId=?", array($hoeveelheid->getNaam(), $hoeveelheid->getHoeveelheidId()));
    }

    protected static function converteerRijNaarObject($databaseRij) {
        return new Hoeveelheid($databaseRij['hoeveelheidId'], $databaseRij['naam']);
    }

}






