<?php
/*test1*/
/*
$v = 0;
$ret['hello']=array();
while($v<10){
	$ret['hello'][$v] = 2*$v;
	$v++;
}
print_r($ret);
*/


/*test2*/
/*
$a = 1;
$b = 1;
if($a===$b){
	echo "a===b" ;
}else{
	echo "0";
}
*/
/*
$var = array(1,2,3,4,5,6);
echo count($var).PHP_EOL;
echo sizeof($var);*/

/*
for($i=0,$j=19; $i<100; $i++) {
  while($j--) {
    if($j==17) goto end; 
  }  
}
echo "i = $i";
end:
echo 'j hit 17';
*/
/*singe pattern*/
/*class m{
	static private $st = null;
	static function getInstance(){
		if(null==static ::$st){
			static ::$st = new static();
		}
		return self::$st;
	}
	function __construct(){
		echo 'first one ,girl'.PHP_EOL;
	}
} 
$t = m::getInstance();
print_r($t);*/
/*json 聽藵忙鈥?decode*/
/*
$json_string='{"id":1,"name":"foo","email":"foo@foobar.com","interest":["wordpress","php"]}';

$obj = json_decode($json_string);
echo $obj->name.PHP_EOL;
print_r($obj);
var_dump($obj);
*/

/*foreach*/
/*
$list = array("a"=>1,"b"=>3,"c"=>4);
print_r($list);

foreach ($list as $key=>$value){
	echo "$key : $value\n";
}
*/
/*
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
*/
/*
$a = array();
$k = 14;
$a[$k] = 19;
print_r($a) ;
*/
/*
echo date('Ymd').PHP_EOL;
echo date("Ymd")+10;
*/

/**
 * 璁＄畻涓ゅぉ鐩搁殧澶╂暟
 */
/*
$st = strtotime("2013-11-31");
$et = strtotime("2013-11-11");
$days = abs(round(($et-$st)/3600/24));
echo $days;
*/
/*
$date = '2009-12-22';
$newdate = strtotime($date) + 3600 * 24 *30;
echo $newdate = date('y-m-d',$newdate);
*/
/*
$a = array(
		7=>array('12'=>3,'34'=>78)
		);
$tag = 7;
$a[$tag]['601014'] = 888;

print_r($a);
*/
/*
function aaa($a,$b=1){
	echo $a." ".$b;
}

aaa(2);
*/


/*
	 * 璁＄畻涓や釜鏃ユ湡鐩搁殧澶╂暟,涓烘鏁?	 * 褰撶浉闅斿ぉ鏁颁负0鏃讹紝鍗宠〃绀烘槸鍚屼竴澶?	 */
/*
function intervalDays($lastTime,$current) {
		$lt = date('Ymd',$lastTime);
		$ct = date('Ymd',$current);
		$interalDays = round((strtotime($ct)-strtotime($lt))/86400);
		return abs($interalDays);
	}

echo intervalDays(1386432000, 1386086400);
*/

/*
$arr1 = array('name1'=>555,'name2'=>2222,'name3'=>8883);
$num  = 1;
$s = 'name'.$num;

print_r($arr1[$s]);
*/
/*
include_once 'for.php';
print MY_OK;
*/

/*
function ff(){
	function dd(){
	echo __METHOD__;  //杩斿洖鎵€鍦ㄦ柟娉曠殑name
	}
	dd();
}
ff();
*/

//echo phpinfo();

/*
register_tick_function('aa');
declare(ticks = 1);
function aa() {
	echo "aa called\n";
}
*/

/*
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

call_user_func(array('B','who'));
call_user_func(array('B','parent::who'));
*/
/*
$a = 1;
$b = "23";
echo gettype($a);
echo gettype($b);
*/

/*
var_dump($_COOKIE);
*/
/*
foreach ($_SERVER as $key=> $value) {
	echo " $key"." $value".PHP_EOL;
}
*/

/**
 *鈶犲澹版槑涓篻lobal鍚庯紝 杈撳嚭鈥渂鈥?
 *鈶犲澹版槑娌℃湁鏃讹紝 杈撳嚭鈥渁鈥?,灞€閮ㄥ彉閲?
 */
$bar = "a";
function f1(){
	global $sub;//鈶犲０鏄庝负鍏ㄥ眬鍙橀噺
	$sub ="b";
}
f1();
echo $bar;

$aa="aaaa";
echo "{$aa}";

//echo phpinfo();























?>