<?php
//dados de conexao com banco de dados 
$hostname = "localhost";
$bancodedados = "meusite";
$usuario = "root";
$senha = "";

//cria a conexao com banco de dados
$conn = mysqli_connect($hostname, $usuario, $senha, $bancodedados);

//check connection
if (!$conn) {
    die ("Erro ao conectar no Banco: " . mysqli_connect_error());
}
?>