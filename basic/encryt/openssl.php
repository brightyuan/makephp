<?php
/**
 * Created by IntelliJ IDEA.
 * User: yuanwanghong
 * Date: 2020/8/13
 * Time: 14:44
 */

$plaintext = "123456789";
$cipher = "aes-128-gcm";
$key = 'afa';

//print_r(openssl_get_cipher_methods());

//����
if (in_array($cipher, openssl_get_cipher_methods())) {
    $ivlen = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($ivlen);
    $ciphertext = openssl_encrypt($plaintext, $cipher, $key, $options = 0, $iv, $tag);
    echo $ciphertext . "\n";
}

//����
$original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options = 0, $iv, $tag);
echo $original_plaintext . "\n";