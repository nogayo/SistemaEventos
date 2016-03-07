<?php

class Connection{
	
	//variables para los datos de la base de datos
	public $server;
	public $userdb;
	public $passdb;
	public $dbname;
	public $port;
	public $camino;
	
	public function __construct(){
		
		//Iniciar las variables con los datos de la base de datos
		$this->server = 'localhost';
		$this->userdb = 'postgres';
		$this->passdb = 'postgres';
		$this->dbname = 'evento';
		$this->port = '5432';
		$this->camino = pg_connect("user=$this->userdb password=$this->passdb port=$this->port dbname=$this->dbname host=$this->server");
		
	}
	public function getConexion(){
		return $this->camino;
	}
	
	public function get_connected(){ 
		//Para conectarnos a postgresql
		$con = pg_connect("user=$this->userdb password=$this->passdb port=$this->port dbname=$this->dbname host=$this->server");
		//$con = pg_connect($this->userdb,$this->passdb,$this->port,$this->dbname , $this->server);
		
		
	}

	
	
}

?>