<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <title>MalasLivre - Compra Realizada</title>
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
    <main class="main-content">
        <div class="content-wrapper">
            <!-- Lado esquerdo -->
            <div class="left-side">
                <img src="img/verified.png" alt="Compra Verificada" class="verified-img">
                <p class="success-message">Compra realizada com sucesso!</p>
            </div>

            <!-- Divisória vertical -->
            <div class="divider"></div>

            <!-- Lado direito -->
            <div class="right-side">
                <h3>Resumo</h3>
                <hr>
                <table class="summary-table">
                    <tr>
                        <td>Produto</td>
                        <td>R$ 100,00</td>
                    </tr>
                    <tr>
                        <td>Frete</td>
                        <td>R$ 20,00</td>
                    </tr>
                </table>
                <hr>
                <p class="total-amount">Valor Total: <strong>R$ 120,00</strong></p>
                <button class="download-button">Baixar Comprovante</button>
            </div>
        </div>
    </main>
</body>
</html>
