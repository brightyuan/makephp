<?php
/**
 * Created by PhpStorm.
 * User: yuanwanghong
 * Date: 14-8-25
 * Time: 下午4:35
 */

/*$value = '11,13';
$arrValue = explode(',', $value);
if (is_array($arrValue)) {
    $value = $arrValue;
    print_r($value);
}*/


//$a = array(
//    "资源利用率"=>1,
//    "资源利用率2"=>2,
//    "资源利用率3"=>3,
//    "资源利用率4"=>4,
//);
//print_r($a);
//print_r($a["资源利用率"]);
//print_r($a["资源利用率1"]);
//print_r($a["资源利用率2"]);
//查看权限
$param['view_auth'] = array(
/*首页*/
    '1' => array('id' => '1', 'pId' => '0', 'name' => '首页','eId'=>100001),
        '2' => array('id' => '2', 'pId' => '1', 'name' => '总分发量','eId'=>2),
        '3' => array('id' => '3', 'pId' => '1', 'name' => '已运营分发量','eId'=>3),
        '4' => array('id' => '4', 'pId' => '1', 'name' => '收入','eId'=>4),

/*资源利用率*/
    '5' => array('id' => '5', 'pId' => '0', 'name' => '资源利用效率','eId'=>100002),
        '6' => array('id' => '6', 'pId' => '5', 'name' => '百度手机助手','eId'=>13),
            '7' => array('id' => '7', 'pId' => '6', 'name' => '分发总览','eId'=>1),
            '8' => array('id' => '8', 'pId' => '6', 'name' => '各职能使用','eId'=>1),
                '9'  => array('id' => '9', 'pId' => '8', 'name' => '广告','eId'=>1),
                '10' => array('id' => '10', 'pId' => '8', 'name' => '游戏','eId'=>1),
                '11' => array('id' => '11', 'pId' => '8', 'name' => '编辑','eId'=>4),
                '12' => array('id' => '12', 'pId' => '8', 'name' => '首发','eId'=>3),
                '13' => array('id' => '13', 'pId' => '8', 'name' => '换量','eId'=>5),
                '14' => array('id' => '14', 'pId' => '8', 'name' => '运营','eId'=>6),
                '15' => array('id' => '15', 'pId' => '8', 'name' => '编辑-补余','eId'=>7),

            '16' => array('id' => '16', 'pId' => '6', 'name' => '各职能使用详情','eId'=>1),
                '17' => array('id' => '17', 'pId' => '16', 'name' => '广告','eId'=>1),
                '18' => array('id' => '18', 'pId' => '16', 'name' => '游戏','eId'=>2),
                '19' => array('id' => '19', 'pId' => '16', 'name' => '编辑','eId'=>4),
                '20' => array('id' => '20', 'pId' => '16', 'name' => '首发','eId'=>3),
                '21' => array('id' => '21', 'pId' => '16', 'name' => '换量','eId'=>5),
                '22' => array('id' => '22', 'pId' => '16', 'name' => '运营','eId'=>6),
                '23' => array('id' => '23', 'pId' => '16', 'name' => '编辑-补余','eId'=>7),
            '24' => array('id' => '24', 'pId' => '6', 'name' => '单资源位吸引力','eId'=>1),
                '25' => array('id' => '25', 'pId' => '24', 'name' => '广告','eId'=>1),
                '29' => array('id' => '29', 'pId' => '24', 'name' => '游戏','eId'=>2),
                '30' => array('id' => '30', 'pId' => '24', 'name' => '编辑','eId'=>4),
                '31' => array('id' => '31', 'pId' => '24', 'name' => '首发','eId'=>3),
                '32' => array('id' => '32', 'pId' => '24', 'name' => '换量','eId'=>5),
                '33' => array('id' => '33', 'pId' => '24', 'name' => '运营','eId'=>6),
                '34' => array('id' => '34', 'pId' => '24', 'name' => '编辑-补余','eId'=>7),

        '35' => array('id' => '35', 'pId' => '5', 'name' => '91手机助手','eId'=>143),
            '36' => array('id' => '36', 'pId' => '35', 'name' => '分发总览','eId'=>1),
            '37' => array('id' => '37', 'pId' => '35', 'name' => '各职能使用','eId'=>1),
                '38' => array('id' => '38', 'pId' => '37', 'name' => '广告','eId'=>1),
                '39' => array('id' => '39', 'pId' => '37', 'name' => '游戏','eId'=>2),
                '40' => array('id' => '40', 'pId' => '37', 'name' => '编辑','eId'=>4),
                '41' => array('id' => '41', 'pId' => '37', 'name' => '首发','eId'=>3),
                '42' => array('id' => '42', 'pId' => '37', 'name' => '换量','eId'=>5),
                '43' => array('id' => '43', 'pId' => '37', 'name' => '运营','eId'=>6),
                '44' => array('id' => '44', 'pId' => '37', 'name' => '编辑-补余','eId'=>7),

            '45' => array('id' => '45', 'pId' => '35', 'name' => '各职能使用详情','eId'=>1),
                '46' => array('id' => '46', 'pId' => '45', 'name' => '广告','eId'=>1),
                '47' => array('id' => '47', 'pId' => '45', 'name' => '游戏','eId'=>2),
                '48' => array('id' => '48', 'pId' => '45', 'name' => '编辑','eId'=>4),
                '49' => array('id' => '49', 'pId' => '45', 'name' => '首发','eId'=>3),
                '50' => array('id' => '50', 'pId' => '45', 'name' => '换量','eId'=>5),
                '51' => array('id' => '51', 'pId' => '45', 'name' => '运营','eId'=>6),
                '52' => array('id' => '52', 'pId' => '45', 'name' => '编辑-补余','eId'=>7),

            '53' => array('id' => '53', 'pId' => '35', 'name' => '单资源位吸引力','eId'=>1),
                '54' => array('id' => '54', 'pId' => '53', 'name' => '广告','eId'=>1),
                '55' => array('id' => '55', 'pId' => '53', 'name' => '游戏','eId'=>2),
                '56' => array('id' => '56', 'pId' => '53', 'name' => '编辑','eId'=>4),
                '57' => array('id' => '57', 'pId' => '53', 'name' => '首发','eId'=>3),
                '58' => array('id' => '58', 'pId' => '53', 'name' => '换量','eId'=>5),
                '59' => array('id' => '59', 'pId' => '53', 'name' => '运营','eId'=>6),
                '60' => array('id' => '60', 'pId' => '53', 'name' => '编辑-补余','eId'=>7),

        '61' => array('id' => '61', 'pId' => '5', 'name' => '安卓市场','eId'=>146),
            '62' => array('id' => '62', 'pId' => '61', 'name' => '分发总览','eId'=>1),
            '63' => array('id' => '63', 'pId' => '61', 'name' => '各职能使用','eId'=>1),
                '64' => array('id' => '64', 'pId' => '63', 'name' => '广告','eId'=>1),
                '65' => array('id' => '65', 'pId' => '63', 'name' => '游戏','eId'=>2),
                '66' => array('id' => '66', 'pId' => '63', 'name' => '编辑','eId'=>4),
                '67' => array('id' => '67', 'pId' => '63', 'name' => '首发','eId'=>3),
                '68' => array('id' => '68', 'pId' => '63', 'name' => '换量','eId'=>5),
                '69' => array('id' => '69', 'pId' => '63', 'name' => '运营','eId'=>6),
                '70' => array('id' => '70', 'pId' => '63', 'name' => '编辑-补余','eId'=>7),
            '71' => array('id' => '71', 'pId' => '61', 'name' => '各职能使用详情','eId'=>1),
                '72' => array('id' => '72', 'pId' => '71', 'name' => '广告','eId'=>1),
                '73' => array('id' => '73', 'pId' => '71', 'name' => '游戏','eId'=>2),
                '74' => array('id' => '74', 'pId' => '71', 'name' => '编辑','eId'=>4),
                '75' => array('id' => '75', 'pId' => '71', 'name' => '首发','eId'=>3),
                '76' => array('id' => '76', 'pId' => '71', 'name' => '换量','eId'=>5),
                '77' => array('id' => '77', 'pId' => '71', 'name' => '运营','eId'=>6),
                '78' => array('id' => '78', 'pId' => '71', 'name' => '编辑-补余','eId'=>7),
            '79' => array('id' => '79', 'pId' => '61', 'name' => '单资源位吸引力','eId'=>1),
                '80' => array('id' => '80', 'pId' => '79', 'name' => '广告','eId'=>1),
                '81' => array('id' => '81', 'pId' => '79', 'name' => '游戏','eId'=>2),
                '82' => array('id' => '82', 'pId' => '79', 'name' => '编辑','eId'=>4),
                '83' => array('id' => '83', 'pId' => '79', 'name' => '首发','eId'=>3),
                '84' => array('id' => '84', 'pId' => '79', 'name' => '换量','eId'=>5),
                '85' => array('id' => '85', 'pId' => '79', 'name' => '运营','eId'=>6),
                '86' => array('id' => '86', 'pId' => '79', 'name' => '编辑-补余','eId'=>7),

    /*资源变现效率*/
    '87' => array('id' => '87', 'pId' => '0', 'name' => '资源变现效率','eId'=>100003),
        '88' => array('id' => '88', 'pId' => '87', 'name' => '百度手机助手','eId'=>13),
            '89' => array('id' => '89', 'pId' => '88', 'name' => '变现总览','eId'=>1),
                '90' => array('id' => '90', 'pId' => '89', 'name' => '广告','eId'=>1),
                '91' => array('id' => '91', 'pId' => '89', 'name' => '游戏','eId'=>2),
            '92' => array('id' => '92', 'pId' => '88', 'name' => '广告变现','eId'=>1),
            '93' => array('id' => '93', 'pId' => '88', 'name' => '广告详情数据','eId'=>1),
            '94' => array('id' => '94', 'pId' => '88', 'name' => '游戏变现','eId'=>1),
            '95' => array('id' => '95', 'pId' => '88', 'name' => '游戏详情－按排期','eId'=>1),
            '96' => array('id' => '96', 'pId' => '88', 'name' => '游戏详情－按APP','eId'=>1),
        '97' => array('id' => '97', 'pId' => '87', 'name' => '91助手','eId'=>143),
            '98' => array('id' => '98', 'pId' => '97', 'name' => '变现总览','eId'=>1),
                '99' => array('id' => '99', 'pId' => '98', 'name' => '广告','eId'=>1),
                '100' => array('id' => '100', 'pId' => '98', 'name' => '游戏','eId'=>2),
            '101' => array('id' => '101', 'pId' => '97', 'name' => '广告变现','eId'=>1),
            '102' => array('id' => '102', 'pId' => '97', 'name' => '广告详情数据','eId'=>1),
            '103' => array('id' => '103', 'pId' => '97', 'name' => '游戏变现','eId'=>1),
            '104' => array('id' => '104', 'pId' => '97', 'name' => '游戏详情－按排期','eId'=>1),
            '105' => array('id' => '105', 'pId' => '97', 'name' => '游戏详情－按APP','eId'=>1),

        '106' => array('id' => '106', 'pId' => '87', 'name' => '安卓市场','eId'=>146),
            '107' => array('id' => '107', 'pId' => '106', 'name' => '变现总览','eId'=>1),
                '108' => array('id' => '108', 'pId' => '107', 'name' => '广告','eId'=>1),
                '109' => array('id' => '109', 'pId' => '107', 'name' => '游戏','eId'=>2),
            '110' => array('id' => '110', 'pId' => '106', 'name' => '广告变现','eId'=>1),
            '111' => array('id' => '111', 'pId' => '106', 'name' => '广告详情数据','eId'=>1),
            '112' => array('id' => '112', 'pId' => '106', 'name' => '游戏变现','eId'=>1),
            '113' => array('id' => '113', 'pId' => '106', 'name' => '游戏详情－按排期','eId'=>1),
            '114' => array('id' => '114', 'pId' => '106', 'name' => '游戏详情－按APP','eId'=>1),

/*KPI进展*/
     '115' => array('id' => '115', 'pId' => '0', 'name' => 'KPI进展','eId'=>100004),
        '116' => array('id' => '116', 'pId' => '115', 'name' => '百度手机助手','eId'=>13),
                '117' => array('id' => '117', 'pId' => '116', 'name' => '广告','eId'=>1),
                '118' => array('id' => '118', 'pId' => '116', 'name' => '游戏','eId'=>2),
                '119' => array('id' => '119', 'pId' => '116', 'name' => '编辑','eId'=>4),
                '120' => array('id' => '120', 'pId' => '116', 'name' => '首发','eId'=>3),
                '121' => array('id' => '121', 'pId' => '116', 'name' => '换量','eId'=>5),
                '122' => array('id' => '122', 'pId' => '116', 'name' => '运营','eId'=>6),
                '123' => array('id' => '123', 'pId' => '116', 'name' => '编辑-补余','eId'=>7),
        '124' => array('id' => '124', 'pId' => '115', 'name' => '91助手','eId'=>143),
                '125' => array('id' => '125', 'pId' => '124', 'name' => '广告','eId'=>1),
                '126' => array('id' => '126', 'pId' => '124', 'name' => '游戏','eId'=>2),
                '127' => array('id' => '127', 'pId' => '124', 'name' => '编辑','eId'=>4),
                '128' => array('id' => '128', 'pId' => '124', 'name' => '首发','eId'=>3),
                '129' => array('id' => '129', 'pId' => '124', 'name' => '换量','eId'=>5),
                '130' => array('id' => '130', 'pId' => '124', 'name' => '运营','eId'=>6),
                '131' => array('id' => '131', 'pId' => '124', 'name' => '编辑-补余','eId'=>7),
        '132' => array('id' => '132', 'pId' => '115', 'name' => '安卓市场','eId'=>146),
                '133' => array('id' => '133', 'pId' => '132', 'name' => '广告','eId'=>1),
                '134' => array('id' => '134', 'pId' => '132', 'name' => '游戏','eId'=>2),
                '135' => array('id' => '135', 'pId' => '132', 'name' => '编辑','eId'=>4),
                '136' => array('id' => '136', 'pId' => '132', 'name' => '首发','eId'=>3),
                '137' => array('id' => '137', 'pId' => '132', 'name' => '换量','eId'=>5),
                '138' => array('id' => '138', 'pId' => '132', 'name' => '运营','eId'=>6),
                '139' => array('id' => '139', 'pId' => '132', 'name' => '编辑-补余','eId'=>7),
/*权限控制*/
    //...........

);

$view_auth = $param['view_auth'];

$expArr = array_map(function ($v) {
    $v['id'] += 10000;
    $v['pId'] += 10000;
    return $v;
}, $view_auth);
$newExpArr = array();
foreach($expArr as $k=>$v){
    $newExpArr[$k+10000] = $v;
}
//var_dump($newExpArr);

foreach($view_auth as $auth){

//    $sql = "INSERT INTO res_auth_item(name,type,description) VALUES('{$auth['id']}','1','{$auth['name']}');\n";
//    $sql = "INSERT INTO res_auth_item_child(parent,child) VALUES('admin','{$auth['id']}');\n";
//    echo($sql);

    $ids .= ",{$auth['id']}";
}

foreach ($newExpArr as $a) {
    $ids .= ",{$a['id']}";
}

//echo($ids);

$finalExpArr = array();
foreach ($view_auth as $k => $v) {
    $v['id'] += 10000;
    $v['pId'] += 10000;
    $finalExpArr[$k + 10000] = $v;
}
print_r($finalExpArr);