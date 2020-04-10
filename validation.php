<?php
session_start();
$con=mysql_connect('localhost','root');
if($con)
{
	echo"connection successful";
}

else
{
	echo"no connection";
}
mysqli_select_db($con,'project');
$name=$_POST['user'];
$pass=$_POST['password'];
$q="select * from signin where name='$name' && password='$pass'";
$result=mysql_query($con,$q);
$num=mysql_num_rows($result);
if($num==1)
{
	$_SESSION['username']=$name;
	header('location:home.php');
}
else{
	header('location:login.php');
}

?>
