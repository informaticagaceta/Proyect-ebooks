<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// comunicacion con el modelo

		$this->load->library('session');

		$this->load->model('m_permiso');
		$this->load->model('m_modulo');
		// validamos queeee se haya logeado
		if( !isset($_SESSION['idUsuario'] )){
			redirect('usuario/index');
		}	

	//	$this->load->model('m_modulo');
		// validamos queeee se haya logeado
		if( !isset($_SESSION['idUsuario'] )){
			redirect('usuario/index');
		}		
	}

	public function index(){

	
		$data['contenido'] = 'permisos/index';
		$data['allModulos'] = $this->m_modulo->allModulos();
		$data['allRoles'] = $this->m_permiso->getRoles();
		// ver permiso default  -- 1 
		$data['mePerfil'] = $this->m_permiso->verPermisos('1');





	//	$this->load->helper('form');
	//	$this->load->view('view_persona', $data);
		$this->load->view('plantilla', $data);				
	}

	public function actualizar_permisos(){
		$data['contenido'] = 'permisos/index';
//		$this->load->helper('form');

		if($this->input->post()){
			$datos = $this->input->post();


// hacemos un alto para hacer de mostrar los permisos de los roles 
			if ( $datos['ocult'] =='1'){
				// aqui es dodne leo los permisos de los perfiles
				$data['perfilMe'] = $datos['perfil'];
				$data['permisos_own'] = $this->m_permiso->verPermisos(trim($datos['perfil']));

			}else{
				// aqui destripamos el array de permisos 
				foreach ($datos['permis'] as $value) {
					$dati = explode("_", $value);
					//echo $dati[0] . " - ". $datos['perfil']. " - ".$dati[1]."<br>";
					$this->m_permiso->agregarPermisos( $dati[0], $datos['perfil'] ,$dati[1]);

				}

			}
			//$this->m_permiso->agregarPermisos( $datos['nombres'] ,$datos['url'] );
			$data['allModulos'] = $this->m_modulo->allModulos();
			$data['allRoles'] = $this->m_permiso->getRoles();
			//$data['contenido'] = 'modulo/index';
			$this->load->view('plantilla', $data);
		}else{			
			$this->load->view('plantilla', $data);
		}		
	}


}



//  segundo castillo yoveda 986251088, 998670092
