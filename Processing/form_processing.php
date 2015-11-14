<?php 
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
	  
	  if(isset($_POST['username']) == FALSE || empty($_POST['username'])){
		  $firstname_error = 'Username is required';
	  }
	  
	  if(isset($_POST['password']) == FALSE || empty($_POST['passsword'])){
		  $lastname_error = 'Password is required.<br/>';
		  
	  }
	
  }