#!/usr/local/bin/Resource/www/cgi-bin/php
<?php
function str_between($string, $start, $end){ 
	$string = " ".$string; $ini = strpos($string,$start); 
	if ($ini == 0) return ""; $ini += strlen($start); $len = strpos($string,$end,$ini) - $ini; 
	return substr($string,$ini,$len); 
}
$link = $_GET["file"];
$html = file_get_contents($link);
$link = str_between($html, "flashvars.videoUrl = '", "'");
if ($link <> "") {
print $link;
}
if($link=="") {
	$link = str_between($html, "flashvars.video_url = '", "'");
	$link = urldecode($link);
print $link;
}
if ($link == "") {
$link=str_between($html,'video_url=','&');
	$link = urldecode($link);
print $link;
}
?>
