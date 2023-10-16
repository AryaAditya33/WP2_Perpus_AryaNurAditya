<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Web extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){
        $data['judul']="Halaman Depan";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }

    public function about(){
        $data['judul'] = "Halaman About";
        $this->load->view('v_header',$data);
        $this->load->view('v_about',$data);
        $this->load->view('v_footer',$data);
    }

    public function setting(){
        $data['judul'] = "Eksperimen";
        $this->load->view('v_header',$data);
        $this->load->view('v_setting',$data);
        $this->load->view('v_footer',$data);
    }

    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'ttl' => $this->input->post('ttl'),
            'alamat' => $this->input->post('alamat'),
            'pnd' => $this->input->post('pnd')
        ];
        
        $this->load->view('v_header',$data);
        $this->load->view('v_setting2', $data);
        $this->load->view('v_footer',$data);
    }
}