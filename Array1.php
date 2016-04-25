<?php
class Array1{
    //Declare Associative Array
	public $ar = array('key1' => "value 1" ,
	 67 => 3 , "a" => 10, 4 => "Hi" );

    //Declare a normal one-dimension Array
	public $ar2 = array("keikei", "Erastus", "Kellen");

	/*
	* Define a method that checks if an array key exist
	* @param $key  
	* @return mixed(any datatype) value
	*/
	public function look($key){
		if(array_key_exists($key, $this->ar2)){
			echo "Key Exists";
		}
		// Throw an Exception if the key is non-existent
		throw new Exception("Key Doesn't Exist", 1);	
	}
}

$obj=new Array1;
try{
		$obj->look(7);
}
catch(Exception $e)
{
	print $e -> getMessage();
}

