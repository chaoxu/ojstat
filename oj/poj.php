<?php
function poj_ac_count($id){
	$s = file_get_contents('http://acm.pku.edu.cn/JudgeOnline/userstatus?user_id='.$id);

	preg_match('|<a href=status\?result=0&user_id='.$id.'>(.*)</a>|',$s,$m);
	return $m[1];
}
//print_r(poj_ac_count('dhu_try'));

