<?php
function zoj_ac_count($id){
	$s = url_get_contents('http://acm.zju.edu.cn/onlinejudge/showUserStatus.do?userId='.$id);
	preg_match('|<font color="red" size="4">(.*)/|U',$s,$m);
	return $m[1];
}
