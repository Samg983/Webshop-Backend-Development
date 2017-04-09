<?php

include_once './DAO/ProductHoeveelheidDAO.php';

class Product {
    private $productId;
    private $naam;
    private $beschrijving;
    private $btwPercentage;
    private $locatieFoto;
    private $categorieId;
    
    function getProductId() {
        return $this->productId;
    }

    function getNaam() {
        return $this->naam;
    }

    function getBeschrijving() {
        return $this->beschrijving;
    }

    function getBtwPercentage() {
        return $this->btwPercentage;
    }



    function getLocatieFoto() {
        return $this->locatieFoto;
    }

    function getCategorieId() {
        return $this->categorieId;
    }

    function setProductId($productId) {
        $this->productId = $productId;
    }

    function setNaam($naam) {
        $this->naam = $naam;
    }

    function setBeschrijving($beschrijving) {
        $this->beschrijving = $beschrijving;
    }

    function setBtwPercentage($btwPercentage) {
        $this->btwPercentage = $btwPercentage;
    }

    function setLocatieFoto($locatieFoto) {
        $this->locatieFoto = $locatieFoto;
    }

    function setCategorieId($categorieId) {
        $this->categorieId = $categorieId;
    }

    function __construct($productId, $naam, $beschrijving, $btwPercentage, $locatieFoto, $categorieId) {
        $this->productId = $productId;
        $this->naam = $naam;
        $this->beschrijving = $beschrijving;
        $this->btwPercentage = $btwPercentage;
        $this->locatieFoto = $locatieFoto;
        $this->categorieId = $categorieId;
    }
    
    public function getProductPrijzenByProductId(){
        $arrProductHoeveelheden = ProductHoeveelheidDAO::getProductHoeveelheidByProductId($this->productId);
        
        foreach ($arrProductHoeveelheden as $ph){
            $prijsArr[] = $ph->getPrijsExclBtw();
        }
         
        return $prijsArr;
   
    }
    
    public function __toString() {
        return $this->naam;
    }
    
    
}





?>

