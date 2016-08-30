<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pioneer extends CI_Controller {

	public function __construct(){
		parent::__construct();


		$this->load->library('session');		

		// caragamos modelos
		$this->load->model('m_permiso');
		$this->load->model('m_modulo');

		// validamos queeee se haya logeado
		if( !isset($_SESSION['idUsuario'] )){
			redirect('usuario/index');
		}			
	}

	// creamos la vista 

	public function index()
	{
		$data['contenido'] = 'permisos/index';
		$data['allModulos'] = $this->m_modulo->allModulos();
		$data['allRoles'] = $this->m_permiso->getRoles();		


		// cargamos la vista para esto
		$this->load->view('plantilla', $data);	

	}

	public function add(){
		// codigo para agregar
	}

	public function edit(){
		// codigo para editar 
	}

	public function update(){
		// codigo para actualizar un record (registro)
	}

	public function delete(){
		// codigo para borrar un record ( registro)
	}



}