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
include("conecta2.php");

if ($conn) {
    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (!empty($email) && !empty($senha)) {
        $db = mysqli_select_db($conn, "malalivre");

        // Usar consultas preparadas para segurança
        $sql = "SELECT id, nome, email FROM tb_cadastro WHERE email = ? AND senha = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'ss', $email, $senha);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);

            // Armazena dados importantes na sessão
            $_SESSION['id'] = $user['id'];
            $_SESSION['nome'] = $user['nome'];
            $_SESSION['email'] = $user['email'];

            header("Location: perfil.php");
        } else {
            echo "<div class='login-container'> 
                <img src='img/x.png' height='20' width='20'> Senha ou Login Inválido <br><br><br>
                <a href='login.php'><button type='button' class='login-button'>Voltar</button></a>
            </div>";
        }
    } else {
        echo "Login e senha são obrigatórios.";
    }
} else {
    echo "Não foi possível conectar ao banco de dados.";
}
?>

   
</body>
</html>
