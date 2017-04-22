<?php
include_once './model/Role.php';
include_once './DAO/Verbinding/DatabaseFactory.php';

class RoleDAO {

    private static function getVerbinding() {
        return DatabaseFactory::getDatabase();
    }

    public static function getRoleen() {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Role");
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    

    public static function getRoleById($id) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Role WHERE roleId=?", array($id));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }
    }

    public static function insert($role) {
        return self::getVerbinding()->voerSqlQueryUit("INSERT INTO Role(name) VALUES ('?')", array($role->getName()));
    }

    public static function deleteById($id) {
        return self::getVerbinding()->voerSqlQueryUit("DELETE FROM Role where roleId=?", array($id));
    }

    public static function delete($role) {
        return self::deleteById($role->getRoleId());
    }

    public static function update($role) {
        return self::getVerbinding()->voerSqlQueryUit("UPDATE Role SET name='?' WHERE roleId=?", array($role->getName(), $role->getRoleId()));
    }

    protected static function converteerRijNaarObject($databaseRij) {
        return new Role($databaseRij['roleId'], $databaseRij['name']);
    }

}



