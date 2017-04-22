<?php

require_once './DAO/WinkelwagenItemDAO.php';

class Winkelwagen {
    private $winkelwagenId;
    private $userId;
    
    function getWinkelwagenId() {
        return $this->winkelwagenId;
    }

    function getUserId() {
        return $this->userId;
    }

    function setWinkelwagenId($winkelwagenId) {
        $this->winkelwagenId = $winkelwagenId;
    }

    function setUserId($userId) {
        $this->userId = $userId;
    }

    function __construct($winkelwagenId, $userId) {
        $this->winkelwagenId = $winkelwagenId;
        $this->userId = $userId;
    }
}
