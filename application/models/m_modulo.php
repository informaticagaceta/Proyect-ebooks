<?php 

class m_modulo extends CI_Model {


	public function __construct(){
		parent::__construct();
		$this->load->database();
	} 

		// regresa todas las personas
	public function allModulos(){
		$query = $this->db->query("select idModulo, nombre, url from modulo");
		// devuelve todos los registros de la tabla
		return $query->result();
	}

	// borramos 
	public function deleteModulo($id=NULL){
		if ($id != NULL){
			$this->db->where('idModulo', $id);
			$this->db->delete('modulo');

		}
	}	


	//agrega nuevo modulo	
	public function agregarModulo($nombres, $url){
		// obtengo la fecha y hora 
		$datestring = '%Y-%m-%d %H:%i:%s';
		$time = time();
		$now  = mdate($datestring, $time); 
		// obtengo los datos para registrarlos

		$dataModulo = array(
			'nombre' 	=> $nombres,
			'url'     	=> $url

		);

		$this->db->insert('modulo', $dataModulo);
	//	$last_id_per = $this->db->insert_id();


	}

	// regresa una persona  pasando el aprametro de ID
	public function buscaModulo($id){
		if( $id != NULL){
			$query = $this->db->query("select idModulo, nombre,url from modulo where idModulo='$id'");
			// devuelve la persona
			return $query->result();			
		}

	}

	// actualiza modulo
	public function actualizaModulo($id,$nombre, $url){

		// obtengo los datos para registrarlos

		$dataModulo = array(
			'nombre' 	=> $nombre,
			'url'		=> $url
		);

		$this->db->where('idModulo', $id);
		$this->db->update('modulo', $dataModulo);




	}			


}