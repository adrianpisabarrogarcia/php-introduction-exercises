<?php

namespace ejercicio3\models;

require_once "Poligono.php";

class Triangulo extends Poligono
{

    public function area(){
        return $this->getAltura() * $this->getAnchura() / 2;

    }

}