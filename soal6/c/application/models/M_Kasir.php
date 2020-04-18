<?php
class M_Kasir extends CI_Model{

	function data_kasir(){
		$query = $this->db->query("SELECT   product.id as id,
                                            cashier.name as namakasir,
                                            product.name as produknama,
                                            category.name as kategorinama,
                                            product.price as produkharga
                                                        FROM product 
                                                            JOIN cashier
                                                                    ON cashier.id = product.id_cashier 
                                                            JOIN category
                                                                    ON category.id = product.id_category");
		return $query;
	}

}