<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <title>MalasLivre</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Barra de navegação -->
    <nav class="navbar">
        <div class="logo">
            <a href="index.php" ><img src="img/logo.png" alt="Logo da Loja" class="logo-img"></a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Buscar produtos, marcas e muito mais ..." class="search-input">
            <button type="submit" class="search-button">
                <img src="img/lupa-icon.png" alt="Buscar" class="search-icon">
            </button>
        </div>
        <div class="nav-icons">
            <a href="login.php" class="icon-link">
                <img src="img/login.png" alt="Ícone de Login" class="icon">
            </a>
            <a href="carrinho.php" class="icon-link">
                <img src="img/carrinho.png" alt="Ícone de Carrinho" class="icon">
            </a>
        </div>
    </nav>

    <!-- Corpo principal -->
   
<?php

if(!empty($_POST['nome']) && !empty($_POST['email'])&& !empty($_POST['contato']) && !empty($_POST['ender']) && !empty($_POST['docum'])&& !empty($_POST['senha'])){
    
     $nome=$_POST['nome'];
     $email=$_POST['email'];
     $contato=$_POST['contato'];
     $ender=$_POST['ender'];
     $docum=$_POST['docum'];
     $senha=$_POST['senha'];
    
    
 include("conecta2.php");
 
 if($conn){
     //comandos com inserção no banco
     
     //seçeciona o banco de dados
     $db = mysqli_select_db($conn,"malalivre");
     
     $sql2="SELECT * FROM tb_cadastro WHERE docum='$docum'";
     
     $resultado= mysqli_query($conn, $sql2)or die ("<div class='login-container'> <img src='img/x.png'height='50' width='50'>não foi possivel executar o comando Sql <br><br><br> <a href='cadastrar.php'><button type='submit' value='concluir' class='login-button'>Voltar</button></a></div>");


     $verifica= mysqli_num_rows($resultado);
     
     if($verifica>0){
     echo"<div class='login-container'> <img src='img/x.png'height='20' width='20'>Esse CPF/CNPJ já esta cadastrado em nosso sistema <br><br><br> ";
     echo" <a href='cadastrar.php'><button type='submit' value='concluir' class='login-button'>Voltar</button></a></div>";
         
     }
     else{

     //comando sql para inserir na tabela
     $sql = "insert into tb_cadastro(id,nome,email,contato,ender,docum,senha) values('','$nome','$email','$contato','$ender','$docum','$senha')";
     
     //executa o comando sql, caso de algum erro na instrução sql ele mostra a msg de erro 
     mysqli_query($conn,$sql)or die("<img src='img/x.png'height='50' width='50'>não foi possivel executar o comando Sql");
     
     //se tudo tiver correto mosrtre a msg de sucesso 
     echo"<div class='login-container'> <img src='img/v.png'height='50' width='50'>informações foram inseridas com sucesso <br><br><br>";
     echo" <a href='cadastrar.php'><button type='submit' value='concluir' class='login-button'>Voltar</button></a></div>";
 }
 }
 else{
     echo"Não houve conexão com o banco";
 }}
else{
    echo"<font color='red'> Todos os campos devem ser preenchidos</font>";
}
?>
   
</body>
</html>


