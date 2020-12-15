<?php


namespace ejercicio3\models;

//objeto
class Poligono
{
    //atributos
    private $color, $altura, $anchura;

    //constructor
    /**
     * Poligono constructor.
     * @param $color
     * @param $altura
     * @param $anchura
     */
    public function __construct($color, $altura, $anchura)
    {
        $this->color = $color;
        $this->altura = $altura;
        $this->anchura = $anchura;
    }

    //métodos getters & setters
    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getAnchura()
    {
        return $this->anchura;
    }

    /**
     * @param mixed $anchura
     */
    public function setAnchura($anchura)
    {
        $this->anchura = $anchura;
    }







}