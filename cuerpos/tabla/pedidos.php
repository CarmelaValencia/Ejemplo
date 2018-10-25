<?php if(isset($_GET['pedidos'])){
    include ('../../php/Conexion_pedidos.php');
        }
        ?><table class="table text-uppercase table-responsive table-bordered pre-scrollable">
	<thead>
        <th>cobrado</th><th>nombre_mesa</th><th>id_pedidos</th>
	</thead>
	<tbody id="tabla-usuarios" class="text-center">
		<?php 
		$datos=new Conexion_pedidos();
		$datos=$datos->buscar_pedidos();
		foreach($datos as $dato){ ?>
		<tr><th ><?=$dato['cobrado']?></th><th ><?=$dato['nombre_mesa']?></th><th ><?=$dato['id_pedidos']?></th>
			<th >
				<center>
					<li 
data-toggle="modal" data-target="#modal" onclick="modalDetalles('pedidos.php','detalles DE pedidos','<?=$dato['id_pedidos']?>')"class="zmdi zmdi-eye btn btn-success"></li>
				</center>
			</th>
			<th>
				<li class="btn btn-primary zmdi zmdi-edit"
				data-toggle="modal" data-target="#modal" title="Editar Información" onclick="modalFormulario('pedidos.php','MODIFICAR pedidos','<?=$dato['id_pedidos']?>')"></li>

				<li class="btn btn-danger zmdi zmdi-delete"
				data-toggle="modal" data-target="#modal" title="Eliminar Registro" onclick="modalEliminar('eliminar.php','ELIMINAR pedidos','id&eliminar_pedidos=<?=$dato['id_pedidos']?>&tipo=pedidos')"
				></li>
			</th>
		</tr>
		<?php } ?>
	</tbody>
</table>
