<?php
Class Customer_model extends CI_model {
	public function getCustomers(){
		$this->db->select('*');
		$this->db->from('Customers');
		return $this->db->get()->result_array();
	}
	public function addCustomer($insert_data){
		$this->db->insert('Customers',$insert_data);
		if ($this->db->affected_rows() > 0)
			return true;
		else return false;
	}
	public function deleteCustomer($chosen_id) {
		$this->db->where('id_customers',$chosen_id);
		$this->db->delete('Customers');
	}
	public function updateCustomer($update_data,$id_customers){
		$this->db->where('id_customers',$id_customers);
		$this->db->update('Customers',$update_data);
	}
}
