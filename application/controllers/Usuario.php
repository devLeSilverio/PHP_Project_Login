<!-- comunicacao da view cadastro com a model de usuario -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
/*  metodo construtor 
 */	public function __construct() {
			parent::__construct();
			$this->load->model('UsuarioModel');
	}

	public function cadastrarUsuario(){
/* 		criando instancia
 */			$usuario = new UsuarioModel;
				$usuario->insert();
				redirect(base_url('login'));
	}

	public function entrar(){
		$usuario = new UsuarioModel;
		$usuario->logar();
	}

	public function sair(){
		$usuario = new UsuarioModel;
		$usuario->sair();
	}
}
