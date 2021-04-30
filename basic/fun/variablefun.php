<?php
/**
 * 可变函数
 */

/*1 可变函数示例*/
function foo() {
	echo "In foo()\n";
}

function bar($arg = '') {
	echo "In bar(); argument was '$arg'.\n";
}

// 使用 echo 的包装函数
function echoit($string){
	echo $string;
}

$func = 'foo';
$func();        // This calls foo()

$func = 'bar';
$func('test');  // This calls bar()

$func = 'echoit';
$func('test');  // This calls echoit()

/*2 可变方法范例*/
class Foo{
	function Variable()
	{
		$name = 'Bar';
		$this->$name(); // This calls the Bar() method
	}

	function Bar()
	{
		echo "This is Bar";
	}
}

$foo = new Foo();
$funcname = "Variable";
$foo->$funcname();   // This calls $foo->Variable()

/*3 Variable 方法和静态属性示例*/
class Foo1{
	static $variable = 'static property';
	static function Variable()
	{
		echo 'Method Variable called';
	}
}

echo Foo1::$variable; // This prints 'static property'. It does need a $variable in this scope.
$variable = "Variable";
Foo1::$variable();  // This calls $foo->Variable() reading $variable in this scope.

?>