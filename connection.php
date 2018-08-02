<?php
$host="localhost";
$user="root";
$password="";
$db="captcha";

$conn=new mysqli($host,$user,$password,$db);

if($conn)
{
	//echo "DB connected";
}
else
{
	echo "Error in Code";
}

?>