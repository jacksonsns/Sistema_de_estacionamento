<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function index($pag = 0) {

		$this->load->helper('html');
		$this->load->model('clientes_model');

		$data['cadastros'] = $this->clientes_model->listarUsuarios();

		$this->load->view('theme/header');       
        $this->load->view('clientes/index', $data);
       	$this->load->view('theme/footer');
		
	}

	public function cadastroUsuario() {

		$this->load->model('clientes_model');

		if(isset($_POST['btn-enviar'])) {
			$this->clientes_model->inserirUsuario();
			redirect(base_url('/'));
		}

		$this->load->view('theme/header');       
        $this->load->view('clientes/inserir');
       	$this->load->view('theme/footer');
	}

	public function editarUsuario($id) {

		$this->load->model('clientes_model');
		$data['dados'] = $this->clientes_model->exibirCliente($id);
		
		if(isset($_POST['btn-enviar'])) {
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

	public function consultarPlaca() {

		$this->load->model('clientes_model');

		//var_dump($_POST);
		//exit();

			$data['dados'] = $this->clientes_model->exibirPlaca();
		

		$this->load->view('theme/header');       
        $this->load->view('clientes/consutar_placa', $data);
       	$this->load->view('theme/footer');
	}



}

