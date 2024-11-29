<?php

if(!empty($_POST['nome'])&& !empty($_POST['email']))
{
    include 'Manipula.php';
    $cadastro1=new Manipular();
    $cadastro1->setdados("'NULL','$_POST[nome]','$_POST[email]'");
    $cadastro1->InserirPessoa("tb_pessoas");
}
 else {
    echo "Todos os campos são obrigatorios";
}

?>