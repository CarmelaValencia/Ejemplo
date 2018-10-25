function llegado(data){
//llego datos para validar el tipo de mensje a ver
var d2=data.split('-');
$('#foot').load(d2[1]).fadeIn(1000);
    if(d2[0]!=''){
        if(d2[0]!=1){
            $('#footErr').html('\
<div class="alert-danger" style="border-radius: 50px;border-top-style: solid;border-top-width: 5px;border-bottom-style: none">\n\
<div class="text-center">\n\
<b>'+d2[0]+'</b></div>\n\
<script>function desmanece(){$("#footErr").fadeOut(2000);}setInterval(desmanece,15000);</script>').fadeIn(1000);
        }
    } else{
        $('#footErr').html('');
    }
}
function problemas(){
	$('#foot').html('<div class="alert alert-default">ERROR DE CONEXION</di>');
}