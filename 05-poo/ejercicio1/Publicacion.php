<?php

class Publicacion
{
    private $autores, $anno, $editorial, $titulo, $texto;

    /**
     * Publicacion constructor.
     * @param $autores
     * @param $anno
     * @param $editorial
     * @param $titulo
     * @param $texto
     */
    public function __construct($autores, $anno, $editorial, $titulo, $texto)
    {
        $this->autores = $autores;
        $this->anno = $anno;
        $this->editorial = $editorial;
        $this->titulo = $titulo;
        $this->texto = $texto;
    }

    /**
     * @return mixed
     */
    public function leer()
    {
        return $this->texto;
    }

    /**
     * @return mixed
     */
    public function escribir($textoPorMi)
    {
        return "Este es el texto escrito por mi: " . $textoPorMi . " y este el escrito por el objeto: (" . $this->leer().")";
    }



}