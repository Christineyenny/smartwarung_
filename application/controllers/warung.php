<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class warung extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $this->load->model('items');
        $this->load->model('users');
    }

    public function index(){
        $data['items'] = $this->items->get_all_username($this->session->userdata('username'));
        $data['user'] = $this->users->get_username($this->session->userdata('username'));

        $this->load->view('template/header');
        $this->load->view('warung/index', $data);
        $this->load->view('template/footer');
    }

}

?>