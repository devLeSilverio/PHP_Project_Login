<!-- model -> regra de negocio -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioModel extends CI_Model {

	public function insert(){
/* 		quem eu quero preencher, de onde vai vir a informação,do que vir por input, pelo metodo post,
		que vai ter o nome 'name' pelo id da view */
		$data = array(
			'nm_usuario'=>$this->input->post('name'),
			'ds_email'=>$this->input->post('email'),
			'password'=>md5($this->input->post('password'))
		);
/* 		vai retornar o objeto,db é a funcao do Codeigniter, chamando a funcao, para a tabela tal com os dados tal 
 */		return $this->db->insert("tb_usuario",$data);
	}

	public function logar(){
		$email= $this->input->post('email');
		$senha= md5($this->input->post('password'));

	$this->db->where('ds_email', $email);
	$this->db->where('password', $senha);

	$usuario = $this->db->get("tb_usuario")->row_array();

	if($usuario){
	   redirect((base_url('home')));
  echo "oi";
	}else{
	   redirect((base_url('login')));
	}
}

}
