<?php
/**
 * Created by PhpStorm.
 * User: yuanwanghong
 * Date: 5/8/15
 * Time: 5:47 PM
 */
ob_start();

echo "Hello World";

$out = ob_get_clean();
$out = strtolower($out);
var_dump($out);