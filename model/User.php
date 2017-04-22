<?php
class User {
    private $userId;
    private $emailaddress;
    private $password;
    private $name;
    private $roleId;
    
    function getUserId() {
        return $this->userId;
    }

    function getEmailaddress() {
        return $this->emailaddress;
    }

    function getPassword() {
        return $this->password;
    }

    function setUserId($userId) {
        $this->userId = $userId;
    }

    function setEmailaddress($emailaddress) {
        $this->emailaddress = $emailaddress;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function getName() {
        return $this->name;
    }

    function getRoleId() {
        return $this->roleId;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setRoleId($roleId) {
        $this->roleId = $roleId;
    }

    function __construct($userId, $emailaddress, $password, $name, $roleId) {
        $this->userId = $userId;
        $this->emailaddress = $emailaddress;
        $this->password = $password;
        $this->name = $name;
        $this->roleId = $roleId;
    }

 
}

