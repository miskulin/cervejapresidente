<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('usuarios/usuarios_model');
    }

    public function index() {
        $this->load->view('usuarios/index.php');
    }

    public function login() {
        $dados = $this->input->post(NULL, TRUE);
        $usuario = $this->usuarios_model->validaUsuario($dados);
        if ($usuario) {
            $this->session->set_userdata('usuario_logado', $usuario);
            $this->session->set_flashdata("success", "Bem vindo");
            redirect('usuarios/usuarios/clientes/');
        } else {
            $this->session->set_flashdata("danger", "Usuario ou senha invalidos");
            redirect('usuarios/usuarios/index');
        }
    }

    public function logout() {
        unset($_SESSION['usuario_logado']);
        redirect('admin/usuarios');
    }
}
