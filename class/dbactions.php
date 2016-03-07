<?php

class Database{
	
	private $result;
	
	public function __construct(){ }
	
	public function select($ruta,$query){
		
		return $this->result = pg_query($ruta,$query);
	}
	
}

?>