<?php include ("../../php/Conexion_platillos.php");	$conexion=new Conexion_platillos();
	$datos=$conexion->recuperar_platillos();foreach($datos as $dato){ ?>
<label class="text-uppercase"><b>foto:</b></label><p class="text-uppercase"><?=$dato['foto']?></p><label class="text-uppercase"><b>nombre_platillos:</b></label><p class="text-uppercase"><?=$dato['nombre_platillos']?></p><label class="text-uppercase"><b>precio:</b></label><p class="text-uppercase"><?=$dato['precio']?></p><label class="text-uppercase"><b>tipo:</b></label><p class="text-uppercase"><?=$dato['tipo']?></p><label class="text-uppercase"><b>descuento:</b></label><p class="text-uppercase"><?=$dato['descuento']?></p>
<?php } ?>
