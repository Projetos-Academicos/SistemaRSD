<?php

class Usuarios
{
    
    protected $mysql;
    protected $db = array(
        'servidor'=>'localhost',
        'database'=>'sistemarsd',
        'usuario'=>'root',
        'senha'=>'',
    );
    
    public function __construct()
    {
        $this->conectaBd();
    }
    
    public function login()
    {
        session_start();
        
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            
            $usuario=$this->retUsuario($_POST['usuario']);
            if (crypt($_POST['senha'], $usuario['senha']) === $usuario['senha']) {
                $_SESSION["usuario"] = $usuario;
                if (!empty($_POST['lembrarSenha'])) {
                    $this->lembrar($usuario['senha']);
                }
            }
            
        } elseif ((!empty($_COOKIE['usuario'])) and (!empty($_COOKIE['senha']))) {
            
            $cookie['usuario'] = base64_decode(substr($_COOKIE['blog_ghj'],22,strlen($_COOKIE['usuario'])));
            $cookie['senha'] = base64_decode(substr($_COOKIE['blog_ghk'],22,strlen($_COOKIE['senha'])));
            $usuario=$this->retUsuario($cookie['usuario']);
            
            if ($cookie['senha']==$usuario['senha']) {
                $_SESSION["usuario"] = $usuario;
            }
            
        }
        
        
        
        if (!empty($_SESSION["usuario"])) {
            if (empty($_SESSION["url"])) {
                header('Location: index.html');
            } else {
                header('Location: '.$_SESSION["url"]);
            }
        }
    }
    
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        setcookie('blog_ghj');
        setcookie('blog_ghk');
        header('Location: index.html');
    }
    
    public function protege()
    {
        session_start();
        if (empty($_SESSION["usuario"])) {
            $_SESSION["url"]=$_SERVER['REQUEST_URI'];
            header('Location: login.php');
        }
    }
    
    public function cadastrar()
    {
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $sql='INSERT INTO `usuarios` (`nome`,`email`,`usuario`,`senha`) VALUES (:nome,:email,:usuario,:senha);';
            $mysql=$this->mysql->prepare($sql);
            $mysql->bindValue(':nome', $_POST['nome'],PDO::PARAM_STR);
            $mysql->bindValue(':email', $_POST['email'],PDO::PARAM_STR);
            $mysql->bindValue(':usuario', $_POST['usuario'],PDO::PARAM_STR);
            if($_POST['senha'] == $_POST['confirmarSenha']){
                $mysql->bindValue(':senha', $this->hash($_POST['senha']),PDO::PARAM_STR);
                $mysql->execute();
                header('Location: cadastrar-usuario.php');
            }
        }
    }
    
    protected function lembrar($senha)
    {
        $cookie=array(
            'usuario'=>$this->salt().base64_encode($_POST['usuario']),
            'senha'=>$this->salt().base64_encode($senha)
        );
        setcookie('blog_ghj', $cookie['usuario'], (time() + (15 * 24 * 3600)),$_SERVER['SERVER_NAME']);
        setcookie('blog_ghk', $cookie['senha'], (time() + (15 * 24 * 3600)),$_SERVER['SERVER_NAME']);
    }
    
    protected function hash($senha)
    {
        return crypt($senha, '$2a$10$' . $this->salt() . '$');
    }
    
    protected function retUsuario($usuario)
    {
        $sql='SELECT * FROM `usuarios` WHERE `usuarios`.`usuario` = :usuario ;';
        $mysql=$this->mysql->prepare($sql);
        $mysql->bindValue(':usuario', $usuario,PDO::PARAM_STR);
        $mysql->execute();
        return $mysql->fetch(PDO::FETCH_ASSOC);
    }
    
    protected function conectaBd()
    {
        $this->mysql = new PDO(
            'mysql:host='.$this->db['servidor'].';dbname='.$this->db['database'], $this->db['usuario'], $this->db['senha']
        );
        $this->mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    protected function salt()
    {
        $string = 'abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ0123456789';
        $retorno = '';
        for ($i = 1; $i <= 22; $i++) {
            $rand = mt_rand(1, strlen($string));
            $retorno .= $string[$rand-1];
        }
        return $retorno;
    }
    
}