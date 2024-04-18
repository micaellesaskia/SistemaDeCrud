<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Insert </title>
</head>
<body>
    <h2> Cadastrar dados dos cliente: </h2>
    <section>
        <form action="insert.php" method="post">

            <p> Nome: <input type="text" name="nome"></p>
            <p> E-mail: <input type="email" name="e-mail"></p>
            <p> Idade: <input type="number" name="idade"></p>

            <button type="submit"> Inserir dados </button> 
        </form>
        <br>
        <a href="index.html"><button> Voltar </button></a>
    </section>
</body>
</html>