<?php

class Review {
    private $reviewId;
    private $klantNaam;
    private $reviewTekst;
    private $aantalSterren;
    private $productId;
    
    function getReviewId() {
        return $this->reviewId;
    }

    function getKlantNaam() {
        return $this->klantNaam;
    }


    function getReviewTekst() {
        return $this->reviewTekst;
    }

    function getAantalSterren() {
        return $this->aantalSterren;
    }

    function setReviewId($reviewId) {
        $this->reviewId = $reviewId;
    }

    function setKlantNaam($klantNaam) {
        $this->klantNaam = $klantNaam;
    }

 

    function setReviewTekst($reviewTekst) {
        $this->reviewTekst = $reviewTekst;
    }

    function setAantalSterren($aantalSterren) {
        $this->aantalSterren = $aantalSterren;
    }
    
    function getProductId() {
        return $this->productId;
    }

    function setProductId($productId) {
        $this->productId = $productId;
    }

    function __construct($reviewId, $klantNaam, $reviewTekst, $aantalSterren, $productId) {
        $this->reviewId = $reviewId;
        $this->klantNaam = $klantNaam;
        $this->reviewTekst = $reviewTekst;
        $this->aantalSterren = $aantalSterren;
        $this->productId = $productId;
    }  
}
