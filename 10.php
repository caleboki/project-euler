<?php
/*https://projecteuler.net/problem=10*/

function PrimeSum($last)
{
	$n = 2;
	$r = range(2, $last);
	$primes = array_combine($r, $r);

	//looping thru the numbers and removing the multiples
	while (pow($n, 2) < $last) {
		
		for ($i=$n; $i <= $last ; $i += $n ) {
			if ($i == $n) {
				continue;
			}
			unset($primes[$i]);
		}
		$n = next($primes);
	}

	return $primes;
}
print array_sum((PrimeSum(2000000))); //adding up the contents of the primes array
?>