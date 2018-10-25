function cuerpos($url){
	$('#contenedorPrincipal').load('cuerpos/contenedor/'+$url);
}
function modalFormulario($url,$titulo,$param){
	$('#foot').html('');
	$('#modalTitulo').html($titulo);
	$('#modalContent').load('cuerpos/formularios/'+$url+'?param='+$param);
}

function modalEliminar($url,$titulo,$param){
	$('#foot').html('');
	$('#modalTitulo').html($titulo);
	$('#modalContent').load('cuerpos/mensajes/'+$url+'?param='+$param);
}

function modalDetalles($url,$titulo,$param){
	$('#foot').html('');
	$('#modalTitulo').html($titulo);
	$('#modalContent').load('cuerpos/detalles/'+$url+'?param='+$param);	
}