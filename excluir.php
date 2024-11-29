<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="excluirdados.php" method="post">
            <table align="center" border="1">
                <tr>
                    <td colspan="2" bgcolor="grey">Excluir Registro do Sistema</td>
                </tr>
                <tr>
                    <td align="right">codigo</td><td><input type="text" name="codigo"/></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><button type="submit" name="sub" value="Excluir"/></td>
                    </tr>
                <tr>
                    <td colspan="2"><a href="Listar.php">listar</a></td>
                </tr>
            </table>
        </form>
    </body>
</html>
