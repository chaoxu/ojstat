<?php
function timus_ac_count($id){
	$s = url_get_contents('http://acm.timus.ru/author.aspx?id='.$id);
	preg_match('|Problems solved</TD><TD CLASS="value">(.*)</TD>|U',$s,$m);
	return $m[1];
}

