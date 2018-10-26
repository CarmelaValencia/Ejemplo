<?php
require_once "Conexion.php";	
	
class Conexion_usuarios extends Conexion {
    public function __construct() {
        parent::__construct();
    }
    public function buscar_usuarios(){
        $usuarios="";
            if(isset($_GET['usuarios'])){
                $usuarios=$_GET['usuarios'];
            }
        return $this->db->query("select * from usuarios where nombre_usuarios like  '%$usuarios%' and tipo!=1");
    }
    
    public function recuperar_usuarios(){
        return $this->db->query("select * from usuarios where id_usuarios=".$_GET['param']);
    }
    
    public function eliminar_usuarios(){
        return $this->db->query("delete from usuarios where id_usuarios=".$_GET['eliminar_usuarios']);
    }
    
    public function crear_usuarios(){
        return $this->db->query("insert into usuarios values(0,'".$_POST['nombre_usuarios']."',sha1('".$_POST['contrasenia']."'),'".$_POST['nombre_real']."','".$_POST['tipo']."','".$_POST['foto']."');");
    }
    
    public function modificar_usuarios(){
        return $this->db->query("update usuarios set nombre_usuarios='".$_POST['nombre_usuarios']."',contrasenia='".$_POST['contrasenia']."',nombre_real='".$_POST['nombre_real']."',tipo='".$_POST['tipo']."',foto='".$_POST['foto']."' where id_usuarios=".$_GET['modificar_usuarios']);
    }
        public function iniciarSesion(){
        $consulta=$this->db->query("select * from usuarios where nombre_usuarios='".$_POST['nombre_usuarios']."' && contrasenia=sha1('".$_POST['contrasenia']."')");
            foreach ($consulta as $key) {
            @session_start();
            $_SESSION['NOMBRE-KEY']=$key['nombre_usuarios'];
            $_SESSION['TIPO']=$key['tipo'];
                return "1";
           }
    }
}
