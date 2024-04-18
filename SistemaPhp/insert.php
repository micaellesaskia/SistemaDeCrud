<?php

$nome = $_POST['nome'];
$email = $_POST['e-mail'];
$idade = $_POST['idade'];

// echo $nome." - ".$email." - ".$idade;

// Importa o arquivo de conexão
include_once("conect.php");

// Importação do arquivo da classe Crud
include_once("Crud.php");

// Objeto para conexão e manipulação de dados no banco
$obj = new Crud($conect);

// Enviando dados ao método
$obj->setDados($nome, $idade, $email);

// Método para inserir dados para o banco
$obj->insertDados();

?>