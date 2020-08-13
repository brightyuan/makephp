<?php
/**
 * Created by IntelliJ IDEA.
 * User: yuanwanghong
 * Date: 2020/8/10
 * Time: 21:19
 */

//namespace MyProject;
//
//const CONNECT_OK = 1;
//class Connection { /* ... */ }
//function connect() { /* ... */  }
//
//namespace AnotherProject;
//
//const CONNECT_OK = 1;
//class Connection { /* ... */ }
//function connect() { /* ... */  }


//namespace MyProject {
//    const CONNECT_OK = 1;
//    class Connection { /* ... */ }
//    function connect() { /* ... */  }
//}
//
//namespace AnotherProject {
//    const CONNECT_OK = 1;
//    class Connection { /* ... */ }
//    function connect() { /* ... */  }
//}

//namespace MyProject {
//
//    const CONNECT_OK = 1;
//    class Connection { /* ... */ }
//    function connect() { /* ... */  }
//}
//
//namespace { // 全局代码
//    session_start();
//    $a = MyProject\connect();
//    use MyProject\Connection;
//}

namespace MyProject\Sub\Level;  //声明分层次的单个命名空间

const CONNECT_OK = 1;
class Connection { /* ... */ }
function Connect() { /* ... */  }

