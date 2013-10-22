<?php
ob_start();
$uid = "9585640004";
$pwd ="Nitt005";
$phone = "9962100646";
$msg = "hfgfhjg";
$provider = "way2sms";

$content = "uid=".rawurlencode($uid).
"&pwd=".rawurlencode($pwd).
"&phone=".rawurlencode($phone).
"&msg=".rawurlencode($msg).
//”&codes=1?. // Use if you need a user freindly response message.
"&provider=".rawurlencode($provider);

$path="http://ubaid.tk/sms/sms.aspx?".$content;
$sms_response = file_get_contents($path);
header('Location:order.php');
?>