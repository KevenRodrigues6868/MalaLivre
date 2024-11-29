
<table border="1" align="center">
<tr><td bgcolor="grey">ID</td>
<td bgcolor="grey">Nome</td>
<td bgcolor="grey">Email</td></tr>
<?php

include 'ConexaoMysql.php';

$conect= new ConexaoMysql();

$query = $conect->ExecutarSQL("select * from tb_pessoas");

while ($lista= $conect->Listar($query)){
    echo "<tr>";
    echo "<td>".$lista['id_pessoa']."</td><td>".$lista['nome']."</td><td>".$lista['email']."</td    >";
    echo "</tr>";
}
?>
</table> <br>
<div align="center"><a href="form.php"><input type="button" value="Voltar"></a></div>