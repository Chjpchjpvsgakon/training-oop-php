<?php  

class Connection{
	private static $count = 0;

	private $connectionId;

	private $conferenceId = 1234;

	public function __construct(){
		self::$count++;
	}




	public function __destruct(){
		self::$count--;
	}

	/*
	Used for reading data from inacessible (proteced or private) properties.
	*/ 
	public function __get($name){  //->connectionId
		return $this->$name;
	}


	/*
	*	The string representation of an object
	*
	*	The __toString() method allows a class to decide how it will react when it is treated like a string
	*
	*	For Example , what echo / print $obj; will print
	*/
	public function __toString(){ 
		return "Conference ID:{$this->conferenceId} <br> Connection ID : {$this->connectionId}";
	} 

	//1. Using this class
	//create a solution for accessing the $count property in magic-methods
	public function getCount(){
		return self::$count;
	}

	public function setConnectionId($ipaddress){

		if(filter_var($ipaddress, FILTER_VALIDATE_IP)){
			$this->connectionId = $ipaddress . '_' . self::$count;

			return;
		}
		
		die('Not a valid ip address');
	}

	public function getConnectionId(){
		return $this>connectionId;
	}
}

?>