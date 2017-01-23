<?php
echo "Start Product";
class Product {
	private $idProd;
	private $nameProd;
	private $priceProd;

	public function getIdProd(){
		return $this->idProd;
	}
	public function setIdProd($idprod){
		return $this->idProd = 3;
	}
	public function getNameProd(){
		return $this->nameProdd;
	}
	public function setNameProd($nameProd){
		return $this->nameProd = $nameProd;
	}
	public function getPriceProd(){
		return $this->priceProd;
	}
	public function setPriceProd($priceProd){
		return $this->priceProd = $priceProd;
	}
}

$p = new Product();
echo $p->getIdProd(3);
?>