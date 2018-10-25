<?php

include ('../../php/Conexion_detalle_pedidos.php');

$proceso="";$precio_unit="";$id_platillos_fk="";$id_pedidos_fk="";$id_detalle_pedidos="";
if($_GET['param']!='undefined'){
	$conexion=new Conexion_detalle_pedidos();
	$datos=$conexion->recuperar_detalle_pedidos();
	foreach($datos as $dato){
		$proceso="value='".$dato['proceso']."'";$precio_unit="value='".$dato['precio_unit']."'";$id_platillos_fk="value='".$dato['id_platillos_fk']."'";$id_pedidos_fk="value='".$dato['id_pedidos_fk']."'";$id_detalle_pedidos="value='".$dato['id_detalle_pedidos']."'";
	}
}
?>
<form method="POST" onsubmit="return false;"  enctype="multipart/form-data" id="detalle_pedidosForm">
	<div class="row">
		<div class="col-md-12 col-sm-12">
                
               
<label class="text-uppercase">id_detalle_pedidos</label>
               
<input  required type="text" class="form-control text-uppercase" name="id_detalle_pedidos" <?=$id_detalle_pedidos?>
 maxlength="40">
                        
               
<label class="text-uppercase">id_pedidos_fk</label>
               
<input  required type="text" class="form-control text-uppercase" name="id_pedidos_fk" <?=$id_pedidos_fk?>
 maxlength="40">
                        
               
<label class="text-uppercase">id_platillos_fk</label>
               
<input  required type="text" class="form-control text-uppercase" name="id_platillos_fk" <?=$id_platillos_fk?>
 maxlength="40">
                        
               
<label class="text-uppercase">precio_unit</label>
               
<input  required type="text" class="form-control text-uppercase" name="precio_unit" <?=$precio_unit?>
 maxlength="40">
                        
               
<label class="text-uppercase">proceso</label>
               
<input  required type="text" class="form-control text-uppercase" name="proceso" <?=$proceso?>
 maxlength="40">
                        
		</div>
	<div class="col-md-12">
		<br>
		<center>

			<button class="btn btn-primary" 
				<?php if($_GET['param']=='undefined'){echo "onclick='crear_detalle_pedidos(1)'";} else {echo "onclick='modificar_detalle_pedidos(".$_GET['param'].")'";}?>
			type="submit">ACEPTAR</button>
			<button class="btn btn-default" data-dismiss="modal">CANCELAR</button>
		</center>
	</div>
	</div>
</form>
