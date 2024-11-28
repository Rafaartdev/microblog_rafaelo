<?php //noticia-exclui.php
require "../includes/funcoes-noticias.php";
require "../includes/funcoes-controle-de-acesso.php";

//Verificando se o acesso esta logado
verificarAcesso();

//Capturando o id da noticia que será DELETADA
$idNoticia = $_GET['id'];

//Capturando o tipo de usuario logado na sessão
$idUsuario = $_SESSION['id'];

//Executando o DELETE da noticia no banco de dados
$tipoUsuario = $_SESSION['tipo'];
excluirNoticia($conexao, $idNoticia, $idUsuario, $tipoUsuario);

//Redirecionando para a página com a lista de noticias
header("location:noticias.php");