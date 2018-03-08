<?php
/**
 * Created by PhpStorm.
 * User: yuanwanghong
 * Date: 5/20/15
 * Time: 11:29 AM
 */

// 连接数据库
$mysql_server_name = "offlinetest.mysql.rds.aliyuncs.com"; //数据库服务器名称
$mysql_username = "work"; // 连接数据库用户名
$mysql_password = "123456"; // 连接数据库密码
$mysql_database = "content_server"; // 数据库的名字
$conn = mysqli_connect($mysql_server_name, $mysql_username, $mysql_password, $mysql_database);

$sql = "
             SELECT
                  d.`title`,
                  d.`position_desc`,
                  d.`position_info`,
                  i.`phone`,
                  l.`address`,
                  l.`time`,
                  l.`type`,
                  l.`company`,
                  d.`company_desc`,
                  d.`url`
            FROM
                  gj_phone_image i,
                  gj_position_list l,
                  gj_position_list_detail d
            WHERE i.`url` = d.`phone`
                  AND d.url = l.`url`
            GROUP BY d.`url`
            ORDER BY d.`id`
            LIMIT 2 ;";
$ret = mysqli_query($conn, $sql);
//构造数据
$list = array();
foreach ($ret as $item) {
    $item = array_map('trimStr', $item);
    $list[] = $item;
}
$t = $list[0]['company_desc'];
var_dump(("$t"));
function trimStr($str) {
    $str = trim(strval($str)); //清除字符串两边的空格

    $str = trim($str, ' '); //清除字符串引号
    $str = preg_replace('/\“/', "", $str); //使用正则表达式替换内容，如：空格，换行，并将替换为空。
    $str = preg_replace('/\”/', "", $str); //使用正则表达式替换内容，如：空格，换行，并将替换为空。
    $str = preg_replace('/\ "/', "", $str); //使用正则表达式替换内容，如：空格，换行，并将替换为空。
    $str = preg_replace('/\" /', "", $str); //使用正则表达式替换内容，如：空格，换行，并将替换为空。
    $str = preg_replace("/\t/", "", $str); //使用正则表达式替换内容，如：空格，换行，并将替换为空。
    $str = preg_replace("/\n/", "", $str);
    $str = str_replace("。", "", $str);
    $str = str_replace(" ", '', $str);
//    $str = str_replace(' " ', '', $str);
       $str = trim($str, '"'); //清除字符串引号
    return $str;
}