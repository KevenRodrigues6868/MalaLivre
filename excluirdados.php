<?php

if(!empty($_POST['codigo'])){
    
    include 'manipula.php';
    
    $deletar = new Manipular();
    
    $deletar->setCodPesquisa("$_POST[codigo]");
    
    $deletar->ExcluirPessoa("tb_pessoas");
}
else{
    echo"Favor, preencha o codigo !";
}