<?php
//core
function dbcon(){
	$user = "maven_cman";
	$pass = "Kith1992";
	$host = "localhost";
	$db = "maven_cman";
	@mysqli_pconnect($host,$user,$pass);
	mysqli_select_db($db);
}

function host(){
	$h = "http://".$_SERVER['HTTP_HOST']."/bankdb/";
	return $h;
}

function hRoot(){
	$url = $_SERVER['DOCUMENT_ROOT']."/bankdb/";
	return $url;
}

//parse string
function gstr(){
    $qstr = $_SERVER['QUERY_STRING'];
    parse_str($qstr,$dstr);
    return $dstr;
}

?>
