<?php

include 'classes/Manipular.php';
       
       $alterar = new Manipular();
       $alterar->setCodPesquisa("$_POST[codi]");
       $alterar->AlterarPessoa("tb_pessoas", "$_POST[nome]", "$_POST[email]");
