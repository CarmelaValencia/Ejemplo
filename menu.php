<li onclick="cuerpos('inicioPagina.php')" class="active"><a href="#" style="color:#fff">INICIO</a></li>
<li onclick="cuerpos('inicioPagina.php')" class="active"><a href="#" style="color:#fff">NOSOTROS</a></li>
<li onclick="cuerpos('platillos.php')" class=""><a href="#" style="color:#fff">platillos</a></li>
<li onclick="cuerpos('inicio.php')" class=""><a href="#" style="color:#fff"><?php if(isset($_SESSION['NOMBRE-KEY'])){ echo '('.$_SESSION['NOMBRE-KEY'].')';?><?php }else{ ?>INICIAR SESION<?php } ?></a></li>
    <?php @session_start(); if(isset($_SESSION['NOMBRE-KEY'])){ ?>
    <li onclick="cuerpos('detalle_pedidos.php')" class=""><a href="#" style="color:#fff">detalle_pedidos</a></li>
    <li onclick="cuerpos('pedidos.php')" class=""><a href="#" style="color:#fff">pedidos</a></li>
    <?php if($_SESSION['TIPO']==1){ ?>
    <li onclick="cuerpos('usuarios.php')" class=""><a href="#" style="color:#fff">usuarios</a></li>
    <?php } }?>

