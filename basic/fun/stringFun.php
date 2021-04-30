<?php
//echo strlen("helllwp")."\n";
//echo strpos("helloworld", "w");


function formatNameWithOutPlatformId($name) {
    if (strripos($name, '_')) {
        $name = substr($name, 0, strripos($name, '_'));
    }
    return $name;
}

$name = formatNameWithOutPlatformId("cel_91_1");
//var_dump(strripos("cel_91_1", '_'));
//var_dump(substr("cel_91_1", 0, strripos("cel_91_1", '_')));
//var_dump($name);

$detail['score'] = "+49377";
//var_dump(strpos($detail['score'], '-')===false);

$t = "23415611";
$r = strstr($t,'1');
var_dump($r);