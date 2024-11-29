<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="GravarDados.php"method="Post">
            
            <table align="center"border="1"width="400">
                <tr align="align" bgcolor="grey">
                    <td align="center"colspan="2">Formulario de Cadastro de Pessoa</td>
               
                </tr> 
                <tr>
                    <td align="right">Nome</td>   
                    <td> <input typr="text"name="nome"></td>
                </tr>
                <tr>
                    <td align="right">Email</td>
                    <td><input type="text"name="email"></td>
                </tr>
                <tr>
                    <td align="center"colspan="2">
                <input type="submit"name="sub"value="Gravar"></td>
                </tr>
                <tr><td align="center"colspan="2"> <a href="Listar.php">Listar</a></td>
            </tr>
                
            </table>
        </form>
        
        <br>
        
        <form action="Alterardados.php"method="Post">
            
            <table align="center"border="1"width="400">
                <tr align="align" bgcolor="grey">
                    <td align="center"colspan="2">Alterar Registro de Dados</td>
               
                </tr> 
                <tr>
                    <td align="right">Codigo de pessoa</td>   
                    <td> <input typr="text"name="cod"></td>
                </tr>
                
                <tr>
                    <td align="center"colspan="2">
                <input type="submit" name="sub" value="Pesquisar"></td>
                </tr>
                
                
            </table>
        </form>
        
        <br>
        
        <form action="excluirdados.php" method="post">
            <table align="center" border="1" width="400">
                <tr>
                    <td colspan="2" bgcolor="grey">Excluir Registro do Sistema</td>
                </tr>
                <tr>
                    <td align="right">codigo</td><td><input type="text" name="codigo"/></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><button type="submit" name="sub" value="Excluir"/>Excluir</td>
                    </tr>
                <tr>
                    <td colspan="2" align="center"><a href="Listar.php">Listar</a></td>
                </tr>
            </table>
        </form>
        
    </body>
</html>
