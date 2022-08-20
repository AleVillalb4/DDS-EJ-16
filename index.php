<?php

require_once 'modelo/pedidocompra.php';
require_once 'modelo/lineacompra.php';
require_once 'modelo/producto.php';
require_once 'modelo/proveedor.php';

$prov = new Proveedor();
$prov->setId(1);
$prov->setDescripcion('Ayudin');


$produ= new Producto();
$produ->setCodigo(15);
$produ->setDescripcion('Lavandinda');
$produ->setPrecioVenta('$500');

$produ1= new Producto();
$produ1->setCodigo(10);
$produ1->setDescripcion('Detergente');
$produ1->setPrecioVenta('$900');

$lineacomp =new LineaCompras();
$lineacomp->setCantidad(15);
$lineacomp->setCostoUnitario(25);
$lineacomp->setFueEntregado(true);
$lineacomp->setProducto($produ);

$lineacomp1 =new LineaCompras();
$lineacomp1->setCantidad(15);
$lineacomp1->setCostoUnitario(25);
$lineacomp1->setFueEntregado(false);
$lineacomp1->setProducto($produ1);

$pedido =new PedidoCompra();
$pedido->setFecha('19/08/2022');
$pedido->setFechaEntregaEstimada('25/08/2022');
$pedido->setCostoTotal('$1000');
$pedido->setPedidoCerrado(true);
$pedido->setLineaCompra($lineacomp);
$pedido->setLineaCompra($lineacomp1);
$pedido->setProveedor($prov);
$pedido->MostrarInformacion();



