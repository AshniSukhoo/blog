<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="assets/css/aboutstyle.css">
	<link rel="stylesheet"  href="assets/css/homestyle.css">
</head>

<body>
	<p> 
		<h1> What is Pholux?</h1>
	</p>
				
	<p> Pholux is a site that gives you the opportunity to share your memories
				with people across the world. It allows you to upload files that you want to share with people out there. 
		<br> Got a pet? Show us how fun it is!</br>
	</p>
	
	<?php 
		if (!empty($_GET['assets/img'])) {
			$path = '/assets/img/big cat.jpg';
		if (file_exists($path)) {
			print '<img src="'.$path.'" alt="sample image" />';
			}
		}
	?>
</body>
</html>