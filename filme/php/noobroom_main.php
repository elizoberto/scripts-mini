#!/usr/local/bin/Resource/www/cgi-bin/php
<?php echo "<?xml version='1.0' encoding='UTF8' ?>";
$host = "http://127.0.0.1/cgi-bin";
?>
<?php
error_reporting(0);
include ("../../common.php");
$ff="/tmp/n.txt";
if (!file_exists($ff)) {
$l="http://noobroom.com/";
$h=file_get_contents($l);
$t1=explode('value="',$h);
$n= count($t1);
$t2=explode('"',$t1[1]); // $t1[$n-1]
$noob=$t2[0];
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $noob."/login.php");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION  ,1);
  curl_setopt($ch, CURLOPT_HEADER, true);
  curl_setopt($ch, CURLOPT_TIMEOUT, 30);
  $h = curl_exec($ch);
  curl_close($ch);
  if (strpos($h,"200 OK") !== false) $out=$noob;
if ($n > 2 && !$out) {
  $t2=explode('"',$t1[2]);
  $noob=$t2[0];
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $noob."/login.php");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION  ,1);
  curl_setopt($ch, CURLOPT_HEADER, true);
  curl_setopt($ch, CURLOPT_TIMEOUT, 30);
  $h = curl_exec($ch);
  curl_close($ch);
  if (strpos($h,"200 OK") !== false) $out=$noob;
}
if ($out) {
$fh = fopen($ff, 'w');
fwrite($fh, $noob);
fclose($fh);
} else {
 die();
}
} else {
$noob=file_get_contents($ff);
}
$cookie="/tmp/noobroom.txt";
$filename="/usr/local/etc/dvdplayer/amigo.dat";
$noob_log="/usr/local/etc/dvdplayer/noob_log.dat";
if (file_exists($noob_log) && !file_exists($cookie)) {
  $handle = fopen($noob_log, "r");
  $c = fread($handle, filesize($noob_log));
  fclose($handle);
  $a=explode("|",$c);
  $a1=str_replace("?","@",$a[0]);
  $user=urlencode($a1);
  $user=str_replace("@","%40",$user);
  $pass=trim($a[1]);
  $post="email=".$user."&password=".$pass;
}
if ($post) {
  $lp=$check."s2=".urlencode($post);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $lp);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION  ,1);
  curl_exec($ch);
  curl_close($ch);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $noob."/");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 5.1; rv:22.0) Gecko/20100101 Firefox/22.0');
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION  ,1);
  curl_setopt ($ch, CURLOPT_REFERER, $noob."/");
  curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
  curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
  $html = curl_exec($ch);
  curl_close($ch);

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $noob."/login.php");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 5.1; rv:22.0) Gecko/20100101 Firefox/22.0');
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION  ,1);
  curl_setopt ($ch, CURLOPT_REFERER, $noob."/");
  curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
  curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
  $html = curl_exec($ch);
  curl_close($ch);

  $l=$noob."/login2.php";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $l);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 5.1; rv:22.0) Gecko/20100101 Firefox/22.0');
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION  ,1);
  curl_setopt ($ch, CURLOPT_POST, 1);
  curl_setopt ($ch, CURLOPT_REFERER, $noob."/login.php");
  curl_setopt ($ch, CURLOPT_POSTFIELDS, $post);
  curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
  curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
  $html = curl_exec($ch);
  curl_close($ch);
}
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $noob."/genre.php");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION  ,1);
  curl_setopt ($ch, CURLOPT_REFERER, $noob."/login.php");
  curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
  $html = curl_exec($ch);
  curl_close($ch);
  $t1=explode('premium.php',$html);
  $t2=explode(">",$t1[1]);
  $t3=explode("<",$t2[1]);
  $status=$t3[0]; //Active
  if (strpos($status,"day") === false)
    $premium="";
  else
    $premium="Premium: ".$status;
?>
<rss version="2.0">
<onEnter>
  startitem = "middle";
  setRefreshTime(1);
</onEnter>

<onRefresh>
  setRefreshTime(-1);
  itemCount = getPageInfo("itemCount");
</onRefresh>

<mediaDisplay name="threePartsView"
	sideLeftWidthPC="0"
	sideRightWidthPC="0"
	
	headerImageWidthPC="0"
	selectMenuOnRight="no"
	autoSelectMenu="no"
	autoSelectItem="no"
	itemImageHeightPC="0"
	itemImageWidthPC="0"
	itemXPC="8"
	itemYPC="25"
	itemWidthPC="50"
	itemHeightPC="8"
	capXPC="8"
	capYPC="25"
	capWidthPC="50"
	capHeightPC="64"
	itemBackgroundColor="0:0:0"
	itemPerPage="8"
  itemGap="0"
	bottomYPC="90"
	backgroundColor="0:0:0"
	showHeader="no"
	showDefaultInfo="no"
	imageFocus=""
	sliding="no"
	idleImageXPC="5" idleImageYPC="5" idleImageWidthPC="8" idleImageHeightPC="10"
>
		
  	<text align="center" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="20" fontSize="30" backgroundColor="10:105:150" foregroundColor="100:200:255">
		  <script>getPageInfo("pageTitle");</script>
		</text>
  	<text align="left" offsetXPC="8" offsetYPC="3" widthPC="15" heightPC="4" fontSize="14" backgroundColor="10:105:150" foregroundColor="100:200:255">
    2=Re-Logon
		</text>
  	<text align="right" offsetXPC="55" offsetYPC="3" widthPC="40" heightPC="4" fontSize="14" backgroundColor="10:105:150" foregroundColor="100:200:255">
    <script>"<?php echo $premium; ?>" + sprintf("%s "," ");</script>
		</text>
  	<text align="left" offsetXPC="6" offsetYPC="15" widthPC="75" heightPC="4" fontSize="14" backgroundColor="10:105:150" foregroundColor="100:200:255">

		</text>
  	<text redraw="yes" offsetXPC="85" offsetYPC="12" widthPC="10" heightPC="6" fontSize="20" backgroundColor="10:105:150" foregroundColor="60:160:205">
		  <script>sprintf("%s / ", focus-(-1))+itemCount;</script>
		</text>
  	<text  redraw="yes" align="center" offsetXPC="0" offsetYPC="90" widthPC="100" heightPC="8" fontSize="17" backgroundColor="10:105:150" foregroundColor="254:254:254">
    <script>info;</script>
		</text>
		<image  redraw="yes" offsetXPC=60 offsetYPC=35 widthPC=30 heightPC=30>
		image/movies.png
		</image>
        <idleImage>image/POPUP_LOADING_01.png</idleImage>
        <idleImage>image/POPUP_LOADING_02.png</idleImage>
        <idleImage>image/POPUP_LOADING_03.png</idleImage>
        <idleImage>image/POPUP_LOADING_04.png</idleImage>
        <idleImage>image/POPUP_LOADING_05.png</idleImage>
        <idleImage>image/POPUP_LOADING_06.png</idleImage>
        <idleImage>image/POPUP_LOADING_07.png</idleImage>
        <idleImage>image/POPUP_LOADING_08.png</idleImage>

		<itemDisplay>
			<text align="left" lines="1" offsetXPC=0 offsetYPC=0 widthPC=100 heightPC=100>
				<script>
					idx = getQueryItemIndex();
					focus = getFocusItemIndex();
					if(focus==idx) 
					{
					  location = getItemInfo(idx, "location");
					  annotation = getItemInfo(idx, "annotation");
					}
					getItemInfo(idx, "title");
				</script>
				<fontSize>
  				<script>
  					idx = getQueryItemIndex();
  					focus = getFocusItemIndex();
  			    if(focus==idx) "16"; else "14";
  				</script>
				</fontSize>
			  <backgroundColor>
  				<script>
  					idx = getQueryItemIndex();
  					focus = getFocusItemIndex();
  			    if(focus==idx) "10:80:120"; else "-1:-1:-1";
  				</script>
			  </backgroundColor>
			  <foregroundColor>
  				<script>
  					idx = getQueryItemIndex();
  					focus = getFocusItemIndex();
  			    if(focus==idx) "255:255:255"; else "140:140:140";
  				</script>
			  </foregroundColor>
			</text>

		</itemDisplay>
		
<onUserInput>
<script>
ret = "false";
userInput = currentUserInput();

if (userInput == "pagedown" || userInput == "pageup")
{
  idx = Integer(getFocusItemIndex());
  if (userInput == "pagedown")
  {
    idx -= -8;
    if(idx &gt;= itemCount)
      idx = itemCount-1;
  }
  else
  {
    idx -= 8;
    if(idx &lt; 0)
      idx = 0;
  }

  print("new idx: "+idx);
  setFocusItemIndex(idx);
	setItemFocus(0);
  redrawDisplay();
  "true";
}
else if (userInput == "two" || userInput == "2")
{
 jumptolink("logon");
 "true";
}
ret;
</script>
</onUserInput>
		
	</mediaDisplay>
	
	<item_template>
		<mediaDisplay  name="threePartsView" idleImageXPC="5" idleImageYPC="5" idleImageWidthPC="8" idleImageHeightPC="10">
        <idleImage>image/POPUP_LOADING_01.png</idleImage>
        <idleImage>image/POPUP_LOADING_02.png</idleImage>
        <idleImage>image/POPUP_LOADING_03.png</idleImage>
        <idleImage>image/POPUP_LOADING_04.png</idleImage>
        <idleImage>image/POPUP_LOADING_05.png</idleImage>
        <idleImage>image/POPUP_LOADING_06.png</idleImage>
        <idleImage>image/POPUP_LOADING_07.png</idleImage>
        <idleImage>image/POPUP_LOADING_08.png</idleImage>
		</mediaDisplay>

	</item_template>

	<searchLink>
	  <link>
	    <script>"<?php echo $host."/scripts/filme/php/noobroom_s.php?query=".$noob.","; ?>" + urlEncode(keyword) + "," + urlEncode(keyword);</script>
	  </link>
	</searchLink>
	
	<logon>
	<link>
	<script>
	url="/usr/local/etc/www/cgi-bin/scripts/filme/php/noobroom.rss";
	url;
	</script>
	</link>
	</logon>
<channel>
	<title>Movies from Noobroom</title>
	<menu>main menu</menu>
<item>
  <title>Search</title>
  <onClick>
		keyword = getInput();
		if (keyword != null)
		 {
	       jumpToLink("searchLink");
		  }
   </onClick>
</item>

<?php
function str_between($string, $start, $end){ 
	$string = " ".$string; $ini = strpos($string,$start); 
	if ($ini == 0) return ""; $ini += strlen($start); $len = strpos($string,$end,$ini) - $ini; 
	return substr($string,$ini,$len); 
}

if (strpos($status,"day") === false && !file_exists($cookie)) {
$link = "/usr/local/etc/www/cgi-bin/scripts/filme/php/noobroom.rss";

	  echo '
	  <item>
	  <title>Logon</title>
	  <link>'.$link.'</link>
	  <mediaDisplay name="onePartView" />
	  </item>
	  ';
}
  $title="Favorite";
  $link = $host."/scripts/filme/php/noobroom_fav.php";
  echo '
  <item>
  <title>'.$title.'</title>
  <link>'.$link.'</link>
  <image></image>
  </item>
  ';


    $title="Latest";
    $link=$noob."/latest.php";
    $link1 = $host."/scripts/filme/php/noobroom.php?query=".urlencode($title).",".urlencode($link);
	echo '
	<item>
	<title>'.$title.'</title>
	<link>'.$link1.'</link>
	<annotation>'.$title.'</annotation>
	<mediaDisplay name="threePartsView"/>
	</item>
	';
    $title="Latest (1080p)";
    $link=$noob."/latest.php?hd=1";
    $link1 = $host."/scripts/filme/php/noobroom.php?query=".urlencode($title).",".urlencode($link);
	echo '
	<item>
	<title>'.$title.'</title>
	<link>'.$link1.'</link>
	<annotation>'.$title.'</annotation>
	<mediaDisplay name="threePartsView"/>
	</item>
	';
    $title="Alphabetical";
    $link=$noob."/azlist.php";
    $link1 = $host."/scripts/filme/php/noobroom.php?query=".urlencode($title).",".urlencode($link);
	echo '
	<item>
	<title>'.$title.'</title>
	<link>'.$link1.'</link>
	<annotation>'.$title.'</annotation>
	<mediaDisplay name="threePartsView"/>
	</item>
	';
    $title="Top Rating";
	$link=$noob."/rating.php";
    $link1 = $host."/scripts/filme/php/noobroom.php?query=".urlencode($title).",".urlencode($link);
	echo '
	<item>
	<title>'.$title.'</title>
	<link>'.$link1.'</link>
	<annotation>'.$title.'</annotation>
	<mediaDisplay name="threePartsView"/>
	</item>
	';
    $title="Release date";
	$link=$noob."/year.php";
    $link1 = $host."/scripts/filme/php/noobroom.php?query=".urlencode($title).",".urlencode($link);
	echo '
	<item>
	<title>'.$title.'</title>
	<link>'.$link1.'</link>
	<annotation>'.$title.'</annotation>
	<mediaDisplay name="threePartsView"/>
	</item>
	';

//http://37.128.191.200/genre.php?b=00000000000000000000100000
$img = "image/movies.png";
$len= strlen("00000000000000000000100000");
$videos = explode('checkbox" name="', $html);
unset($videos[0]);
$n=1;
$videos = array_values($videos);
foreach($videos as $video) {
    $l="";
    for ($k=1;$k<$len+1;$k++) {
      if ($k==$n)
        $l.="1";
      else
        $l.="0";
    }
    $n++;
    $link=$noob."/genre.php?b=".$l;

    $t3 = explode('>', $video);
    $t4 = explode('<', $t3[1]);
    $title = $t4[0];

		$link1 = $host."/scripts/filme/php/noobroom.php?query=".urlencode($title).",".urlencode($link);
	echo '
	<item>
	<title>'.$title.'</title>
	<link>'.$link1.'</link>
	<annotation>'.$title.'</annotation>
	<mediaDisplay name="threePartsView"/>
	</item>
	';
}

?>

</channel>
</rss>
