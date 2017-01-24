<?php
//echo "Start Product <br> ";
class Product {
	private $idProd = 3;
	private $nameProd;
	private $priceProd;

	public function __construct($id,$name,$price){
		$this->setIdProd($id);
		$this->setNameProd($name);
		$this->setPriceProd($price);
	}

	public function getIdProd(){
		return $this->idProd;
	}
	public function setIdProd($idprod){
		 $this->idProd = $idprod;
	}
	public function getNameProd(){
		return $this->nameProd;
	}
	public function setNameProd($nameProd){
		 $this->nameProd = $nameProd;
	}
	public function getPriceProd(){
		return $this->priceProd;
	}
	public function setPriceProd($priceProd){
		 $this->priceProd = $priceProd;
	}
}

// $p = new Product(2, 3, 5);
// echo $p->getIdProd(); //2
// echo $p->getPriceProd(); //5
?>