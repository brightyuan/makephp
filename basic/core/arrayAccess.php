<?php
class A implements ArrayAccess{
	function offsetExists($offset){
		echo "called exists\n";

	}
	function offsetGet($offset){
		echo "called get\n";
	}

	function offsetSet($offset, $value){
		echo "called $offset $value\n";

	}
	function offsetUnset($offset){


	}
}

$u = new A();
echo  $u['get'];

echo  $u[array('k','v')];