<?php
/*
 *预编译变量 
 *1> 一个包含所有（当前全局范围内定义的所有变量的）引用的数组
 *2>数组的小标是变量名字
 */

function test(){
	$foo = "inner";
	$foo2 ="foo2";//内部变量，不在$GLOBALE数组中
	echo '$foo in global scope: '.$GLOBALS['foo'].PHP_EOL;
	//echo '$foo in global scope: '.$GLOBALS['foo2'].PHP_EOL; //编译出错
	echo '$foo in current scope: '.$foo.PHP_EOL;
}

$foo = "global";
test();
echo $GLOBALS['foo'];


















?>