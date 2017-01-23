<?php
require 'User.php';

class Client extends User {
	public function __construct($id,$email,$createAt){
		parent::setId($id);
		parent::setEmail($email);
		parent::setCreateAt($createAt);
	}
	
	public function buy($client){
	
	}
}
?>

