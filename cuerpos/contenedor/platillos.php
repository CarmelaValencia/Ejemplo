<?php include ('../../php/Conexion_platillos.php'); ?>
<button class="btn btn-success btn btn-xs text-uppercase" 
data-toggle="modal" data-target="#modal" onclick="modalFormulario('platillos.php','AGREGAR platillos')"> <b>+</b> platillos</button>
<p></p>
<div class="row">
	<div class="col-md-12">
		<!---->
		<div class="input-group" id="adv-search">
			<input type="text" class="form-control" id="platillos" name="platillos" placeholder="Buscar platillos..."/>
			<div class="input-group-btn">
				<div class="btn-group" role="group">
					<button onclick="busca_platillos();" type="button" class="btn btn-primary form-control"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
				</div>
			</div>
		</div>
		<!---->
	</div>
</div>
<p></p>
<div id="tabla_platillos">
<?php include '../../cuerpos/tabla/platillos.php'; ?>
</div>
<script>
function busca_platillos(){
	$('#tabla_platillos').load("cuerpos/tabla/platillos.php?platillos="+$("#platillos").val());
}
</script>
