<?php
require_once('insert.php');
require 'select.php';

#holds the inputs of the uses
$post_values = [
'words' => '',
'pas' => ''
];
if (isset($_POST) && !empty($_POST)) {
	$post_values = $_POST;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trans-here</title>
	<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
	<link rel="icon" type="text/css" href="../pix/icon.png">
	<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=10'>
</head>
<body>
	<div class="error">
		<!-- For errors  -->
		<?php echo $selectObj->error; ?>
	</div>
	<div class="container">
		<fieldset class="register">
			<legend>Signup</legend>
			<form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
				<table>
					<tr>
						<td>
							<input type="text" name="words" placeholder="Enter suggested words" value="<?= $post_values['words']; ?>" maxlength="25"><br>
							<div class="error">
								<?php echo $insertInstance->errPhrase; ?>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<input type="password" name="pas" placeholder="Enter Your password" maxlength="25" value="<?= $post_values['pas']; ?>"><br>
							<div class="error">
								<?php echo $insertInstance->errPass; ?>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" value="Signup" name="signup">
						</td>
					</tr>
					<tr>
						<td align="center" style="color: #555555;">
							Already a member? <a href="sign_in.php">sign in</a>
						</td>
					</tr>
				</table>
			</form>
		</fieldset>
	</div>
</body>
</html>
