<?php

include ('../../php/Conexion_pedidos.php');

$cobrado="";$nombre_mesa="";$id_pedidos="";
if($_GET['param']!='undefined'){
	$conexion=new Conexion_pedidos();
	$datos=$conexion->recuperar_pedidos();
	foreach($datos as $dato){
		$cobrado="value='".$dato['cobrado']."'";$nombre_mesa="value='".$dato['nombre_mesa']."'";$id_pedidos="value='".$dato['id_pedidos']."'";
	}
}
?>
<form method="POST" onsubmit="return false;"  enctype="multipart/form-data" id="pedidosForm">
	<div class="row">
		<div class="col-md-12 col-sm-12">
                
               
<label class="text-uppercase">id_pedidos</label>
               
<input  required type="text" class="form-control text-uppercase" name="id_pedidos" <?=$id_pedidos?>
 maxlength="40">
                        
               
<label class="text-uppercase">nombre_mesa</label>
               
<input  required type="text" class="form-control text-uppercase" name="nombre_mesa" <?=$nombre_mesa?>
 maxlength="40">
                        
               
<label class="text-uppercase">cobrado</label>
               
<input  required type="text" class="form-control text-uppercase" name="cobrado" <?=$cobrado?>
 maxlength="40">
                        
		</div>
	<div class="col-md-12">
		<br>
		<center>

			<button class="btn btn-primary" 
				<?php if($_GET['param']=='undefined'){echo "onclick='crear_pedidos(1)'";} else {echo "onclick='modificar_pedidos(".$_GET['param'].")'";}?>
			type="submit">ACEPTAR</button>
			<button class="btn btn-default" data-dismiss="modal">CANCELAR</button>
		</center>
	</div>
	</div>
</form>
