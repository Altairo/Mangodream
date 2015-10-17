<?php
$filename="example_homepage.txt";
$file=fopen($filename, "r");
if (!$file) {echo "error";}
// echo "<description>&br;&br;&br;&br;&br;&br;&br;&br;&br;&br;&br;";
while (!feof ($file)) {
$tmp= fgets($file,4096);

$tmp = eregi_replace("<html>", "", $tmp);
 $tmp =  eregi_replace("(<a|</a)[^<>]*>", "", $tmp);
 $tmp =  eregi_replace("(<head|</head)[^<>]*>", "", $tmp);
 $tmp =  eregi_replace("<a[^<>]*>", "", $tmp);
// $tmp =  eregi_replace("<img[^<>]*>", "", $tmp);
/* $tmp =  eregi_replace("(<a|</a)[^<>]*>", "", $tmp);
$tmp = eregi_replace("style=\"color:#666666\"", "", $tmp);
$tmp = eregi_replace("bgcolor=\"#dddddd\"", "class=\"main\"", $tmp);
$tmp = eregi_replace("bgcolor=\"#eeeeee\"", "class=\"main\"", $tmp);
$tmp = eregi_replace("<p><b>Расписание внутренних авиарейсов</b></p>", "", $tmp);
$tmp = eregi_replace("подробнее...", "", $tmp);
$tmp = eregi_replace("<br />", "&lt;br&gt;", $tmp); 
$tmp = eregi_replace("<div class=\"sectionContainer\">", "", $tmp);
$tmp = eregi_replace("<td bgcolor=\"#a0abee\" align=\"center\" valign=\"middle\">", "<th class=\"main\" align=\"center\" valign=\"middle\">", $tmp);
$tmp = eregi_replace("<td bgcolor=\"#a0abee\" align=\"left\" valign=\"middle\">", "<th class=\"main\" align=\"center\" valign=\"middle\">", $tmp);
$tmp = eregi_replace("  <table width=\"100%\" cellspacing=\"0\" cellpadding=\"2\" border=\"0\">", "<table width=\"100%\" cellspacing=\"1\" cellpadding=\"1\" border=\"0\">", $tmp);
$tmp = eregi_replace("®", "&reg;", $tmp);
$tmp = eregi_replace("™", "&tm;", $tmp);
*/
// $tmp =  str_replace("\n", "", $tmp);
echo $tmp;

}

// echo "</description>";

?>



