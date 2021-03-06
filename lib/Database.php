<?php
Class Database{
	public $host   = "localhost";
	public $user   = 'root';
	public $pass   = "";
	public $dbname = "blogwebsite";
	
	public $link;
	public $error;
	
	public function __construct(){
		$this->connectDB();
	}
	
	private function connectDB(){
	$this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
	if(!$this->link){
		$this->error ="Connection fail".$this->link->connect_error;
		return false;
	}
 }
	
	// Select or Read data
	
	public function select($query){
		$result = $this->link->query($query) or die($this->link->error.__LINE__);
		// if($result->num_rows > 0){
		// 	return $result;
		// } else {
		// 	return false;
		// }
		return $result;
	}
	
	// Insert data
	public function insert($query){
	$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
	// if($insert_row){
	// 	header("Location: index.php?msg=".urlencode('Data Inserted successfully.'));
	// 	exit();
	// } else {
	// 	die("Error :(".$this->link->errno.")".$this->link->error);
	// }
	return $insert_row;
  }
  
    // Update data
  	public function update($query){
	$update_row = $this->link->query($query) or die($this->link->error.__LINE__);

	return $update_row;
	// if($update_row){
	// 	header("Location: index.php?msg=".urlencode('Data Updated successfully.'));
	// 	exit();
	// } else {
	// 	die("Error :(".$this->link->errno.")".$this->link->error);
	// }
  }
  
  // Delete data
   public function delete($query){
	$delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
	return $delete_row;
	// if($delete_row){
	// 	header("Location: index.php?msg=".urlencode('Data Deleted successfully.'));
	// 	exit();
	// } else {
	// 	die("Error :(".$this->link->errno.")".$this->link->error);
	// }
  }

 
 
}

