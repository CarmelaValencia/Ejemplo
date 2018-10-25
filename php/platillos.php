<?php
require_once ("../php/Conexion_platillos.php");
$conexion=new Conexion_platillos();
$reult="";
if(isset($_GET["crear_platillos"])){
	$reult=$conexion->crear_platillos();
	if($reult){
        echo "1";
		echo "-cuerpos/mensajes/mensajeExitoCrear.php?form=platillosForm";
	}else {
        echo $reult;
		echo "-cuerpos/mensajes/mensajeErrorCrear.php?form=platillosForm";
	}
}
if(isset($_GET["modificar_platillos"])){
    $reult=$conexion->modificar_platillos();
	if($reult){
        echo "1";
		echo "-cuerpos/mensajes/mensajeExitoModificar.php?form=platillosForm";
	}else {
        echo $reult;
		echo "-cuerpos/mensajes/mensajeErrorModificar.php?form=platillosForm";
	}
}
if(isset($_GET["eliminar_platillos"])){
    $reult=$conexion->eliminar_platillos();
	if($reult){
        echo "1";
		echo "-cuerpos/mensajes/mensajeExitoEliminar.php?form=platillosForm";
	}else {
        echo $reult;
		echo "-cuerpos/mensajes/mensajeErrorEliminar.php?form=platillosForm";
	}
}


