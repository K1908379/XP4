<?php
class Doctor {
    private $firstname;
    private $surname;
    private $password;

    function __get($name) {
        return $this->$name;
    }

    function __set($name,$value) {
        $this->$name = $value;
    }
}
?>