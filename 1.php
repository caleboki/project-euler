<?php
/*https://projecteuler.net/problem=1*/

$number = []; 

for ($i=1; $i < 1000 ; $i++) { 
	if ($i % 3 == 0 || $i % 5 == 0) {
		$number[] = $i;
		
	}
}
print array_sum($number);


?>
