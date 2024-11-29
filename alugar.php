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
        <!-- Confirmação do endereço -->
        <div class="confirmation-row">
            <input type="checkbox" id="confirm-endereco" class="checkbox">
            <label for="confirm-endereco" class="checkbox-label">Confirmar endereço</label>
            <button class="check-button">Verificar</button>
            <p class="info-text">Entrega no prazo de 1 a 2 dias úteis.</p>
        </div>

        <!-- Confirmação do frete -->
        <div class="confirmation-row">
            <input type="checkbox" id="confirm-frete" class="checkbox">
            <label for="confirm-frete" class="checkbox-label">Frete</label>
            <p class="frete-value">R$ 20,00</p>
        </div>

        <!-- Botão para continuar -->
        <a href="formapg.php"><button class="continue-button">Continuar</button></a>
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
