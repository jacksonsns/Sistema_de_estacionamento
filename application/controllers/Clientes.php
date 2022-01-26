<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function index($pag = 0) {

		$this->load->helper('html');
		$this->load->model('clientes_model');

		$data['cadastros'] = $this->clientes_model->all('clientes');

		$this->load->view('theme/header');       
        $this->load->view('clientes/index', $data);
       	$this->load->view('theme/footer');
		
	}

	public function cadastroUsuario() {

		$this->load->model('clientes_model');

		if($this->input->post($_POST)) {
			$this->clientes_model->inserirUsuario();
			redirect(base_url('/'));
		}
		
		$this->load->view('theme/header');       
        $this->load->view('clientes/inserir');
       	$this->load->view('theme/footer');
	}

	public function editarUsuario($id) {

		$this->load->model('clientes_model');
		
		$data['dados'] = $this->clientes_model->all('clientes', 'id', $id);
		
		if($this->input->post($_POST)) {
			$this->clientes_model->editarDados($id);
			redirect(base_url('/'));
		}

		$this->load->view('theme/header');       
        $this->load->view('clientes/editar', $data);
       	$this->load->view('theme/footer');
	}

	public function apagarUsuario($id) {

		$this->load->model('clientes_model');
		$this->clientes_model->removerUsuario($id);
		redirect(base_url('/'));
	}

}

