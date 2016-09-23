<?php
/*https://projecteuler.net/problem=12*/

$n = 1;
$i = 2;
$sqrt = 0;
$numOfDivisors = 0;

while ( $numOfDivisors <= 500) {
	
	$n += $i;
	$i++;
	$numOfDivisors = 0;
	$sqrt = sqrt($n);

	for ($j=1; $j < $sqrt; $j++) 
	{ 
		if ($n % $j == 0) 
		{
			$numOfDivisors += 2;
		}
	}
}
echo $n;
?>