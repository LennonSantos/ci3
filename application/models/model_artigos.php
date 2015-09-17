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

        public function get_artigos($id = null)
        {       
                if($id != null)                
                        $this->db->where("id_artigo = {$id}");     

                $query = $this->db->get();
                return $query->result();
        }

        public function insert_artigo()
        {
                $this->autor_artigo   = $_POST['txtAutor'];
                $this->titulo_artigo  = $_POST['txtTitulo'];
                $this->texto_artigo   = $_POST['txtArtigo'];

                $this->db->insert('', $this);
        }

        public function update_artigo($id)
        {
                $this->autor_artigo   = $_POST['txtAutor'];
                $this->titulo_artigo  = $_POST['txtTitulo'];
                $this->texto_artigo   = $_POST['txtArtigo'];

                $this->db->where('id_artigo', $id);
                $this->db->update( '', $this );
        }

        public function delete_artigo($id){

                $this->db->where('id_artigo', $id);
                $this->db->delete();

        }

}