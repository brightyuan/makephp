<?php
///*1.递归函数*/
//function recircl($a){
//	if($a<=10){
//		echo "$a".PHP_EOL;
//		recircl($a+1);
//	}
//}
//
//recircl(1);
//
///*2.函数中的函数*/
//
//function foo()
//{
//  function bar()
//  {
//    echo "I don't exist until foo() is called.\n";
//  }
//}
//
///* 现在还不能调用bar()函数，因为它还不存在 */
//
//foo();
//
///* 现在可以调用bar()函数了，因为foo()函数
//   的执行使得bar()函数变为已定义的函数 */
//
//bar();
//
///*3.有条件的函数*/
//$makefoo = true;
//
///* 不能在此处调用foo()函数，
//   因为它还不存在，但可以调用bar()函数。*/
//
//bar1();
//foo1();
//if ($makefoo) {
//  function foo1()
//  {
//    echo "foo1()\n";
//  }
//}
//
///* 现在可以安全调用函数 foo()了，
//   因为 $makefoo 值为真 */
//
//if ($makefoo) foo1();
//
//function bar1()
//{
//  echo "bar1()\n";
//}


$searchName = "b";
$rType = in_array($searchName, array('a', 'b', 'c'),true) == false ? $searchName : array_search($searchName, array('a', 'b', 'c'));
var_dump($rType);
var_dump(array_search($searchName, array('a', 'b', 'c')));






