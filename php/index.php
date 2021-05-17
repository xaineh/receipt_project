<?php require 'backgateway.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
	<script src="../js/main.js"></script>
</head>
<body>
<nav>
	<?php if (isset($_GET['msg_sess'])) {
		echo $_GET['msg_sess'];
	} ?>
	<div class="header">
		<div>
			<div class="left_bar">
				<div class="content"><h1>Content</h1></div>
				<div class="left_descrip">
					<ul>
						<li>
							<form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
								<input type="search" id="search_bar" name="find" placeholder="Filter Search..." style="color: white; letter-spacing: 1.3px;">
							</form>
						</li>
						<li>
							<a onclick="hideAndShow('#hide');">General Settings</a>
							<!-- dropdown content -->
							<ul class="block" id="hide">
								<li>
									<a href="#">Profile Settings</a>
								</li>
								<li>
									<a href="#">Feature Settings</a>
								</li>
								<li>
									<a href="#">Change password</a>
								</li>
							</ul>
						</li>
						<li>
							<a onclick="hideAndShow('#trans')">Transactions</a>
							<!-- dropdown content -->
							<ul class="block hide" id="trans">
								<li style="color: white; font-size: 18px; font-weight: bold; font-family: cursive;">
									Search...
								</li>
								<li>
									<a href="#">Transaction ID</a>
								</li>
								<li>
									<a href="#">Level</a>
								</li>
								<li>
									<a href="#">Date of Registration</a>
								</li>
								<li>
									<a href="#">Semester</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">Receipt</a>
						</li>
						<li>
							<a onclick="hideAndShow('#crt')">Storage</a>
							<ul class="block hide" id="crt">
								<li>
									<a href="#">Create Folder</a>
								</li>
							</ul>
						</li>
						<li>
							<a onclick="hideAndShow('#push')">Push(Finals Only)</a>
							<ul class="block hide" id="push">
								<li>
									<a href="#">General Folder</a>
								</li>
								<li>
									<a href="#">Upload Receipt</a>
								</li>
								<li>
									<a href="#">Import Receipt</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">Mgt. Units</a>
						</li>
						<li>
							<a href="#">About</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="right_bar">
			<div>
				<ul>
					<li>
						<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
							<table class="header_trans_submit" >
								<tr>
									<td>
										<input type="search" name="trans_submit_input" placeholder="Enter your Transaction ID" >
									</td>
									<td >
										<input type="submit" value="Submit" name="submit_trans">
									</td>
									<td>
										<a href="logger.php" class="logger" style="background-color: #2299fb;padding: 7px 15px;float: right; border-radius:4px;">Logout</a>
									</td>
								</tr>
							</table>
						</form>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>
</body>
</html>
 <div class="success">
	<?php
		if (isset($_GET['msg'])) {
			echo $_GET['msg'];
		}
	?>
</div>