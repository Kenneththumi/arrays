<?php

class Search{
	public $arr=array(
         "Name"=>"Kenneth Mwangi Thumi",
         "Town"=>"Nanyuki",
         "DOB"=>"12.10.1992",
         "Dream"=>"Programmer",
		);
	public function values($value){
		 return "Value".(in_array($value, $this->arr)?' exists':' doesn\'t exist');
	}
}
$obj=new Search;
echo $obj ->values("Nanyuki");