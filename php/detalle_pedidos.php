<?php
require_once ("../php/Conexion_detalle_pedidos.php");
$conexion=new Conexion_detalle_pedidos();
$reult="";
if(isset($_GET["crear_detalle_pedidos"])){
	$reult=$conexion->crear_detalle_pedidos();
	if($reult){
        echo "1";
		echo "-cuerpos/mensajes/mensajeExitoCrear.php?form=detalle_pedidosForm";
	}else {
        echo $reult;
		echo "-cuerpos/mensajes/mensajeErrorCrear.php?form=detalle_pedidosForm";
	}
}
if(isset($_GET["modificar_detalle_pedidos"])){
    $reult=$conexion->modificar_detalle_pedidos();
	if($reult){
        echo "1";
		echo "-cuerpos/mensajes/mensajeExitoModificar.php?form=detalle_pedidosForm";
	}else {
        echo $reult;
		echo "-cuerpos/mensajes/mensajeErrorModificar.php?form=detalle_pedidosForm";
	}
}
if(isset($_GET["eliminar_detalle_pedidos"])){
    $reult=$conexion->eliminar_detalle_pedidos();
	if($reult){
        echo "1";
		echo "-cuerpos/mensajes/mensajeExitoEliminar.php?form=detalle_pedidosForm";
	}else {
        echo $reult;
		echo "-cuerpos/mensajes/mensajeErrorEliminar.php?form=detalle_pedidosForm";
	}
}


