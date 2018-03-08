<?php
$count1 = 0;
$count2 = 0;
$count3 = 0;

for ($j = 0; $j < 1000; $j++) {
	$i =  mt_rand(1,3);
	if ($i==1) {
		$count1++;
	}
	if ($i==2) {
		$count2++;
	}
	if ($i==3) {
		$count3++;
	}
}

echo "\ncount1  ".$count1;
echo "\ncount2  ".$count2;
echo "\ncount3  ".$count3;
