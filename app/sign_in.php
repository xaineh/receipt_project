<?php
require 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trans-here</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="error"><?php echo @$error; ?></div>
	<div class="success">
		<?php if (isset($_GET['msg'])) {
			echo $_GET['msg'];
		} ?>
	</div>
	<fieldset class="register">
		<legend>Sign in</legend>
		<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>">
			<table>
				<tr>
					<td>
						<input type="text" name="words" placeholder="Enter suggested phrase" maxlength="20"value="<?php echo @$phrase; ?>"><br>
						<div class="error">
							<?php echo @$errPhrase; ?>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<input type="password" name="pas" placeholder="Enter Your password" maxlength="20"value="<?php echo @$pas; ?>"><br>
						<div class="error">
							<?php echo @$errPass; ?>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" value="Signup" name="signin">
					</td>
				</tr>
				<tr>
					<td>
						Yet to join? <a href="sign_up.php">sign up</a>
					</td>
				</tr>
			</table>
		</form>
	</fieldset>

</body>
</html>