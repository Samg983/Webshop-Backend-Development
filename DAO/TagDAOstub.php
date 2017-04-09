<?php
require_once './model/Tag.php';

class TagDAO {

    public static function getTags() {
        $tag1 = new Tag(1, "Gezond en lekker");
        $tag2 = new Tag(2, "Rijk aan vitamines");
        $tag3 = new Tag(3, "Aanbevolen door onze diëtiste");
        $tag4 = new Tag(4, "Nog wa random zever");

        $arr = array($tag1, $tag2, $tag3, $tag4);
        return $arr;
    }

    public static function getTagById($id) {
        $arr = self::getTags();

        foreach ($arr as $value) {
            if ($value->getTagId() == $id) {
                return $value;
            }
        }
    }

}
