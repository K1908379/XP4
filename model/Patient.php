<?php
class Patient {
    private $firstname;
    private $surnamesurname;
    private $age;
    private $dateOfBirth;
    private $email;
    private $address;
    private $nhsNumber;
    private $password;

    function __get($name) {
        return $this->$name;
    }

    function __set($name,$value) {
        $this->$name = $value;
    }
}
?>