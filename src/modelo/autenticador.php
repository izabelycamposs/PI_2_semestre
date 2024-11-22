<?php
include_once __DIR__ . '/query.php';
include_once __DIR__ . '/usuario.php';


class Autenticador{
    private $query;

    public function __construct(){
        $this->query = NEW Query;
    }
    
    static public function logarUsuario(Usuario $user){
       $usuarioLogado = $user->buscarLogin($user->getEmail(),$user->getSenha()); 
       $userData = $user->buscarDadosUsuario();
       if($usuarioLogado){
            session_start();
            $userData = $user->buscarDadosUsuario();
            $_SESSION['userName'] = $userData['nome'];
            $_SESSION['userEmail'] = $userData['email'];
            $_SESSION['userNivelAcesso'] = $userData['nivel_acesso'];
            $_SESSION['isLogged'] = true;
            
            return true;
        }
        $_SESSION['isLogged'] = false;
        return false;
    }

    static public function deslogar(){
        session_start();
        $_SESSION = [];
        session_unset(); 
        session_destroy();
        header("Location: ../../../index.php");
    }

    static public function autenticarUsuario(){
        session_start();
        $teste = $_SESSION['userEmail'];
        if(!(isset($_SESSION['userEmail']) && $_SESSION['isLogged'])){
            header("Location: ../../../index.php");
            exit;
        }
    }
}