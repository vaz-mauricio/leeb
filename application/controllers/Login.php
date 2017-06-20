<?php 
	class Login extends CI_Controller {
		public function authenticate(){

		$this->load->model('users_model');
		$login = $this->input->post('login');
		$password = $this->input->post('password');
		$user = $this->users_model->get_users_by_login($login, $password);

		if($user){
			$this->session->set_userdata('logged in', $user);
			$this->session->set_flashdata('login_success', 'Success Message.');
		} else {
			$this->session->set_flashdata('login_error', 'Error Message.');
		}

		redirect('home');
		}

		public function logout(){
			$data = $this->session->set_flashdata("usuário deslogado com sucesso");
			if($this->session->set_userdata('logged in')){
				$this->session->unset_userdata('logged in');
			}
			
			redirect('home');
		}
	}
?>