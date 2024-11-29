
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(!empty($_POST['cod']))
        {
            include 'classes/Manipular.php';
            $con = new ConexaoMysql();
            $codi= $_POST['cod'];
            $sql = "SELECT * from tb_pessoas where id_pessoa = '$codi'";
            echo "ok";
//            $resultado = mysqli_query($con,$sql) or die(mysqli_error($con));
//            
           $resultado = mysqli_query($con->conexao,$sql) or die(mysqli_error($con->conexao));
            
//            $resultado = mysqli_query($con->conectar(),$sql) or die(mysqli_error($con->conectar()));
            
            while ($conteudo = mysqli_fetch_array($resultado))
            {
                $cod = $conteudo[0];
                $nome = $conteudo[1];
                $email = $conteudo[2];         
        echo "ok2";
        ?>
        <form action="AlterarDados2.php" method="Post">
            <table align="center" border="1">
                <tr>
                    <td align="center" colspan="2"> Formulario de Alteração do Cadastro de Pessoa</td>
                </tr>
                <tr>
                    <td align="right"> Codigo da Pessoa</td>
                    <td><input type="text" name="cod" value="<?php echo $cod; ?>" disabled="">
                        <input type="hidden" name="codi" value="<?php echo $cod; ?>">
                    </td>
                </tr>
                <tr>
                    <td align="right">Nome</td>
                    <td> <input type="text" name="nome" value="<?php echo $nome; ?>"></td>
                </tr> 
                <tr>
                    <td align="right">Email</td>
                    <td> <input type="text" name="email" value="<?php echo $email; ?>"> </td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><input type="submit" value="Alterar"></td>
                </tr>
                
            </table>
        </form>
        <?php
        }}
        else{
            echo"Entre com o codigo a ser inserido";
        
        }
            

 
    ?>
    </body>
</html>
