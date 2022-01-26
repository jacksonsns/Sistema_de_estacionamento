<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function all($dados, $coluna = NULL, $condicao = NULL) {

        if(!is_null($condicao)) {
            $this->db->where($coluna, $condicao);
        }

        $clientes = $this->db->get($dados);
        
        return $clientes->result();
    }

    public function inserirUsuario() {

        $dados = array(
            'nome' => $this->input->post('nome'),
            'telefone' => $this->input->post('telefone'),
            'cpf' => $this->input->post('cpf'),
            'placa_do_carro' => $this->input->post('placa')
        );

        return $this->db->insert('clientes', $dados);
    }

	public function editarDados($id){
		
        $dados = array(
            'nome' => $this->input->post('nome'),
            'telefone' => $this->input->post('telefone'),
            'cpf' => $this->input->post('cpf'),
            'placa_do_carro' => $this->input->post('placa')
        );

        $this->db->where('id', $id);
        $this->db->update('clientes', $dados);
			
	}

    public function removerUsuario($id) {
        $this->db->where('id', $id);
        $this->db->delete('clientes');

    }
}