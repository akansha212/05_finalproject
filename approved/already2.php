<?php
 
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="list"; 
$tbl_name="new_user"; 

$link  = mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$rollno=$_POST['rollno'];
$password=$_POST['password'];

$rollno = stripslashes($rollno);
$password = stripslashes($password);
$rollno = mysql_real_escape_string($rollno);
$password = mysql_real_escape_string($password);


$sql="SELECT * FROM $tbl_name WHERE rollno='$rollno' AND password ='$password'";
$result=mysql_query($sql, $link) or die ('Unable to run query:'.mysql_error());


$count=mysql_num_rows($result);


if($count==1){
header("location:page2.php");
echo "wlcm";
}
else {
echo "Wrong Email or Password";
}
?>