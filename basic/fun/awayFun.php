<?php
//===============================???????===============================
//y???????????λ??Y????λ??m?·??????M?·?????d?·?????????D????????
$date=date("Y-m-d");

//include,include_once.require,require_once
//require("file.php") ??PHP????????????????require??????????????????????????????
//include("file.php") ???????PHP??????κ?λ???PHP??????е???????include?????????????????????????

//===============================??????===============================
//sprintf("%d","3.2") ;//?????????????????????????????
//printf("%d","3.2") ;//??????????????
//print("3.2") ;//????
//echo "nihao","aa";//?????????????
//print_r(array("a","b","c"));//?????????????????????

//===============================?????????===============================

//??????????ж????????????
$str=" sdaf sd ";
$len=strlen($str);

//??????????????????????????????????????????????????????
$str = implode("-", array("a","b","c"));
echo $str;
//???????????????????飬????????????????????????????????????????????????????????????β????????????β???????????
//??з???????????????????????????????????????????鳤???????????????????????
$array=explode("a","asddad addsadassd dasdadfsdfasdaaa",4);
print_r($array);

//???????????????,??????
//???е??????????????????????????????????????????
$str=ltrim("a asd ","a");
//???????????????
$str=rtrim(" asd ");
//????????????????????????????????????е????????????????????????????
$str=trim(" sdsdfas ","a");
//???????????????????λ???????????????????????е???????λ???0??
//?????????????????????β?????????????????????β???????????-1??????????????????
 $str=substr("abcdefgh",0,5);
//????????????????????????ò????????滻
  $str=str_replace("a","b","abcabcAbca");//?????abcabcAbca?е?a??b?滻
//??????????????????????д?????
$str=strtoupper("sdaf");
//??????????????????д???
 $str=ucfirst("asdf");

//?????????????????????????????????
$int=substr_count("abcdeabcdeablkabd","abc");

//???????????????????????γ????λ???????????λ????0
 $int=strpos("asagaab","g");

//?????????????????????????γ????λ???????????λ????0
 $int=strrpos("asagaabadfab","ab");

//????????????д????????????????????????????????????????
 $str=strstr("sdafsdgaababdsfgs","ab");

//????????????д??????????????????????????????????????????
$str=strrchr("sdafsdgaababdsfgs","ab");
//?????????????????????????????????"\"
 $str=addcslashes("abcdefghijklmn","akd");

//???????????????????????????????????????????????????????д?????
//?????????λ???0?????????????1??????2????????????д????????????
$str=str_pad("abcdefgh",10,"at",0);
//???α????????????ascii????????????????????????????????????1,???????-1??????????????0
 $int1=strcmp("c","d");

//?????????????????????????????????????????????С??????????С????????????????????????λ?????????
//???????????д??????????С?????????????λ?????,??????????????????????
 $str=number_format(1231233.1415 , 2,"d","a");

 
 //===============================???????鷽??===============================

$arr=array("k0"=>"a","k1"=>"b","k2"=>"c");

//??????????????
$int=count($arr);

//?ж?????????????????????е???????????
$bool=in_array("b",$arr);

//?????????????????м????????????????鲻???
 $array=array_keys($arr);

//?ж????????????????????е????????????????????
$bool=array_key_exists("k1",$arr);

//????????????????????????????飬?????0?????????????鲻??
$array=array_values($arr);

//???????????????????
 $key=key($arr);

//?????????????????????
 $value=current($arr);

//???????????????????????????????????飬?????????????λ??????????????????????????
//?????????????????????????????????????????????????????????0,'key'???????????????????1,'value'?????????????????
$arr=array("k0"=>"a","k1"=>"b","k2"=>"c");
$array=each($arr);
print_r($array);
//?????????????????λ???????????????????????
$value=next($arr);

//????????????????λ???????????????????????
$value=prev($arr);

//????????????????????????????????
$value=reset($arr);

//????????????????λ??????????????λ????
$value=end($arr);

//???????????????????????????????????????????β?????????С????ù??????????????????????鳤??
$int=array_push($arr,"d","dfsd");

//?????????????????????в????????????????????????????????????0???????????????????????????????????????????λ?ò??????????????鳤??
$int=array_unshift($arr,"t1","t2");

//?????????β?????????????????????????????????????????
$value=array_pop($arr);

//array_pop???????????????????????????????????????????????
$value=array_shift($arr);

//????????????????????????????????????????????????????????????????????β?????????С??ù???????????????????鲻???
$array1=array_pad($arr,10,"t10");

//???????????????ж????????????????????飬????鲻???
$array=array_unique($array1);

//??????????????????????????????????С?????????????????0??????
$int=sort($array);

//??sort????????????????????С?????????????????0?????
$int=rsort($array);

//??????????????????????????????????????????????????????飬?????鳤?????????????鲻???
$array=array_combine(array("a","b","c","d","e"),$arr);

//??????????????????????鲻??
$array=array_merge($arr,array("a","b","c"));

//???????????????д????????????λ????????????????????????????????+????????????????????λ???0??
$array=array_slice($arr,2,1);

//????????array_slice()??????????????????????????
$array=array_splice($arr,2,1);

//?????????????????????????????????????????????????????????????????У????????????????浽?????????????????????
//???????????????????????????????????????????????????????????д??????????1
$array=range(3,9,2);

//??????????????????????????????????з??????
$bool=shuffle($arr);

//??????????????????????????
$int=array_sum(array("a",2,"cssf"));

//???????????????????飬?????????????????????飬???????????????м????????????????
//??????????????????????????????д??true??????????false??????
$array=array_chunk(array("a"=>"a","b","c","d","e","f","g","h"),2,true);












