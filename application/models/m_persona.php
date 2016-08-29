<?php 

class m_persona extends CI_Model {


	public function __construct(){
		parent::__construct();
		$this->load->database();
	} 

	// regresa todas las personas
	public function allPersonas(){
		$query = $this->db->query("select p.idPersona, u.usuario, u.tipoUsuario, p.nombres, p.apellidos, p.correo, p. direccion, p. fechaNacimiento, p.telefono from  Persona p inner join usuario u on p.idPersona=u.idPersona ");
		// devuelve todos los registros de la tabla
		return $query->result();
	}

	// borramos 
	public function deletePersona($id=NULL){
		if ($id != NULL){
			$this->db->where('idPersona', $id);
			$this->db->delete('Persona');
			// de la tabla usuario
			$this->db->where('idPersona', $id);
			$this->db->delete('usuario');
		}
	}


	// regresa una persona  pasando el aprametro de ID
	public function buscaPersonas($id){
		$query = $this->db->query("select p.idPersona, u.usuario,u.password, p.dni, u.tipoUsuario, p.nombres, p.apellidos, p.correo, p. direccion, p. fechaNacimiento, p.telefono from  Persona p inner join usuario u on p.idPersona=u.idPersona where p.idPersona='$id'");
		// devuelve la persona
		return $query->result();
	}

	//agrega nueva persona	
	public function agregarPersona($user,$pass, $perfil, $nombres, $apellidos, $dni, $email, $direccion, $fnacimiento, $telefono){
		// obtengo la fecha y hora 
		$datestring = '%Y-%m-%d %H:%i:%s';
		$time = time();
		$now  = mdate($datestring, $time); 
		// obtengo los datos para registrarlos

		$dataPersona = array(
			'nombres' 	=> $nombres,
			'apellidos' => $apellidos,
			'dni'       => $dni,
			'correo'    => $email,
			'direccion' => $direccion,
			'fechaNacimiento' => $fnacimiento,
			'fechaRegistro' => $now,
			'telefono'	=> $telefono
		);

		$this->db->insert('Persona', $dataPersona);
		$last_id_per = $this->db->insert_id();

		// para tabla user
		$dataUser = array(
			'usuario'  => $user,
			'password' => $pass,
			'tipoUsuario' => $perfil,
			'fechaRegistro' => $now,
			'fechaUpdate' => $now,
			'idPersona'  => $last_id_per

		);
		$this->db->insert('usuario', $dataUser);

	}

	// actualiza persona
	public function actualizaPersona($id,$user,$pass, $perfil, $nombres, $apellidos, $dni, $email, $direccion, $fnacimiento, $telefono){

		// obtengo los datos para registrarlos

		$dataPersona = array(
			'nombres' 	=> $nombres,
			'apellidos' => $apellidos,
			'dni'       => $dni,
			'correo'    => $email,
			'direccion' => $direccion,
			'fechaNacimiento' => $fnacimiento,
			'telefono'	=> $telefono
		);

		$this->db->where('idPersona', $id);
		$this->db->update('Persona', $dataPersona);
		// aqui actualizo usuario 
		$dataUser = array(
			'password' => $pass,
			'tipoUsuario'  => $perfil

		);
		$this->db->where('idPersona', $id);
		$this->db->update('usuario', $dataUser);



	}	
}

?>