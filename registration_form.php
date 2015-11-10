<?php 
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
	  
	  if(isset($_POST['firstname']) == FALSE || empty($_POST['firstname'])){
		  $firstname_error = 'First name is required';
	  }
	  
	  if(isset($_POST['lastname']) == FALSE || empty($_POST['lastname'])){
		  $lastname_error = 'Lastname is required.<br/>';
		  
	  }
	  
	  if(isset($_POST['password']) == FALSE || empty($_POST['password'])){
		  $password_error = 'Password is required.<br/>';
	  }
	  
	  if(isset($_POST['conformpassword']) == FALSE || empty($_POST['confirmpassword'])){
		  $confirmpassword_error = 'Password confirmation is required.<br/>';
	  }
	  
	  if(isset($_POST['email']) == FALSE || empty($_POST['email'])){
		  $email_error = 'Email is required.<br/>';
	  }
	  
	  if(isset($_POST['dob']) == FALSE || empty($_POST['dob'])){
		  $dob_error = 'Date of birth is required.<br/>';
	  }
	  
	  if(isset($_POST['gender']) == FALSE || empty($_POST['gender'])){
		  $gender_error = 'Gender is required.<br/>';
	  }
	  
  }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Blog</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body>
		<h1>Registration Form</h1>
		<form action="" method="post" >
			First name: 
			<input type="text" name="firstname" placeholder="firstname" /> <?php if(isset($firstname_error)){echo $firstname_error;} ?>
			&nbsp &nbsp &nbsp
				
			Last name:
			<input type="text" name="lastname" placeholder="lastname" /> <?php if(isset($lastname_error)){echo $lastname_error;} ?>
			<br><br>
			
			Password:
			<input type="password" name="password" placeholder="password"/> <?php if(isset($password_error)){echo $password_error;} ?>
			&nbsp &nbsp &nbsp
			
			Confirm Password:
			<input type="password" name="confirmpassword" placeholder="Password Confirmation"/> <?php if(isset($confirmpassword_error)){echo $confirmpassword_error;} ?>
			<br><br>
			
			E-mail:
			<input type="text" name="email" placeholder="email" /> <?php if(isset($email_error)){echo $email_error;} ?>
			<br><br>
			
			Date of birth:
			<select name="month">
				<option value="01">January</option><option value="02">February</option><option value="03">March</option>
				<option value="04">April</option><option value="05">May</option><option value="06">June</option>
				<option value="07">July</option><option value="08">August</option><option value="09">September</option>
				<option value="10">October</option><option value="11">November</option><option value="12">December</option></select> <select name="date" >
				<option value="1">01</option><option value="2">02</option><option value="3">03</option>
				<option value="4">04</option><option value="5">05</option><option value="6">06</option>
				<option value="7">07</option><option value="8">08</option><option value="9">09</option>
				<option value="10">10</option><option value="11">11</option><option value="12">12</option>
				<option value="13">13</option><option value="14">14</option><option value="15">15</option>
				<option value="16">16</option><option value="17">17</option><option value="18">18</option>
				<option value="19">19</option><option value="20">20</option><option value="21">21</option>
				<option value="22">22</option><option value="23">23</option><option value="24">24</option>
				<option value="25">25</option><option value="26">26</option><option value="27">27</option>
				<option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
			</select> 
			<input name="year" type="text" id="year" size="4" maxlength="4" placeholder="Year"/> <span></span>
			<?php if(isset($dob_error)){echo $dob_error;} ?>
			<br><br>
				
			Gender: <?php if(isset($gender_error)){echo $gender_error;} ?>
			<input type="radio" name="gender" value="female"/>Female
			<input type="radio" name="gender" value="male"/>Male
			<br><br>
				
			<input type="submit">
		</form>
	</body>
</html>
