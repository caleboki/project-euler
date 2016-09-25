<?php
/*https://projecteuler.net/problem=15*/

function factorial($n)
{
	$fact = 1;

	for ($i=$n; $i >=1 ; $i--) { 
		
		$fact = ($fact * $i);

	}
	return $fact;
}

function run($n)
{
	$result = factorial(2*$n)/(pow(factorial($n), 2));
	echo $result;
}
	
run(20);
?>

