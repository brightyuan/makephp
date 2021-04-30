<?php
/**
 * Created by PhpStorm.
 * User: yuanwanghong
 * Date: 5/12/15
 * Time: 4:06 PM
 */

function increment($var)
{
    $var++;
    return $var;
}

$a = 1;
echo call_user_func('increment', $a);

function aa(){

}
function bb(){

}
function cc(){

}
spl_autoload_register("aa");
spl_autoload_register("bb");
spl_autoload_register("cc");
var_dump(spl_autoload_functions());