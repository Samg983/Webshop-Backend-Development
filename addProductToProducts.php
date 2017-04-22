
<?php

include_once './DAO/ProductDAO.php';
include_once './DAO/ProductHoeveelheidDAO.php';
include_once './DAO/ProductTagDAO.php';
include_once './DAO/TagDAO.php';

if(isset($_POST["postcheckProduct"])){
    addProduct(); 
}

if(isset($_POST["postcheckTag"])){
    $tagName = $_POST["tagName"];
    TagDAO::insert(new Tag(0, $tagName));
    header("Location: admin-detail.php#add-tags");
}

function addProduct(){
    $productName = $_POST["productName"];
    $productDescription = $_POST["productDescription"];
    $priceExclBtw = $_POST["priceExclBtw"];
    $categorie = $_POST["categorie"];
    $tags = $_POST["tags"];
    $img =  $_FILES["imgProduct"]["tmp_name"];
    

    move_uploaded_file($img, "./img/".$_FILES["imgProduct"]["name"]);
    
    $pathImage = "./img/".$_FILES["imgProduct"]["name"];
    
    $newProduct = new Product(0, $productName, $productDescription, 21, $pathImage, $categorie);
    
    $productId = ProductDAO::insert($newProduct);
    
    $nieuwPH1 =  new ProductHoeveelheid(0, 1, $productId, $priceExclBtw);
    $nieuwPH2 =  new ProductHoeveelheid(0, 2, $productId, $priceExclBtw + 1);
    $nieuwPH3 =  new ProductHoeveelheid(0, 3, $productId, $priceExclBtw + 1.5);
    $nieuwPH4 =  new ProductHoeveelheid(0, 4, $productId, $priceExclBtw + 2.5);
    
    $arrPh = array($nieuwPH1,$nieuwPH2,$nieuwPH3,$nieuwPH4);
    
    foreach($arrPh as $item) {
        ProductHoeveelheidDAO::insert($item);
    }
    
    foreach($tags as $tagId){
        $productTag = new ProductTag(0, $tagId, $productId);
        ProductTagDAO::insert($productTag);
    }
    header("Location: admin-detail.php#all-products");
}

 


 

