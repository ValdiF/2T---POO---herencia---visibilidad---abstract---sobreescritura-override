<?php
require_once("./animal/Animal.php");
class Gato extends Animal{

    public function usarProtectedAnimal(){
        $this->dormir();
    }

}
