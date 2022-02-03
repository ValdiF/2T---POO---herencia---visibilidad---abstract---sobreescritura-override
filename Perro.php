<?php
require_once("./animal/Animal.php");
class Perro extends Animal{

    public function comer(){
        echo "<p>El perro, come huesos</p>";
    }

    public function usarProtectedAnimal(){
        $this->dormir();
    }
}
