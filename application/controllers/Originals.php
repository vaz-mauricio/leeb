<?php
class Originals extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('originals_model');
		$this->load->helper('url_helper');
	}

	public function index(){
		$data['originals'] = $this->originals_model->get_originals();
		$data['title'] = 'Arquivo de Textos';

		$this->load->view('structure/header', $data);
		$this->load->view('originals/index', $data);
		$this->load->view('structure/footer');
	}

	public function view($slug = NULL){
		$data['originals_item'] = $this->originals_model->get_originals($slug);

		if(empty($data['originals_item'])){
			show_404();
		}

		$data['title'] = $data['originals_item']['title'];

		$this->load->view('structure/header', $data);
		$this->load->view('originals/view', $data);
		$this->load->view('structure/footer');
	}

	public function create(){
				$this->load->helper('form');
				$this->load->library('form_validation');

				$data['title'] = 'Criar um novo texto';

				$this->form_validation->set_rules('header', 'Header', 'required');
				$this->form_validation->set_rules('body', 'Body', 'required');

				if($this->form_validation->run() === FALSE){
					$this->load->view('structure/header', $data);
					$this->load->view('originals/create');
					$this->load->view('structure/footer');
				} else {
					$this->originals_model->set_originals();
					$this->load->view('structure/header', $data);
					$this->load->view('originals/success');
					$this->load->view('structure/footer');
				}
			}
			
	public function edit(){
				$id = $this->uri->segment(3);

				if(empty($id)){
					show_404();
				}

				$this->load->helper('form');
				$this->load->library('form_validation');

				$data['title'] = 'Editar um texto';
				$data['originals_item'] = $this->originals_model->get_originals_by_id($id);
				
				$this->form_validation->set_rules('header', 'Header', 'required');
				$this->form_validation->set_rules('body', 'Body', 'required');

				if($this->form_validation->run() === FALSE){
					$this->load->view('structure/header', $data);
					$this->load->view('originals/edit');
					$this->load->view('structure/footer');
				} else {
					$this->originals_model->set_originals($id);
					//$this->load->view('originals/success');
					redirect( base_url() . 'index.php/originals');
				}

			}

		public function delete(){

				$id = $this->uri->segment(3);

				if(empty($id)){
					show_404();
				}

				$originals_item = $this->originals_model->get_originals_by_id($id);

				$this->originals_model->delete_originals($id);
				redirect( base_url() . 'index.php/originals');
			}

}

?>