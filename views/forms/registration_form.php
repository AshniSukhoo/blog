<form action="/blog/register-process" method="post" >
	<?php if(isset($register_error_messages['username']) && $register_error_messages['username']): ?>
		<p style="color: red;"><?=$register_error_messages['username']?></p>
	<?php endif; ?>
	<table cellpadding="8">
		<tr>
			<td><label>Username:</label></td>
			<td><input type="text" name="username" placeholder="Username" /></td>
		</tr>

		<tr>
			<td><label>Password:</label></td>
			<td><input type="password" name="password" placeholder="Password" /></td>
		</tr>

		<tr>
			<td><label>E-mail:</label></td>
			<td><input type="text" name="email" placeholder="Email" /></td>
		</tr>

		<tr>
			<td colspan="2" align="center">
				<button type="submit"  class="myButSignup" ></button>
			</td>
		</tr>
	</table>
</form>