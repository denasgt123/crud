<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap.min.css">
</head>
<body>
	<br/>
	<br/>
	<center><h2>Login</h2></center>	
	<br/>
	<div class="login">
	<br/>
		<form action="ceklogin.php" method="POST" onSubmit="return validasi()">
			<div>
				<label for="username">Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<button type="submit">Login</button>
			</div>
		</form>
	</div>
</body>
 
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>