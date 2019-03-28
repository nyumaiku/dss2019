<?php


abstract class Connection{

	const HOST = "127.0.0.1";
	const USER = "root";
	const PASSWORD = "";
	const DATABASE = "inventario";

	protected $mysqli;

	public function connect(){
		$this->mysqli = new mysqli(self::HOST,self::USER,self::PASSWORD,self::DATABASE);
	}

	public function close(){
		if($this->mysqli != null){
			$this->mysqli->close();
		}
	}

}


?>