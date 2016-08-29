<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// comunicacion con el modelo
		$this->load->model('m_persona');
		$this->load->model('m_usuario');
		$this->load->model('m_modulo');
		$this->load->library('session');
	}

	public function index(){
		$this->load->view('usuario/login');
	}

	public function login(){
		
		// valido el login
		if($this->input->post()){
			$datos = $this->input->post();
			$query = $this->m_usuario->login($datos['user'], $datos['pass']);
			if ($query->num_rows() > 0){
				// aqui sigue esto 
				$row = $query->row();
				// sessiones
				$_SESSION['nombre']  = $row->usuario;
				$_SESSION['correo']  = $row->correo;
				$_SESSION['idUsuario']  = $row->idUsuario;

				$data['contenido'] = 'persona/index';
				$data['allPersona'] = $this->m_persona->allPersonas();
				$_SESSION['modulos'] = $this->m_modulo->allModulos();

			//	$this->load->helper('form');
			//	$this->load->view('view_persona', $data);
				$this->load->view('plantilla', $data);
				//redirect('persona/index');
			}
			else
					echo "no existe usuario";

		}else{			
			echo "NO existe POST";
		
		}
	}
// cerramos sesion
	public function logout(){
        $this->session->userdata = array();
        $this->session->sess_destroy();
        redirect('usuario', 'refresh');

	}
}

