<?php
/**
 * JSON 指的是 JavaScript 对象表示法（JavaScript Object Notation）
 */
/*1.array to json*/
/*
 $arr = array ('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
 echo json_encode($arr);
 */
//output
//{"a":1,"b":2,"c":3,"d":4,"e":5}

/*2.object to json*/
/*
 class CA{
 public $body;
 public $approved;
 public $favorite_count;
 public $status;


 }
 $obj = new CA();
 $obj->body = "helo";
 $obj->approved ="aa";
 $obj->favorite_count= 1;
 echo json_encode($obj);
 */
//output
//{"body":"helo","approved":"aa","favorite_count":1,"status":null}


/*3.索引数组和关联数组*/
/*
$arr = Array('one', 'two', 'three');//索引数组
echo json_encode($arr); //数组

echo  "\n";
echo json_encode((object)$arr);//强制转换为对象
echo  "\n";

$arr1 = Array('1'=>'one', '2'=>'two', '3'=>'three'); //索引数组

echo json_encode($arr1); //对象
*/

/*4.类class的转换*/
/*
class Foo {
	const ERROR_CODE = '404';
	public $public_ex = 'this is public';
	private $private_ex = 'this is private!';
	protected $protected_ex = 'this should be protected';
	
	public function getErrorCode() {
		return self::ERROR_CODE;
	}
}

$foo = new Foo();
echo json_encode($foo);
//output
//{"public_ex":"this is public"}
*/

/*5.json decode()
 * 通常json_decode()转换为对象，而不是数组*/
/*
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
print_r(json_decode($json));
//如果要转换为array格式，加true
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
print_r(json_decode($json,true));

*/
/*
$arr = array(
    'name' => 'helo',   
    'nick' => 'kajfje',    
    'contact' => array(    
        'email' => 'shenkong at qq dot com',    
        'website' => 'http://www.chinaz.com', 
)
);
$json_string = json_encode($arr);    
echo $json_string."\n";    

print_r(json_decode($json_string));*/
/*
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

$redis->set('key', 'val');

echo $redis->get('key');
*/
//echo phpinfo();

/*$auth = array(

    'res_1' => array('id' => 'res_1', 'pId' => 'res_0', 'name' => '主页'),
    'res_2' => array('id' => 'res_1', 'pId' => 'res_1', 'name' => '多维详情对比'),
    'res_3' => array('id' => 'res_1', 'pId' => 'res_2', 'name' => '百度手机助手'),
    'res_4' => array('id' => 'res_1', 'pId' => 'res_2', 'name' => '91手机助手'),
    'res_5' => array('id' => 'res_1', 'pId' => 'res_2', 'name' => '安卓市场'),

    'res_6' => array('id' => 'res_1','pId' => 'res_0','name' => '资源利用率'),
    'res_7' => array('id' => 'res_1','pId' => 'res_6','name' => '百度手机助手'),
    'res_8' => array('id' => 'res_1','pId' => 'res_6','name' => '91手机助手'),
    'res_9' => array('id' => 'res_1','pId' => 'res_6','name' => '安卓市场'),

    'res_10' => array('id' => 'res_1','pId' => 'res_9','name' => '分发总览'),
    'res_11' => array('id' => 'res_1','pId' => 'res_9','name' => '各职能使用'),
    'res_12' => array('id' => 'res_1','pId' => 'res_9','name' => '各职能使用详情页'),
    'res_13' => array('id' => 'res_1','pId' => 'res_9','name' => '各职能使用详情页'),
    'res_14' => array('id' => 'res_1','pId' => 'res_9','name' => '各职能使用详情页'),
    'res_15' => array('id' => 'res_1','pId' => 'res_9','name' => '单资源位详情'),

    'res_16' => array('id' => 'res_1','pId' => 'res_15','name' => '编辑'),
    'res_17' => array('id' => 'res_1','pId' => 'res_15','name' => '首发'),
    'res_18' => array('id' => 'res_1','pId' => 'res_15','name' => '广告'),
    'res_19' => array('id' => 'res_1','pId' => 'res_15','name' => '游戏'),
    'res_20' => array('id' => 'res_1','pId' => 'res_15','name' => '换量'),
    'res_21' => array('id' => 'res_1','pId' => 'res_15','name' => '运营'),

    'res_22' => array('id' => 'res_1','pId' => 'res_0','name' => '资源变现效率'),
    'res_23' => array('id' => 'res_1','pId' => 'res_0','name' => 'KPI进展'),
    'res_24' => array('id' => 'res_1','pId' => 'res_0','name' => '权限管理'),

);

//var_dump(json_encode($auth));
//print_r($auth);



if(0!==false){
    echo("0!==false");
}

$a = $b = 56;
echo("a=".$a."  b=".$b);*/

$price = '{"0-299999":"1.5","299999-599999":"1.8","599999-+":"2"}';
$price = '[0.5]';
echo formatPrice($price);
function formatPrice($price) {
    $arrPrice = json_decode($price);
    $newArrPrice = array();
    if (count($arrPrice) < 2) {
        $newArrPrice[] = array(0, '+\u221e', $arrPrice[0]);
        return json_encode($newArrPrice);
    }
    foreach ($arrPrice as $k => $p) {
        $item = explode('-', $k);
        $item[] = $p;
        $item = array_map(function ($value) {
            if ($value == '+') {
                return '+\u221e';
            }
            return $value;
        }, $item);
        $newArrPrice[] = $item;
    }
    return json_encode($newArrPrice);
}



