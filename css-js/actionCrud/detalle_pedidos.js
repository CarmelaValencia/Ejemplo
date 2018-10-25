function crear_detalle_pedidos($param){
    var data=new FormData(document.getElementById('detalle_pedidosForm'));
    $.ajax({
        data: data,
        url: "php/detalle_pedidos.php?crear_detalle_pedidos=1",
        type: "POST",
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false,
        beforeSend:function(objeto){}
        ,
        success:llegado,
        complete:function(){
            $("#tabla_detalle_pedidos").load("cuerpos/tabla/detalle_pedidos.php?detalle_pedidos="+$("#detalle_pedidos").val());
        },
        error:problemas,
    });    
}
function modificar_detalle_pedidos($param){
    var data=new FormData(document.getElementById('detalle_pedidosForm'));
    $.ajax({
        data: data,
        url: "php/detalle_pedidos.php?modificar_detalle_pedidos="+$param,
        type: "POST",
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false,
        beforeSend:function(objeto){},
        success:llegado,
        complete:function(){
            $("#tabla_detalle_pedidos").load("cuerpos/tabla/detalle_pedidos.php?detalle_pedidos="+$("#detalle_pedidos").val());
        },
        error:problemas,
    });
}

function eliminar_detalle_pedidos($param){
    $.ajax({
        url: "php/detalle_pedidos.php?eliminar_detalle_pedidos="+$param,
        type: "POST",
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false,
        beforeSend:function(objeto){},
        success:llegado,
        complete:function(){
            $("#tabla_detalle_pedidos").load("cuerpos/tabla/detalle_pedidos.php?detalle_pedidos="+$("#detalle_pedidos").val());
        },
        error:problemas,
    });
}




