<?php
/**
 * Created by IntelliJ IDEA.
 * User: yuanwanghong
 * Date: 2020/8/10
 * Time: 21:36
 */

//先加载文件，对应框架里autoload方法
require_once "foo.php";


use Awe\Tools\Foo;
$foo = new  Foo();
$foo->doAwesomeThings();