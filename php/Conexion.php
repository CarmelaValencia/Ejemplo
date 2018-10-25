﻿<?php	
	class Conexion {
		protected $db;
		public function __construct() {
			$this->db = @new mysqli("127.0.0.1","","","rest_dis");
			if($this->db->connect_errno) {
				echo "falto-conectar-a-mysql-".$this->db->connect_errno;
				return;
			}
			else {
				$this->db->set_charset("utf-8");
			}
		}	function fltrCad($cadena){
        $pasoUno= str_replace ( "'" , "" , $cadena);
        $pasoDos= str_replace ( "," , "" , $pasoUno);
        $pasoTres= str_replace ( "=" , "" , $pasoDos);
        $pasoCuatro= str_replace ( "'" , "" , $pasoTres);
        $pasoCinco= str_replace ( "&" , "" , $pasoCuatro);
        $pasoSeis= str_replace ( "|" , "" , $pasoCinco);
        $paso7= str_replace ( "/" , "" , $pasoSeis);
        $paso8= str_replace ( "}" , "" , $paso7);
        $paso9= str_replace ( "{" , "" , $paso8);
        $paso10= str_replace ( "-" , "" , $paso9);
        $paso11= str_replace ( "?" , "" , $paso10);
        $paso12= str_replace ( "¿" , "" , $paso11);
        $paso13= str_replace ( "(" , "" , $paso12);
        $paso14= str_replace ( ")" , "" , $paso13);
        $paso15= str_replace ( "$" , "" , $paso14);
        $paso16= str_replace ( "<" , "" , $paso15);
        $paso17= str_replace ( ">" , "" , $paso16);
        $paso18= str_replace ( "%" , "" , $paso17);
        $paso19= str_replace ( "#" , "" , $paso18);
        $paso20= str_replace ( "!" , "" , $paso19);
        $paso21= str_replace ( "+" , "" , $paso20);
        $paso22= str_replace ( "[" , "" , $paso21);
        $paso23= str_replace ( "]" , "" , $paso22);
        $paso24= str_replace ( "*" , "" , $paso23);
        $paso25= str_replace ( "^" , "" , $paso24);
        return $paso25;
    }

	function fltrCampVaci($cadena){
        $pasoUno= str_replace ( "'" , "" , $cadena);
        $pasoDos= str_replace ( "," , "" , $pasoUno);
        $pasoTres= str_replace ( "=" , "" , $pasoDos);
        $pasoCuatro= str_replace ( "'" , "" , $pasoTres);
        $pasoCinco= str_replace ( "&" , "" , $pasoCuatro);
        $pasoSeis= str_replace ( "|" , "" , $pasoCinco);
        $paso7= str_replace ( "/" , "" , $pasoSeis);
        $paso8= str_replace ( "}" , "" , $paso7);
        $paso9= str_replace ( "{" , "" , $paso8);
        $paso10= str_replace ( "-" , "" , $paso9);
        $paso11= str_replace ( "?" , "" , $paso10);
        $paso12= str_replace ( "¿" , "" , $paso11);
        $paso13= str_replace ( "(" , "" , $paso12);
        $paso14= str_replace ( ")" , "" , $paso13);
        $paso15= str_replace ( "$" , "" , $paso14);
        $paso16= str_replace ( "<" , "" , $paso15);
        $paso17= str_replace ( ">" , "" , $paso16);
        $paso18= str_replace ( "%" , "" , $paso17);
        $paso19= str_replace ( "#" , "" , $paso18);
        $paso20= str_replace ( "!" , "" , $paso19);
        $paso21= str_replace ( "+" , "" , $paso20);
        $paso22= str_replace ( "[" , "" , $paso21);
        $paso23= str_replace ( "]" , "" , $paso22);
        $paso24= str_replace ( "*" , "" , $paso23);
        $paso25= str_replace ( "^" , "" , $paso24);
        $paso26= str_replace (" " , "" , $paso25);
        return $paso26;
    }
public function subir($files,$url){
        $nombre = $files["name"];
        echo $nombre_tmp = $files["tmp_name"];
        $tipo =$files["type"];
        
        $ext_permitidas = array("jpg","jpeg","gif","png","mp3");
        $partes_nombre = explode('.', $nombre);
        $extension = end( $partes_nombre );
        $ext_correcta = in_array($extension, $ext_permitidas);
        //$limite = 20000 * 1024;
        if( $ext_correcta ){
            $fecha=date("Y:m:d");
            copy($nombre_tmp, "../".$url.$nombre);
            return $url.$nombre;
        }
    }
}

