<?php 

class m_permiso extends CI_Model {


	public function __construct(){
		parent::__construct();
		$this->load->database();
	} 


	public  function getRoles(){
		$q = $this->db->query("select idRol, nombre from roles");
		return $q->result();
	}

	public function agregarPermisos($modulo, $rol, $permiso){
		
		// obtengo la fecha y hora 
		$datestring = '%Y-%m-%d %H:%i:%s';
		$time = time();
		$now  = mdate($datestring, $time); 
		// obtengo los datos para registrarlos

		$dataModulo = array(
			'idModulo' 	=> $modulo,
			'idRol'     => $rol,
			'permisos'  => $permiso,
			'fechaRegistro' => $now
		);

		$this->db->insert('permisos', $dataModulo);		
	}

	public function verPermisos($id=NULL){
		if ($id != NULL){
			$query = $this->db->query("select idModulo, idRol, permisos from permisos where idRol='$id' " );
			return $query->result();
		}
	}



}