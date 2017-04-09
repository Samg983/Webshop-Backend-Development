<?php

include_once './DAO/WinkelwagenItemDAO.php';

if (isset($_POST["productId"])) {
    $arrWWI = WinkelwagenItemDAO::getWinkelwagenItems();

    $productId = $_POST["productId"];
    $aantal = $_POST["aantal"];
    $gekozenHoeveelheidId = $_POST["gekozenHoeveelheid"];

    $winkelwagenItem = new WinkelwagenItem(0, $productId, $aantal, $gekozenHoeveelheidId);



    $uitkomst = false;

    if (empty($arrWWI)) {
        WinkelwagenItemDAO::insert($winkelwagenItem);
    } else {
        foreach ($arrWWI as $item) {
            if($item->getProductId() == $productId) {
                if ($item->getGekozenHoeveelheidId() == $gekozenHoeveelheidId) {
                    $teUpdateItem = $item->getWinkelwagenItemId();
                    $uitkomst = true;
                }
            }
        }
        if ($uitkomst) {
            $updateWinkelwagen = new WinkelwagenItem($teUpdateItem, $productId, $aantal, $gekozenHoeveelheidId);
            WinkelwagenItemDAO::update($updateWinkelwagen);
        } else {
            WinkelwagenItemDAO::insert($winkelwagenItem);
        }
    }


    header("Location: winkelmandje.php");
}



