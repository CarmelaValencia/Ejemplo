<?php

include ('../../php/Conexion_usuarios.php');

$foto="";$tipo="";$nombre_real="";$contrasenia="";$nombre_usuarios="";$id_usuarios="";
if($_GET['param']!='undefined'){
	$conexion=new Conexion_usuarios();
	$datos=$conexion->recuperar_usuarios();
	foreach($datos as $dato){
		$foto="value='".$dato['foto']."'";$tipo="value='".$dato['tipo']."'";$nombre_real="value='".$dato['nombre_real']."'";$contrasenia="value='".$dato['contrasenia']."'";$nombre_usuarios="value='".$dato['nombre_usuarios']."'";$id_usuarios="value='".$dato['id_usuarios']."'";
	}
}
?>
<form method="POST" onsubmit="return false;"  enctype="multipart/form-data" id="usuariosForm">
	<div class="row">
		<div class="col-md-12 col-sm-12">
                
               
<label class="text-uppercase">id_usuarios</label>
               
<input  required type="text" class="form-control text-uppercase" name="id_usuarios" <?=$id_usuarios?>
 maxlength="40">
                        
               
<label class="text-uppercase">nombre_usuarios</label>
               
<input  required type="text" class="form-control text-uppercase" name="nombre_usuarios" <?=$nombre_usuarios?>
 maxlength="40">
                        
               
<label class="text-uppercase">contrasenia</label>
               
<input  required type="text" class="form-control text-uppercase" name="contrasenia" <?=$contrasenia?>
 maxlength="40">
                        
               
<label class="text-uppercase">nombre_real</label>
               
<input  required type="text" class="form-control text-uppercase" name="nombre_real" <?=$nombre_real?>
 maxlength="40">
                        
               
<label class="text-uppercase">tipo</label>
               
<input  required type="text" class="form-control text-uppercase" name="tipo" <?=$tipo?>
 maxlength="40">
                        
               
<label class="text-uppercase">foto</label>
               
<input  required type="text" class="form-control text-uppercase" name="foto" <?=$foto?>
 maxlength="40">
                        
		</div>
	<div class="col-md-12">
		<br>
		<center>

			<button class="btn btn-primary" 
				<?php if($_GET['param']=='undefined'){echo "onclick='crear_usuarios(1)'";} else {echo "onclick='modificar_usuarios(".$_GET['param'].")'";}?>
			type="submit">ACEPTAR</button>
			<button class="btn btn-default" data-dismiss="modal">CANCELAR</button>
		</center>
	</div>
	</div>
</form>
