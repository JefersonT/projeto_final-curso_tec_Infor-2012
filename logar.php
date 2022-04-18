<?php

$login = $_POST['login'];
$senha = $_POST['senha'];


include "conexao.php";

$sql = mysql_query("select * from adm where login = '$login'");
$cont = mysql_num_rows($sql);
while($linha = mysql_fetch_array($sql)){
	$senha_db = $linha['senha'];
}
if($cont == 0){
	echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=admin.php'>
	<script type=\"text/javascript\">
	alert(\"O nome de usuário não corresponde.\");
	</script>";	
}else{
	if($senha_db != $senha){
	echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=admin.php'>
	<script type=\"text/javascript\">
	alert(\"A senha  não corresponde.\");
	</script>";

}else{
	session_start();
	$_SESSION['login_usuario'] = $login;
	$_SESSION['senha_usuario'] = $senha;
	
	header ('Location: adm/contaadm.php');
	}

}
mysql_close($con);
?>