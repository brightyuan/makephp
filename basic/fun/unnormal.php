<?php
/**
 * 1.function extract : �������аѱ������뵽��ǰ�ķ��ű���,keyΪ��������valueΪ����ֵ
 */
$a = "original";
$my_array = array("a"=>"cat","b"=>"bag","c"=>"Horse");
extract($my_array);
echo "\$a = $a  ";
echo "\$b = $b  ";
echo "\$c = $c  ";


/**
 * 2.str_pad(); //���ַ������Ϊָ���ĳ���
 */
$st = "helloworld";
$st = str_pad($st, 18,"==",STR_PAD_LEFT);
echo  "\n";
echo  $st;
