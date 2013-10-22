<html>
		  
<!DOCTYPE html>
    <head>
        <title>National Institute Of Technology Tiruchirapalli</title>
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <div class="codrops-top">
                <span class="right">
                        <strong>Welcome To Library</strong>
                    
                </span>
                <div class="clr"></div>
            </div>
            <header>
                <h1></h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  method="post" action="page2.php" autocomplete="on"> 
                                <h1>STATUS</h1> 
                                <P>book has been issued to your card,u will recieve a message shortly</p><br>
								<p>want to issue more books?</p>
								<p class="login button"> 
                                    <input type="submit" value="issue more" /> 
								</p>
                            </form>
							 <form  method="post" action="authorpage.php" autocomplete="on"> 
                                <p>recieve a mail</p>
								<p class="login button"> 
                                    <input type="submit" value="mail me" /> 
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>

<?php
// Include the Twilio PHP library
require "tw/Services/Twilio.php";
 
// Set your AccountSid and AuthToken from www.twilio.com/user/account
$AccountSid = "ACcac029f11cfc73786573a865596a12dd";
$AuthToken = "f1ba673185aa7c0879fa6c128198b0c4";
 
// Instantiate a new Twilio Rest Client
$client = new Services_Twilio($AccountSid, $AuthToken);
 
// Make an array of people we know, to send them a message:
$people = array(
    "+918903311137" => "student",
    
);
 
// Loop over all our friends:
foreach ($people as $number => $name) {
 
    $sms = $client->account->sms_messages->create(
        "720-408-2369",     // Change the 'From' number to a Twilio number you've purchased
        $number,            // the number we are sending to - Any phone number
        "$name book has been issued to your account for following 15 days"  // the sms body
    );
 
    echo "Sent message to $name";        // Display a confirmation message
}
?>
</body>
</html>