<?php include ('../../php/Conexion_usuarios.php'); ?>
<button class="btn btn-success btn btn-xs text-uppercase" 
data-toggle="modal" data-target="#modal" onclick="modalFormulario('usuarios.php','AGREGAR usuarios')"> <b>+</b> usuarios</button>
<p></p>
<div class="row">
	<div class="col-md-12">
		<!---->
		<div class="input-group" id="adv-search">
			<input type="text" class="form-control" id="usuarios" name="usuarios" placeholder="Buscar usuarios..."/>
			<div class="input-group-btn">
				<div class="btn-group" role="group">
					<button onclick="busca_usuarios();" type="button" class="btn btn-primary form-control"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
				</div>
			</div>
		</div>
		<!---->
	</div>
</div>
<p></p>
<div id="tabla_usuarios">
<?php include '../../cuerpos/tabla/usuarios.php'; ?>
</div>
<script>
function busca_usuarios(){
	$('#tabla_usuarios').load("cuerpos/tabla/usuarios.php?usuarios="+$("#usuarios").val());
}
</script>
