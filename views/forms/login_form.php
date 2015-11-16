<form action="/blog/login-process" method="post" >
	<table cellpadding="8">

		<?php if(isset($alert_login) && $alert_login != ''): ?>
			<p><?=$alert_login?></p>
		<?php endif; ?>

		<tr>
			<td><label for="username">Username:</label></td>
			<td><input type="text" id="username" name="username" placeholder="Username" /></td>
		</tr>

		<?php if(isset($login_error_messages['username']) && $login_error_messages['username']): ?>
		<tr>
			<td colspan="2">
				<p style="color:red;"><?=$login_error_messages['username']?></p>
			</td>
		</tr>
		<?php endif; ?>

		<tr>
			<td><label for="password">Password:</label></td>
			<td><input type="password" name="password" id="password" placeholder="Password" /></td>
		</tr>

		<tr>
			<td colspan="2" align="center">
				<button type="submit"  class="myButLogin"></button>
			</td>
		</tr>
	</table>
</form>