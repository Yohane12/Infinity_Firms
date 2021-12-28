<?php
class Customer_registration_model extends CI_Model{

public function insert_property_data($data){
     $this->db->insert('add_a_property',$data);
    return true;
}
}
?>