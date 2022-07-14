<?php
//varial controle
$paginaAtual = 'Contato';

// include de arquivos
include_once './includes/_head.php';#inclui o head da pagina
include_once './includes/_dados.php';#inclui os dados da pagina
include_once './includes/_header.php'#ativa o header da pagina

?>
    <h1>Contatos</h1>
    <hr>
    <ul>
    <form action="envia.php" method="post" enctype="multipart/form-data">
        <li>
        <label for="txtNome"|>Nome completo</label>
        <input type="text" name="txtNome" required >
        </li>
        <li>
        <label for="txtEmail"|>Email</label>
        <input type="mail" name="txtEmail" required >
        </li>
        <li>
        <label for="txtTelefone"|>Telefone</label>
        <input type="tel" name="txtTelefone" required >
        </li>
        <li>
            <label for="selEstado">Estado</label>
            <select name="selEstado">
                <option>-Selecione seu Estado-</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RS">Santa Catarina</option>
                <option value="RS">Paraná</option>
                <option value="RS">São Paulo</option>
            </select>
        </li>
        <li>
            <label for="upFoto">Foto</label>
            <input type="file" name="upFoto" id="upFoto">
        </li>
        <li>
        <input type="submit" Value="Enviar">
        </li>
        <ul>
    </form>



<?php
include_once './includes/_footer.php'; #inclui o footer da pagina
?>
