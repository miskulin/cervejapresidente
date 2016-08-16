<?php
class Usuarios_model extends CI_Model {
    
    public $created; 
    public $modifield;

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }
    
    public function validaUsuario($dados = null) {
        $senha = md5($dados['senha']);
        return $this->db->get_where('usuarios', array('nome' => $dados['nome'], 'senha' => $senha))->row();
    }

    public function get_last_ten_entries() {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }

    public function insert_entry() {
        $this->title = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date = time();

        $this->db->insert('entries', $this);
    }

    public function update_entry() {
        $this->title = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}
