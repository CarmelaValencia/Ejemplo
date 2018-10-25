<?php
require_once ("../php/Conexion_usuarios.php");
$conexion=new Conexion_usuarios();
$reult="";
if(isset($_GET["crear_usuarios"])){
	$reult=$conexion->crear_usuarios();
	if($reult){
        echo "1";
		echo "-cuerpos/mensajes/mensajeExitoCrear.php?form=usuariosForm";
	}else {
        echo $reult;
		echo "-cuerpos/mensajes/mensajeErrorCrear.php?form=usuariosForm";
	}
}
if(isset($_GET["modificar_usuarios"])){
    $reult=$conexion->modificar_usuarios();
	if($reult){
        echo "1";
		echo "-cuerpos/mensajes/mensajeExitoModificar.php?form=usuariosForm";
	}else {
        echo $reult;
		echo "-cuerpos/mensajes/mensajeErrorModificar.php?form=usuariosForm";
	}
}
if(isset($_GET["eliminar_usuarios"])){
    $reult=$conexion->eliminar_usuarios();
	if($reult){
        echo "1";
		echo "-cuerpos/mensajes/mensajeExitoEliminar.php?form=usuariosForm";
	}else {
        echo $reult;
		echo "-cuerpos/mensajes/mensajeErrorEliminar.php?form=usuariosForm";
	}
}
if(isset($_GET["iniciar"])){
	if ($conexion->iniciarSesion()!="") {
		echo "-cuerpos/mensajes/mensajeInicioExito.php?form=usuariosForm";
	} else {
		echo "-cuerpos/mensajes/mensajeInicioError.php?form=usuariosForm";	
	}
}

