<?php
/**
 * 
 */
class Authenticate{
	public $errPhrase;
	public $errPass;
	public $error;
	public $issetType;
	#		----check for xss
	public function sanitize($val){
		$val = trim($val);
		$val = htmlspecialchars($val);
		$val = htmlentities($val);
		$val = stripslashes($val);
		return $val;
	}
	#		-------check users inputs
	public function checkInputs($phrase, $pas){
		if (empty($phrase)) {
			$this->errPhrase = "phrase field is empty";
		}
		elseif (strlen($phrase) < 5) {
			$this->errPhrase = "phrase entry is too short";
		}
		elseif (strlen($phrase) > 30) {
			$this->errPhrase = "phrase entry is too long";
		}
		elseif (empty($pas)) {
			$this->errPass = "password field is empty";
		}
		elseif (strlen($pas) < 5) {
			$this->errPass = "password entry is too short";
		}
		elseif (strlen($pas) > 30) {
			$this->errPass = "password entry is too long";
		}
		else{
			return true;
		}
	}
	


}
$authObj = new Authenticate();
?>