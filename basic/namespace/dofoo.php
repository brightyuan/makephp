<?php
/**
 * Created by IntelliJ IDEA.
 * User: yuanwanghong
 * Date: 2020/8/10
 * Time: 21:36
 */

//�ȼ����ļ�����Ӧ�����autoload����
require_once "foo.php";


use Awe\Tools\Foo;
$foo = new  Foo();
$foo->doAwesomeThings();