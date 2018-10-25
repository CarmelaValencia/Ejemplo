<?php if(isset($_GET['platillos'])){
    include ('../../php/Conexion_platillos.php');
        }
        ?><table class="table text-uppercase table-responsive table-bordered pre-scrollable">
	<thead>
        <th>tipo</th><th>descuento</th><th>foto</th><th>precio</th><th>nombre_platillos</th><th>id_platillos</th>
	</thead>
	<tbody id="tabla-usuarios" class="text-center">
		<?php 
		$datos=new Conexion_platillos();
		$datos=$datos->buscar_platillos();
		foreach($datos as $dato){ ?>
		<tr><th ><?=$dato['tipo']?></th><th ><?=$dato['descuento']?></th><th ><?=$dato['foto']?></th><th ><?=$dato['precio']?></th><th ><?=$dato['nombre_platillos']?></th><th ><?=$dato['id_platillos']?></th>
			<th >
				<center>
					<li 
data-toggle="modal" data-target="#modal" onclick="modalDetalles('platillos.php','detalles DE platillos','<?=$dato['id_platillos']?>')"class="zmdi zmdi-eye btn btn-success"></li>
				</center>
			</th>
			<th>
				<li class="btn btn-primary zmdi zmdi-edit"
				data-toggle="modal" data-target="#modal" title="Editar Información" onclick="modalFormulario('platillos.php','MODIFICAR platillos','<?=$dato['id_platillos']?>')"></li>

				<li class="btn btn-danger zmdi zmdi-delete"
				data-toggle="modal" data-target="#modal" title="Eliminar Registro" onclick="modalEliminar('eliminar.php','ELIMINAR platillos','id&eliminar_platillos=<?=$dato['id_platillos']?>&tipo=platillos')"
				></li>
			</th>
		</tr>
		<?php } ?>
	</tbody>
</table>
