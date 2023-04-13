<?php

class Base {
    public $name = "Mulugeta Hailegnaw"; //the public visiblity can be seen from anywhere any code
    protected $selamta = "HI how are u"; // protected visibility can only be seen for the declaring class and subclass
    private $dances = "many more comes here"; // private visiblity can only be seen from the declaring class
    public function get_name():string {
        return $this->name;
    }
    public function get_dances():string {
        return $this->dances;
    }
}