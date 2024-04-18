<?php

    // Importação do arquivo de conexão do BD
    include_once("conect.php");

    // Importação do arquivo da classe
    include_once("Crud.php");

    $id = $_GET['id'];

    $obj = new Crud($conect);

    $dados = $obj->readAll($id);

    // var_dump($dados);

?>

<h2> Atualizar dados: </h2>
<form action="update.php" method="POST">
    <p> Nome: <input type="text" name="pessoa" value="<?=$dados->nome;?>"></p>
    <p> Idade: <input type="number" name="idade" value="<?=$dados->idade;?>"></p>
    <p> E-mail <input type="email" name="email" value="<?=$dados->email;?>"></p>
    <input type="hidden" name="id" value="<?=$dados->id;?>">
    <p><button type="submit"> Alterar dados </button></p>
</form>