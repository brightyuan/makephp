<?php
/**
 * Created by PhpStorm.
 * User: yuanwanghong
 * Date: 5/26/15
 * Time: 4:24 PM
 */

/**
 * url传值中,非英文,非数字可能会出问题,所以编码后再传,接收的时候再urldecode()
 */
$url = "http://wenda.baidu.com/question/ 4154.html";
echo urlencode($url).PHP_EOL;
echo urldecode($url);