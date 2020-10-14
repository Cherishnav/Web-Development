<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
	<style>
		body {
			text-align: center;
		}
	</style>
	<title>Login Page</title> 
</head> 

<body> 
	<form action="validate.php" method="post"> 
		
			<h1>Login</h1> 

			 
				<i aria-hidden="true"></i> 
				<input type="text" placeholder="Username" name="adminname" value=""> </br>
		

				<i aria-hidden="true"></i> 
				<input type="password" placeholder="Password" name="password" value=""> </br> 

			<input type="submit" name="login" value="Sign In"> 
	
	</form>
// button to registration page
	<form action="RegistrationForm.php">
			<input type="submit" name="SignUp" value="SignUp"> 
	
	</form> 
</body> 

</html> 
