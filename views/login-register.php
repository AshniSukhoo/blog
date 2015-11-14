<!DOCTYPE html>
<html>

<head>
	<title>Welcome to Pholux - login or sign up</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div id="container">
	<div id="content">
		<h1>Welcome to Pholux.</h1>
		<p class="para">
			The blog is a blogger site where each user can interact with each other via comments, share photos, statuses(or posts).
			Non-users[guests] are not allowed any interaction but can view posts and other stuffs.
			User can upload any small file like documents, music excluding heavy files like around 50MB+ or so
		</p>
	</div>

	<div id="form">
		<div id="loggin">
			<?php include "forms/login_form.php" ?>
		</div>

		<div id="signup">
			<p class="text">New to Pholux? Sign up</p>
			<?php include "forms/registration_form.php" ?>
		</div>
	</div>
</div>

</body>
</html>