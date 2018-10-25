<?php 
$onclick='onclick=""';
if(isset($_GET['eliminar_'.$_GET['tipo']])){
	$onclick='onclick="eliminar_'.$_GET['tipo'].'('.$_GET['eliminar_'.$_GET['tipo']].')"';
}
?>
<center>
	<button class="btn btn-primary" <?=$onclick?>>ACEPTAR</button> 
	<button class="btn btn-default" data-dismiss="modal">CANCELAR</button>
</center>