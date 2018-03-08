<?php


/*
$r1 = array(1,22,35,66); 
$r2 = array(1,212,5,6); 
$r3 = array_merge($r1,$r2);//重复元素也会merge进去
var_dump($r3);
*/

$ar = array();
$ar[] = 'f';
$ar[] = 'f';
$ar[] = 'f';
//print_r($ar);
$startTime = 1;
$endTime = 2;
$payTime = 3;


if (mktime($startTime) >= mktime($endTime) || mktime($payTime) <= mktime($startTime) || mktime($payTime) < mktime($endTime)) {
    echo('false');
}
