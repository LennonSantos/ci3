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

	public $head = array(
		"title_website" => "Testando o Codeigniter versão 3",
	);

	public $footer = array(
		"scripts" => array(),
	); 

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

		//data head
		$this->head['title_website'] = $this->head['title_website'] . " &bull; Home Page";
		
		//scripts footer
		$this->footer['scripts']['jquery.min'] = true;

		$this->load->view('master_page/head', $this->head);
		$this->load->view('master_page/nav');
		$this->load->view('home', $data);
		$this->load->view('master_page/footer', $this->footer);
	}

	public function cadastrar(){		

		if( $this->input->post('cadastrar') )
			$this->artigos->insert_artigo();		

		$this->load->view('master_page/head', $this->head);
		$this->load->view('master_page/nav');
		$this->load->view('cadastrar');
		$this->load->view('master_page/footer', $this->footer);

	}

	public function delete($id){

		$this->artigos->delete_artigo($id);

		redirect(base_url());

	}

	public function update($id){		

		if( $this->input->post('atualizar') )
		{
			$this->artigos->update_artigo($id);
			redirect(current_url());
		}

		$artigo = $this->artigos->get_artigos($id);

		$data = array(
			"artigo" => $artigo,
		);

		$this->load->view('master_page/head', $this->head);
		$this->load->view('master_page/nav');
		$this->load->view('update', $data);
		$this->load->view('master_page/footer', $this->footer);

	}

}
