<?php
    // include de arquivos
    include_once './includes/_functions.php';
    include_once './includes/_head.php';#inclui o head da pagina
    include_once './includes/_dados.php';#inclui os dados da pagina
    include_once './includes/_header.php';#ativa o header da pagina

    $id=$_GET['id'];
    $receita = $dadosReceita[$id];
    ?>
      
      <h1><?php echo $receita['titulo']?></h1>
      <hr>
      <p><?php echo $receita['descricao'];?></p>
      <img src="./receitas/<?php echo $receita['imagem'];?>"/>
      <hr>
      <span><?php echo ($receita['video']);?></span>
      <span>
          <a href="./index.php/">Voltar</a>
      </span>
    
    
    <?php
?>