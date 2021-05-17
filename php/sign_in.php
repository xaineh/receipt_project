<?php
require_once('select.php');
#instance for the SELECT CLASS-----------
$selectObj = new Select();
$selectObj->login("signin", "users", "index.php?msg=you have successfully login.");
 #function
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
</head>
<body>
	<div class="container">
		<fieldset class="register">
			<legend>Sign in</legend>
			<div class="success">
				<?php if (isset($_GET['msg'])) {
					echo $_GET['msg'];
				} ?>
			</div>
			<div class="error" style="text-align: center;">
				<?php echo $selectObj->error; ?>
			</div>
			<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>">
				<table>
					<tr>
						<td>
							<input type="text" name="words" placeholder="Enter suggested phrase" maxlength="20" value="<?= $post_values['words']; ?>"><br>
							<div class="error">
								<?php echo $selectObj->errPhrase; ?>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<input type="password" name="pas" placeholder="Enter Your password" maxlength="20" value="<?= $post_values['pas']; ?>"><br>
							<div class="error">
								<?php echo $selectObj->errPass; ?>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" value="Sign in" name="signin">
						</td>
					</tr>
					<tr>
						<td align="center">
							Yet to join? <a href="sign_up.php">sign up</a>
						</td>
					</tr>
				</table>
			</form>
		</fieldset>
	</div>

</body>
</html>