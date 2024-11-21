<?php
// funcoes-controle-de-acesso.php

/* Sessoes (SESSIOS) no PHP
Funcionalidades para o controle de acesso a determinadas páginas e/ou recursos do site.

Exemolo: área administrativa, painel de controle, área de cliente/ aluno etc.

Nesta área o acesso se dá através de alguma forma de autenticação. Exemplos: login/senha, biometria, facial 2- fatores etc, */

/* Verificando se NÃO EXISTE de sessão no PHP*/
if( !isset($_SESSION)){
   //SE não tiver , então iniciamos uma sessão
   session_start();
}
/* Proteger o acesdso ás páginas da área administrativa */
function verificarAcesso(){
    /*SE não existir uma variavel de sessão chamada "id", então significa que o usuário não está çogado. */

    if( !isset($_SESSION['id']) ){
        /*Portantp, destruimos qualquer resquicio de sessão*/ 
        session_destroy();
        /* Fazemos o usuario ir a pade login.php*/
        header("location:../login.php?acesso_negado");

        /* e paramos completamente a função login */
        die();
    }
}

/*Funão que sera usada peloformulário login.php */
function login($id, $nome, $tipo){
// Criando variaveis de sessão
   $_SESSION['id'] = $id;
   $_SESSION['nome'] = $nome;
   $_SESSION['id'] = $tipo;
}

/* Função que sera usada quando ckicar no link Sair */
function logout(){
    session_destroy();
    header("location:../login.php?saiu");
    die();



}