<?php include ('../../php/Conexion_pedidos.php'); ?>
<button class="btn btn-success btn btn-xs text-uppercase" 
data-toggle="modal" data-target="#modal" onclick="modalFormulario('pedidos.php','AGREGAR pedidos')"> <b>+</b> pedidos</button>
<p></p>
<div class="row">
	<div class="col-md-12">
		<!---->
		<div class="input-group" id="adv-search">
			<input type="text" class="form-control" id="pedidos" name="pedidos" placeholder="Buscar pedidos..."/>
			<div class="input-group-btn">
				<div class="btn-group" role="group">
					<button onclick="busca_pedidos();" type="button" class="btn btn-primary form-control"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
				</div>
			</div>
		</div>
		<!---->
	</div>
</div>
<p></p>
<div id="tabla_pedidos">
<?php include '../../cuerpos/tabla/pedidos.php'; ?>
</div>
<script>
function busca_pedidos(){
	$('#tabla_pedidos').load("cuerpos/tabla/pedidos.php?pedidos="+$("#pedidos").val());
}
</script>
