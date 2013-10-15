<?php

  $rollno=isset($_POST["rollno"])?$_POST["rollno"]:"";
	$name=isset($_POST["name"])?$_POST["name"]:"";
	$email=isset($_POST["email"])?$_POST["email"]:"";
  $password=isset($_POST["password"])?$_POST["password"]:"";

  $confirm=isset($_POST["confirm"])?$_POST["confirm"]:"";

  if(!empty($username)&&!empty($password)&&!empty($rollno)){

if($password!=$confirm)

header("location:home.php?mPassword does not be match.");
//echo("password not match");
$host="localhost";

$user="root";

$pass="";

///open connection

$link=mysql_connect($host,$user,$pass) or die(mysql_error());

mysql_select_db("list",$link);

$query="SELECT * FROM list WHERE rollno='".mysql_escape_string($rollno)."'";

$result=mysql_query($query);

//count no of rows

$count=mysql_num_rows($result);

if($count==1){

header("location:home.php?msg=username already exists");
//echo("username alrdy exixts");
}

else

{

$qry="INSERT INTO list(rollno,name,email,password,confirm)VALUES('".mysql_escape_string($rollno)."'
,'".mysql_escape_string($password)."','".mysql_escape_string($name)."','".mysql_escape_string($email)."'";

mysql_query($qry);

echo "You are successfully registered.";

}

mysql_close($link);


}

  else

  {

  header("location:home.php?msg=Username or password cannot be blank.");
//echo("name and pwd can not be blank");
  }

?>
<html>
<head>
<title>Library</title>
<style type="text/css">
.a1
{
font-size:20px;
border-style:solid; 

 
}
.head
{
text-align:center;
color: #0066FF; 
  font-family:arial; 
  font-size: 40px; 

}

.head1
{
text-align:center;
color: #0066FF; 
  font-family:arial; 
  font-size: 30px; 

}
.in_mid
{

color:pink ; 
  font-family:arial; 
  font-size: 20px; 

}

.mid
{
position:absolute;
top:150px;
left:750px;
width:300px;
height:100px;
border:5px groove;
 <!--background-image:url(back.jpg);-->
}
.mid2
{
position:absolute;
top:280px;
left:750px;
width:300px;
height:150px;
border:5px groove;
 <!--background-image:url(back.jpg);-->
}
.side
{
position:absolute;
top:180px;
left:50px;
width:500px;
height:400px;
background-image:url(back.jpg);
}
</style>
</head>
<body >
<div class="head">National Institute of technology tiruchirappalli</div> <br>

<div class="head1">Welcome user!!</div>

<div class="mid">
<div class="in_mid">already registered?</div>
<form method="post" action="home.php" autocomplete="on">
  
  rollno: <input type="integer" name="rollno" autocomplete="off"><br>
  password:<input type="password" name="password" autofocus autocomplete="off"><br>
  <input type="submit">
</form>

</div>
<div class="mid2">
<div class="in_mid">New user??Sign up</div>

<form method="post" action="home.php" autocomplete="on">
  rollno: <input type="rollno" name="rollno" autocomplete="off"><br>
  E-mail: <input type="email" name="email" autocomplete="off"><br>
  name: <input type="text" name="name" autocomplete="off"><br>
  password:<input type="password" name="password" autofocus autocomplete="off"><br>
  confirm password:<input type="password" name="confirm" autofocus autocomplete="off"><br>
  <input type="submit">
</form>

</div>
<div class="side">
</div>
<!--<canvas id="myCanvas" width="200" height="100"
style="border:1px solid #000000;">
</canvas>-->
</body>
</html>

