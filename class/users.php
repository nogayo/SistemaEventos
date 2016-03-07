<?php

class Users{
	
	public $objDb;
	public $objSe;
	public $result;
	public $rows;
	public $useropc;
	public $ruta;
	
	public function __construct(){
		
		$this->objDb = new Database();
		$this->objSe = new Sessions();
		$this->ruta = new Connection();
		
	}
	
	public function login_in(){
		$usuario = $_POST["usern"];
		$contra = $_POST["passwd"];
                $nom_rol = $_POST["nom_rol"];
		$query = "SELECT * from validar_login('$usuario','$contra','$nom_rol')";
		$this->result = $this->objDb->select($this->ruta->getConexion(),$query);
		//echo "saludo desde la base de datos ". $row['descrip'];
		$this->rows = pg_num_rows($this->result);
		if($this->rows > 0){
				
			if($row=pg_fetch_array($this->result)){
				
				$this->objSe->inicio($usuario,$this->ruta->getConexion());
				$this->objSe->init();
				$this->objSe->set('user', $row["logueo"]);
				$this->objSe->set('iduser', $row["id"]);
				$this->objSe->set('idprofile', $row["descrip"]);
				$this->useropc = $row["descrip"];
				
				switch($this->useropc){
					
					case 'cajero':
						header('Location: user/index.php');
						break;
						
					case 'administrador':
						header('Location: admin/index.php');
						break;
					
				}
				
			}
			
		}else{
			
			header('Location: index.php?error=1');
			
		}
		
	}
	
}

?>