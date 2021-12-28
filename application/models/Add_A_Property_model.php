<?php
class Add_A_Property_model extends CI_Model{

public function insert_registration_data($data){
    $this->db->insert('Add_A_Property_model',$data);
    return true;
}
}
?>