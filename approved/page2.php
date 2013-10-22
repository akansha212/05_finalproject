<!--<html>
<head><title>page2</title>


</head>
<body background="ba.jpg">
<header>
                <h1>National Institute Of Technology <span>Tiruchirappalli</span></h1>
				
            </header>
<h4  align="center">Enter the book name you want to search in library</h4>
		<form method="post" action="bookpage.php" align="center" autocomplete="on">
		<input type="text" name="bookname" autocomplete="off">
		<input type="submit">
		</form>
		  </body>
		  </html>
		  
		  
		  
	-->	  
		  
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
                <h1>welcome user </h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  method="post" action="bookpage.php" autocomplete="on"> 
                                <h1>Search Page</h1> 
                                <p> 
                                    <label for="bookname" class="uname"  > enter book name you want to search </label>
                                    <input id="bookname" name="bookname" required="required" type="text" placeholder="bookname"/>
                                </p>
								 <p class="login button"> 
                                    <input type="submit" value="issue_request" /> 
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>