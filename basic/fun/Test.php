<?php
/**
 * Created by PhpStorm.
 * User: yuanwanghong
 * Date: 14-9-12
 * Time: ����3:12
 */

$arr=array(array("d"),array("e"),array("e"));
//print_r($arr);
$ar = array_unique($arr);
//print_r($ar);

$roleList = "hhh";
$roleList = explode(',',$roleList);
//print_r($roleList);


$singleProduct['quality_type']="";

$st = empty($singleProduct['quality_type']) ?"":$singleProduct['quality_type'];
//var_dump($st);
//var_dump($singleProduct['quality_type']);
//
//var_dump(strval(10));
$last_open_date = 10;
$yestoday_date = 2;

$a = min($last_open_date,$yestoday_date);
var_dump($a);