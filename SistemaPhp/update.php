<?php

    // Importação do arquivo de conexão do BD
    include_once("conect.php");

    // Importação do arquivo da classe
    include_once("Crud.php");

    $novoNome = $_POST['pessoa'];
    $novaIdade = $_POST['idade'];
    $novoEmail = $_POST['email'];

    $novoId = $_POST['id'];

    // echo $novoNome.' - '.$novaIdade.' - '.$novoEmail.' - '.$novoId.'<br>';

    $obj = new Crud($conect);

    $obj->update($novoId, $novoNome, $novaIdade, $novoEmail);
    // Metodo para atualizar dados

?>