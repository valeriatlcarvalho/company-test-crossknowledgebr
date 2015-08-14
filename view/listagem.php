<?php
    
    #require "../controller/Controller.php";

    #$lista = new Controller;
    $pessoa = $cadastro->listarTudo('pessoas');
    foreach($pessoa as $pessoas)
    {
    /*
    if($_POST['pessoas'])
    {
        $pessoas = $_POST['pessoas'];
    */
?>
    <tr>
        <td class="nome"><?= empty($pessoa['nome']) ? '' : $pessoa['nome'] ?></td>
        <td class="sobrenome"><?= empty($pessoa['sobrenome']) ? '' : $pessoa['sobrenome'] ?></td>
        <td class="logradouro"><?= empty($pessoa['logradouro']) ? '' : $pessoa['logradouro'] ?></td>
        <td class="bairro"><?= empty($pessoa['bairro']) ? '' : $pessoa['bairro'] ?></td>
        <td class="cidade"><?= empty($pessoa['cidade']) ? '' : $pessoa['cidade'] ?></td>
        <td class="estado"><?= empty($pessoa['estado']) ? '' : $pessoa['estado'] ?></td>
        <td class="editar"><?=print_r($pessoas); die;?></td>
        <td class="excluir"><?= empty($pessoa['id']) ? '' : $pessoa['id'] ?></td>
    </tr>
<?php
    }
?>