<?php
	class Users extends CI_Controller {

			public function __construct() {

				parent::__construct();
				$this->load->model('users_model');
				$this->load->helper('url_helper');
			}

			public function index() {

				$data['users'] = $this->users_model->get_users();
				$data['title'] = 'Arquivo de Usuários';


				$this->load->view('structure/header', $data);
				$this->load->view('users/index', $data);
				$this->load->view('structure/footer');
			}

			public function view() {

				$data['users_item'] = $this->users_model->get_users();

				if(empty($data['users_item'])){
					show_404();
				}
			}

			public function create(){
				$this->load->helper('form');
				$this->load->library('form_validation');

				$data['title'] = 'Criar um novo usuário';

				$this->form_validation->set_rules('name', 'Name', 'required');
				$this->form_validation->set_rules('lastname', 'LastName', 'required');
				$this->form_validation->set_rules('email', 'Email', 'required');
				$this->form_validation->set_rules('login', 'Login', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');

				if($this->form_validation->run() === FALSE){
					$this->load->view('structure/header', $data);
					$this->load->view('users/create');
					$this->load->view('structure/footer');
				} else {
					$this->users_model->set_users();
					$this->load->view('structure/header', $data);
					$this->load->view('users/success');
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

				$data['title'] = 'Editar um usuário';
				$data['users_item'] = $this->users_model->get_users_by_id($id);
				
				$this->form_validation->set_rules('name', 'Name', 'required');
				$this->form_validation->set_rules('lastname', 'LastName', 'required');
				$this->form_validation->set_rules('email', 'Email', 'required');
				$this->form_validation->set_rules('login', 'Login', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');

				if($this->form_validation->run() === FALSE){
					$this->load->view('structure/header', $data);
					$this->load->view('users/edit');
					$this->load->view('structure/footer');
				} else {
					$this->users_model->set_users($id);
					//$this->load->view('users/success');
					redirect( base_url() . 'index.php/users');
				}

			}

			public function delete(){

				$id = $this->uri->segment(3);

				if(empty($id)){
					show_404();
				}

				$users_item = $this->users_model->get_users_by_id($id);

				$this->users_model->delete_users($id);
				redirect( base_url() . 'index.php/users');
			}

	}
	
?>