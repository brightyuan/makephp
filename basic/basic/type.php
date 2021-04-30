<?php
/*1.锟斤拷锟斤拷转锟斤拷为锟斤拷锟斤拷锟斤拷为 scalar 锟侥筹拷员锟斤拷锟斤拷锟斤拷锟斤拷锟街?/
$o =(object) 'cckname';
echo $o->scalar.PHP_EOL;

/*2.NULL
 * 锟斤拷锟斤拷锟斤拷锟斤拷锟斤拷锟揭伙拷锟斤拷锟斤拷锟斤拷锟斤拷锟轿拷锟?NULL锟斤拷
 * 1>.锟斤拷锟斤拷值为 NULL锟斤拷
 * 2>.锟斤拷未锟斤拷锟斤拷值锟斤拷
 * 3>.锟斤拷 unset()锟斤拷
 * */
$va = NULL;
echo $va;

/*3.usort 锟皆讹拷锟斤拷冉锟斤拷锟? * user-defined comparison function
 * */
//锟饺斤拷锟斤拷
function cmp($a, $b){
	if ($a == $b) {
		return 0;
	}
	return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);

usort($a, "cmp");//锟截碉拷,锟斤拷锟矫伙拷锟斤拷锟斤拷锟絚mp锟饺斤拷锟斤拷锟斤拷锟斤拷$a锟斤拷锟斤拷锟斤拷锟斤拷

foreach ($a as $key => $value) {
	echo "$key: $value\n";
}

/*3.锟截碉拷锟斤拷锟斤拷示锟斤拷*/
// An example callback function
function my_callback_function() {
	echo 'hello world!';
}

// An example callback method
class MyClass {
	static function myCallbackMethod() {
		echo 'Hello World!';
	}
}

// Type 1: Simple callback  
call_user_func('my_callback_function');

// Type 2: Static class method call    锟洁方锟斤拷
call_user_func(array('MyClass', 'myCallbackMethod'));

// Type 3: Object method call  锟斤拷锟襟方凤拷
$obj = new MyClass();
call_user_func(array($obj, 'myCallbackMethod'));

// Type 4: Static class method call   锟洁方锟斤拷
call_user_func('MyClass::myCallbackMethod');

// Type 5: Relative static class method call (As of PHP 5.3.0)
class A {
	public static function who() {
		echo "A\n";
	}
}

class B extends A {
	public static function who() {
		echo "B\n";
	}
}

call_user_func(array('B', 'parent::who')); // A

/*4.使锟斤拷 Closure 锟斤拷示锟斤拷*/
// Our closure
$double = function($a) {
	return $a * 2;
};

// This is our range of numbers
$numbers = range(1, 5);

// Use the closure as a callback here to
// double the size of each element in our
// range
$new_numbers = array_map($double, $numbers);

print implode(',', $new_numbers);

?>