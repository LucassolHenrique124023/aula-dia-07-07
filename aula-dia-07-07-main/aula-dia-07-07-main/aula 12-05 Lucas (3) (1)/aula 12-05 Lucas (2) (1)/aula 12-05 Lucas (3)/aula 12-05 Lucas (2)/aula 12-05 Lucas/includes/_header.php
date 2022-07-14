<header>
    <h1>Sandro&Massas</h1>
    <nav>
    <ul>
        <li><a href="./Empresa.php">Empresa</a></li>
        <li><a href="./Produtos.php">Produtos</a></li>
        <li><a href="./Contato.php">Contato</a></li>
        <li><a href="./receitas.php">Receitas</a></li>
        <li><a href="./Index.php">Index</a></li>
    </ul>
    </nav>
</header>
<main class="container">
    <?php
    if ($paginaAtual != "Home"){ ?>
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrum-item"><a href="./index.php">Home</a><li>
                <li class="breadcrum-item active" aria-current="page"><?php echo $paginaAtual;?></li>
</ol>   
</nav>
</div>
<?php
}
?>