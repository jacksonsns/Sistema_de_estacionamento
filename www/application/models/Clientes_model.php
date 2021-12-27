<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function listarUsuarios() {

        $this->db->order_by('nome', 'ASC');
        $clientes = $this->db->get('clientes');
        if ($clientes->num_rows() > 0) {

            return $clientes->result();
        }

        return false;
    }

    public function exibirCliente($id) {

        $this->db->where('id', $id);
        $clientes = $this->db->get('clientes');
        if ($clientes->num_rows() > 0) {

            return $clientes->result();
        }

        return false;
    }

    public function exibirPlaca() {
        if (isset($_POST)) {

            $placa = $this->input->post('placa');

            $this->db->where('ultimos_digitos_placa', $placa);
            $clientes = $this->db->get('clientes');
            if ($clientes->num_rows() > 0) {
    
                return $clientes->result();
            }
    
            return false;
        }

       

       
    }

    public function inserirUsuario() {

        if (isset($_POST)) {

            $ultimosDigitosPlaca = $this->input->post('placa');
            $digitos = str_split($ultimosDigitosPlaca);
            $resultado = ($digitos[5].$digitos[6]);

            $dados = array(
                'nome' => $this->input->post('nome'),
                'telefone' => $this->input->post('telefone'),
                'cpf' => $this->input->post('cpf'),
                'placa_do_carro' => $this->input->post('placa'),
                'ultimos_digitos_placa' => $resultado 
            );
        }

        return $this->db->insert('clientes', $dados);
    }

	public function editarDados($id){
		
		if (isset($_POST)) {

            $ultimosDigitosPlaca = $this->input->post('placa');
            $digitos = str_split($ultimosDigitosPlaca);
            $resultado = ($digitos[5].$digitos[6]);

            $dados = array(
                'nome' => $this->input->post('nome'),
                'telefone' => $this->input->post('telefone'),
                'cpf' => $this->input->post('cpf'),
                'placa_do_carro' => $this->input->post('placa'),
                'ultimos_digitos_placa' => $resultado 
            );
        }

        $this->db->where('id', $id);
        $this->db->update('clientes', $dados);
			
	}

    public function removerUsuario($id) {
        $this->db->where('id', $id);
        $this->db->delete('clientes');

    }
}