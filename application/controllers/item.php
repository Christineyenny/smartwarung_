<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class item extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('items');
        $this->load->library('form_validation');
    }

    // create untuk page form bikin baru
    // store fungsi setelah tombol submit ditekan -> masukin ke database
    // edit untuk page form update
    // update untuk database setelah tombol submit
    // delete 

    public function create(){
        // nama,deskripsi,harga,stok,foto

        $this->load->view('template/header');
        $this->load->view('item/create');
        $this->load->view('template/footer');
    }

    public function store(){
        $this->form_validation->set_rules('name','Nama Makanan', 'required');
        $this->form_validation->set_rules('stock', 'Stok', 'required|is_natural_no_zero');
        $this->form_validation->set_rules('price', 'Harga', 'required|is_natural_no_zero');
        $this->form_validation->set_rules('description', 'Deskripsi', 'required');

        if($this->form_validation->run() == false){
            $this->load->view('template/header');
            $this->load->view('item/create');
            $this->load->view('template/footer');
        }else{
            $countfiles = count($_FILES['files']['name']);
            $data_photos = array();

            for($i=0; $i < $countfiles;$i++){
                if(!empty($_FILES['files']['name'][$i])){
                    $_FILES['photo']['name']    = $_FILES['files']['name'][$i];
                    $_FILES['photo']['type']    = $_FILES['files']['type'][$i];
                    $_FILES['photo']['tmp_name']= $_FILES['files']['tmp_name'][$i];
                    $_FILES['photo']['error']   = $_FILES['files']['error'][$i];
                    $_FILES['photo']['size']    = $_FILES['files']['size'][$i];

                    $config['upload_path']      = 'assets/uploads/';
                    $config['allowed_types']    = 'jpg|jpeg|png';
                    $config['max_size']         = '5000';
                    $config['encrypt_name'] 	= true;
                    // $config['file_name']        = $_FILES['files']['name'][$i];

                    $this->load->library('upload',$config);

                    if($this->upload->do_upload('photo')){
                        $upload_data = $this->upload->data();
                        $data_photos[$i] = $upload_data['file_name'];
                        // echo $countfiles;
                    }
                }
            }

            if(!empty($data_photos)){
                $data_photo = implode(',',$data_photos);

                $this->items->store($this->session->userdata('username'),$data_photo);
                echo "end";
            }
        }
    }

    public function show($id){
        $data['food'] = $this->items->get_one_id($id);

        $this->load->view('template/header');
        $this->load->view('item/show',$data);
        $this->load->view('template/footer');
        $this->load->view('item/script');
    }

    public function edit($id){
        $data['item'] = $this->items->get_one_id($id);

        $this->load->view('template/header');
        $this->load->view('item/edit',$data);
        $this->load->view('template/footer');
    }

    public function update($id){
        $this->items->update($id);

        redirect('warung', 'refresh');
    }

    public function delete($id){
        $this->items->delete($id);

        redirect('warung', 'refresh');
    }
}
?>