<?php 

interface ICrud{

	public function findAll();
	public function insert($object);
	public function update($object);
	public function delete($id);
	public function findById($id);

}

 ?>