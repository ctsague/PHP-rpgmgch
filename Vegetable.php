<?php
require_once 'Product.php';

class Vegetable extends Product {
	private $productorName;
	private $expireAt;
	
	public function __construct($id,$name,$price,$productor,$expireAt){
		parent::__construct($id,$name,$price);
		$this->setProductorName($productor);
		$this->setExpireAt($expireAt);
	}
	public function getProductorName(){
		return $this->productorName;
	}
	public function setProductorName($productor){
		$this->productorName = $productor;
	}
	public function getExpireAt(){
		return $this->expireAt;
	}
	public function setExpireAt($expire){
		$this->expireAt = $expire;
	}
	public function IsFresh() {
		if(date("Ymd") > $this->getExpireAt()){
			return true;
		}
	}
}

?>