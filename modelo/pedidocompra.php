<?php

class PedidoCompra
{
    private $fecha;
    private $proveedor;
    private $fechaEntregaEstimada;
    private $costoTotal;
    private $pedidoCerrado;
    private $listLineasCompras = array();


    public function getFecha()
    {
        return $this->fecha;
    }


    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }


    public function getProveedor()
    {
        return $this->proveedor;
    }


    public function setProveedor($proveedor)
    {
        $this->proveedor = $proveedor;
    }


    public function getFechaEntregaEstimada()
    {
        return $this->fechaEntregaEstimada;
    }


    public function setFechaEntregaEstimada($fechaEntregaEstimada)
    {
        $this->fechaEntregaEstimada = $fechaEntregaEstimada;
    }


    public function getCostoTotal()
    {
        return $this->costoTotal;
    }


    public function setCostoTotal($costoTotal)
    {
        $this->costoTotal = $costoTotal;
    }

    public function getPedidoCerrado()
    {
        return $this->pedidoCerrado;
    }

    public function setPedidoCerrado($pedidoCerrado)
    {
        $this->pedidoCerrado = $pedidoCerrado;
    }


    public function getListLineasCompras()
    {
        return $this->listLineasCompras;
    }


    public function setLineaCompra($compra)
    {
        $this->listLineasCompras[] = $compra;
    }

    public function MostrarInformacion()
    {
        echo 'Fecha: ' . $this->getFecha() . '<br>';
        echo 'Costo total: ' . $this->getCostoTotal() . '<br>';
        echo 'Pedido cerrado: ' . $this->getPedidoCerrado() . '<br>';
        echo 'Proveedor: ' . $this->getProveedor()->getDescripcion() . '<br>';
        foreach ($this->getListLineasCompras() as $compra) {
            echo 'Descripcion: '. $compra->getProducto()->getDescripcion().'<br>';  
            echo 'Producto: '. $compra->getProducto()->getPrecioVenta().'<br>';  
            echo 'Cantidad: ' . $compra->getCantidad() . '<br>';
            echo 'Costo Unitario: ' . $compra->getCostoUnitario() . '<br>';
            echo 'Fue entregado: ' . $compra->getFueEntregado() . '<br>';
            
        }
    }
}
