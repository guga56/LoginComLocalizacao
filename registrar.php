<?php

try
{
$conexao = mysql_connect("localhost","root","coti");
mysql_select_db("projetophp", $conexao);

$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
if(($nome != "") && ($usuario != "") && ($senha != "")) {
if(file_exists("bd/$usuario.txt")) {
echo "Erro, o usuario ja existe";
}
else {
$fp = fopen("bd/$usuario.txt", "w");
$linhafp = fwrite($fp, " ");
fclose($fp);
$bd = fopen("bd/" . $usuario . "_" . $senha . ".txt", "w");
$linhabd = fwrite($bd, $nome);
mysql_query("insert into login(nome, usuario, senha) values('$nome','$usuario','$senha')");
echo "Usuario registrado com sucesso. <a href='index.php'>Voltar a pagina inicial</a>";
 header('Localização: sistema_login/login.php');
}
}
else {
echo "Erro, todos os campos devem ser digitados.";
}
}
catch($ee)
{
}
?>
