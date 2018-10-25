<html>
<head>
	<title>3-CLOUD</title>
</head>
<!------------------>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css-js/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="css-js/css/bootstrap.min.css">
    
    <script src="css-js/js/jquery-1.11.2.min.js"></script>
    <script src="css-js/js/bootstrap.min.js"></script>
    <script src="css-js/js/cuerpos.js"></script>
    <script src="css-js/actionCrud/mensajes.js"></script>
    <style>
        .navbar-inverse{
        background-image:url(btn/fondo.png);
        background-position:center center;
        -webkit-background-size:cover;
        -moz-background-size:cover;
        -o-background-size:cover;
        background-size:cover;
        }
        
        .btn-success{
        background-image:url(btn/success.png);
        background-position:center center;
        -webkit-background-size:cover;
        -moz-background-size:cover;
        -o-background-size:cover;
        background-size:cover;
        }
        .btn-primary{
        background-image:url(btn/info.png);
        background-position:center center;
        -webkit-background-size:cover;
        -moz-background-size:cover;
        -o-background-size:cover;
        background-size:cover;
        }
        .btn-danger{
        background-image:url(btn/danger.png);
        background-position:center center;
        -webkit-background-size:cover;
        -moz-background-size:cover;
        -o-background-size:cover;
        background-size:cover;
        }
        .btn-default{
        background-image:url(btn/default.png);
        background-position:center center;
        -webkit-background-size:cover;
        -moz-background-size:cover;
        -o-background-size:cover;
        background-size:cover;
        }
        </style>
<!------------------>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<body >
	<!-------------->
<div id="menu">
<nav class="navbar navbar-inverse" role="navigation" style="border:none">
  <!-- El logotipo  -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
          <!--ul class="nav navbar-nav navbar-left">
          	<a href="#" style="color:#000">3-CLOUD</a>
          </ul-->
  </div>
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav navbar-right text-uppercase">
      <?php session_start(); ?>
    	<!----------Elementos del Menu---------->
<?php include 'menu.php'; ?>
        <!----------Fin Elementos del Menu---------->
    </ul>
  </div>
</nav>
</div>
	<!-------------->
	<div class="thumbnail container" id="contenedorPrincipal">
		<?php include "cuerpos/contenedor/inicioPagina.php"; ?>
    </div>
<script>
    $(document).ready(function () {
        $('ul.nav > li').click(function (e) {
            //e.preventDefault();
            $('ul.nav > li').removeClass('active');
            $(this).addClass('active');
        });
    });
        function ce(){
            location.href = "cerrar.php";
        }
</script>
<?php include 'modal.php'; ?>
  <footer class="footer full-reset navbar-inverse" style="color:#fff">
      <div class="container-fluid">
          
              <div class="col-xs-12 col-sm-6">
                  <h4 class="all-tittles">Acerca de</h4>
                  <p>
Esta aplicacion fue creado por WEB_APP_CREATOR de la empresa 3-CLOUD para crear el crud de la BD use WEB_APP_CREATOR para agregar estilos a esta pagina se realiza de manera manuala ya que la aplicacion solo se encarga de crear el crud de cada tabla sin estilos
                  </p>
              </div>
              <div class="col-xs-12 col-sm-6">
                  <h4 class="all-tittles">Desarrollador</h4>
                  <ul class="list-unstyled">
                      <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; 3-CLOUD </li>
                  </ul>
              </div>
          
      </div>
      <div class=" container text-center footer-copyright full-reset all-tittles">© 2018 3-CLOUD</div>
  </footer>        

</div>
</body>
</html>
﻿<script src="css-js/actionCrud/detalle_pedidos.js"></script>
﻿<script src="css-js/actionCrud/pedidos.js"></script>
﻿<script src="css-js/actionCrud/platillos.js"></script>
﻿<script src="css-js/actionCrud/usuarios.js"></script>
