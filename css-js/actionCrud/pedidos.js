function crear_pedidos($param){
    var data=new FormData(document.getElementById('pedidosForm'));
    $.ajax({
        data: data,
        url: "php/pedidos.php?crear_pedidos=1",
        type: "POST",
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false,
        beforeSend:function(objeto){}
        ,
        success:llegado,
        complete:function(){
            $("#tabla_pedidos").load("cuerpos/tabla/pedidos.php?pedidos="+$("#pedidos").val());
        },
        error:problemas,
    });    
}
function modificar_pedidos($param){
    var data=new FormData(document.getElementById('pedidosForm'));
    $.ajax({
        data: data,
        url: "php/pedidos.php?modificar_pedidos="+$param,
        type: "POST",
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false,
        beforeSend:function(objeto){},
        success:llegado,
        complete:function(){
            $("#tabla_pedidos").load("cuerpos/tabla/pedidos.php?pedidos="+$("#pedidos").val());
        },
        error:problemas,
    });
}

function eliminar_pedidos($param){
    $.ajax({
        url: "php/pedidos.php?eliminar_pedidos="+$param,
        type: "POST",
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false,
        beforeSend:function(objeto){},
        success:llegado,
        complete:function(){
            $("#tabla_pedidos").load("cuerpos/tabla/pedidos.php?pedidos="+$("#pedidos").val());
        },
        error:problemas,
    });
}




