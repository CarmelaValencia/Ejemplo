<div class="alert alert-success">
    <div class="text-left">
        <button class="btn btn-default" style="border: none" onclick="desmanece()">
        <li class="zmdi zmdi-close-circle"></li>
    </button>
    </div>
    <b>ÉXITO AL MODIFICAR</b>
</div>
<script>
    
    function desmanece(){
        $('#foot').fadeOut(2000);
    }
    setInterval(desmanece,8000);
</script>