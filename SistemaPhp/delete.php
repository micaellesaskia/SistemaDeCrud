<?php

    $id = $_GET['id'];

    // echo $id;

    // Importação do arquivo de conexão do BD
    include_once("conect.php");

    // Importação do arquivo da classe
    include_once("Crud.php");

    $obj = new Crud($conect);

    $obj->delete($id);

    

?>