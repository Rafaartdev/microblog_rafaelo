<?php
require "../includes/funcoes-controle-de-acesso.php";
verificarAcesso();

require "../includes/funcoes-usuarios.php";

//Pegando o id passasdo via URL
$id =$_GET['id'];

//Chamando a função excluir passando o id do usuario
excluirUsuario($conexao, $id);

//Redireciobando para a paguna com todos usuarios   
header("location:usuarios.php");