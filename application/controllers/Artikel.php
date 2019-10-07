<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Artikel extends CI_Controller {
        public function __construct() {
            parent::__construct();
                $this->load->model("Artikel_model");
                $this->load->library('form_validation');
        }

        public function index() {
            $this->load->helper('url');
            $data["artikel"]= $this->Artikel_model->getAll();
            $this->load->view("home/home_view", $data);
        }

        public function add() {
            $artikel= $this->Artikel_model;
            $validation= $this->form_validation;
            $artikel->save();
            // $validation->set_rules($artikel->rules());
            // if($validation->run()) {
            //     $artikel->save();
            //     $this->session->set_flashdata('success', 'Berhasil disimpan');
            // }
            $this->load->view("home/artikel_add");
        }
        public function edit($id=null) {
            if(!isset($id)) redirect('mahasiswa');

            $mahasiswa= $this ->Mahasiswa_model;
            $validation= $this->form_validation;
            $validation->set_rules($mahasiswa->rules());

            if($validation->run()) {
                $mahasiswa->update();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }

            $data["mahasiswa"]= $mahasiswa->getById($id);
            if(!$data["mahasiswa"]) show_404();

            $this->load->view("mahasiswa/mahasiswa_edit", $data);
        }

        public function delete($id=null) {
            if(!isset($id)) show_404();
            if($this->Mahasiswa_model->delete($id)) {
                redirect(site_url('mahasiswa'));
            }
        }
        
    }
?>