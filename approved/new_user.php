<?php
$db = mysqli_connect("localhost","root","","list");
		if(mysqli_connect_errno())
{
 echo"Failed";
}
 

 $register="insert into new_user values ( '$_POST[rollno]','$_POST[name]',' $_POST[email]','$_POST[password]','$_POST[confirm]')";

    if (!mysqli_query($db,$register))
	{

    die("Error:".mysqli_error($db));

    }

    else {
	
	header("location:page2.php");
    echo "successfull";
	}
mysqli_close($db);
    

    ?>

 