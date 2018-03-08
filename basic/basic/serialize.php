<?php
/*
 *1. PHP的serialize函数的作用
 * */
$arr = array
       (
          'Peter'=> array
	          (
	            'Country'=>'USA',
	            'Age'=>20
	          ),
          'Li Ming'=> array
	          (
	             'Country'=>'CHINA',
	             'Age'=>21
	          )
        );

$serialize_var = serialize($arr); //序列化
echo $serialize_var;          //like redis type
$unser =  unserialize($serialize_var);  //反序列化
var_dump($unser);

/*
 *output :
 *a:2:{
 s:5:"Peter";
 a:2:{s:7:"Country";s:3:"USA";s:3:"Age";i:20;}

 s:7:"Li Ming";
 a:2:{s:7:"Country";s:5:"CHINA";s:3:"Age";i:21;}
 }
 *
 */
/**
 * 2.
 *
 */
class Test{
	var $var = 0;
	function add(){
		echo $this->var+10;
	}
}

$unserialize_var = new Test();
$s_var = serialize($unserialize_var);
echo $s_var;

$us_var = null;
$us_var = unserialize($s_var);
$us_var->add();


/**
 *3.在PHP中进行JSON操作，其函数为json_encode和json_decode
 */
$arr = array
       (
          'Name'=>'Peter',
          'Age'=>20
       );
print_r($arr);
$jsonencode = json_encode($arr);
echo "\n";
echo $jsonencode;

$jsonencode2 = json_decode($jsonencode,true); //if set true ,auto change to array
echo "\n";
print_r($jsonencode2);

$sr = serialize($arr);
echo $sr;

