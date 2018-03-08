<?php
/**
 * Created by PhpStorm.
 * User: yuanwanghong
 * Date: 5/8/15
 * Time: 12:02 PM
 */
/**
 * extract从数组中将变量导入到当前的符号表
 */
$size = 5;
$var_array = array(
    "color" => "blue",
    "size" => "medium",
    "shape" => "sphere"
);
extract($var_array);
echo $color ." ".$size." ".$shape;