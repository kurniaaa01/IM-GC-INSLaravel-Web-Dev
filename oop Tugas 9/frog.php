<?php
// frog.php

class Frog extends Animal 
{
    public $jump;

    public function jump() {
        return $this -> jump = "hop hop";
    }

}
?>
