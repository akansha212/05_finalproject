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
                                <P>you will recieve a mail shortly</p><br>
								<p>want to issue more books?</p>
								<p class="login button"> 
                                    <input type="submit" value="issue more" /> 
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
   
<?php

ini_set("SMTP","localhost");
ini_set("smtp_port",25);
$to = "akanshasatyarthi212@gmail.com";
$subject = "book issue";
$message = "Hello! this is to inform you that book has been issued 
on your account for following 15 days";
$from = "205112005@nitt.edu";
$headers = "From:" . $from;

mail($to,$subject,$message,$headers);
?>


</body>
</html>