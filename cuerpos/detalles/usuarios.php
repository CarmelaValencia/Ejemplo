<?php include ("../../php/Conexion_usuarios.php");	$conexion=new Conexion_usuarios();
	$datos=$conexion->recuperar_usuarios();foreach($datos as $dato){ ?>
<label class="text-uppercase"><b>foto:</b></label><p class="text-uppercase"><?=$dato['foto']?></p>
<label class="text-uppercase"><b>nombre completo:</b></label><p class="text-uppercase"><?=$dato['nombre_real']?></p>
<label class="text-uppercase"><b>nombre de usuario:</b></label><p class="text-uppercase"><?=$dato['nombre_usuarios']?></p>
<label class="text-uppercase"><b>tipo:</b></label><p class="text-uppercase"><?php if($dato['tipo']==3){echo 'MESERO';}if($dato['tipo']==2){echo 'ADMINISTRADOR';}?></p>
<?php } ?>
