<?php
/* 1.通过引用传递参数*/
function addString(&$str) {
	$str .='  you two';
	echo "$str\n";
}

$str ='I fuck';
addString($str);

echo $str;
/*2.向函数传递数组*/
function takes_array($input)
{
	echo "\n$input[0] + $input[1] = ", $input[0]+$input[1];
}

takes_array(array(1,2));

/*3.在函数中使用默认参数*/
function makecoffee($type = "cappuccino")
{
	return "Making a cup of $type.\n";
}
echo makecoffee();
echo makecoffee(null);
echo makecoffee("espresso");
/*4.使用非标量类型作为默认参数*/
function makecoffee1($types = array("tea"), $coffeeMaker = NULL)
{
	$device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
	return "Making a cup of ".join(", ", $types)." with $device.\n";
}
echo makecoffee1();
echo makecoffee1(array("tea", "girl","water","girl2"), "cup");

/*5.函数默认参数正确用法*/
function makeyogurt( $flavour,$type = "a")
{
	return "Making a bowl of $type $flavour.\n";
}

echo makeyogurt("b");


print_r(get_defined_functions());








