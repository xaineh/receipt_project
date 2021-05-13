<?php
require 'db.php';
userSignUp();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trans-here</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="icon" type="text/css" href="../pix/icon.png">
	<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=10'>
</head>
<body>
	<fieldset class="register">
		<legend>Signup</legend>
		<form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
			<table>
				<tr>
					<td>
						<input type="text" name="words" placeholder="Enter suggested words" maxlength="20" value="<?php echo @$phrase; ?>"><br>
						<div class="error">
							<?php echo $errPhrase; ?>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<input type="password" name="pas" placeholder="Enter Your password" maxlength="15" value="<?php echo @$pas; ?>"><br>
						<div class="error">
							<?php echo $errPass; ?>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" value="Signup" name="signup">
					</td>
				</tr>
				<tr>
					<td>
						Already a member? <a href="sign_in.php">sign in</a>
					</td>
				</tr>
			</table>
		</form>
	</fieldset>

</body>
</html>