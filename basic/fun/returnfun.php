<?php 
/*1.ֵͨ��ʹ�ÿ�ѡ�ķ�����䷵�ء�
 * 1>���Է��ذ�������Ͷ�����������͡�
 * 2>��������������ֹ���������У����ҽ�����Ȩ���ص��øú����Ĵ�����*/
function square($num)
{
    return $num * $num;
    echo "��������������";
}
echo square(4)."\n";   // outputs '16'.


/*2.����һ�������Եõ��������ֵ*/
function small_numbers()
{
    return array (0, 1, 2);
}
list($zero, $one, $two) = small_numbers();
$va = small_numbers();
print_r($va);

/*3.�Ӻ�������һ������*/
function &returns_reference()
{
    return $someref;
}

$newref =& returns_reference();