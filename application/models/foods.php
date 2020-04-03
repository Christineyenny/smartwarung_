<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class foods extends CI_Model {

    public function store($username, $photo){
        $data = array(
            'username'  => $username,
            'name'      => $this->input->post('name'),
            'stock'     => $this->input->post('stock'),
            'price'     => $this->input->post('price'),
            'description'=> $this->input->post('description'),
            'photo'     => $photo
        );

        $this->db->insert('foods', $data);
    }

    public function get_one_id($id){
        $this->db->where('id',$id);
        return $this->db->get('foods')->row_array();
    }

    public function get_all(){
        return $this->db->get('foods')->result_array();
    }

}
?>