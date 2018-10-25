      <li onclick="cuerpos('inicioPagina.php')" class="active"><a href="#" style="color:#fff">INICIO</a></li>
﻿      <li onclick="cuerpos('inicio.php')" class=""><a href="#" style="color:#fff"><?php if(isset($_SESSION['NOMBRE-KEY'])){ echo '('.$_SESSION['NOMBRE-KEY'].')';?><?php }else{ ?>SESION<?php } ?></a></li>
﻿<li onclick="cuerpos('detalle_pedidos.php')" class=""><a href="#" style="color:#fff">detalle_pedidos</a></li>
﻿<li onclick="cuerpos('pedidos.php')" class=""><a href="#" style="color:#fff">pedidos</a></li>
﻿<li onclick="cuerpos('platillos.php')" class=""><a href="#" style="color:#fff">platillos</a></li>
﻿<li onclick="cuerpos('usuarios.php')" class=""><a href="#" style="color:#fff">usuarios</a></li>
