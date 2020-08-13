<?php
/**
 * Created by IntelliJ IDEA.
 * User: yuanwanghong
 * Date: 2020/8/13
 * Time: 15:10
 */

$key = '-2i61^';
$iv = '&11r2(*3';

$data = "123456789";
$start = microtime(true);
$len = strlen($data);

if ($len % 8) {
    $data = str_pad($data, $len + 8 - $len % 8, "\0");
}//使用空字符填充字符串的右侧,使字符串位数变为8的倍数
$b = base64_encode(openssl_encrypt($data, 'DES-EDE3-CBC', $key, OPENSSL_RAW_DATA | OPENSSL_NO_PADDING, $iv));

echo "openssl_time: ";
echo microtime(true) - $start . "\n";

echo "openssl_encrypt:  " . $b . "\n";


$decrypt = openssl_decrypt(base64_decode($b), 'DES-EDE3-CBC', $key, OPENSSL_RAW_DATA | OPENSSL_NO_PADDING, $iv);
echo 'openssl_decrypt:  ' . $decrypt . "\n";