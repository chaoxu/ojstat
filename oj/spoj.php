<?php
function spoj_ac_count($id){
        $s = file_get_contents('http://www.spoj.pl/users/'.$id);
	preg_match('|<td><b>(.*)</b></td>|',$s,$m);
	return $m[1];
}
//echo spoj_ac_count('defrager');
