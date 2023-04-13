<?php

require_once "baseClass.php";
class Sub extends Base {
    public function get_selamta():string {
        return $this->selamta;
    }
    public function getParentMethod() {
        return $this->get_voice();
    }
}