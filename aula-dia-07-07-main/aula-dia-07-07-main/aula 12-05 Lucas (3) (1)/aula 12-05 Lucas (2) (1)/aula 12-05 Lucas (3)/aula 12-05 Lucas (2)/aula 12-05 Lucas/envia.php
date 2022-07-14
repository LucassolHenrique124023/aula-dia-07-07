<?php
/**
 * _GET - captura os dado/variaveis na url
 * _POST captura os dados do formulario
 * _REQUEST captura os dados por POST e/ou
 * _SERVER captura informações do servidor 
 * _FILE -PERMITE enviar um arquivo para o site/ MIME type list
 * _SESSION -
 * _COOKIES
 *
 * POST, REQUEST E FILES -> nome dos elementos atraves do atributo name
 */

$dados = $_FILES;

echo '<pre>';
print_r ($dados);
echo '</pre>';
?>