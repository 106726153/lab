<?php
$pageTitle = 'Login';
include 'header.inc';

if (isset($_GET['error'])):
?>
	<p role="alert">Incorrect username or password. Please try again.</p>
<?php endif; ?>
	<form method="POST" action="process.php">
		<input type="hidden" name="user_token" value="FIRST_INITIAL+STUDENT_ID">
		<label for="username">Username</label>
		<input type="text" id="username" name="username" autocomplete="username" required>

		<label for="password">Password</label>
		<input type="password" id="password" name="password" autocomplete="current-password" required>

		<button type="submit">Log in</button>
	</form>
<?php include 'footer.inc'; ?>
