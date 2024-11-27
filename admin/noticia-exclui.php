<?php //noticia-exclui.php
require "../includes/funcoes-noticias.php";
require "../includes/funcoes-controle-de-acesso.php";
verificarAcesso();
$idNoticia = $_GET['id'];
$idUsuario = $_SESSION['id'];
$tipoUsuario = $_SESSION['tipo'];
excluirNoticia($conexao, $idNoticia, $idUsuario, $tipoUsuario);
header("location:noticias.php");