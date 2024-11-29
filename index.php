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
    <main class="main-content">
        <!-- Primeira linha de malas -->
        <div class="row">
            <div class="item">
                <img src="img/malas/01.jpg" alt="Mala 1" class="item-img">
                <hr>
                <p class="item-description">
                    <p class="item-description">Mala de Bordo 10 kg Abs 4 Rodas Turquia Preto <br>Codigo do Produto:01</p>
                   <a href="img/mala.php"> <button type="submit" class="login-button">Saber Mais...</button></a>
                </p>
            </div>
            <div class="item">
                <img src="img/malas/02.jpg" alt="Mala 2" class="item-img">
                <hr>
                <p class="item-description">Mala de Bordo ABS 4 Rodas Adventure Fortt Preto<br>Codigo do Produto:02</p>
                <a href="mala.php"> <button type="submit" class="login-button">Saber Mais...</button></a>
            </div>
            <div class="item">
                <img src="img/malas/03.jpg" alt="Mala 3" class="item-img">
                <hr>
                <p class="item-description">Mala de Bordo ABS Swiss Go Viena Para Viagem Cadea...<br>Codigo do Produto:03</p>
                <a href="mala.php"> <button type="submit" class="login-button">Saber Mais...</button></a>
            </div>
        </div>

        <!-- Segunda linha de malas -->
        <div class="row">
            <div class="item">
                <img src="img/malas/04.jpg" alt="Mala 1" class="item-img">
                <hr>
                <p class="item-description">
                    <p class="item-description">Mala Grande 32kg Rígida Rodas Giro 360° New York S<br>Codigo do Produto:04</p>
                   <a href="mala.php"> <button type="submit" class="login-button">Saber Mais...</button></a>
                </p>
            </div>
            <div class="item">
                <img src="img/malas/05.jpg" alt="Mala 2" class="item-img">
                <hr>
                <p class="item-description">Mala de Bordo ABS 4 Rodas Adventure Fortt Prata <br>Codigo do Produto:05</p>
                <a href="mala.php"> <button type="submit" class="login-button">Saber Mais...</button></a>
            </div>
            <div class="item">
                <img src="img/malas/06.jpg" alt="Mala 3" class="item-img">
                <hr>
                <p class="item-description">Mala Grande 32kg Rígida Rodas Giro 360° Geneva Pol.<br>Codigo do Produto:06</p>
                <a href="mala.php"> <button type="submit" class="login-button">Saber Mais...</button></a>
            </div>
        </div>

         <!--Terceira linha de malas -->
         <div class="row">
            <div class="item">
                <img src="img/malas/07.jpg" alt="Mala 1" class="item-img">
                <hr>
                <p class="item-description">
                    <p class="item-description">Mala De Viagem Masculina E Feminina P Normcore Bla<br>Codigo do Produto:07</p>
                   <a href="mala.php"> <button type="submit" class="login-button">Saber Mais...</button></a>
                </p>
            </div>
            <div class="item">
                <img src="img/malas/08.jpg" alt="Mala 2" class="item-img">
                <hr>
                <p class="item-description">Mala Bordo Branca 10kg Viagem Avião Rod360 Cadeado..<br>Codigo do Produto:08</p>
                <a href="mala.php"> <button type="submit" class="login-button">Saber Mais...</button></a>
            </div>
            <div class="item">
                <img src="img/malas/09.jpg" alt="Mala 3" class="item-img">
                <hr>
                <p class="item-description">Mala De Viagem De Bordo 360º De Mão 10kg Reforçada...<br>Codigo do Produto:09</p>
                <a href="mala.php"> <button type="submit" class="login-button">Saber Mais...</button></a>
            </div>
        </div>

        <!-- Link "Mostrar mais" -->
        <div class="show-more">
            <a href="#mais" class="show-more-link">Mostrar mais</a>
        </div>
    </main>
</body>
</html>
