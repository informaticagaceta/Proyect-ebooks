<?php 

class m_persona extends CI_Model {


	public function __construct(){
		parent::__construct();
		$this->load->database();
	} 


	// devolvemos todos los registros pioneer
	public function allPionner(){
		$query = $this->db->query("select idPioneer, nombre, descripcion from pioneer");
		return $query->result();

		}

	// borramos el registro Pioneer
	public function deletePersona($id=NULL){
		if ($id != NULL){
			$this->db->where('idPioneer', $id);
			$this->db->delete('pioneer');

		}
	}



	//agrega un registro de Piooner 
	public function agregarPersona($nombre, $descripcion){

		// obtengo la fecha y hora del sistema (PHP)
		$datestring = '%Y-%m-%d %H:%i:%s'; // formato que quiero obtener la fecha y hora
		$time = time();
		$now  = mdate($datestring, $time); 
		// obtengo los datos para registrarlos

		$dataPioneer= array(
			'nombre' 	=> $nombres,
			'descripcion' => $apellidos,
			'fechaRegistro' => $now

		);

		$this->db->insert('pioneer', $dataPioneer);
		// obtengo el ultiomo ID geenrado en el pionner
		$last_id_per = $this->db->insert_id();



	}


	}