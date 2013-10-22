
<?php

//$uid = 'akansha212';

//$pwd = 'hl9flphyq3';

//$api_pwd='4de4c41a400wokh5i';

//$phone = '8695390685';

//$msg = 'hellooooooo';

//$provider = 'youmint';

 

$content = 'uid='.rawurlencode($uid).

'&pwd='.rawurlencode($pwd).

'&phone='.rawurlencode($phone).

'&msg='.rawurlencode($msg).

'&codes=1'. // Use if you need a user freindly response message.

'&provider='.rawurlencode($provider);

 

$sms_response = file_get_contents('http://api.mVaayoo.com/mvaayooapi/MessageCompose?user=akanshasatyarthi212@gmail.com:vasundhra&senderID=TEST SMS&receipientno=8695390685&dcs=0&msgtxt=This is Test message&state=4 ' . $content);

 

echo $sms_response;
?>