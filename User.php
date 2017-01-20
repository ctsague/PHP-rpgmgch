<?php

echo "start <br>";

class User {
	private $id;
	private $email;
	private $createAt;


	public function getId(){
		return $this->id;
	} 
	public function setId($value){
		$this->id = $value;

	}

	public function getemail(){
		return $this->email;
	} 
	public function setemail($email){
		$this->email = $email;

	}

	public function getcreateAt(){
		return $this->createAt;
	} 
	public function setcreateAt($createAt){
		$this->createAt = $createAt;

	}

	// public function __construct($id,$email,$createAt){
	// 	$this->setId($id);
	// 	$this->setemail($email);
	// 	$this->setcreateAt($createAt);
	// }
}

// $myuser = new User();
// echo $myuser->getemail();
// echo $myuser->setid(3);
// echo $myuser->getid(3);


?>
