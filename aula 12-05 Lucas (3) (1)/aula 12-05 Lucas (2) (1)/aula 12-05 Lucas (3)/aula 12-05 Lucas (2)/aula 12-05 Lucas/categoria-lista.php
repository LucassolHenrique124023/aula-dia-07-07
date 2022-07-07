<?php
//conexao com o banco de dados 
include_once '../includes/_dados.php';

$acao = $_REQUEST['acao'];
$id = $_REQUEST['id'];

switch($acao){
    //acao de excluir dados
    case 'excluir':

    $sql = "DELETE FROM categorias WHERE CategoriaID = ".$id;

    wysqli_query($conexao, $sql);

    header_query('location: ./categoria.php');

    break;

case 'salvar':
    //captura os dados
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    //upload da imagem
    if($_FILES['foto']['size'] > 0){
        //pasta que armazena o arquivo
    $uploaddir = '../imagens/categorias/';
    // extrai a extersao da imagem
    $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
    //gera um nome aleatorio para imagem 
    $nomearquivo = 'categoria-'.$id.'-'.rand().'.'.$extensao;
    // novo arquivo
    $uploadfiles = $uploaddir . $nomearquivo;
    //faz o upload da imagem 
    move_uploaded_file['foto']['tmp_name'], $uploadfile);
    }else{
        $nomearquivo = $_POST['imagem'];
    }
    //monta o sqL conforme informa o id
    if(!isset($_POST['id']) empty(['id'])){
     //comando SQL do banco   
    }



    
}

?>