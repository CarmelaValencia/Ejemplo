<?php if(isset($_GET['usuarios'])){
    include ('../../php/Conexion_usuarios.php');
        }
        ?><table class="table text-uppercase table-responsive table-bordered pre-scrollable">
	<thead>
        <th>foto</th><th>tipo</th><th>nombre completo</th><th>nombre de usuario</th>
	</thead>
	<tbody id="tabla-usuarios" class="text-center">
		<?php 
		$datos=new Conexion_usuarios();
		$datos=$datos->buscar_usuarios();
		foreach($datos as $dato){ ?>
		<tr><th ><?=$dato['foto']?></th><th ><?=$dato['tipo']?></th><th ><?=$dato['nombre_real']?></th><th ><?=$dato['nombre_usuarios']?></th>
			<th >
				<center>
					<li 
data-toggle="modal" data-target="#modal" onclick="modalDetalles('usuarios.php','detalles DE usuarios','<?=$dato['id_usuarios']?>')"class="zmdi zmdi-eye btn btn-success"></li>
				</center>
			</th>
			<th>
				<li class="btn btn-primary zmdi zmdi-edit"
				data-toggle="modal" data-target="#modal" title="Editar Información" onclick="modalFormulario('usuarios.php','MODIFICAR usuarios','<?=$dato['id_usuarios']?>')"></li>

				<li class="btn btn-danger zmdi zmdi-delete"
				data-toggle="modal" data-target="#modal" title="Eliminar Registro" onclick="modalEliminar('eliminar.php','ELIMINAR usuarios','id&eliminar_usuarios=<?=$dato['id_usuarios']?>&tipo=usuarios')"
				></li>
			</th>
		</tr>
		<?php } ?>
	</tbody>
</table>
