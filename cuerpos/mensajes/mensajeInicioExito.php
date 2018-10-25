<div class="alert alert-success">
    <div class="text-left">
        <button class="btn btn-default" style="border: none" onclick="desmanece()">
        <li class="zmdi zmdi-close-circle"></li>
    </button>
    </div>
	INICIO SESSION
	<?php session_start();
	echo $_SESSION['NOMBRE-KEY'];
	 ?>
	<script type="text/javascript">
	 location.reload(true);
	</script>
</div>
<script>
    
    function desmanece(){
        $('#foot').fadeOut(2000);
    }
    setInterval(desmanece,8000);
</script>