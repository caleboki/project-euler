<?php
/*https://projecteuler.net/problem=67*/

$triangle = file_get_contents("67.txt");

$rows = explode("\n", $triangle);

foreach ($rows as &$row)
{
	$row = explode(" ", $row);
}

for ($i = count($rows)-1; $i >= 0; $i--)
{
	for ($j = 0; $j < count($rows[$i])-1; $j++)
	{
		$rows[$i-1][$j] += ($rows[$i][$j] > $rows[$i][$j+1]) ? $rows[$i][$j] : $rows[$i][$j+1];
	}
}
	
echo $rows[0][0];

?>