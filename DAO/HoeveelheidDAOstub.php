<?php

require_once './model/Hoeveelheid.php';

class HoeveelheidDAO {

    public static function getHoeveelheden() {
        $klein = new Hoeveelheid(1, "250ml");
        $middel = new Hoeveelheid(2, "500ml");
        $large = new Hoeveelheid(3, "750ml");
        $xlarge = new Hoeveelheid(4, "1000ml");

        $arr = array($klein, $middel, $large, $xlarge);
        return $arr;
    }

    public static function getHoeveelheidById($id) {
        $arr = self::getHoeveelheden();

        foreach ($arr as $value) {
            if ($value->getHoeveelheidId() == $id) {
                return $value;
            }
        }
    }

}


