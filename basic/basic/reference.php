<?php
/*function  foo(&$var){}
foo($a);// $a is "created" and assigned to null

$b = array();
foo($b['b']);
var_dump(array_key_exists('b', $b)); // bool(true)

$c = new stdClass();
foo($c->d);
var_dump(property_exists($c, 'd')); // bool(true)*/

 
/*
class foo{
	public $value = 42;
	public function &getValue() {
		return $this->value;
	}
}

$obj = new foo();
$myValue = &$obj->getValue();
echo $myValue.PHP_EOL;

$obj->value = 24;
echo $myValue.PHP_EOL;
*/

/*$var = &$GLOBALS['var'];
$var = 120;
echo $GLOBALS['var'];*/


function foo(&$var)
{
    $var++;
}

$a=5;
foo($a);
echo $a;