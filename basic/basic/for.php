<?php
/*define("MY_OK", 10000);
$player = array("j","b","N");
reset($player);
while (list($k,$v) = each($player)) {
	print "$k = $v \n";
}
print "=================\n";
foreach ($player as $k=>$v){
	print "$k = $v \n";
}
print "=================\n";

print MY_OK;
$_ci_data = array('_ci_view' => 'view', '_ci_vars' =>'1234', '_ci_return' => 'return date');
print_r($_ci_data);
foreach (array('_ci_view', '_ci_vars', '_ci_path', '_ci_return') as $_ci_val)
{
	$$_ci_val = ( ! isset($_ci_data[$_ci_val])) ? FALSE : $_ci_data[$_ci_val];
	echo $_ci_val."==".$$_ci_val."\n";
}*/
$contractIds = "1,2,3,4,78";
$arrContractIds = explode(",", $contractIds);
if (is_array($arrContractIds)) {
    foreach ($arrContractIds as $cId) {
        $con = "";
        if (empty($con)) {
            echo "合同{$cId}不存在";
            return;
        }
    }
}