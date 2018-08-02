

<!DOCTYPE html>

<html>
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
<style type="text/css">
 .container
 {
	 padding-top:100px;
	 
 }
</style>
</head>

<body>
<div class="container" align="center"> 
	
		<div class="row">
			<div class="col-md-6 offset-col-md3">
				<h2>User Login</h2>
	
		<form method="post" action="process.php">
		<div class="form-group">
		
		
		<input type="text" name="username" placeholder="UserName" class="form-control">
		</div>
	
	<div class="form-group">
		
		<input type="password" name="password" placeholder="Password" class="form-control"></div>
	
	<div class="form-group">
	<div class="g-recaptcha" data-sitekey="6Ld010sUAAAAALiV_OuEGt_FptjrdC-FA14l2AeE"></div>

	</div>
	<div clas="form-group">
	<input type="submit" name="login" value="Login" class="btn btn-primary">
	<button type="submit" name="facebook" value="FaceBook" class="btn bnt-primary"><img src="image\Facebook_Image.jpg" height="25px" width="80px"></button></div>
	</div>
		</div>
	</div>
	</form>
</div>

</body>
</html>