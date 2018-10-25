<?php
require_once "Conexion.php";	
	
class Conexion_detalle_pedidos extends Conexion {
    public function __construct() {
        parent::__construct();
    }
    public function buscar_detalle_pedidos(){
        $detalle_pedidos="";
            if(isset($_GET['detalle_pedidos'])){
                $detalle_pedidos=$_GET['detalle_pedidos'];
            }
        return $this->db->query("select * from detalle_pedidos where nombre_detalle_pedidos like  '%$detalle_pedidos%'");
    }
    
    public function recuperar_detalle_pedidos(){
        return $this->db->query("select * from detalle_pedidos where id_detalle_pedidos=".$_GET['param']);
    }
    
    public function eliminar_detalle_pedidos(){
        return $this->db->query("delete from detalle_pedidos where id_detalle_pedidos=".$_GET['eliminar_detalle_pedidos']);
    }
    
    public function crear_detalle_pedidos(){
        return $this->db->query("insert into detalle_pedidos values(0,'".$_POST['id_pedidos_fk']."','".$_POST['id_platillos_fk']."','".$_POST['precio_unit']."','".$_POST['proceso']."');");
    }
    
    public function modificar_detalle_pedidos(){
        return $this->db->query("update detalle_pedidos set id_pedidos_fk='".$_POST['id_pedidos_fk']."',id_platillos_fk='".$_POST['id_platillos_fk']."',precio_unit='".$_POST['precio_unit']."',proceso='".$_POST['proceso']."' where id_detalle_pedidos=".$_GET['modificar_detalle_pedidos']);
    }
    
}
