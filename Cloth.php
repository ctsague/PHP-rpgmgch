<?php require_once 'Product.php';

class Cloth extends Product{
	private $brand;

	public function __construct($id,$name,$price,$brand){
		parent::__construct($id,$name,$price);
		$this->setBrand($brand);
	}

	public function getBrand(){
		return $this->brand;
	}
	public function setBrand($brand){
		 $this->brand = $brand;
	}
	public function try(){

	}
}

?>