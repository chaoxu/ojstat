<?php
function sgu_ac_count($id){
	$s = url_get_contents('http://acm.sgu.ru/teaminfo.php?id='.$id);
	preg_match('|Accepted: (.*)<|U',$s,$m);
	return $m[1];
}
