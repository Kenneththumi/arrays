<?php

class Implode{
    
     public $ar=array("Here", "comes ", "my ", "best ", " friend", "Erastus ");
     public function implode(){
           return $str=implode(" ", $this->ar);
     }

}
$obj= new Implode;
echo $obj->implode();
