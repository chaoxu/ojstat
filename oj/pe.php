<?php
function pe_ac_count($id){
	$s = url_get_contents('http://www.geekraj.com/euler/getscore.php?id='.$id);
	preg_match("|'score': '(.*)'|U",$s,$m);
	return $m[1];
}
//echo pe_ac_count('mgccl');
