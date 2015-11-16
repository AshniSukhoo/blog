<form action="/blog/login-process" method="post" >
	<table cellpadding="8">
		<tr>
			<td><label for="username">Username:</label></td>
			<td><input type="text" id="username" name="username" placeholder="Username" /></td>
		</tr>
		<tr>
			<td colspan="2">
				<?php if(isset($login_error_messages['username']) && $login_error_messages['username']): ?>
					<p style="color:red;"><?=$login_error_messages['username']?></p>
				<?php endif; ?>
			</td>
		</tr>

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