<?php

require_once "baseClass.php";
class Sub extends Base {
    public function get_selamta():string {
        return $this->selamta;
    }
}