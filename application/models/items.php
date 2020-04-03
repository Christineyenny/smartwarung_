<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class items extends CI_Model {

    public function store($username, $photo){
        $data = array(
            'username'  => $username,
            'name'      => $this->input->post('name'),
            'stock'     => $this->input->post('stock'),
            'price'     => $this->input->post('price'),
            'description'=> $this->input->post('description'),
            'photo'     => $photo
        );

        $this->db->insert('items', $data);
    }

    public function get_one_id($id){
        $this->db->where('id',$id);
        return $this->db->get('items')->row_array();
    }

    public function get_all(){
        return $this->db->get('items')->result_array();
    }

    public function get_all_username($username){
        $this->db->where('username',$username);
        return $this->db->get('items')->result_array();
    }

    public function update($id){
        $data = array(
            'name'      => $this->input->post('name'),
            'stock'     => $this->input->post('stock'),
            'price'     => $this->input->post('price'),
            'description'=> $this->input->post('description')
        );
        
        $this->db->where('id', $id);
        $this->db->update('items', $data);
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('items');
    }

}
?>