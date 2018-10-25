function crear_usuarios($param){
    var data=new FormData(document.getElementById('usuariosForm'));
    $.ajax({
        data: data,
        url: "php/usuarios.php?crear_usuarios=1",
        type: "POST",
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false,
        beforeSend:function(objeto){}
        ,
        success:llegado,
        complete:function(){
            $("#tabla_usuarios").load("cuerpos/tabla/usuarios.php?usuarios="+$("#usuarios").val());
        },
        error:problemas,
    });    
}
function modificar_usuarios($param){
    var data=new FormData(document.getElementById('usuariosForm'));
    $.ajax({
        data: data,
        url: "php/usuarios.php?modificar_usuarios="+$param,
        type: "POST",
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false,
        beforeSend:function(objeto){},
        success:llegado,
        complete:function(){
            $("#tabla_usuarios").load("cuerpos/tabla/usuarios.php?usuarios="+$("#usuarios").val());
        },
        error:problemas,
    });
}

function eliminar_usuarios($param){
    $.ajax({
        url: "php/usuarios.php?eliminar_usuarios="+$param,
        type: "POST",
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false,
        beforeSend:function(objeto){},
        success:llegado,
        complete:function(){
            $("#tabla_usuarios").load("cuerpos/tabla/usuarios.php?usuarios="+$("#usuarios").val());
        },
        error:problemas,
    });
}

function iniciar(){
    var data=new FormData(document.getElementById("inicioForm"));
    $.ajax({
        data: data,
        url: "php/usuarios.php?iniciar=1",
        type: "POST",
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false,
        beforeSend:function(objeto){},
        success:llegado,
        error:problemas,
    });
}


