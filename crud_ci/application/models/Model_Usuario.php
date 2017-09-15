<?php

/**
 * Modelo para el Usuario.
 */
class Model_Usuario extends CI_Model {
 
    /**
     * Constructor
     */
    function __construct() {
        parent::__construct();
        // Inicializa la base de datos
        $this->load->database();
    }
    
    /**
     * Insrta un usuario.
     * @param type $nombre nombre del usuario.
     * @param type $app apellido paterno del usuario.
     * @param type $apm apellido materno del usuario.
     * @param type $nombreUsuario nick del usuario.
     * @param type $correo correo del usuario.
     * @param type $contrasenia contraseña del usuario.
     */
    public function createUsuario($nombre, $app, $apm, $nombreUsuario, $correo, $contrasenia) {
        $activo = "1";
        $esAdministrador = 0;
        $datos = array(
            'nombre' => $nombre,
            'app' => $app,
            'apm' => $apm,
            'nombreUsuario' => $nombreUsuario,
            'correo' => $correo,
            'contrasenia' => $contrasenia,
            'activo' => $activo,
            'esAdministrador' => $esAdministrador
        );
        
        $this->db->insert('Usuario', $datos);
    }
    
    /**
     * Obtiene los usuarios de la B.D.
     * @return type consulta.
     */
    public function readUsuarios() {
        $query = $this->db->query("Select * from Usuario");
        return $query->result();
    }
    
    /**
     * Elimina un usuario de la B.D.
     * @param type $idUsuario id del usuario a eliminar.
     */
    public function deleteUsuario($idUsuario) {
        $this->db->where('idUsuario', $idUsuario);
        $this->db->delete('Usuario');
        redirect('');
    }
    
    /**
     * Muestra los valores del usuario dado.
     * @param type $idUsuario id del usuario.
     * @return type consulta
     */
    public function editUsuario($idUsuario) {
        $consulta = $this->db->query("Select * from Usuario where idUsuario = $idUsuario");
        return $consulta->result();
    }
    
    /**
     * Actualiza los valores del usuario a partir del id proporcionado.
     * @param type $idUsuario id del usuario a editar.
     * @param type $nombre nombre del usuario.
     * @param type $app apellido paterno del usuario.
     * @param type $apm apellido materno del usuario.
     * @param type $nombreUsuario nick del usuario.
     * @param type $correo correo del usuario.
     * @param type $contrasenia contraseña del usuario.
     */
    public function updateUsuario($idUsuario, $nombre, $app, $apm, $nombreUsuario, $correo, $contrasenia) {
        $array = array(
            'nombre' => $nombre,
            'app' => $app, 
            'apm' => $apm,
            'nombreUsuario' => $nombreUsuario,
            'correo' => $correo,
            'contrasenia' => $contrasenia
        );
        $this->db->where('idUsuario', $idUsuario);
        $this->db->update('Usuario', $array);
    }
}


