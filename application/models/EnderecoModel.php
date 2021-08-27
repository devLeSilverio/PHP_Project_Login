<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EnderecoModel extends CI_Model {

	public function insert(){

		$data = array(
			'cep'=>$this->input->post('cep'),
			'street'=>$this->input->post('rua'),
			'number_street'=>$this->input->post('number_home'),
			'district'=>$this->input->post('district'),
			'city'=>$this->input->post('city'),
			'uf_state'=>$this->input->post('uf_state')
		);
/* 		vai retornar o objeto,db é a funcao do Codeigniter, chamando a funcao, para a tabela tal com os dados tal 
 */		return $this->db->insert("tb_endereco",$data);
	}

}
