<?php

require 'connect.php';

class Create extends Server{
   
   function tblCreate($tables){	//create table fields
   	 $con = $this->dbCon();
   	 foreach ($tables as $value) {
   	 	$crTb = $con->query($value);

   	 	if($crTb){
   	 		echo "table created"."<br>";
	   	 }else{
	   	 	foreach ($tables as $value) {
	   	 		echo "table not created"."<br>";
	   	 	}
	   	 }
   	 }
   }
   #	---tables---arrayHandle
   public $tables = [
   "create table if not exists users(
   	 id int(10)not null auto_increment primary key,
   	 phrase varchar(100) not null,
   	 school varchar(100) null,
   	 faculty varchar(100) null,
   	 dept varchar(100) null,
   	 reg_no varchar(15) null,
   	 level varchar(15) null,
   	 phone varchar(15) null,
   	 email varchar(100) null,
   	 password varchar(100)not null,
   	 block int(2) null,
   	 reg_date varchar(100)not null)ENGINE=InnoDB;",
   	"create table if not exists receipt(
   	 id int(10)not null auto_increment primary key,
   	 paymentType varchar(30) null,
   	 receipt_status varchar(10) null,
   	 receipt_id int(100) not null,
   	 level varchar(100)not null,
   	 date_of_upld varchar(100)not null,
   	 description varchar(100) null)ENGINE=InnoDB;",
   	"create table if not exists admin(
   	 id int(10)not null auto_increment primary key,
   	 email varchar(100)not null,
   	 school varchar(100) null,
   	 faculty varchar(100) null,
   	 dept varchar(100) null,
   	 password varchar(100)not null,
   	 reg_date varchar(100)not null)ENGINE=InnoDB;",
   	 "create table if not exists Notifications(
   	 id int(10)not null auto_increment primary key,
   	 descriptionNotif varchar(100) not null,
   	 paymentConfirmMsg varchar(100)not null,
   	 latestNotif varchar(100) not null,
   	 recieved_date varchar(100)not null)ENGINE=InnoDB;",
   	 "create table if not exists device(
   	 id int(10)not null auto_increment primary key,
   	 deviceModel varchar(50) not null,
   	 location varchar(100)not null,
   	 last_login_time varchar(100)not null)ENGINE=InnoDB;"];
}

#instance of Create Class created
$tbclass=new Create();
$tab = $tbclass->tables;
//table creation ---users---
$tbcrt=$tbclass->tblCreate($tab);
?>