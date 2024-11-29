<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <title>MalasLivre - Detalhes da Mala</title>
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
    <div class="product-container">
        <!-- Lado esquerdo: imagem -->
        <div class="product-image">
            <img src="img/malas/mala1.webp" alt="Mala de Bordo 20"">
        </div>

        <!-- Lado direito: informações -->
        <div class="product-details">
            <h3>Mala de Bordo 20" Travelux Lugano 10 kg Amarela</h3>
            <p>Disponibilidade: <span class="in-stock">Em estoque</span></p>
            <p><strong>por: R$ 240,00</strong></p>
            <a href="login.php"><button class="rent-button">Alugar</button></a>
            
            <!-- Tabela de informações -->
            <div class="product-info-table">
                <div class="info-column">
                    <p><strong>Marca:</strong> Travelux</p>
                    <p><strong>Cor:</strong> Amarelo</p>
                    <p><strong>Dimensões:</strong> 55 x 35 x 22</p>
                    <p><strong>SKU:</strong> PO21052AM-P</p>
                </div>
                <div class="info-column">
                    <p><strong>Modelo:</strong> Lugano</p>
                    <p><strong>Material:</strong> ABS - Rígida</p>
                    <p><strong>Garantia:</strong> 1 ano</p>
                    <p><strong>Peso (Kg):</strong> 2.4</p>
                </div>
            </div>
        </div>
    </div>
</main>


        <!-- Outras opções -->
<div class="other-options">
    <h3>Outras opções do produto acima</h3>
    <div class="carousel">
        <div class="carousel-item">
            <img src="img/malas/mala1.webp" alt="Mala Azul Marinho">
            <p>Mala Média - R$ 200,00</p>
            <a href="login.php"><button type="submit" class="login-button">Alugar</button></a>
        </div>
        <div class="carousel-item">
            <img src="img/malas/mala1.webp" alt="Mala Vermelha">
            <p>Mala Grande - R$ 300,00</p>
            <a href="login.php"><button type="submit" class="login-button">Alugar</button></a>
        </div>
        <div class="carousel-item">
            <img src="img/malas/mala1.webp" alt="Mala Preta">
            <p>Mala Pequena - R$ 150,00</p>
            <a href="login.php"><button type="submit" class="login-button">Alugar</button></a>
        </div>
        <div class="carousel-item">
            <img src="img/malas/mala1.webp" alt="Mala Preta">
            <p>Mala Pequena - R$ 150,00</p>
            <a href="login.php"><button type="submit" class="login-button">Alugar</button></a>
        </div>
        <div class="carousel-item">
            <img src="img/malas/mala1.webp" alt="Mala Preta">
            <p>Mala Pequena - R$ 150,00</p>
            <a href="login.php"><button type="submit" class="login-button">Alugar</button></a>
        </div>
    </div>
</div>

    </main>
</body>
</html>
