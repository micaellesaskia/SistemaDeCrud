<?php

    // Importação do arquivo de conexão do BD
    include_once("conect.php");

    // Importação do arquivo da classe
    include_once("Crud.php");

    $obj = new Crud($conect);

    $obj->readAll();

    $dados = $obj->getAll();

    echo "<table border='1'>";
    echo "<tr><th> Id </th><th> Nome </th><th> Idade </th><th> E-mail </th><th> Data </th><th> Excluir </th></tr>"; // Cabeçalho da tabela
    //Loop através do resultado
    foreach ($dados as $info){
        echo "<tr>";
        echo "<td>".$info['id']."</td>";
        echo "<td>".$info['nome']."</td>";
        echo "<td>".$info['idade']."</td>";
        echo "<td>".$info['email']."</td>";
        echo "<td>".$info['data_now']."</td>";
        echo "<td><a href=delete.php?id=".$info['id']."> Excluir </a></td>";
        echo "<tr>";
    }
    echo "</table>";

    echo "<br> <a href='index.html'><button> Voltar </button></a>";

?>