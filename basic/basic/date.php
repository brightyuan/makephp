<?php
/*
echo date('Y/m/d');
echo "\n";
echo date('y-m-d');
echo "\n";
echo date('y.m.d');
echo "\n";
#??????$tommorow = mktime(0,0,0,date('m'),date('d')+6,date('y'));
echo "?????????".date('y/m/d',$tommorow);

$fileName = 'c:/app/ttestName.php';
echo $name = basename($fileName,'.php');//get file name without suffix
*/
/*?????????????????/

/*$lastTime =1357055999 ;
$current = 1357056000;
$lt = date('Y-m-d',($lastTime));
$ct = date('Y-m-d',($current));

echo $lt."\n";
echo $ct."\n";

echo $datetime1 = date_create($lt);
echo $datetime2 = date_create($ct);

$ins =(float)(strtotime($datetime2)- strtotime($datetime1))/86400;
echo $ins."\n";
$interval = date_diff($datetime1, $datetime2);
$ints = $interval->format('%a');
//echo $ints;


echo $now = $_SERVER['REQUEST_TIME']; //???????????????
echo "\n";
$now1 = date('Y-m-d');
echo microtime($now1);*/


// echo date('Y-m-d', 1408360430);

//echo intval(date('Ymd',time()));

//?????????
$time = "20150801";
echo date('Ymt',strtotime($time));
