
<?php

        $db = mysqli_connect("localhost","root","","login");
		if(mysqli_connect_errno())
{
 echo"Failed";
}

    $register="insert into user values ( 1,'$_POST[email]',' $_POST[username]','$_POST[pass]')";

    if (!mysqli_query($db,$register))
	{

    die("Error:".mysqli_error($db));

    }

    else {
	

    echo "successfull";
	}
mysqli_close($db);
    

    ?>

 