<?php
session_start();
header('location:login.php');
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
	echo"duplicate data";
}
else{
	$qy="insert into signin(name,password) values('$name',''$pass')";
	mysqli_query($con,$qy);
}

?>
