<?php 

require('db_cred.php');

class Connection{

	// properties
	public $db = null;
	public $results = null;

	// method used to connect to the database
	function DBconnection(){

		// connect to the database
		$this->db = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);

		// if there are errors, return false else return true
		if(mysqli_connect_errno()){
			return false;
		}
		return true;
	}

	// execute database sql statements (insert, update, and delete)
	function query($query){

		// check if the connection was successful
		if($this->DBconnection() == false){
			return false;
		}

		// else execute the query
		$this->results = mysqli_query($this->db, $query);

		// check if results is returning false
		if($this->results !=true){
			return false;
		}

		// else return true
		return true;

	}

	// method to fetch multiple rows from database
	function fetch($query){

		// if query executes successfully
		if($this->query($query)) {
			// return all the rows
			return mysqli_fetch_all($this->results, MYSQLI_ASSOC);
		}
		// else return false
		return false;
		
	}

	// method to fetch one row from database (select)
	function fetchOne($query){

		// if query executes successfully
		if($this->query($query)) {
			// return one row
			return mysqli_fetch_assoc($this->results);
		}
		// else return false
		return false;
	}

}

?>