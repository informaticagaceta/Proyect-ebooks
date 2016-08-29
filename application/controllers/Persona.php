<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// comunicacion con el modelo
		$this->load->model('m_persona');
		$this->load->library('session');

		$this->load->model('m_modulo');

		// validamos queeee se haya logeado
		if( !isset($_SESSION['idUsuario'] )){
			redirect('usuario/index');
		}

		$_SESSION['modulos'] = $this->m_modulo->allModulos();

	}


	public function index()
	{

		$data['nombre']  = "Roger Antonio";
		$data['contenido'] = 'persona/index';
		$data['allPersona'] = $this->m_persona->allPersonas();
		$data['allModulos'] = $this->m_modulo->allModulos();


	//	$this->load->helper('form');
	//	$this->load->view('view_persona', $data);
		$this->load->view('plantilla', $data);
	}

	// elimino la persona de la grilla
	public function eliminar($id=NULL){
		if ($id !=NULL){
			$this->m_persona->deletePersona($id);
			redirect('');			
		}else
		{
			redirect('');
		}

	}

	// agrego persona
	public function agregar(){
		$data['contenido'] = 'persona/view_agregar_persona';
//		$this->load->helper('form');

		if($this->input->post()){
			$datos = $this->input->post();
			$this->m_persona->agregarPersona($datos['usuario'], $datos['pass'],  $datos['perfil'], $datos['nombres'], $datos['apellidos'], $datos['dni'], $datos['email'], $datos['direccion'], $datos['fnacimiento'], $datos['telefono']);
			$data['allPersona'] = $this->m_persona->allPersonas();
			$data['contenido'] = 'persona/index';
			$this->load->view('plantilla', $data);
		}else{			
			$this->load->view('plantilla', $data);
		}
		
		
	}

	// edito Persona 
	public function editar($id = NULL){
		if ( $id != NULL){
			$data['contenido'] = 'persona/view_editar_persona';
			$data['laPersona'] = $this->m_persona->buscaPersonas($id);
			$this->load->view('plantilla', $data);
		}
	}

	// actualiza persona
	public function actualiza(){
		$data['contenido'] = 'persona/index';

//		$this->load->helper('form');

		if($this->input->post()){
			$datos = $this->input->post();
			$this->m_persona->actualizaPersona($datos['id'], $datos['usuario'], $datos['pass'],  $datos['perfil'],  $datos['nombres'], $datos['apellidos'], $datos['dni'], $datos['email'], $datos['direccion'], $datos['fnacimiento'], $datos['telefono']);

			$data['allPersona'] = $this->m_persona->allPersonas();
			$this->load->view('plantilla', $data);
		}else{			
			$this->load->view('plantilla', $data);
		}
		
		
	}

}

?>