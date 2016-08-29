<?php 

class m_usuario extends CI_Model {


	public function __construct(){
		parent::__construct();
		$this->load->database();
	} 

	// verificio si es login de usuario
	public function login($user, $pass){
		$query = $this->db->query("select u.idUsuario, p.idPersona, u.usuario,u.password, p.dni, u.tipoUsuario, p.nombres, p.apellidos, p.correo, p. direccion, p. fechaNacimiento, p.telefono from  Persona p inner join usuario u on p.idPersona=u.idPersona where u.usuario='$user' and u.password='$pass'  limit 1");
		return $query;

	}

}