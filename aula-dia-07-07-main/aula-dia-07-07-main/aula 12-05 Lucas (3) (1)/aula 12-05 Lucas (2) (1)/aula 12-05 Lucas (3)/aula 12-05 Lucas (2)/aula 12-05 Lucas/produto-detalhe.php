
<?php
$paginaAtual = 'produto-detalhe';
// include de arquivos
include_once './includes/_functions.php';
include_once './includes/_head.php';#inclui o head da pagina
include_once './includes/_dados.php';#inclui os dados da pagina
include_once './includes/_header.php';#ativa o header da pagina

$id=$_GET['id'];
$produto = $dadosProdutos[$id];
?>
  
  <h1><?php echo $produto['nome']?></h1>
  <hr>
  <p><?php echo $produto['descricao'];?></p>
  <img src="./produtos/<?php echo $produto['imagem'];?>"/>
  <hr>
  <span><?php echo ConverterEmMoeda($produto['preco']);?></span>
  <span>
      <a href="./index.php/">Voltar</a>
  </span>


<?php
include_once './includes/_footer.php'; #inclui o footer da pagina
?>
