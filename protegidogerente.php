<?php

$nome = $_POST("nome");
$email = $_POST("email");
$rua   = $_POST("rua");
$cidade = $_POST("cidade");
$estado = $_POST("estado");
$tipo1 = $_POST("tipo1");
$numero1 = $_POST("numero1");
$tipo2 = $_POST("tipo2");
$numero2 = $_POST("numero2");

$sql = "select * from cliente c inner join endereco e on e.id_cliente = c.idcliente
inner join telefone t on t.id_cliente = c.idcliente";
$result = mysql_query($sql);
$linhas = mysql_num_rows($result);

?>
