<?php 

class Usuarios extends Connection{
/*
	public function findAll(){

		$this->connect();

		$resultset = $this->mysqli->query("select * from categorias");
		$result = array();
		while($row = $resultset->fetch_assoc()){
			$result[]=$row;
		}

		$resultset->close();

		$this->close();

		return $result;
	}


	public function insert($object){
		$this->connect();

		$query="insert into categorias(nombre,descripcion) values (?,?) ";

		$statement = $this->mysqli->prepare($query);

		$statement->bind_param('ss',$object["nombre"],$object["descripcion"]);

		$statement->execute();

		$this->close();
	}

	public function update($object){
		
		$this->connect();

		$query="update categorias set nombre = ? , descripcion = ? where id = ? ";

		$statement = $this->mysqli->prepare($query);

		$statement->bind_param('ssi',$object["nombre"],$object["descripcion"],$object["id"]);

		$statement->execute();

		$this->close();
	}

	public function delete($id){
		$this->connect();

		$query="delete from categorias where id = ? ";

		$statement = $this->mysqli->prepare($query);

		$statement->bind_param('i',$id);

		$statement->execute();

		$this->close();
	}
*/


	public function findUser($username,$password){
		$this->connect();

		$query = "select * from usuarios where username = ? and password = md5(?)";
		
		$statement = $this->mysqli->prepare($query);

		$statement->bind_param('ss',$username,$password);

		$statement->execute();

		$resultset = $statement->get_result();

		$result = array();
		while($row = $resultset->fetch_array()){
			$result[]=$row;
		}

		$resultset->close();
		
		$this->close();

		return $result;
	}
	

}


 ?>