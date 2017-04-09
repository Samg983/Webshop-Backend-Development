<?php
include_once './model/Tag.php';
include_once './DAO/Verbinding/DatabaseFactory.php';

class TagDAO {

    private static function getVerbinding() {
        return DatabaseFactory::getDatabase();
    }

    public static function getTags() {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Tag");
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

  

    public static function getTagById($id) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Tag WHERE tagId=?", array($id));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }
    }

    public static function insert($tag) {
        return self::getVerbinding()->voerSqlQueryUit("INSERT INTO Tag(tagNaam) VALUES ('?')", array($tag->getTagNaam()));
    }

    public static function deleteById($id) {
        return self::getVerbinding()->voerSqlQueryUit("DELETE FROM Tag WHERE tagId=?", array($id));
    }

    public static function delete($tag) {
        return self::deleteById($tag->getTagId());
    }

    public static function update($tag) {
        return self::getVerbinding()->voerSqlQueryUit("UPDATE Tag SET tagNaam='?' WHERE tagId=?", array($tag->getTagNaam(), $tag->getTagId()));
    }

    protected static function converteerRijNaarObject($databaseRij) {
        return new Tag($databaseRij['tagId'], $databaseRij['tagNaam']);
    }

}



