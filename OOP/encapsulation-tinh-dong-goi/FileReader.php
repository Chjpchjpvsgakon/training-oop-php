<?php  
class FileReader{
	public $data = "Some random data";

	protected $prot_data = "This protected data"."<br/>";

	private $priv_data = "This private data"."<br/>";

	//if protect var need create func get data
	public function getProtData(){
		return $this->prot_data;
	}


	public function getPrivData(){
		return $this->priv_data;
	}
}




?>