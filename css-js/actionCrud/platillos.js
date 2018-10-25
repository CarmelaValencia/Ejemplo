function crear_platillos($param){
    var data=new FormData(document.getElementById('platillosForm'));
    $.ajax({
        data: data,
        url: "php/platillos.php?crear_platillos=1",
        type: "POST",
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false,
        beforeSend:function(objeto){}
        ,
        success:llegado,
        complete:function(){
            $("#tabla_platillos").load("cuerpos/tabla/platillos.php?platillos="+$("#platillos").val());
        },
        error:problemas,
    });    
}
function modificar_platillos($param){
    var data=new FormData(document.getElementById('platillosForm'));
    $.ajax({
        data: data,
        url: "php/platillos.php?modificar_platillos="+$param,
        type: "POST",
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false,
        beforeSend:function(objeto){},
        success:llegado,
        complete:function(){
            $("#tabla_platillos").load("cuerpos/tabla/platillos.php?platillos="+$("#platillos").val());
        },
        error:problemas,
    });
}

function eliminar_platillos($param){
    $.ajax({
        url: "php/platillos.php?eliminar_platillos="+$param,
        type: "POST",
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false,
        beforeSend:function(objeto){},
        success:llegado,
        complete:function(){
            $("#tabla_platillos").load("cuerpos/tabla/platillos.php?platillos="+$("#platillos").val());
        },
        error:problemas,
    });
}




