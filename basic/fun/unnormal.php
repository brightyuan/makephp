<?php
/**
 * 1.function extract : 从数组中把变量导入到当前的符号表中,key为变量名，value为变量值
 */
$a = "original";
$my_array = array("a"=>"cat","b"=>"bag","c"=>"Horse");
extract($my_array);
echo "\$a = $a  ";
echo "\$b = $b  ";
echo "\$c = $c  ";


/**
 * 2.str_pad(); //把字符串填充为指定的长度
 */
$st = "helloworld";
$st = str_pad($st, 18,"==",STR_PAD_LEFT);
echo  "\n";
echo  $st;
