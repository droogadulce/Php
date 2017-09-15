<?php

/**
 * Controlador para Usuario.
 */
class Usuario extends CI_Controller {
    
    /**
     * Constructor.
     */
    function __construct() {
        parent::__construct();
        // Comunicación con el modelo
        $this->load->model('Model_Usuario');
    }
    
    /**
     * Inicializa la plantilla.
     */
    public function index() {
        $data['contenido'] = "usuario/index";
        $data['readUsuarios'] = $this->Model_Usuario->readUsuarios();
        $this->load->view("plantilla", $data);
    }
    
    /**
     * Inserta un usuario en la B. D.
     */
    public function insert() {
        $datos = $this->input->post();
        $data['mensajeEmail'] = '';
        if (isset($datos)) {
            $nombre = $datos['nombre'];
            $app = $datos['app'];
            $apm = $datos['apm'];
            $nombreUsuario = $datos['nombreUsuario'];
            $correo = $datos['correo'];
            // Contraseña cifrada, php 7 ya incluye salt aleatoria
            $contrasenia = hash('sha512', $datos['contrasenia']);
            if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                $data['mensajeEmail'] = "Formato de correo válido";
                $this->Model_Usuario->createUsuario($nombre, $app, $apm, $nombreUsuario, $correo, $contrasenia);
                redirect('');
            } else {
                $data['mensajeEmail'] = "Formato de correo inválido";
                redirect('');
            }
        }
    }
    
    /**
     * Elimina un usuario de la B. D.
     * @param type $idUsuario id del usuario a eliminar.
     */
    public function delete($idUsuario = NULL) {
        if($idUsuario != NULL) {
            $this->Model_Usuario->deleteUsuario($idUsuario);
        }
    }
    
  /**
   * Edita un usuario.
   * Cambia la vista al usuario a editar.
   * @param type $idUsuario el id del usuario a editar.
   */
    public function edit($idUsuario = NULL) {
        if($idUsuario != NULL) {
            $data['contenido'] = 'usuario/edit';
            $data['datosUsuario'] = $this->Model_Usuario->editUsuario($idUsuario);
            $this->load->view('plantilla', $data);
        } else {
            $this->load->view('plantilla/#read');
        }
    }
    
    /**
     * Actualiza los valores usando el método post.
     */
    public function update() {
        $datos = $this->input->post();
        if (isset($datos)) {
            $idUsuario = $datos['idUsuario'];
            $nombre = $datos['nombre'];
            $app = $datos['app'];
            $apm = $datos['apm'];
            $nombreUsuario = $datos['nombreUsuario'];
            $correo = $datos['correo'];
            // Contraseña cifrada
            $contrasenia = hash('sha512', $datos['contrasenia']);
            $this->Model_Usuario->updateUsuario($idUsuario, $nombre, $app, $apm, $nombreUsuario, $correo, $contrasenia);
            redirect('');
        }
    }
    
}

