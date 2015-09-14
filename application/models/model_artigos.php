<?php

class Model_artigos extends CI_Model {

        public $autor_artigo;
        public $titulo_artigo;
        public $texto_artigo;

        public function __construct()
        {
                parent::__construct();
                $this->db->from('tb_artigos');
        }

        public function get_artigos()
        {
                $query = $this->db->get('', 10);
                return $query->result();
        }

        public function insert_artigo()
        {
                $this->autor_artigo   = $_POST['txtAutor']; // please read the below note
                $this->titulo_artigo  = $_POST['txtTitulo'];
                $this->texto_artigo   = $_POST['txtArtigo'];

                $this->db->insert('', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

        public function delete_artigo($id){

                $this->db->where('id_artigo', $id);
                $this->db->delete();

        }

}