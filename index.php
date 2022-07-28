<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="index.css">
	<title>E-Wallet</title>
</head>
<body>
	<div>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="Login.php">Login</a></li>
			<li><a href="sign up form.php">Create account</a></li>
		</ul>
	</div>
	<div>
	<fieldset style="width:50%;" class="container">
		<form action="sendmoney.php" method="post">
			<h3>Welcome to your E-Wallet</h3>
			Balance: <b></b><input type="number" name="balance"><br><br>
			<button type="submit" value="send">Send Money</button> 
			<button type="reset" value="reset">Recieved Money</button>
		</form>
		</fieldset> 
	</div>
</body>
</html>