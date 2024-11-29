<?php
include("conecta2.php");
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

// Recupera os dados do usuário
$user_id = $_SESSION['id'];
$user_name = $_SESSION['nome'];
$user_email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <title>Perfil do Usuário - MalasLivre</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Barra de navegação -->
    <nav class="navbar">
        <div class="logo">
            <a href="fechar_sessao.php"><img src="img/logo.png" alt="Logo da Loja" class="logo-img"></a>
        </div>
        <div class="nav-icons">
            <a href="fechar_sessao.php" class="icon-link">
                <img src="img/sair.png" alt="Logout" class="icon">
            </a>
        </div>
    </nav>

    <!-- Corpo principal -->
    <main class="main-content">
        <div class="login-container">
            <h1>Bem-vindo, <?php echo htmlspecialchars($user_name); ?>!</h1>
            <p>Email: <?php echo htmlspecialchars($user_email); ?></p>
        </div>

        <!-- Buscar produto -->
        <div class="login-container">
            <h2>Alugar</h2>
            <h3>Selecione o código do produto:</h3>
            <form action="recebe_pesquisa.php" method="post">
                <input type="text" name="id" placeholder="Código do Produto" class="login-input" required>
                <button type="submit" value="concluir" class="login-button">Buscar</button>
            </form>
        </div>

        <?php
        // Verifica se o formulário foi enviado
        if (isset($_POST['id'])) {
            $produto_id = $_POST['id']; // Recupera o código do produto enviado pelo formulário

            // Verifica se o id é válido (por exemplo, numérico)
            if (is_numeric($produto_id)) {

                // Verifica se a conexão foi realizada com sucesso
                if (!$conn) {
                    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
                }

                // Seleciona o banco de dados após a conexão
                mysqli_select_db($conn, "malalivre") or die("<div class='login-container'> <img src='img/x.png' height='20' width='20'>Não foi possível selecionar o banco de dados.</p><a href='perfil.php'><button type='button' class='login-button'>Voltar</button></a></div>");

                // Comando SQL para buscar o produto específico
                $sql = "SELECT * FROM tb_produto4 WHERE id = '$produto_id'";

                $resultado = mysqli_query($conn, $sql) or die("<div class='login-container'> <img src='img/x.png' height='20' width='20'>Não foi possível executar o comando SQL</p><a href='perfil.php'><button type='button' class='login-button'>Voltar</button></a></div>");

                // Verifica se o produto foi encontrado
                if (mysqli_num_rows($resultado) > 0) {
                    echo "<h2>Produto encontrado:</h2>";
                    echo "<table class='product-table'>
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Produto</th>
                                    <th>Descrição</th>
                                    <th>Valor</th>
                                </tr>
                            </thead>
                            <tbody>";
                    while ($conteudo = mysqli_fetch_array($resultado)) {
                        $codigo = $conteudo[0];
                        $nome_produto = $conteudo[1];
                        $descr_produto = $conteudo[2];
                        $valor = $conteudo[3];

                        echo "<tr>
                                <td>$codigo</td>
                                <td>$nome_produto</td>
                                <td>$descr_produto</td>
                                <td>$valor</td>
                              </tr>";
                    }
                    echo "</tbody></table>";
                } else {
                    echo "<div class='login-container'> <img src='img/x.png' height='20' width='20'><p>Nenhum produto encontrado com o código informado.</p><a href='perfil.php'><button type='button' class='login-button'>Voltar</button></a></div>";
                }
            } else {
                echo "<div class='login-container'> <img src='img/x.png' height='20' width='20'><p>Código do produto inválido.</p><a href='perfil.php'><button type='button' class='login-button'>Voltar</button></a></div>";
            }
        } else {
            echo "<div class='login-container'> <img src='img/x.png' height='20' width='20'><p>Por favor, insira o código do produto.</p><a href='perfil.php'><button type='button' class='login-button'>Voltar</button></a></div>";
        }
        ?>
        <br>  <br>
      
            <form action="recebe_alugar.php" method="post">
    <input type="hidden" name="produto_id" value="<?php echo $codigo; ?>"> <!-- ID do produto -->
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">     <!-- ID do usuário -->
    <button type="submit" class="login-button">Alugar</button>
</form>
        
    </main>
</body>
</html>
