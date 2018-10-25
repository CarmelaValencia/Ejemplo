<?php

include ('../../php/Conexion_platillos.php');

$tipo="";$descuento="";$foto="";$precio="";$nombre_platillos="";$id_platillos="";
if($_GET['param']!='undefined'){
	$conexion=new Conexion_platillos();
	$datos=$conexion->recuperar_platillos();
	foreach($datos as $dato){
		$tipo="value='".$dato['tipo']."'";$descuento="value='".$dato['descuento']."'";$foto="value='".$dato['foto']."'";$precio="value='".$dato['precio']."'";$nombre_platillos="value='".$dato['nombre_platillos']."'";$id_platillos="value='".$dato['id_platillos']."'";
	}
}
?>
<form method="POST" onsubmit="return false;"  enctype="multipart/form-data" id="platillosForm">
	<div class="row">
		<div class="col-md-12 col-sm-12">
                
               
<label class="text-uppercase">id_platillos</label>
               
<input  required type="text" class="form-control text-uppercase" name="id_platillos" <?=$id_platillos?>
 maxlength="40">
                        
               
<label class="text-uppercase">nombre_platillos</label>
               
<input  required type="text" class="form-control text-uppercase" name="nombre_platillos" <?=$nombre_platillos?>
 maxlength="40">
                        
               
<label class="text-uppercase">precio</label>
               
<input  required type="text" class="form-control text-uppercase" name="precio" <?=$precio?>
 maxlength="40">
                        
               
<label class="text-uppercase">foto</label>
               
<input  required type="text" class="form-control text-uppercase" name="foto" <?=$foto?>
 maxlength="40">
                        
               
<label class="text-uppercase">descuento</label>
               
<input  required type="text" class="form-control text-uppercase" name="descuento" <?=$descuento?>
 maxlength="40">
                        
               
<label class="text-uppercase">tipo</label>
               
<input  required type="text" class="form-control text-uppercase" name="tipo" <?=$tipo?>
 maxlength="40">
                        
		</div>
	<div class="col-md-12">
		<br>
		<center>

			<button class="btn btn-primary" 
				<?php if($_GET['param']=='undefined'){echo "onclick='crear_platillos(1)'";} else {echo "onclick='modificar_platillos(".$_GET['param'].")'";}?>
			type="submit">ACEPTAR</button>
			<button class="btn btn-default" data-dismiss="modal">CANCELAR</button>
		</center>
	</div>
	</div>
</form>
