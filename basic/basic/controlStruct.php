<?php 
/*introduction*/
if (condition) {
	;
}
while (condition) {
	;
}
for ($i = 0; $i < $index; $i++) {
	
}
foreach ($list as $key=>$value){
	
}
foreach ($list as $key){
	
}
/*替代语法*/
if (expr):
endif;

while (exper):
endwhile;

/*do-while*/
do{
	
}while ($i>0);

/**for*/
/* example 1 */

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

/* example 2 */

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}

/* example 3 */

$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}

/* example 4 */

for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);

/**example 5*/
$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863)
);
$size = count($people);
for($i = 0; $i < $size; ++$i) {
    $people[$i]['salt'] = mt_rand(000000, 999999);
}
/**5.foreach*/

$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
// $arr is now array(2, 4, 6, 8)
unset($value); // 最后取消掉引用
/*6.switch*/
switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
}
//可以用字符串
switch ($i) {
case "apple":
    echo "i is apple";
    break;
case "bar":
    echo "i is bar";
    break;
case "cake":
    echo "i is cake";
    break;
}
/**
 * 1>. require_once
 *    require_once 语句和 require 语句完全相同，唯一区别是 PHP 会检查该文件是否已经被包含过，如果是则不会再次包含。
 * 2>.include_once
 * 	  include_once 语句在脚本执行期间包含并运行指定文件。此行为和 include 语句类似，唯一区别是如果该文件中已经被包含过，则不会再次包含。
 * 3>.include 语句包含并运行指定文件
 * 4>require 
 *   和 include 几乎完全一样，除了处理失败的方式不同之外。 require 在出错时产生 E_COMPILE_ERROR 级别的错误。换句话说将导致脚本中止而 include 只产生警告（E_WARNING），脚本会继续运行
 */
/* goto 示例*/
goto a;
echo 'Foo';
 
a:
echo 'Bar';
/*goto 跳出循环示例*/
for($i=0,$j=50; $i<100; $i++) {
  while($j--) {
    if($j==17) goto end; 
  }  
}
echo "i = $i";
end:
echo 'j hit 17';

/*continue 在循环结构用用来跳过本次循环中剩余的代码并在条件求值为真时开始执行下一次循环。*/
for ($i = 0; $i < 5; ++$i) {
      if ($i == 2)
          continue;
      print "$i\n";
  }
  
  
/*	break 结束当前 for，foreach，while，do-while 或者 switch 结构的执行。
	break 可以接受一个可选的数字参数来决定跳出几重循环。*/
$arr = array('one', 'two', 'three', 'four', 'stop', 'five');
while (list (, $val) = each($arr)) {
    if ($val == 'stop') {
        break;    /* You could also write 'break 1;' here. */
    }
    echo "$val<br />\n";
}

/* 使用可选参数 */
$i = 0;
while (++$i) {
    switch ($i) {
    case 5:
        echo "At 5<br />\n";
        break 1;  /* 只退出 switch. */
    case 10:
        echo "At 10; quitting<br />\n";
        break 2;  /* 退出 switch 和 while 循环 */
    default:
        break;
    }
}
/*declare 结构用来设定一段代码的执行指令。declare 的语法和其它流程控制结构相似：
declare (directive)
    statement*/
declare(ticks = 1);
function aa() {
	echo "aa called\n";
}
register_tick_function('aa');

$a = 1;
echo 1;
if($a>0){
	$a += 2;
	echo 2;
	print("a");
	echo 3;
}
echo 4;
?>