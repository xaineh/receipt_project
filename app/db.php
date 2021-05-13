<?php
session_start();
#make connection to database
function dbCon(){
   $conDb=new mysqli("localhost", "root","","receipt");
   return $conDb;
}
#sanitize my input
function sanitize($val){
	$val = trim($val);
	$val = htmlspecialchars_decode($val);
	$val = strip_tags($val);
	$val = htmlentities($val);
	return $val;
}
#register
function userSignUp(){
	global $errPhrase;
	global $errPass;
	if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['signup'])) {
		$phrase = sanitize($_POST['words']);
		$pas = sanitize($_POST['pas']);
		if (empty($phrase)) {
			$errPhrase = "phrase field is empty";
		}
		elseif (strlen($phrase) < 7) {
			$errPhrase = "phrase is too short";
		}
		elseif (strlen($phrase) > 15) {
			$errPhrase = "phrase is too long";
		}
		elseif (empty($pas)) {
			$errPass = "password field is empty";
		}
		elseif (strlen($pas) < 6) {
			$errPass = "password is too short";
		}
		elseif (strlen($pas) > 15) {
			$errPass = "password is too long";
		}
		else{
			$dt = date("h:m:s a"." "."d/m/Y");
			$con = dbCon();
			$sql = $con->query("INSERT INTO users(phrase, password, reg_date) VALUES('$phrase', '$pas', '$dt')");
			if ($sql === true) {
				header("location: sign_in.php?msg=login to proceed...");
			}
			else{
				echo "insertion was successful".error($con);
			}
		}
	}
}
function loginUser(){
	if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['signin'])) {
		$phrase = sanitize($_POST['words']);
		$pas = sanitize($_POST['pas']);
		if (empty($phrase)) {
			$errPhrase = "phrase entry is empty";
		}
		elseif (empty($pas)) {
			$errPass = "password entry is empty";
		}
		elseif (strlen($phrase) > 15) {
			$errPhrase = "phrase is too long";
		}
		elseif (strlen($pas) > 15) {
			$errPass = "password is too long";
		}
		// else{
		// 	$phrase = sha1($phrase);
		// 	$pas = sha1($pas);
		// 	$con = dbCon();
		// 	$sel = $con->query("SELECT * FROM users WHERE phrase = '$phrase' and password = '$pas' ");
		// 	$row = $sel->fetch_assoc();
		// 	$_SESSION['id'] = $row['id'];
		// 	$_SESSION['phrase'] = $row['phrase'];
		// 	$_SESSION['pas'] = $row['password'];
		// 	if ($row['phrase'] === $phrase && $row['password']) {
		// 		header("location: index.php?msg=you have successfully login");
		// 	}
		// 	else{
		// 		$error = "incorrect Details".error($con);
		// 	}
		// }
	}
}
loginUser();
?>