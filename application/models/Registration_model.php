<?php
class Registration_model extends CI_Model{

public function insert_registration_data($data){
    $this->db->insert('registration',$data);
    return true;
}
}
?>