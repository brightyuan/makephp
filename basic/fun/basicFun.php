<?php
///*1.�ݹ麯��*/
//function recircl($a){
//	if($a<=10){
//		echo "$a".PHP_EOL;
//		recircl($a+1);
//	}
//}
//
//recircl(1);
//
///*2.�����еĺ���*/
//
//function foo()
//{
//  function bar()
//  {
//    echo "I don't exist until foo() is called.\n";
//  }
//}
//
///* ���ڻ����ܵ���bar()��������Ϊ���������� */
//
//foo();
//
///* ���ڿ��Ե���bar()�����ˣ���Ϊfoo()����
//   ��ִ��ʹ��bar()������Ϊ�Ѷ���ĺ��� */
//
//bar();
//
///*3.�������ĺ���*/
//$makefoo = true;
//
///* �����ڴ˴�����foo()������
//   ��Ϊ���������ڣ������Ե���bar()������*/
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
///* ���ڿ��԰�ȫ���ú��� foo()�ˣ�
//   ��Ϊ $makefoo ֵΪ�� */
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






