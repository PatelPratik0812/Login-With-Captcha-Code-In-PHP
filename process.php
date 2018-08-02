<?php

if(!isset($_POST) || empty($_POST))
{
	//header("location:index.php");
	
}
else
{
	
	$captcha = $_POST['g-recaptcha-response'];
	$secret = "6Ld010sUAAAAAAsuQQem1ni59v6XO8d5Lm9JPNqS";
	$ip = $_SERVER['REMOTE_ADDR'];
	
	$action = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
	$result = json_decode($action,TRUE);
	
	
	if($result['success'])
	{
		echo "Your Request Has Been Sent.";
	}
	else
	{
		header("location:index.php");
	}
 }

?>