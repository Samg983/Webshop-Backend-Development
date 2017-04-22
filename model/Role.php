<?php

class Role {
    private $roleId;
    private $name;
    
    function getRoleId() {
        return $this->roleId;
    }

    function getName() {
        return $this->name;
    }

    function setRoleId($roleId) {
        $this->roleId = $roleId;
    }

    function setName($name) {
        $this->name = $name;
    }

    function __construct($roleId, $name) {
        $this->roleId = $roleId;
        $this->name = $name;
    }
}

