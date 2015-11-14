
				<form action="processing/function.php" method="post" >
					Username: 
					<input type="text" name="username" placeholder="Username" /> <?php if(isset($firstname_error)){echo $firstname_error;} ?>
					<br><br>
							
					Password:
					<input type="text" name="password" placeholder="Password" /> <?php if(isset($lastname_error)){echo $lastname_error;} ?>
					<br><br>
							
					<button type="submit"  class="myButLogin"></button>
				
				</form>
		