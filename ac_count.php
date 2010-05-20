<?php
require('config.php');
require('functions.php');
//ini_set(display_errors, 0);
$oj = array_keys($id);
for($i = 0;$i<count($oj);$i++){
	require('oj/'.$oj[$i].'.php');
	$ac[$oj[$i]] = call_user_func($oj[$i].'_ac_count',$id[$oj[$i]]);
	$ac['total'] += $ac[$oj[$i]];
}
