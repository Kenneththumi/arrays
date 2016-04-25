<?php

$snacks=array("abe" => "chips",
			   "abby" => "pretzels",
			   "darin" => "candy"
	          );

/*while($order = each($snacks)){
	$partier = $order["key"];
	$snack = $order["value"];
	print("$partier wants $snack");
}*/

/*for(int $i=0; $i<=count($snacks); $i++){
        for ($j=0; $j <=count($snacks) ; $j++) { 
        	
        }
}*/
foreach($snacks as $key => $value){
      print("$key wants $value <br/>");
}

