<?php
// Clase abstracta no se puede instanciar
abstract class Animal{

    public function comer(){
        echo "<p>Animal comiendo</p>";
    }

    protected function dormir(){
        echo "<p>Animal durmiendo</p>";
    }

}
