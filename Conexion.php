<?php
error_reporting(E_ALL &~ E_DEPRECATED);
//error_reporting(E_ALL &~ E_NOTICE &~ E_DEPRECATED);

class Conexion {

    var $BaseDatos;
    var $Servidor;
    var $Usuario;
    var $Clave;
    /* identificador de conexión y consulta */
    var $Conexion_ID;

    /* número de error y texto error */
    var $Errno = 0;
    var $Error = "";

    /*function  Conexion() {
		
    }
*/
    function conectar() {
		
		//local
		
        $this->BaseDatos = "reportes";
        $this->Servidor = "localhost";
        $this->Usuario = "root";
        $this->Clave = "1234"; 
		/*
		$this->BaseDatos = "kyrda_evaldok";
        $this->Servidor = "209.58.128.160:3306";
        $this->Usuario = "kyrda_evaldok";
        $this->Clave = "evaldok2019";
		 */
		
		
        $this->Conexion_ID = mysqli_connect($this->Servidor, $this->Usuario, $this->Clave);
        if (!$this->Conexion_ID) {
            $this->Error = "Ha fallado la conexion al servidor:".$this->Servidor;
            return 0;
        }

        if (!@mysqli_select_db($this->Conexion_ID,$this->BaseDatos)) {
            $this->Error = "Imposible abrir " . $this->BaseDatos;
            return 0;
        }
		
		mysqli_query($this->Conexion_ID,"SET NAMES 'utf8'");
		
        return $this->Conexion_ID;
    }	
}

?>


<?php
	/*$mysqli=new mysqli("localhost","root","","aleg7495_ksispla"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	$acentos = $mysqli->query("SET NAMES 'utf8'")*/
?>