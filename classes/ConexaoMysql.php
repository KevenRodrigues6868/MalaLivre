<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class ConexaoMysql{
            protected $servidor;
            protected $usuario;
            protected $senha;
            protected $banco;
            public $conexao;
            protected $query;
            protected $dados;
            
            
            function __construct() {
                $this->servidor = "localhost";
                $this->usuario = "root";
                $this->senha = "";
                $this->banco = "projeto2";
                self::conectar();
            }
            
            
            function conectar(){
                $this->conexao = @mysqli_connect($this->servidor, $this->usuario, $this->senha)
                        or die("Não foi posssivel conectar com o servidor de banco de dados<br>");
                
                $this->banco = @mysqli_select_db($this->conexao, $this->banco) or die 
                        ("Não foi possivel conectar ao banco de dados 1<br>". mysqli_error($this->conexao));
            }
            
            function ExecutarSQL($sql){
                $this->query = @mysqli_query($this->conexao,$sql) or die ("Erro ao executar o comando SQL:$sql<br>".mysqli_error());
                return $this->query;
            }
            
            function Listar($query){
                $this->dados = @mysqli_fetch_array($query);
                return $this->dados;
            }
            
        }
        ?>
    </body>
</html>
