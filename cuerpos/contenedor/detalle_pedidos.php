<?php include ('../../php/Conexion_detalle_pedidos.php'); ?>
<button class="btn btn-success btn btn-xs text-uppercase" 
data-toggle="modal" data-target="#modal" onclick="modalFormulario('detalle_pedidos.php','AGREGAR detalle_pedidos')"> <b>+</b> detalle_pedidos</button>
<p></p>
<div class="row">
	<div class="col-md-12">
		<!---->
		<div class="input-group" id="adv-search">
			<input type="text" class="form-control" id="detalle_pedidos" name="detalle_pedidos" placeholder="Buscar detalle_pedidos..."/>
			<div class="input-group-btn">
				<div class="btn-group" role="group">
					<button onclick="busca_detalle_pedidos();" type="button" class="btn btn-primary form-control"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
				</div>
			</div>
		</div>
		<!---->
	</div>
</div>
<p></p>
<div id="tabla_detalle_pedidos">
<?php include '../../cuerpos/tabla/detalle_pedidos.php'; ?>
</div>
<script>
function busca_detalle_pedidos(){
	$('#tabla_detalle_pedidos').load("cuerpos/tabla/detalle_pedidos.php?detalle_pedidos="+$("#detalle_pedidos").val());
}
</script>
