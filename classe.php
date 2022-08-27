<?php
class Usuario{
    private $usuario;
    private $senha;
    private $nome;
    private $tipoUsuario;

    // recebendo o login 
    public function setUsuario($usuario){
        $this ->usuario = $usuario;
    }
    public function setSenha($senha){
        $this ->senha = $senha;
    }
    public function setNome($nome){
        $this ->nome = $nome;
    }
    public function setTipoUsuario($tipoUsuario){
        $this ->tipoUsuario = $tipoUsuario;
    }
    public function getUsuario($usuario){
        $this ->usuario = $usuario;
    }
    public function getSenha($senha){
        $this ->senha = $senha;
    }
    public function getNome($nome){
        $this ->nome = $nome;
    }
    public function getTipoUsuario($tipoUsuario){
        $this ->tipoUsuario = $tipoUsuario;
    }
    public function validarAcesso(){
    $usuario = "admin";
    $senha = md5('123456');
    $senhaCrypt = crypt($senha,'etec');
    if(isset($_POST['btnLogin'])){
        //antes de fazer a comparação com a senha digitada, devo criptografa-la
        $senhaUser = crypt(md5($_POST['pass']),'etec');
        //verifiquei se o usuario digitado é igual ao armazenado e a senha digitada criptografada é igual a senha armazenada
        if($_POST['username'] == $usuario && $senhaUser == $senhaCrypt){
            //se sim
            //echo "Usuário Logado!";
            header('Location: index.php?status=1');
        }else{
            //senão
            //echo "Usuário e/ou senha incorretos";
            header('Location: index.php?status=2');
 
        }
    }
}
}

?>