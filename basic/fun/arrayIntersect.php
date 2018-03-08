<?php
/**
 * Created by PhpStorm.
 * User: yuanwanghong
 * Date: 1/29/15
 * Time: 5:08 PM
 */
$selectPro['product_id'] = "1,2,3";
$pro['product_id'] = "2";
$arrPids = explode(',', $selectPro['product_id']);
$dbPids = explode(',', $pro['product_id']);
$intersect = array_intersect($arrPids, $dbPids);
$flg = count($intersect) > 0 ? true : false;
if($flg){
    echo "yes";
}else{
    echo("No");
}