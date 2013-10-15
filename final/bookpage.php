<html>
<?php

 $session.bug_compat_42;
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="list"; 
$tbl_name="bookdetails"; 

$link  = mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$bookname=$_POST['bookname'];
//$authorname=$_POST['authorname'];

$bookname = stripslashes($bookname);
//$authorname = stripslashes($authorname);
$bookname = mysql_real_escape_string($bookname);
//$authorname = mysql_real_escape_string($authorname);


$sql="SELECT * FROM $tbl_name WHERE bookname='$bookname' ";//AND author ='$authorname'";
$result=mysql_query($sql, $link) or die ('Unable to run query:'.mysql_error());


$count=mysql_num_rows($result);


if($count==1){
echo "<h2>book details related to your search are:</h2>";

echo "<table align=\"center\" cellpadding=\"2\" cellspacing=\"2\" border=\"5\" width=\"75%\">";
echo "<tr><td>reference number</td><td>book name</td><td>author name</td></tr>";
while($row = mysql_fetch_array($result)){   
echo "<tr><td>". $row['refno']."</td><td>".$row['bookname']."</td><td>".$row['author']."</td></tr>";  
}
echo "</table>";



echo "<form action=authorpage.php >";
echo "<input type=submit value=issue_request name=submit1>";
echo "</form>";
}
else {
echo "Wrong Email or authorname";
}
?>
<body background="ba.jpg" repeat="no-repeat">
</body>
</html>