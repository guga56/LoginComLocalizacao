<?php

$conxao = mysql_connect("localhost","root","coti")
mysq_select_db("projetophp", $conexao);

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
if(($usuario != "") && ($senha != "")) {
if(file_exists("bd/" . $usuario . "_" . $senha . ".txt")) {
$fp = fopen("bd/" . $usuario . "_" . $senha . ".txt", "r");
$nome = fgets($fp);
setCookie("senha", $senha);
setCookie("usuario", $usuario);
setCookie("nome", $nome);
if($insere)
{
$insere = mysql_query("insert into login(usuario, senha) values('$usuario','$senha')");
echo "Login efetuado com sucesso. ";
header('Localização: sistema_login/protegidousu.php');
}
else
{
    $insere = mysql_query("insert into login(usuario, senha, id_cliente) values('$usuario','$senha','id_cliente')");
    echo "Login efetuado com sucesso. ";
    header('Localização: sistema_login/protegidogerente.php');
}
else
{
     echo "Login incorretos.";
	 header('Localização: login.php');
}
}else {
echo "Erro, usuario ou senha incorretos.";
}
}
else {
echo "Erro, todos os campos devem ser digitados";
}
?>
