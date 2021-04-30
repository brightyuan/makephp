<?php
/*array*/
$cars = array('oll','bmw','Toy');
var_dump($cars);

/*Strings*/
$x = "Hello world!";
var_dump($x);
/*Integers*/

$x = 5985;
var_dump($x);
echo "\n";
$x = -345; // negative number
var_dump($x);
echo "\n";
$x = 0x8C; // hexadecimal number  16
var_dump($x);
echo "\n";
$x = 047; // octal number   8
var_dump($x);

/*Floating Point Numbers*/
$x = 10.365;
var_dump($x);
echo "\n";
$x = 2.4e3;   //e
var_dump($x);
echo "\n";
$x = 8E-5;
var_dump($x);

/*boolean*/
$x = true;
$y = true;
/*NULL Value*/
$x ="hello world";
$x = null;
var_dump($x);

/*Objects*/
class Car{
	var $color;
	function Car($color ="green") {
		$this->color = $color;
	}

	function what_color() {
		return $this->color;
	}
}

function print_vars($obj) {
	foreach (get_object_vars($obj) as $prop=> $val){
		echo "$prop = $val";
	}
}
$obj = new Car("white");
print_vars($obj);













