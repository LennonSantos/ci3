<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){

		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('model_artigos', 'artigos');		

	}

	public function index()
	{			

		$artigos = $this->artigos->get_artigos();

		$data = array(
			"artigos" => $artigos,
		);

		$this->load->view('home', $data);
	}

	public function cadastrar(){

		

		if( $this->input->post('cadastrar') ){

			$this->artigos->insert_artigo();
			//unset( $this->input->post('cadastrar') );

		}

		$this->load->view('cadastrar');

	}

	public function delete($id){

		$this->artigos->delete_artigo($id);

		redirect(base_url());

	}

}
