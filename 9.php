<?php
/*https://projecteuler.net/problem=9*/

$result = [];

for ($a=0; $a < 1000/3; $a++) {

	for ($b=0; $b < 500; $b++) {

		$c = 1000 - $a - $b;

		if (pow($c, 2) == pow($a, 2) + pow($b, 2)) {

			if ($a + $b + $c == 1000) {
				
				array_push($result, $a, $b, $c);
				break;
				return $result;
			}
			
		}

	}

}
print($result[0]*$result[1]*$result[2]);
?>

