<?php
    // Importação do arquivo da conexão com MySQL
    include_once("conect.php");

    // Importação da classe Crud
    include_once("Crud.php");

    // $obj = new Crud($conect);

    // PRIMEIRA FORMA DE EXECUTAR O READ
    // $dado = $obj->readInfo(1);

    // // var_dump($dado);

    // echo $dado->id.' - '.$dado->nome.' - '.$dado->idade.
    // ' - '.$dado->email.' - '.$dado->data_now;

    // $obj->readInfo();

    // $dado = $obj->getAll();

    // // var_dump($dado);

    // // Transformando a matriz em $dado em um vetor em $info
    // // foreach($dado as $info){
    // //     echo $info[' id '].' - '.$info[' nome '].' - '.$info[' idade '].' - '
    // //     .$info[' email '].' - '.$info[' data_now '].'<br>';
    // // }

    // // SEGUNDA FORMA DE EXECUTAR O READ
    // //Inicio da tabela
    // echo "<table border='1'>";
    // echo "<tr><th>Id</th><th>Nome</th><th>Idade</th><th>E-mail</th><th>Data</th></tr>"; // Cabeçalho da tabela
    // //Loop através do resultado
    // foreach ($dado as $info){
    //     echo "<tr>";
    //     echo "<td>".$info['id']."</td>";
    //     echo "<td>".$info['nome']."</td>";
    //     echo "<td>".$info['idade']."</td>";
    //     echo "<td>".$info['email']."</td>";
    //     echo "<td>".$info['data_now']."</td>";
    //     echo "<tr>";
    // }
    // echo "</table>";
    // // Fim da tabela

    // TERCEIRA FORMA DE EXECUTAR O READ

    $nome = $_POST['nome']; // È necessário colocar o mesmo nome que está no name no formulário
    
    $obj = new Crud($conect);

    $dado = $obj->readInfo($nome);

    //Inicio da tabela
    echo "<table border='1'>";
    echo "<tr><th>Id</th><th>Nome</th><th>Idade</th><th>E-mail</th><th>Data</th></tr>"; // Cabeçalho da tabela
    //Loop através do resultado
    echo "<tr>";
    echo "<td>".$dado['id']."</td>";
    echo "<td>".$dado['nome']."</td>";
    echo "<td>".$dado['idade']."</td>";
    echo "<td>".$dado['email']."</td>";
    echo "<td>".$dado['data_now']."</td>";
    echo "<tr>";
    echo "</table>";
    // Fim da tabela

?>