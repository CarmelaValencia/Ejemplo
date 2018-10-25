<?php
require_once ("../php/Conexion_pedidos.php");
$conexion=new Conexion_pedidos();
$reult="";
if(isset($_GET["crear_pedidos"])){
	$reult=$conexion->crear_pedidos();
	if($reult){
        echo "1";
		echo "-cuerpos/mensajes/mensajeExitoCrear.php?form=pedidosForm";
	}else {
        echo $reult;
		echo "-cuerpos/mensajes/mensajeErrorCrear.php?form=pedidosForm";
	}
}
if(isset($_GET["modificar_pedidos"])){
    $reult=$conexion->modificar_pedidos();
	if($reult){
        echo "1";
		echo "-cuerpos/mensajes/mensajeExitoModificar.php?form=pedidosForm";
	}else {
        echo $reult;
		echo "-cuerpos/mensajes/mensajeErrorModificar.php?form=pedidosForm";
	}
}
if(isset($_GET["eliminar_pedidos"])){
    $reult=$conexion->eliminar_pedidos();
	if($reult){
        echo "1";
		echo "-cuerpos/mensajes/mensajeExitoEliminar.php?form=pedidosForm";
	}else {
        echo $reult;
		echo "-cuerpos/mensajes/mensajeErrorEliminar.php?form=pedidosForm";
	}
}


