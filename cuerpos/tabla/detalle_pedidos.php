<?php if(isset($_GET['detalle_pedidos'])){
    include ('../../php/Conexion_detalle_pedidos.php');
        }
        ?><table class="table text-uppercase table-responsive table-bordered pre-scrollable">
	<thead>
        <th>proceso</th><th>precio_unit</th><th>id_platillos_fk</th><th>id_pedidos_fk</th><th>id_detalle_pedidos</th>
	</thead>
	<tbody id="tabla-usuarios" class="text-center">
		<?php 
		$datos=new Conexion_detalle_pedidos();
		$datos=$datos->buscar_detalle_pedidos();
		foreach($datos as $dato){ ?>
		<tr><th ><?=$dato['proceso']?></th><th ><?=$dato['precio_unit']?></th><th ><?=$dato['id_platillos_fk']?></th><th ><?=$dato['id_pedidos_fk']?></th><th ><?=$dato['id_detalle_pedidos']?></th>
			<th >
				<center>
					<li 
data-toggle="modal" data-target="#modal" onclick="modalDetalles('detalle_pedidos.php','detalles DE detalle_pedidos','<?=$dato['id_detalle_pedidos']?>')"class="zmdi zmdi-eye btn btn-success"></li>
				</center>
			</th>
			<th>
				<li class="btn btn-primary zmdi zmdi-edit"
				data-toggle="modal" data-target="#modal" title="Editar Información" onclick="modalFormulario('detalle_pedidos.php','MODIFICAR detalle_pedidos','<?=$dato['id_detalle_pedidos']?>')"></li>

				<li class="btn btn-danger zmdi zmdi-delete"
				data-toggle="modal" data-target="#modal" title="Eliminar Registro" onclick="modalEliminar('eliminar.php','ELIMINAR detalle_pedidos','id&eliminar_detalle_pedidos=<?=$dato['id_detalle_pedidos']?>&tipo=detalle_pedidos')"
				></li>
			</th>
		</tr>
		<?php } ?>
	</tbody>
</table>
