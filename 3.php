<?php
/*https://projecteuler.net/problem=3*/

$n = 600851475143;
$prime = 0; //largest prime factor
$counter = 2;

while ( pow($counter, 2) <= $n) {
	
	if (!fmod($n, $counter)) {
		
		$n = $n/$counter;
		$prime = $counter;
	}
	else {
		$counter++;
	}
}

if ($n > $prime) {
	
	$prime = $n;
}
echo $prime;