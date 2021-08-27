<!-- comunicacao da view cadastro com a model de usuario -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Endereco extends CI_Controller {
      public function __construct() {
			parent::__construct();
			$this->load->model('EnderecoModel');
	}

	public function cadastrarEndereco(){
/* 		criando instancia
 */			$endereco = new EnderecoModel;
				$endereco->insert();
				echo "cadastrado com sucesso uhu";
	}
}
