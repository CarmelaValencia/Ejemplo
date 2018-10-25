<div class="alert alert-danger" style="border-radius: 50px;border-bottom-style: solid;border-bottom-width: 5px;border-top-style: none;">
    <div class="row">
        <div class="col-md-1 col-sm-1 col-xs-1">
            <button onclick="desmanece()" style="border: none;border-radius: 100px" class="btn btn-warning btn-lg text-left"><b>X</b></button>
        </div>
        <div class="col-md-10">
            <b style="font-size: 20px">ERROR AL GUARDAR</b>
        </div>
        <div class="col-md-1 col-sm-1 col-xs-1"></div>
    </div>
</div>
<script>
    
    function desmanece(){
        $('#footErr').fadeOut(2000);
        $('#foot').fadeOut(2000);
    }
    setInterval(desmanece,15000);
</script>