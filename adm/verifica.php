<?php
session_start();

include "conexao.php";

if(isset($_SESSION["login_usuario"]) AND isset($_SESSION["senha_usuario"])){
	$login_usuario = $_SESSION["login_usuario"];	
	$senha_usuario = $_SESSION["senha_usuario"];
	
	
$sql = mysql_query("select * from adm where login = '$login_usuario'");
$cont = mysql_num_rows($sql);
while($linha = mysql_fetch_array($sql)){
	$senha_db = $linha['senha'];
}
if($cont == 0){
	unset($_SESSION["login_usuario"]);
	unset($_SESSION["senha_login"]);
	
	echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=../admin.php'>
	<script type=\"text/javascript\">
	alert(\"O nome de usuário não corresponde.\");
	</script>";	
	//header ('Location: admin.php?cad="O nome de usuário não corresponde."');
}
if($senha_db != $senha_usuario){
		
	unset($_SESSION["login_usuario"]);
	unset($_SESSION["senha_login"]);
		
	echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=../admin.php'>
	<script type=\"text/javascript\">
	alert(\"A senha  não corresponde.\");
	</script>";
	//header ('Location: admin.php?cad="A senha  não corresponde."');

}	
	
}else{
	echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=../admin.php'>
	<script type=\"text/javascript\">
	alert(\"O Usuário e Senha  não corresponde.\");
	</script>";	
	//header ('Location: admin.php?cad="O Usuário e Senha  não corresponde."');
}
?>