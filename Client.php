<?php
require 'User.php';

class Client extends User {
	private $billAmount;
	private $panier = [];
	public function __construct($id,$email,$createAt){
		parent::setId($id);
		parent::setEmail($email);
		parent::setCreateAt($createAt);
	}
	public function getBillAmount(){
		return $this->billAmount;
	}
	public function setBillAmount($product){
		$newprice = $product->getPriceprod();
		$this->billAmount = $this->billAmount +$newprice;
	}
	public function getPanier(){
		return $this->panier;
	}
	public function setPanier($panier){
		$this->panier = $panier;
	}
	public function addProductToPanier($produit){
		array_push($this->panier, $produit);
	}

	public function buy($product){
		$this->addProductToPanier($product);
		$this->setBillAmount($product);
	}
}
?>

