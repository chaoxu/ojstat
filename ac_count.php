<?php
require('config.php');
$oj = array_keys($id);
for($i = 0;$i<count($oj);$i++){
	require('oj/'.$oj[$i].'.php');
	$ac[$oj[$i]] = call_user_func($oj[$i].'_ac_count',$id[$oj[$i]]);
}
print_r($ac);