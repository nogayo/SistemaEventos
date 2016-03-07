<?php

class Sessions{

	private $agregar;
	private $eliminar;
	
	public function __construct(){
	}

	public function sesion(){

	}
	
	public function init(){
		@session_start();
	}

	public function inicio($usuario,$ruta){

		$this->agregar = new Database();
		$query = "SELECT * from registro_sesion('$usuario')";
		$this->agregar->select($ruta,$query);
			
	}
	
	public function set($varname, $value){
		
		$_SESSION[$varname] = $value;
		
	}
	
	public function destroy($con,$cliente){
		$this->eliminar = new Database();
		$query = "SELECT * from eliminar_sesion('$usuario')";
		$resultado = $this->eliminar->select($con,$query);
		echo "$resultado";
		
		session_unset();
		session_destroy();
		
	}
	
}

?>