<?php
	/**
	 * 
	 */
	 class Database
	 {
	 	
	 	public function __construct()
	 	{
	 		$host = "localhost";
	 		$dbname = "crudpdo";
	 		$user = "root";
	 		$pass = "";
	 		try {
	 			$this->db = new PDO("mysql:host={$host};dbname={$dbname}",$user,$pass);
	 			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    } catch (PDOException $exception){
		        die("Connection error: " . $exception->getMessage());
		    }
	 	}

	 	public function add_data($tabel,$kolom)
	 	{
	 		$sql = "INSERT INTO ". $tabel." VALUES (".$kolom.")";
	 		try{
	 			$query = $this->db->prepare($sql);
	 			$insert = $query->execute();
	 		}catch (PDOException $exception){
		        die("Connection error: " . $exception->getMessage());
		    }
	 		return $insert?$this->db->lastInsertId():false;
	 	}

	 	public function getID($kolom,$tabel,$where=null)
	 	{
	 		$sql = "SELECT ".$kolom." FROM ".$tabel;
	 		if($where != null) $sql .= " WHERE $where";
	 		try{
	 			$query = $this->db->prepare($sql);
	 			$query->execute();
            	$data = $query->fetchAll();
	 		}catch (PDOException $exception){
		        die("Connection error: " . $exception->getMessage());
		    }
	 		return $data;
	 	}

	 	public function update($tabel,$data,$where)
	 	{
	 		$sql = "UPDATE ".$tabel." SET ".$data." WHERE ".$where;
	 		try{
	 			$query = $this->db->prepare($sql);
	 			$update = $query->execute();
	 		}catch (PDOException $exception){
		        die("Connection error: " . $exception->getMessage());
		    }
	 		return $update;
	 	}

	 	public function remove($tabel,$id)
	 	{
	 		$sql = "DELETE FROM ".$tabel." WHERE ".$id;
	 		try{
	 			$query = $this->db->prepare($sql);
	 			$delete = $query->execute();
	 		}catch (PDOException $exception){
		        die("Connection error: " . $exception->getMessage());
		    }
	 		return $delete;
	 	}
	 } 
?>