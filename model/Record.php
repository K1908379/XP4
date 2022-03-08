<?php
class Record {
    private $id;
    private $nhsNumber;
    private $smoker;
    private $ldl_c;
    private $chloresterol;
    private $bloodPressure;
    private $diabetes;
    private $date;
    private $CVD;

    function __get($name) {
        return $this->$name;
    }

    function __set($name,$value) {
        $this->$name = $value;
    }
}
?>