<?php

require_once './DAO/ProductDAO.php';

class WinkelwagenItem {

    private $winkelwagenItemId;
    private $productId;
    private $aantal;
    private $gekozenHoeveelheidId;
    private $winkelwagenId;
    
    
    function getWinkelwagenItemId() {
        return $this->winkelwagenItemId;
    }

    function setWinkelwagenItemId($winkelwagenItemId) {
        $this->winkelwagenItemId = $winkelwagenItemId;
    }

    
    function getProductId() {
        return $this->productId;
    }

    function getAantal() {
        return $this->aantal;
    }

    function setProductId($productId) {
        $this->productId = $productId;
    }

    function setAantal($aantal) {
        $this->aantal = $aantal;
    }

    function getGekozenHoeveelheidId() {
        return $this->gekozenHoeveelheidId;
    }

    function setGekozenHoeveelheidId($gekozenHoeveelheidId) {
        $this->gekozenHoeveelheidId = $gekozenHoeveelheidId;
    }
    
    function getWinkelwagenId() {
        return $this->winkelwagenId;
    }

    function setWinkelwagenId($winkelwagenId) {
        $this->winkelwagenId = $winkelwagenId;
    }

        
    function __construct($winkelwagenItemId, $productId, $aantal, $gekozenHoeveelheidId, $winkelwagenId) {
        $this->winkelwagenItemId = $winkelwagenItemId;
        $this->productId = $productId;
        $this->aantal = $aantal;
        $this->gekozenHoeveelheidId = $gekozenHoeveelheidId;
        $this->winkelwagenId = $winkelwagenId;
    }

        
    function getProduct() {
        return ProductDAO::getProductById($this->productId);
    }
    
    function getProductHoeveelheid(){
        return $productHoeveelheid = ProductHoeveelheidDAO::getProductHoeveelheidByHoeveelheidIdEnProductId($this->gekozenHoeveelheidId, $this->productId);
    }

    public function getTotaalPrijsExclBtw() {
        $productHoeveelheid = $this->getProductHoeveelheid();

        return $productHoeveelheid->getPrijsExclBtw() * $this->aantal;
    }

    public function getTotaalBtw() {
        $product = $this->getProduct();
        
        $prijsExclBtw = $this->getTotaalPrijsExclBtw();
        
        return $prijsExclBtw * ($product->getBtwPercentage()/100); 
    }

    public function getTotaalPrijsInclBtw() {
        return $this->getTotaalPrijsExclBtw() + $this->getTotaalBtw();    
    }

}
