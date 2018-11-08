<?php
class Bdd{
	private $dbname;
	private $host;
	private $pass;
	private $user;

	public function __construct($dbname, $host, $pass, $user){
		$this->setDbname($dbname);
		$this->setHost($host);
		$this->setPass($pass);
		$this->setUser($user);

		echo "Le nom de la bdd est : " . $this->getDbname() . "<br>";
		echo "Le host de la bdd est : " . $this->getHost() . "<br>";
		echo "Le password de la bdd est : " . $this->getPass() . "<br>";
		echo "Le user de la bdd est : " . $this->getUser() . "<br>";

		$pdo = new PDO("mysql:host=\"" . $this->getHost() . "\";dbname=\"" . $this->getDbname() . "\"", $this->getUser() , $this->getPass(), array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));

	}

	private function setDbname($name){
		$this->dbname = $name;
	}

	private function setHost($host){
		$this->host = $host;
	}

	private function setPass($pass){
		$this->pass = $pass;
	}
	private function setUser($user){
		$this->user = $user;
	}

	private function getDbname(){
		return $this->dbname;
	}

	private function getHost(){
		return $this->host;
	}

	private function getPass(){
		return $this->pass;
	}
	private function getUser(){
		return $this->user;
	}
}