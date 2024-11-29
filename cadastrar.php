<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <title>MalasLivre</title>
    <script language="javascript"> 
         function  mascara(src, mask)
            {
                var i = src.value.length;
                var saida = mask.substring(1,2);
                var texto = mask.substring(i);
                if (texto.substring(0,1) != saida)
                {
                    src.value +=texto.substring(0,1);
                }
            }
        </script>
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
   
        <!-- Formulário de Login -->
        <div class="login-container">
            <h1>Login</h1>
            <form action="recebe_user.php" method="Post">
                <input type="text" name="nome" placeholder="Usuário" class="login-input" required>
                <input type="text" name="email" placeholder="Email" class="login-input" required>
                <input type="text" name="contato" placeholder="Contato" class="login-input" required>
                <input type="text" name="ender" placeholder="Endereço" class="login-input" required>
                <input type="text" name="docum" maxlength="14" onkeyPress="mascara(this, '###.###.###-##')" placeholder="CPF/CPNJ" class="login-input" required>
                <input type="password" name="senha" placeholder="Senha" class="login-input" required>
                <button type="submit" value="concluir" class="login-button">Cadastrar</button>
            </form>
          
        </div>
   
</body>
</html>
