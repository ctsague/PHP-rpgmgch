<?php
require 'User.php';

class Client extends User {
	public function __construct($id,$email,$createAt){
		parent::setId($id);
		parent::setemail($email);
		parent::setcreateAt($createAt);
	}

	public function buy($client){
	
	}

}

?>

