<?php
class Conexion{
	private $conect;

	public function __construct(){
		$connectionString = "mysql:host=".HOST.";dbname=".DB.";charset=".CHARSET;
		try{
			$this->conect = new PDO($connectionString, USER, PASSWORD);
			$this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    //echo "conexión exitosa";
		}catch(PDOException $e){
			$this->conect = 'Error de conexión';
		    echo "ERROR: " . $e->getMessage();
		}
	}

	public function conect(){
		return $this->conect;
	}
}

?>