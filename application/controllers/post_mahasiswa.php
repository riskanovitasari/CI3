<?php
class Post_mahasiswa extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('gambar');
        $this->load->library('upload');
    }
    function index(){
        $this->load->view('data_mahasiswa');
    }
 
    function simpan_post(){
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){
            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/images/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '60%';
                $config['width']= 710;
                $config['height']= 420;
                $config['new_image']= './assets/images/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $gambar=$gbr['file_name'];
                $jdl=$this->input->post('gambar');
              
 
                $this->gambar->simpan_gambar($gambar);
                redirect('post_gambar/lists');
        }else{
            redirect('post_gambar');
        }
                      
        }else{
            redirect('post_gambar');
        }
                 
    }
 
    function lists(){
        $x['data']=$this->gambar->get_all_gambar();
        $this->load->view('data_mahasiswa',$x);
    }
 
    function view(){
        $kode=$this->uri->segment(3);
        $x['data']=$this->gambar->get_gambar_by_kode($kode);
        $this->load->view('data_mahasiswa',$x);
    }
 
}