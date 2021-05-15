<?php
/**
 * 
 */
session_start();
require_once('connect.php');
require_once('authenticate.php');
class Select extends Authenticate{
	public function __construct(){
		$serverObj = new Server();
		$this->con = $serverObj->dbCon();
	}
	#		LOGIN-DETAILS 
	public function login($issetType, $tbName, $location){
		if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST[$issetType])) {
			$phrase = $this->sanitize($_POST['words']);
			$pas = $this->sanitize($_POST['pas']);
			$this->checkInputs($phrase, $pas);
			if (!empty($phrase) && !empty($pas)) {
				$phrase = sha1($phrase);
				$pas = sha1($pas);
				$sel = $this->con->query("SELECT * FROM $tbName WHERE phrase = '$phrase' AND password = '$pas'");
				$row = $sel->fetch_assoc();
				$_SESSION['id'] = $row['id'];
				$_SESSION['phrase'] = $row['phrase'];
				$_SESSION['pas'] = $row['password'];
				if ($row['phrase'] === $phrase && $row['password'] === $pas) {
					header("location: $location");
				}
				else{
					echo "user id incoorect";
				}
			}
		}
	}
}
#instance for the SELECT CLASS-----------
$selectObj = new Select();
$selectObj->login("signin", "users", "index.php?msg=you have successfully login."); #function
?>