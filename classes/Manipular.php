
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Manipula
 *
 * @author 07056407102
 */
include_once 'ConexaoMysql.php';
class Manipular extends ConexaoMysql{
    protected $sql;
    protected $tabela;
    protected $dados;
    protected $campos;
    protected $CodPesquisa;
    
    public function setdados($dd) {
        $this->dados= $dd;
        
    }
    public function InserirPessoa($tabela) {
        $this->sql = "INSERT INTO $tabela VALUES($this->dados)";
        if(parent::ExecutarSQL($this->sql)){
            echo "<center> Registro gravado com sucesso <br> <a href='Listar.php'>Listar</a>";
        }
    }
    public function ExcluirPessoa($tabela) {
        $this->sql= "DELETE FROM $tabela WHERE id_pessoa= '$this->CodPesquisa'";
        if(parent::ExecutarSQL($this->sql)){
            echo "<center> Registro excluido com sucesso <br><br> <a href='Listar.php'>Listar</a>";
        }
        
    }
    public function setCodPesquisa($cod){
        $this->CodPesquisa= $cod;
    }
    public function AlterarPessoa($tabela, $nome, $email)
    {
        $this->sql= "UPDATE $tabela SET Nome= '$nome', email= '$email' WHERE id_pessoa = '$this->CodPesquisa'";
        if(self::ExecutarSQL($this->sql))
        {
            echo "<center>Registro Alterado com sucesso<br> <br> <a href='Listar.php'>Listar</a>";
        }
    }
}
