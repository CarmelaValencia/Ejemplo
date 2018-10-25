<?php
require_once "Conexion.php";	
	
class Conexion_pedidos extends Conexion {
    public function __construct() {
        parent::__construct();
    }
    public function buscar_pedidos(){
        $pedidos="";
            if(isset($_GET['pedidos'])){
                $pedidos=$_GET['pedidos'];
            }
        return $this->db->query("select * from pedidos where nombre_pedidos like  '%$pedidos%'");
    }
    
    public function recuperar_pedidos(){
        return $this->db->query("select * from pedidos where id_pedidos=".$_GET['param']);
    }
    
    public function eliminar_pedidos(){
        return $this->db->query("delete from pedidos where id_pedidos=".$_GET['eliminar_pedidos']);
    }
    
    public function crear_pedidos(){
        return $this->db->query("insert into pedidos values(0,'".$_POST['nombre_mesa']."','".$_POST['cobrado']."');");
    }
    
    public function modificar_pedidos(){
        return $this->db->query("update pedidos set nombre_mesa='".$_POST['nombre_mesa']."',cobrado='".$_POST['cobrado']."' where id_pedidos=".$_GET['modificar_pedidos']);
    }
    
}
