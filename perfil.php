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

// Verifica se a conexão foi realizada com sucesso
if (!$conn) {
    die("<div class='login-container'> <img src='img/x.png' height='20' width='20'><p>Falha na conexão com o banco de dados: </p><a href='perfil.php'><button type='button' class='login-button'>Voltar</button></a></div>" . mysqli_connect_error());
}

// Seleciona o banco de dados após a conexão
mysqli_select_db($conn, "malalivre") or die("<div class='login-container'> <img src='img/x.png' height='20' width='20'><p>Não foi possível selecionar o banco de dados.</p><a href='perfil.php'><button type='button' class='login-button'>Voltar</button></a></div>");
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
            <a href="index.php"><img src="img/logo.png" alt="Logo da Loja" class="logo-img"></a>
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
            <h1>Alugar</h1>
            <h1>Selecione o código do produto:</h1>
            <form action="recebe_pesquisa.php" method="Post">
                <input type="text" name="id" placeholder="Código do Produto" class="login-input" required>
                <button type="submit" value="concluir" class="login-button">Buscar</button>
            </form>
        </div>

        <!-- Exibir aluguéis do usuário -->
        <div class="login-container">
            <h2>Meus Aluguéis</h2>
            <?php
            // Consulta SQL para buscar os aluguéis do usuário
            $sql = "SELECT a.id AS aluguel_id, p.nome_produto, a.data_aluguel, a.data_devolucao, a.valor, a.status
                    FROM tb_aluguel a
                    JOIN tb_produto4 p ON a.produto_id = p.id
                    WHERE a.user_id = '$user_id'
                    ORDER BY a.data_aluguel DESC";
            $resultado = mysqli_query($conn, $sql);

            // Verifica se o usuário tem aluguéis registrados
            if (mysqli_num_rows($resultado) > 0) {
                echo "<table class='rental-table'>
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th>Data de Aluguel</th>
                                <th>Data de Devolução</th>
                                <th>Status</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>";

                // Exibe os dados de cada aluguel
                while ($row = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>
                            <td>{$row['nome_produto']}</td>
                            <td>{$row['data_aluguel']}</td>
                            <td>{$row['data_devolucao']}</td>
                            <td>{$row['status']}</td>
                            <td><button onclick='imprimirComprovante({$row['aluguel_id']})'>Imprimir Comprovante</button></td>
                          </tr>";
                }

                echo "</tbody></table>";
            } else {
                echo "<div class='login-container'> <img src='img/x.png' height='20' width='20'><p>Você ainda não fez nenhum aluguel.</p><a href='login.php'><button type='button' class='login-button'>Voltar</button></a>";
            }
            ?>
        </div>
    </main>

    <!-- Script JavaScript para Imprimir Comprovante -->
    <script>
    function imprimirComprovante(idAluguel) {
        // Redireciona para a URL que vai gerar o PDF
        window.location.href = 'imprimirComprovante.php?id_aluguel=' + idAluguel;
    }
</script>

</body>
</html>
