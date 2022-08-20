<?php

class Proveedor
{
    private $id;
    private $descripcion;
    private $precioVenta;


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getDescripcion()
    {
        return $this->descripcion;
    }


    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }


    public function getPrecioVenta()
    {
        return $this->precioVenta;
    }

    public function setPrecioVenta($precioVenta)
    {
        $this->precioVenta = $precioVenta;

    }
}
