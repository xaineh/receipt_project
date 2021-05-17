<?php

/**
 * 
 */
require_once('connect.php');
require_once('authenticate.php');
class Insert extends Authenticate{
	public $con;
	public $dt;
	public function __construct()
	{
		$servObj = new Server(); #import server class
		$this->con = $servObj->dbCon();
	}
		#----------SIGN UP ----
	public function signUp($issetType, $tbName, $location){
		$this->dt = date("h:m:s a"." "."d/m/Y");
		if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST[$issetType])) {
			$phrase = $this->sanitize($_POST['words']);
			$pas = $this->sanitize($_POST['pas']);
			$this->checkInputs($phrase, $pas);
			if (!empty($phrase) && !empty($pas)) {
				$ins = $this->con->query("INSERT INTO $tbName(phrase, password, reg_date) VALUES(sha1('$phrase'), sha1('$pas'), '$dt')");
				if ($ins == true) {
					header("location: $location");
				}
				else{
					echo "not register";
				}
			}
		}
	}
}
$insertInstance = new Insert();
$insertInstance->signUp("signup", "users", "sign_in.php?msg=login to proceed...");
?>