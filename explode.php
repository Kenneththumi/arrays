<?php

class Explode{
	public $str="a:b:c:d";
	public function explode(){
		return $ar=explode(":", $this->str);
	} 
}

$obj= new Explode;

var_dump($obj ->explode());
foreach($obj->explode() as $ch){
	echo "<br>".$ch;
}