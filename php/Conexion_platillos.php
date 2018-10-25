<?php
require_once "Conexion.php";	
	
class Conexion_platillos extends Conexion {
    public function __construct() {
        parent::__construct();
    }
    public function buscar_platillos(){
        $platillos="";
            if(isset($_GET['platillos'])){
                $platillos=$_GET['platillos'];
            }
        return $this->db->query("select * from platillos where nombre_platillos like  '%$platillos%'");
    }
    
    public function recuperar_platillos(){
        return $this->db->query("select * from platillos where id_platillos=".$_GET['param']);
    }
    
    public function eliminar_platillos(){
        return $this->db->query("delete from platillos where id_platillos=".$_GET['eliminar_platillos']);
    }
    
    public function crear_platillos(){
        return $this->db->query("insert into platillos values(0,'".$_POST['nombre_platillos']."','".$_POST['precio']."','".$_POST['foto']."','".$_POST['descuento']."','".$_POST['tipo']."');");
    }
    
    public function modificar_platillos(){
        return $this->db->query("update platillos set nombre_platillos='".$_POST['nombre_platillos']."',precio='".$_POST['precio']."',foto='".$_POST['foto']."',descuento='".$_POST['descuento']."',tipo='".$_POST['tipo']."' where id_platillos=".$_GET['modificar_platillos']);
    }
    
}
