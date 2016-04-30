<?
//Get URL from html input box
$URL= $_POST["name"];
//To lower
$URL = strtolower($URL); 
//Del https:// or http://
$URL = str_replace("http://","",$URL); 
$URL = str_replace("https://","",$URL); 
$now = fopen("now.txt", "r+");
$buffer = fread($now, filesize("now.txt"));
echo ("Your Short URL is <a href=http://rd.navys.me/" . $buffer . "/>". "http://rd.navys.me/" . $buffer);
mkdir($buffer);
$alias = fopen($buffer . "/index.html", "w");
fwrite ($alias," <!DOCTYPE html>
 <head><meta http-equiv=\"refresh\" content=\"1;url=http://" . $URL . "\"/></head><body><center><h1>Redirecting...<br></h1><h3>Beta</h3></center></body>" );
fclose($alias);
fclose ($now);
$now1 = fopen("now.txt", "w+");
fwrite ($now1,$buffer+1);
fclose ($now1);



?>
