<div class="alert alert-success" style="border-radius: 50px;border-bottom-style: solid;border-bottom-width: 5px;border-top-style: none;">
    <div class="row">
        <div class="col-md-1 col-sm-1 col-xs-1">
            <button onclick="desmanece()" style="border: none;border-radius: 100px" class="btn btn-primary btn-lg text-left"><b>X</b></button>
        </div>
        <div class="col-md-10">
            <b style="font-size: 20px">ÉXITO AL GUARDAR</b>
        </div>
        <div class="col-md-1 col-sm-1 col-xs-1"></div>
    </div>
</div>
<script>
    document.getElementById("<?=$_GET['form']?>").reset();
</script>
<script>
    
    function desmanece(){
        $('#foot').fadeOut(2000);
    }
    setInterval(desmanece,8000);
</script>