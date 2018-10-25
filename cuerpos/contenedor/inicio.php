<br>
<?php @session_start(); ?>
<div class="row">
	<div class="col-md-3 col-sm-3 "></div>
        <div class="col-md-6  col-sm-6  thumbnail " style="border: none">

		<div class="navbar navbar-inverse" style="color:#fff;border-radius:10px;">
			<br>
				<!-------------->
				<div class="col-md-4  col-sm-4 col-xs-4">
					<img src="css-js/assets/img/img_avatar.png" style="width:90%;heigt:90%;border-radius:100px;border:solid">
				</div>
				<div class="col-md-8  col-sm-8 col-xs-8">
					<?php 
					if(!isset($_SESSION['NOMBRE-KEY'])){ ?>
					<form method="POST" id="inicioForm" onsubmit="return false;" name="inicioForm">
						<label>USUARIO</label>
						<input type="text" name="nombre_usuarios" class="form-control">
						<br>
						<label>CONTRASEÑA</label>
						<input name="contrasenia" type="password" class="form-control">
						<br>
						<button class="btn btn-success" onclick="iniciar();" >INICIAR SESIÓN</button>
						<!---------------->
						<div id="foot"></div>
						<!---------------->
					</form>
					<?php } else{?>
                                    <label class="text-uppercase"><p>NOMBRE completo:</p>
                                        <b class="text-uppercase"><?=$_SESSION['NOMBRE-COMPLETO-KEY']?></b>
                                    </label>
                                    <hr>
                                    <a href="cerrar.php"><button class="btn btn-danger"><b>(CERRAR SESION)</b></button></a>
                                            <?php } ?>
					</div>
					<div class="col-md-12  col-sm-12 col-xs-12">
						<br>
					</div>
				<!-------------->
		</div>
	</div>
	<div class="col-md-3  col-sm-3 col-xs-3"></div>
</div>