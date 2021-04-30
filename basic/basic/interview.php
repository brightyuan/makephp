<?php
/**
 * 1.HTTP协议中几个状态码的含义：
 */
/*
1xx  临时响应
2xx   成功
3xx  重定向
4xx  （client）请求错误
5xx   服务器错误
*/

/**
 * 2.Heredoc
 * heredoc技术，来部分的实现了界面与代码的准分离，phpwind模板就是一个典型的例子
 * 1.以<<<End开始标记开始，以End结束标记结束，结束标记必须顶头写，不能有缩进和空格，且在结束标记末尾要有分号 。开始标记和开始标记相同，比如常用大写的EOT、EOD、EOF来表示，但是不只限于那几个，只要保证开始标记和结束标记不在正文中出现即可。
 * 2.位于开始标记和结束标记之间的变量可以被正常解析，但是函数则不可以。在heredoc中，变量不需要用连接符.或,来拼接，如下：
 */
/*
$v = 2;
$a = <<<EOF
"abc"$v
"123"
EOF;
echo $a;

function outputs(){
echo <<<EOT
	<html>
	<body>eof body test</body>
	</html>
EOT;
}

outputs();
*/
 

/**
 * 3.魔术方法
 */
/**
 * php规定以两个下划线（__）开头的方法都保留为魔术方法，所以建议大家函数名最好不用__开头，除非是为了重载已有的魔术方法。 
 *  PHP中的魔术方法有(14个) :
 *  		__construct,
 *  		__destruct ,
 *   	__call,
 *      __autoload
 *      
 *    	__get,
 *    	__set,
 *     	__isset,
 *     	__unset,
 *     
 *    	__callStatic,
 *      __sleep,
 *      __wakeup,
 *      __toString,
 *      
 *      __set_state,
 *      __clone,
1、__get、__set   (未声明的属性)
这两个方法是为在类和他们的父类中没有声明的属性而设计的  
__get( $property ) 当调用一个未定义的属性时，此方法会被触发，传递的参数是被访问的属性名  
__set( $property, $value ) 给一个未定义的属性赋值时，此方法会被触发，传递的参数是被设置的属性名和值  
这里的没有声明包括当使用对象调用时，访问控制为proteced,private的属性（即没有权限访问的属性）
 
2、__isset、__unset  (未定义的属性)
__isset( $property ) 当在一个未定义的属性上调用isset()函数时调用此方法  
__unset( $property ) 当在一个未定义的属性上调用unset()函数时调用此方法  
与__get方法和__set方法相同，这里的没有声明包括当使用对象调用时，访问控制为proteced,private的属性（即没有权限访问的属性）
  
3、__call  (未定义的方法)
__call( $method, $arg_array ) 当调用一个未定义的方法时调用此方法  
这里的未定义的方法包括没有权限访问的方法；如果方法不存在就去父类中找这个方法，如果父类中也不存在就去调用本类的__call()方​法，如果本类中不存在__call()方法就去找父类中的__call()方法  
  
4、__autoload  (未定义的类)
__autoload 函数，它会在试图使用尚未被定义的类时自动调用。通过调用此函数，脚本引擎在 PHP 出错失败前有了最后一个机会加载所需的类。  
如果要定义一个全局的自动加载类，则必须用spl_autoload_register()方法将处理类注册到PHP标准库：  
class Loader    
{    
static function autoload_class($class_name)    
{    
//寻找正确的$class_name类，并引入，没有则抛出异常    
}    
}    
    
//   设置对象的自动载入 
//   spl_autoload_register — Register given function as __autoload() implementation 
spl_autoload_register(array('Loader', 'autoload_class'));    
$a = new Test();//Test没用require就实例化，实现自动加载，很多框架就用这种方法自动加载类    
    
注意: 在 __autoload 函数中抛出的异常不能被 catch 语句块捕获并导致致命错误，所以应该在函数本身做捕获。  

5、__construct、__destruct   （对象创建/销毁时）
__construct 构造方法，当一个对象创建时调用此方法，相对于PHP4使用此方法的好处是：可以使构造方法有一个独一无二的名称,无论它所在的类的名称是什么.这样你在改变类的名称时,就不需要改变构造方法的名称  
__destruct 析构方法，PHP将在对象被销毁前（即从内存中清除前）调用这个方法。默认情况下,PHP仅仅释放对象属性所占用的内存并销毁对象相关的资源，析构函数允许你在使用一个对象之后执行任意代码来清除内存。当PHP决定你的脚本不再与对象相关时,析构函数将被调用。  
	在一个函数的命名空间内，这会发生在函数return的时候。  
	对于全局变量,这发生于脚本结束的时候。  
	如果你想明确地销毁一个对象,你可以给指向该对象的变量分配任何其它值.通常将变量赋值勤为NULL或者调用unset.
	  
6、__clone  （对象复制）
PHP5中的对象赋值是使用的引用赋值，如果想复制一个对象则需要使用clone方法，在调用此方法是对象会自动调用__clone魔术方法，如果在对象复制需要执行某些初始化操作，可以在__clone方法实现。
  
7、__toString   （对象转换字符串）
__toString方法在将一个对象转化成字符串时自动调用，比如使用echo打印对象时。  
如果类没有实现此方法，则无法通过echo打印对象，否则会显示：Catchable fatal error: Object of class test could not be converted to string in  
此方法必须返回一个字符串。  
在PHP 5.2.0之前，__toString方法只有结合使用echo() 或 print()时 才能生效。PHP 5.2.0之后，则可以在任何字符串环境生效（例如通过printf()，使用%s修饰符），但 不能用于非字符串环境（如使用%d修饰符）。从PHP 5.2.0，如果将一个未定义__toString方法的对象 转换为字符串，会报出一个E_RECOVERABLE_ERROR错误。
  
8、__sleep、__wakeup  
__sleep 串行化的时候用  
__wakeup 反串行化的时候调用  
serialize() 检查类中是否有魔术名称 __sleep 的函数。如果这样，该函数将在任何序列化之前运行。它可以清除对象并应该返回一个包含有该对象中应被序列化的所有变量名的数组。  
使用 __sleep 的目的是关闭对象可能具有的任何数据库连接，提交等待中的数据或进行类似的清除任务。此外，如果有非常大的对象而并不需要完全储存下来时此函数也很有用。  
相反地，unserialize() 检查具有魔术名称 __wakeup 的函数的存在。如果存在，此函数可以重建对象可能具有的任何资源。  
使用 __wakeup 的目的是重建在序列化中可能丢失的任何数据库连接以及处理其它重新初始化的任务。
  
9、__set_state  
当调用var_export()时，这个静态方法会被调用（自PHP 5.1.0起有效）。  
本方法的唯一参数是一个数组，其中包含按array(’property’ => value, …)格式排列的类属性。
  
10、__invoke  （用调用函数方式来调用对象）
当尝试以调用函数的方式调用一个对象时，__invoke 方法会被自动调用。  
PHP5.3.0以上版本有效
  
11、__callStatic  
它的工作方式类似于 __call() 魔术方法，__callStatic() 是为了处理静态方法调用，  
PHP5.3.0以上版本有效  
PHP 确实加强了对 __callStatic() 方法的定义；它必须是公共的，并且必须被声明为静态的。同样，__call() 魔术方法必须被定义为公共的，所有其他魔术方法都必须如此  
*/
 

/**
 * 4.写代码来解决多进程/线程同时读写一个文件的问题
 */ 

function T_put($filename,$string) {
	$fp = fopen($filename, 'a');
	if (flock($fp, LOCK_EX)) {// add write lock
		fputs($fp, $string);
		flock($fp, LOCK_UN);
	}
	fclose($fp);
}

function T_get($filename,$string) {
	$fp = fopen($filename, 'r');
	if (flock($fp, LOCK_SH)) {// add read lock
		$rst = fgets($fp, $string);
		flock($fp, LOCK_UN);
	}
	fclose($fp);
	return $rst;
}


/**
 *5.mysql 存储引擎 myisam,innodb区别
 */
/*
简单的表达。  
MyISAM 是非事务的存储引擎。  
innodb是支持事务的存储引擎。  
  
innodb的引擎比较适合于插入和更新操作比较多的应用  
而MyISAM 则适合用于频繁查询的应用  
  
MyISAM --表锁。  
innodb--设计合理的话是行锁。  
MyISAM 不会出现死锁。  
  
最大的区别就是MYISAM适合小数据，小并发；INNODB 适合大数据，大并发。最大的区别就是在锁的级别上。  
  
MyISAM类型不支持事务处理等高级处理，而InnoDB类型支持。 MyISAM类型的表强调的是性能，其执行数度比InnoDB类型更快，但是不提供事务支持，而InnoDB提供事务支持已经外部键等高级数据库功能。综述，就可以根据数据表不同的用处是用不同的存储类型。而且MyISAM是文件存储的，可以进行直接在不同操作系统间拷贝使用。  
   
InnoDB：  
InnoDB 给 MySQL 提供了具有事务(commit)、回滚(rollback)和崩溃修复能力(crash recovery capabilities)的事务安全(transaction-safe (ACID compliant))型表。InnoDB 提供了行锁(locking on row level)，提供与 Oracle 类型一致的不加锁读取(non-locking read in SELECTs)。这些特性均提高了多用户并发操作的性能表现。在InnoDB表中不需要扩大锁定(lock escalation)，因为 InnoDB 的列锁定(row level locks)适宜非常小的空间。InnoDB 是 MySQL 上第一个提供外键约束(FOREIGN KEY constraints)的表引擎。InnoDB 的设计目标是处理大容量数据库系统，它的 CPU 利用率是其它基于磁盘的关系数据库引擎所不能比的。在技术上，InnoDB 是一套放在 MySQL 后台的完整数据库系统，InnoDB 在主内存中建立其专用的缓冲池用于高速缓冲数据和索引。 InnoDB 把数据和索引存放在表空间里，可能包含多个文件，这与其它的不一样，举例来说，在 MyISAM 中，表被存放在单独的文件中。InnoDB 表的大小只受限于操作系统的文件大小，一般为 2 GB。InnoDB所有的表都保存在同一个数据文件 ibdata1 中（也可能是多个文件，或者是独立的表空间文件），相对来说比较不好备份，可以拷贝文件或用navicat for mysql。  
   
MyISAM  
每张MyISAM 表被存放在三个文件 ：frm 文件存放表格定义。 数据文件是MYD (MYData) 。 索引文件是MYI (MYIndex) 引伸。  
因为MyISAM相对简单所以在效率上要优于InnoDB，小型应用使用MyISAM是不错的选择。  
MyISAM表是保存成文件的形式,在跨平台的数据转移中使用MyISAM存储会省去不少的麻烦
*/












































 
 
 
 
 
 
 
 
 
 
 