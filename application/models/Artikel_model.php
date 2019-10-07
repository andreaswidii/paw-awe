<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Artikel_model extends CI_Model {
        private $_table= "artikel";

        public $id;
        public $username;
        public $judul;
        public $jenis_makanan;
        public $foto;
        public $alamat;
        public $review;

        public function rules() {
            return [
                ['field' => 'username',
                'label' => 'username',
                'rules' => 'required']
            ];
        }

        public function getAll() {
            return $this->db->get('artikel')->result();
        }

        public function save() {
            $post= $this->input->post();
            $this->username= $post["username"];
            $this->judul= $post["judul"];
            $this->jenis_makanan= $post["jenis_makanan"];
            $this->alamat= $post["alamat"];
            $this->foto=$this->_uploadImage();
            $this->review= $post["review"];
            $this->db->insert($this->_table, $this);
        }
        private function _uploadImage()
        {
            $config['upload_path']          = './asset/foto/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $this->judul;
            $config['overwrite']			= true;
            $config['max_size']             = 1024; // 1MB
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                return $this->upload->data("file_name");
            }
            return "default.jpg";
        }

        public function getById($id){
            return $this->db->get_where($this->_table,["id"=>$id])->row();
        }

        public function update()
        {
            $post= $this->input->post();
            $this->ID= $post["id"];
            $this->NAMA= $post["nama"];
            $this->NPM= $post["npm"];
            $this->FAKULTAS= $post["fakultas"];
            $this->PRODI= $post["prodi"];
            $this->db->update($this->_table, $this, array('id'=>$post['id']));
        }
        public function delete($id) {
            return $this->db->delete($this->_table, array("id"=>$id));
        }
    }

?>