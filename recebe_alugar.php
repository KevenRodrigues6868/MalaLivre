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
            <a href="fechar_sessao.php"><img src="img/logo.png" alt="Logo da Loja" class="logo-img"></a>
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
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['id']; // ID do usuário logado

// Verifica se o ID do produto foi passado
if (isset($_POST['produto_id']) && isset($_POST['user_id'])) {
    $produto_id = $_POST['produto_id'];  // Recupera o ID do produto
    $user_id = $_POST['user_id'];        // Recupera o ID do usuário

    // Verifica se a conexão foi realizada com sucesso
    if (!$conn) {
        die("<div class='login-container'> <img src='img/x.png' height='20' width='20'><p>Falha na conexão com o banco de dados: </p><a href='perfil.php'><button type='button' class='login-button'>Voltar</button></a></div>" . mysqli_connect_error());
    }

    // Seleciona o banco de dados após a conexão
    mysqli_select_db($conn, "malalivre") or die("<div class='login-container'> <img src='img/x.png' height='20' width='20'><p>Não foi possível selecionar o banco de dados.</p><a href='perfil.php'><button type='button' class='login-button'>Voltar</button></a></div>");

    // Comando SQL para buscar o produto específico
    $sql = "SELECT * FROM tb_produto4 WHERE id = '$produto_id'";

    $resultado = mysqli_query($conn, $sql) or die("<div class='login-container'> <img src='img/x.png' height='20' width='20'><p>Não foi possível executar o comando SQL</p><a href='perfil.php'><button type='button' class='login-button'>Voltar</button></a></div>");

    // Verifica se o produto foi encontrado
    if (mysqli_num_rows($resultado) > 0) {
        $produto = mysqli_fetch_assoc($resultado);
        $nome_produto = $produto['nome_produto'];
        $valor = $produto['valor'];

        // Insere os dados do aluguel na tabela tb_aluguel
        $data_aluguel = date('Y-m-d H:i:s'); // Data e hora atuais
        $status = 'em andamento';            // Status inicial do aluguel

        // Calculando a data de devolução (5 dias após o aluguel)
        $data_devolucao = date('Y-m-d H:i:s', strtotime('+5 days', strtotime($data_aluguel)));

        // Comando SQL para inserir o aluguel
        $sql_insert = "INSERT INTO tb_aluguel (produto_id, user_id, data_aluguel, data_devolucao, valor, status)
                       VALUES ('$produto_id', '$user_id', '$data_aluguel', '$data_devolucao', '$valor', '$status')";

        if (mysqli_query($conn, $sql_insert)) {
            // Mensagem de sucesso e redirecionamento para o perfil
            echo "<div class='login-container'> 
                    <img src='img/v.png' height='20' width='20'>
                    <p>Aluguel realizado com sucesso!</p>
                    <a href='perfil.php'><button type='button' class='login-button'>Voltar</button></a>
                  </div>";
        } else {
            // Mensagem de erro caso falhe ao inserir o aluguel
            echo "<div class='login-container'> 
                    <img src='img/x.png' height='20' width='20'>
                    <p>Erro ao registrar o aluguel: " . mysqli_error($conn) . "</p>
                    <a href='perfil.php'><button type='button' class='login-button'>Voltar</button></a>
                  </div>";
        }
    } else {
        // Caso o produto não seja encontrado
        echo "<div class='login-container'> 
                <img src='img/x.png' height='20' width='20'>
                <p>Produto não encontrado.</p>
                <a href='perfil.php'><button type='button' class='login-button'>Voltar</button></a>
              </div>";
    }
} else {
    // Caso os dados não sejam recebidos corretamente
    echo "<div class='login-container'> 
            <img src='img/x.png' height='20' width='20'>
            <p>Dados de aluguel não recebidos.</p>
            <a href='perfil.php'><button type='button' class='login-button'>Voltar</button></a>
          </div>";
}

mysqli_close($conn);  // Fecha a conexão com o banco de dados
?>



   
</body>
</html>

