<?php
/**
 */
$a = "original";
$my_array = array("a"=>"cat","b"=>"bag","c"=>"Horse");
extract($my_array);
echo "\$a = $a  ";
echo "\$b = $b  ";
echo "\$c = $c  ";


/**
 */
$st = "helloworld";
$st = str_pad($st, 18,"==",STR_PAD_LEFT);
echo  "\n";
echo  $st;
