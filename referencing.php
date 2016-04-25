<?php

$snacks = array("chips","pretzels", "candy");

//current() and next() methods 
$snack = current($snacks);
print ("$snack <br/>");
/*while($snack=next($snacks))
print("$snack <br/>");*/
while($snack=next($snacks)){
	print("$snack <br/>");
}

//reset() and end() methods
$first = reset($snacks);
print("The first snack is $first <br/>");

$last = end($snacks);
print("The last snack is $last");