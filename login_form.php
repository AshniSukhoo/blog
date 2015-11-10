
<!DOCTYPE html>
<html>
	<head>
		<title>Blog</title>
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
	
	<div id="content">
		<h1>Welcome</h1>
		<p></p>
	</div>
	
	
	
		<form action="" method="post" >
			Username: 
			<input type="text" name="username" placeholder="username" /> <?php if(isset($firstname_error)){echo $firstname_error;} ?>
			<br><br>
					
			Password:
			<input type="text" name="password" placeholder="password" /> <?php if(isset($lastname_error)){echo $lastname_error;} ?>
			<br><br>
					
			<input type="submit">
		</form>
	

	</body>
</html>
