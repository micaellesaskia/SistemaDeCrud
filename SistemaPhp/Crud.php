<?php

class Crud {
    
    // Atibuto para conexão no banco
    private $connect;

    // Atributos para manipulação de dados no banco
    private $nome;
    private $email;
    private $idade;

    // Conexão com o banco
    function __construct($conect) {
        $this->connect = $conect;
    }

    // Método para pegar dados
    public function setDados($nome, $idade, $email){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->email = $email;
    }

    // Método para inserir dados para o banco
    public function insertDados(){
        // Variável de conexão SQL
        $sql = $this->connect->prepare("INSERT INTO table_clientes(nome,
        idade,email,data_now)VALUES(?,?,?,now())");

        $sql->bindParam(1,$this->nome);
        $sql->bindParam(2,$this->idade);
        $sql->bindParam(3,$this->email);

        if($sql->execute()){
            echo 'Cliente inserido com sucesso';
        }else{
            echo 'Erro na hora de inserir!';
        }
    }

    // Método para consulta no banco de dados pelo nome na leitura
    public function readInfo($nome){
        // if(isset($id)){
            // Pegar dados do banco
            $sql = $this->connect->prepare("SELECT * FROM table_clientes WHERE nome LIKE ?");
            
            //Funciona da mesma forma que o bindParam()
            $sql->bindValue(1, "%$nome%");

            $sql->execute();

            $result = $sql->fetch(PDO::FETCH_ASSOC);

            return $result;
        // } else {
        //     $this->getAll();
        // }
    } // Fim do readinfo

    // Método para consulta no banco de dados para ver todos
    public function readAll($id = null){
        if(isset($id)){
            // Pegar dados do banco
            $sql = $this->connect->prepare("SELECT * FROM table_clientes WHERE id = ?");
            
            //Funciona da mesma forma que o bindParam()
            $sql->bindValue(1, $id);

            $sql->execute();

            $result = $sql->fetch(PDO::FETCH_OBJ);

            return $result;
        } else {
            $this->getAll();
        }
    } // Fim do readinfo

    // Consulta na tabela inteira
    public function getAll(){
        $sql = $this->connect->query("SELECT * FROM table_clientes");

        return $sql->fetchAll();
    }

    // Método para altualizar ( UPDATE )
    public function update($novoId, $novoNome, $novaIdade, $novoEmail){
        $sql = $this->connect->prepare("UPDATE table_clientes SET nome=?, idade=?, email=? WHERE id=?");

        $sql->bindValue(1, $novoNome, PDO::PARAM_STR);
        $sql->bindValue(2, $novaIdade, PDO::PARAM_STR);
        $sql->bindValue(3, $novoEmail, PDO::PARAM_STR);
        $sql->bindValue(4, $novoId, PDO::PARAM_STR);

        if ($sql->execute()) {
            echo 'Registro atualizado! <br> <a href="readAll.php"><button> Voltar </button></a>';
        } else {
            echo 'Problemas ao tentar atualizar registro! <br> <a href="readAll.php"><button> Voltar </button></a>';
        }
    }

    // Método para deletar
    public function delete($id){
        $sql = $this->connect->prepare("DELETE FROM table_clientes WHERE id=?");

        $sql->bindValue(1, $id, PDO::PARAM_STR);

        if($sql->execute()){
            echo 'Registro excluido! <br> <a href="readAllDelete.php"><button> Voltar </button></a>';
        }else{
            echo 'Problemas ao tentar excluir registro! <br> <a href="readAllDelete.php"><button> Voltar </button></a>';
        }
    }
}; // Fim da classe

?>