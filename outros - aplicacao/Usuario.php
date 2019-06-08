<?php 
class Usuario {
    protected  $username;
    protected $senha;

    public function _construct(){
        $this("","");
    }

    public function Usuario($usernamed,$senhad) {
        $this->username = $username;
        $this->senha = $senha;
    }

    public function getUsername() {
        return $username;
    }

    public function getSenha() {
        return $senha;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }
}

?>