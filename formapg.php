<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <title>MalasLivre - Alugar</title>
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
                <div class="payment-option">
                    <input type="checkbox" id="pix" class="checkbox">
                    <label for="pix" class="checkbox-label">Pix</label>
                </div>
                <div class="payment-option">
                    <input type="checkbox" id="cartao-credito" class="checkbox">
                    <label for="cartao-credito" class="checkbox-label">Novo Cartão de Crédito</label>
                </div>
                <div class="payment-option">
                    <input type="checkbox" id="boleto" class="checkbox">
                    <label for="boleto" class="checkbox-label">Boleto</label>
                </div>
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
            </div>
        </div>
        <!-- Botão para continuar -->
       <a href="alugeulrealizado.php"><button class="continue-button">Continuar</button></a>
    </main>

        <!-- Outras opções -->
<div class="other-options">
    <h3>Outras opções do produto acima</h3>
    <div class="carousel">
        <div class="carousel-item">
            <img src="img/malas/mala1.webp" alt="Mala Azul Marinho">
            <p>Mala Média - R$ 200,00</p>
            <a href="mala.html"><button type="submit" class="login-button">Alugar</button></a>
        </div>
        <div class="carousel-item">
            <img src="img/malas/mala1.webp" alt="Mala Vermelha">
            <p>Mala Grande - R$ 300,00</p>
            <a href="mala.html"><button type="submit" class="login-button">Alugar</button></a>
        </div>
        <div class="carousel-item">
            <img src="img/malas/mala1.webp" alt="Mala Preta">
            <p>Mala Pequena - R$ 150,00</p>
            <a href="mala.html"><button type="submit" class="login-button">Alugar</button></a>
        </div>
        <div class="carousel-item">
            <img src="img/malas/mala1.webp" alt="Mala Preta">
            <p>Mala Pequena - R$ 150,00</p>
            <a href="mala.html"><button type="submit" class="login-button">Alugar</button></a>
        </div>
        <div class="carousel-item">
            <img src="img/malas/mala1.webp" alt="Mala Preta">
            <p>Mala Pequena - R$ 150,00</p>
            <a href="mala.html"><button type="submit" class="login-button">Alugar</button></a>
        </div>
    </div>
</div>
</body>
</html>
