<?php

include_once './DAO/ProductDAO.php';

class ProductHoeveelheid{
    private $productHoeveelheidId;
    private $hoeveelheidId;
    private $productId;
    private $prijsExclBtw;
    
    function getProductHoeveelheidId() {
        return $this->productHoeveelheidId;
    }

    function getHoeveelheidId() {
        return $this->hoeveelheidId;
    }

    function getProductId() {
        return $this->productId;
    }

    function getPrijsExclBtw() {
        return $this->prijsExclBtw;
    }

    function setProductHoeveelheidId($producthoeveelheidId) {
        $this->producthoeveelheidId = $producthoeveelheidId;
    }

    function setHoeveelheidId($hoeveelheidId) {
        $this->hoeveelheidId = $hoeveelheidId;
    }

    function setProductId($productId) {
        $this->productId = $productId;
    }

    function setPrijsExclBtw($prijsExclBtw) {
        $this->prijsExclBtw = $prijsExclBtw;
    }

    function __construct($producthoeveelheidId, $hoeveelheidId, $productId, $prijsExclBtw) {
        $this->productHoeveelheidId = $producthoeveelheidId;
        $this->hoeveelheidId = $hoeveelheidId;
        $this->productId = $productId;
        $this->prijsExclBtw = $prijsExclBtw;
    }
    public function __toString() {
        return $this->prijsExclBtw." ".$this->productId." ".$this->hoeveelheidId."  EIND  ";
    }
    //todo 
    public function getBtw(){
        $product = ProductDAO::getProductById($this->productId);
        return $this->prijsExclBtw * ($product->getBtwPercentage() / 100);
    }
    
    public function getPrijsInclBtw(){
        return $this->prijsExclBtw + $this->getBtw();
    }

    
    
    
}

?>