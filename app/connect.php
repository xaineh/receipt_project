<?php
class Server{
	const serverName = "localhost";
	const rot = "root";
	const pass = "";
	const db ="receipt";

	//function connection
	public function createConnection($dbName){
		$con = new mysqli(self::serverName, self::rot, self::pass);
		if ($con) {
			$createDb=$con->query("create database if not exists $dbName");
			if($createDb){
				return true;
			}else{
				echo "database not created".error($con);
			}
		}
	}

   //function database connection
	public function dbCon(){
	   $conDb=new mysqli(self::serverName, self::rot, self::pass,self::db);
	   return $conDb;
	}

}
// : instance of Server class created
$servObj = new Server();

//connection : Database created

//dbconnection
$dbcon=$servObj->dbCon();
?>