<?php

function uva_ac_count($id){
	$t = uva_fetch_basic($id);
	return $t[2];
}

function uva_fetch_basic($id){
	$s = file_get_contents('http://uva.onlinejudge.org/index.php?option=onlinejudge&page=show_authorstats&userid='.$id);
	preg_match_all('|<td width="20%" align="center"><h1 style="margin-top:-20px;margin-bottom:-5px;">(.*)</h1></td>|',$s,$matches);
	return $matches[1];
}
