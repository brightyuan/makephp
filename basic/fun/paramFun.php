<?php
/* 1.ͨ�����ô��ݲ���*/
function addString(&$str) {
	$str .='  you two';
	echo "$str\n";
}

$str ='I fuck';
addString($str);

echo $str;
/*2.������������*/
function takes_array($input)
{
	echo "\n$input[0] + $input[1] = ", $input[0]+$input[1];
}

takes_array(array(1,2));

/*3.�ں�����ʹ��Ĭ�ϲ���*/
function makecoffee($type = "cappuccino")
{
	return "Making a cup of $type.\n";
}
echo makecoffee();
echo makecoffee(null);
echo makecoffee("espresso");
/*4.ʹ�÷Ǳ���������ΪĬ�ϲ���*/
function makecoffee1($types = array("tea"), $coffeeMaker = NULL)
{
	$device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
	return "Making a cup of ".join(", ", $types)." with $device.\n";
}
echo makecoffee1();
echo makecoffee1(array("tea", "girl","water","girl2"), "cup");

/*5.����Ĭ�ϲ�����ȷ�÷�*/
function makeyogurt( $flavour,$type = "a")
{
	return "Making a bowl of $type $flavour.\n";
}

echo makeyogurt("b");


print_r(get_defined_functions());








