<?php
class Array2{
  
  public $table = array("Fry" => "slurm" , "Leela" => "PlanEx3011");

  function getKeys(){
  	return array_keys($this->table);
  }

  function getValues(){
  	return array_values($this->table);
  }
	  public $username = array();
	  public $value;
	  /*public $username[0] = "Fry";
	  public $username[1] = "Leela";
	  public $username[] = "Slurm";*/
}

$obj = new Array2;

//var_dump($obj -> getKeys());
echo $obj -> getKeys();
echo "<br>";
var_dump($obj -> getValues());
echo "<br>";
var_dump($obj ->username);
echo "<br>";
echo sizeof($obj->table);
echo "<br>";
var_dump(is_array($obj->value));
