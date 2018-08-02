<!DOCTYPE html>

<?php
include('connection.php');

if(isset($_REQUEST['register']))
    {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	
	$sql="insert into reg (username,password,email,mobile)value('$username','$password','$email','$mobile')";
	$query=$conn->query($sql);
	
	echo "<script>alert('Record Inserted....');window.location='index.php';</script>";
}
?>
<html>
<head>

</head>

<body>
	<form method="post">
	<table align="center" border="1">
	<th align="center" colspan="2">User Registration</th>
	
	<tr>
		<td>UserName</td>
		<td><input type="text" name="username"></td>
	</tr>
	
	<tr>
		<td>Password</td>
		<td><input type"password" name="password"></td>
	</tr>
	
	<tr>
		<td>Email</td>
		<td><input type="email" name="email"></td>
	</tr>
	
	<tr>
		<td>Mobile</td>
		<td><input type="text" name="mobile"></td>
	</tr>
	
	
	<td align="center" colspan="2"><input type="submit" name="register" value="RegisterHere"></td>
	</table>
	</form>
</body>
</html>