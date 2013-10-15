<?php
/*$roll=$_POST["rollno"];

$password=$_POST["password"];*/

$con=mysqli_connect("localhost","root","","list");
if(mysqli_connect_errno())
{
 echo"Failed";
}
//mysqli_select_db("list",$con);
$result="SELECT * FROM new_user where rollno='$_POST[rollno]' ";
						
						$result2=mysqli_query($con,$result);


/*$count=mysqli_num_rows($result2);*/

if((mysqli_num_rows($result2))>0)
{
	$row=mysql_fect_array($result2);
	if($password==$row["password"])
	{
	echo "logged in";
 }
 else
 {
 echo "mismatch pwd";
 }}
 else
 {
 echo "no user";
 }
  //   echo 'Username or email already in use please try another.'; 


/*if($result2)
{
echo "successful";
echo "<br>";
}
else
echo"fail";*/
mysqli_close($con);
    
						
?>