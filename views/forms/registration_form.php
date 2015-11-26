<form action="/blog/register-process" method="post" >
	<table cellpadding="8">
		<?php if(isset($alert_msg) && $alert_msg != '' ): ?>
			<p style="color:green;">
				<?=$alert_msg?>
			</p>
		<?php endif; ?>
		<tr>
			<td><label>Username:</label></td>
			<td><input type="text" name="username" placeholder="Username" /></td>
		</tr>

		<?php if(isset($register_error_messages['username']) && $register_error_messages['username']): ?>
		<tr>
			<td colspan="2">
				<p style="color: red;"><?=$register_error_messages['username']?></p>
			</td>
		</tr>
		<?php endif; ?>

		<tr>
			<td><label>Password:</label></td>
			<td><input type="password" name="password" placeholder="Password" /></td>
		</tr>

		<?php if(isset($register_error_messages['password']) && $register_error_messages['password']): ?>
		<tr>
			<td colspan="2">
				<p style="color:red;"><?=$register_error_messages['password']?></p>
			</td>
		</tr>
		<?php endif; ?>

		<tr>
			<td><label>E-mail:</label></td>
			<td><input type="text" name="email" placeholder="Email" /></td>
		</tr>

		<?php if(isset($register_error_messages['email']) && $register_error_messages['email']): ?>
		<tr>
			<td colspan="2">
				<p style="color:red;"><?=$register_error_messages['email']?></p>
			</td>
		</tr>
		<?php endif; ?>

		<tr>
			<td colspan="2" align="center">
				<button type="submit"  class="myButSignup" ></button>
			</td>
		</tr>
	</table>
</form>