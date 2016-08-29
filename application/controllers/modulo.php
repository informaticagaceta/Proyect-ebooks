<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modulo extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// comunicacion con el modelo
		$this->load->library('session');

		$this->load->model('m_modulo');
		// validamos queeee se haya logeado
		if( !isset($_SESSION['idUsuario'] )){
			redirect('usuario/index');
		}		
	}

	public function index(){
		$data['nombre']  = "Roger Antonio";
		$data['contenido'] = 'modulo/index';
		$data['allModulos'] = $this->m_modulo->allModulos();



	//	$this->load->helper('form');
	//	$this->load->view('view_persona', $data);
		$this->load->view('plantilla', $data);		
	}
	// elimino la persona de la grilla
	public function eliminar($id=NULL){
		if ($id !=NULL){
			$this->m_modulo->deleteModulo($id);
			redirect('modulo/index');			
		}else
		{
			redirect('modulo/index');
		}

	}

	// agrego 
	public function agregar(){
		$data['contenido'] = 'modulo/view_agregar_modulo';
//		$this->load->helper('form');

		if($this->input->post()){
			$datos = $this->input->post();
			$this->m_modulo->agregarModulo( $datos['nombres'] ,$datos['url'] );
			$data['allModulos'] = $this->m_modulo->allModulos();
			$data['contenido'] = 'modulo/index';
			$this->load->view('plantilla', $data);
		}else{			
			$this->load->view('plantilla', $data);
		}
		
		
	}

	// edito Persona 
	public function editar($id = NULL){
		if ( $id != NULL){
			$data['contenido'] = 'modulo/view_editar_modulo';
			$data['elModulo'] = $this->m_modulo->buscaModulo($id);
			$this->load->view('plantilla', $data);
		}
	}

	// actualiza modulo
	public function actualiza(){
		$data['contenido'] = 'modulo/index';

//		$this->load->helper('form');

		if($this->input->post()){
			$datos = $this->input->post();
			$this->m_modulo->actualizaModulo($datos['id'], $datos['nombres'], $datos['url']);

		//	$data['allPersona'] = $this->m_persona->allPersonas();
			$data['allModulos'] = $this->m_modulo->allModulos();
			$this->load->view('plantilla', $data);
		}else{			
			$this->load->view('plantilla', $data);
		}
		
		
	}



}