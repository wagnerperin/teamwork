<?php
    
    require_once("../models/User.php");
    require_once("../models/UserDAO.php");
    
    $user = UserDAO::getInstance()->findByMail($_POST['email']);

    if($user->checkPassword($_POST['senha'])){
        //CRIAR SESSÃO E SALVAR O USUARIO DENTRO DELA.
        //REDIRECIONAR PARA A PAGINA AUTENTICADA ETC.
    }else{
        //REDIRECIONAR PARA A PAGINA DE LOGIN INFORMANDO QUE OCORREU ERRO NA AUTENTICAÇÃO ETC.
    }

?>