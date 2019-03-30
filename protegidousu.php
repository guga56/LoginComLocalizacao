<?php

$conexao = mysql_connect("localhost", "root", "coti");
mysql_select_db("projtophp", $conexao);


$nome = $_POST("nome");
$email = $_POST("email");
$rua   = $_POST("rua");
$cidade = $_POST("cidade");
$estado = $_POST("estado");
$tipo1 = $_POST("tipo1");
$numero1 = $_POST("numero1");
$tipo2 = $_POST("tipo2");
$numero2 = $_POST("numero2");

$insere = mysql_query("insert into login(usuario, senha) values('$usuario','$senha')");
$insere = mysql_query("insert into login(nome, email, id_cliente) values('$nome','$email','id_cliente')");
$insere = mysql_query("insert into login(rua, cidade, estado) values('$rua','$cidade','$estado','id_cliente')");
$insere = mysql_query("insert into login(tipo, numero) values('$tipo','$numero','id_cliente')");

echo = 'cliente cadastrado com sucesso.';

$sql = "select * from cliente c inner join endereco e on e.id_cliente = c.idcliente
inner join telefone t on t.id_cliente = c.idcliente";
$result = mysql_query($sql);
$linhas = mysql_num_rows($result);
?>
