<?php
require "conecta.php";

// Usada em admin/noticia-insere.php
function inserirNoticia(
	$conexao, $titulo, $texto, $resumo, $nomeDaimagem, $usuarioId){
   
    $sql = "INSERT INTO noticias(titulo, texto, resumo, imagem, usuario_id)VALUES('$titulo', '$texto', '$resumo', '$nomeDaimagem', $usuarioId)";
    
    executarQuery($conexao, $sql);
}


// Usada em admin/noticias.php
function lerNoticias($conexao){
	
}


// Usada em admin/noticia-atualiza.php
function lerUmaNoticia($conexao){
	
}


// Usada em admin/noticia-atualiza.php
function atualizarNoticia($conexao){
	
}


// Usada em admin/noticia-exclui.php
function excluirNoticia($conexao){
	
}

/* *********** */


/* Funções utilitárias */

function executarQuery($conexao, $sql) {
	$consulta = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
	return $consulta;	
}

function formataData($data){
	/* Pega a data/hora em formato ANO-MÊS-DIA HORA:MINUTO e 
	transforma em DIA/MÊS/ANO HORA:MINUTO */
    return date("d/m/Y H:i", strtotime($data));
}

function upload($arquivo){

    /* Array para validação dos tipos permitidos */
    $tiposValidos = [
        "image/png", "image/jpeg", "image/gif", "image/svg+xml"
    ];

    /* Verificando se o tipo do arquivo NÃO É 
    um dos existentes no array tiposValidos */
    if( !in_array($arquivo['type'], $tiposValidos) ){
		// Se não for para tudo, dá um alerta e volta pra página anterior
        echo "<script> 
                alert('Formato inválido!');
                history.back();
            </script>";
        exit; // mesma coisa que o die()
    }

    /* Pegando apenas o nome/extensão do arquivo */
    $nome = $arquivo['name'];

    /* Obtendo do servidor o local/nome temporário
    para o processo de upload */
    $temporario = $arquivo['tmp_name'];

    /* Definindo da pasta de destino + nome do arquivo da imagem */
    $destino = "../imagens/".$nome;

    /* Movendo o arquivo/imagem da área temporária
    para a pasta de destino indicada (imagens) */
    move_uploaded_file($temporario, $destino);
}