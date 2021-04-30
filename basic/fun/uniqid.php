<?php
/**
 * Created by PhpStorm.
 * User: yuanwanghong
 * Date: 5/13/15
 * Time: 11:37 AM
 */

function exitTest() {
    echo strlen(uniqid()) . PHP_EOL;
    return true;
    exit("test exit");
}

exitTest();
echo strlen(uniqid(true));