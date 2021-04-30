<?php 
/*1.值通过使用可选的返回语句返回。
 * 1>可以返回包括数组和对象的任意类型。
 * 2>返回语句会立即中止函数的运行，并且将控制权交回调用该函数的代码行*/
function square($num)
{
    return $num * $num;
    echo "哈哈，看不到我";
}
echo square(4)."\n";   // outputs '16'.


/*2.返回一个数组以得到多个返回值*/
function small_numbers()
{
    return array (0, 1, 2);
}
list($zero, $one, $two) = small_numbers();
$va = small_numbers();
print_r($va);

/*3.从函数返回一个引用*/
function &returns_reference()
{
    return $someref;
}

$newref =& returns_reference();