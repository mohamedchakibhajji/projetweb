<?php
class panier{
	private $DB;


	public function __construct($DB){
		if(!isset($_SESSION)){
			session_start();
		}
		if(!isset($_SESSION['panier'])){
			$_SESSION['panier'] = array();
		}
		$this->DB=$DB;

	}
	public function count(){
		return array_sum($_SESSION['panier']);
	}
	
	
	public function total(){
		$total = 0;
		$ids = array_keys($_SESSION['panier']);
		if(empty($ids)){
			$products= array();

		}else{
			$products=$this->DB->query('SELECT id,price FROM products WHERE id IN('.implode(', ',$ids).')');
		}
		foreach ($products as $product) {
			$total += $product->price * $_SESSION['panier'][$product->id];
			# code...
		}
		return $total;
	}
	public function add($product_id){
		if(isset($_SESSION['panier'][$product_id])){
			$_SESSION['panier'][$product_id]++;
		}
		else{
		$_SESSION['panier'][$product_id] = 1;
	}
	}
	public function del($product_id){
		if(isset($_SESSION['panier'][$product_id])){
			$_SESSION['panier'][$product_id]--;
			if($_SESSION['panier'][$product_id]==0)
			{
				unset($_SESSION['panier'][$product_id]);
			}
		}
		else{
			unset($_SESSION['panier'][$product_id]);
		}
		
	}
}
