<?php
//core
$conn;
function dbcon()
{
	global $conn;
	$user = "root";
	$pass = "";
	$host = "localhost";
	$db = "cman";
	$conn = mysqli_connect($host, $user, $pass, $db) or die("cannot connect to the database");
}

function host()
{
	$h = "http://" . $_SERVER['HTTP_HOST'] . "/bankdb/";
	return $h;
}

function hRoot()
{
	$url = $_SERVER['DOCUMENT_ROOT'] . "/bankdb/";
	return $url;
}

//parse string
function gstr()
{
	$qstr = $_SERVER['QUERY_STRING'];
	parse_str($qstr, $dstr);
	return $dstr;
}


$user = "root";
$pass = "";
$host = "localhost";
$db = "cman";
$conn1 = null;
try {
	$conn1 = new PDO("mysql:host={$host};dbname={$db};", $user, $pass);
} catch (Exception $e) {
}
