<?php
include "conexao.php";

session_start();

$login_usuario = $_SESSION["login_usuario"];	
		
$sql = mysql_query("select * from adm where login = '$login_usuario'");
while($linha = mysql_fetch_array($sql)){
	$senhal = $linha['senha'];
}


$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$senha2 = $_POST['senha2'];
$senhalocal = $_POST['senhalocal'];

if($_GET['funcao'] == "altnome"){
	if($nome !="" && $senhalocal !=""){
		if( $senhalocal == $senhal){
			$id = $_GET['id'];
			$sql_resp = mysql_query("UPDATE adm SET  nome='$nome' WHERE id= '$id'");	
			
			echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=configuracaodeconta.php'>
	<script type=\"text/javascript\">
	alert(\"Nome Alterado com Sucesso!\");
	</script>";
			
			}else{
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL=configuracaodeconta.php'>
				<script type=\"text/javascript\">
				alert(\"A sua senhas não correspondem! Tente novamente!\");
				</script>";
				
				}
		
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL=configuracaodeconta.php'>
				<script type=\"text/javascript\">
				alert(\"Houve um erro ao tentar alter seu nome! Por Favor, Verifique Se Você Preencheu Todos Campos E  Tente novamente!\");
				</script>";
			
			}
	
	
	}
	
	if($_GET['funcao'] == "altlogin"){
	if($login !="" && $senhalocal !=""){
		if( $senhalocal == $senhal){
			$id = $_GET['id'];
			$sql_resp = mysql_query("UPDATE adm SET  login='$login' WHERE id= '$id'");
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL=configuracaodeconta.php'>
				<script type=\"text/javascript\">
				alert(\"O seu login foi alterada com sucesso! Por Favor, Entre Em Sua Conta Novamente.\");
				</script>";
			
			}else{
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL=configuracaodeconta.php'>
				<script type=\"text/javascript\">
				alert(\"A sua senhas não correspondem! Tente novamente!\");
				</script>";
				
				}
		
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL=configuracaodeconta.php'>
				<script type=\"text/javascript\">
				alert(\"Houve um erro ao tentar alter seu login! Por Favor, Verifique Se Você Preencheu Todos Campos E  Tente novamente!\");
				</script>";
			
			}
	
	
	}
	
	
		if($_GET['funcao'] == "altsenha"){
	if($senha !="" && $senhalocal !=""){
		if( $senhalocal == $senhal){
			
			if($senha == $senha2){				
				$id = $_GET['id'];
			$sql_resp = mysql_query("UPDATE adm SET  senha='$senha' WHERE id= '$id'");
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL=logout.php'>
				<script type=\"text/javascript\">
				alert(\"A senhas foi alterada com sucesso! Por Favor, Entre Em Sua Conta Novamente.\");
				</script>";
				}else{
					echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL=configuracaodeconta.php'>
				<script type=\"text/javascript\">
				alert(\"A duas senhas não correspondem! Por Favor,Tente Novamente.\");
				</script>";
					
					}
			
			
			}else{
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL=configuracaodeconta.php'>
				<script type=\"text/javascript\">
				alert(\"A senhas atual não correspondem! Tente novamente!\");
				</script>";
				
				}
		
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL=configuracaodeconta.php'>
				<script type=\"text/javascript\">
				alert(\"Houve um erro ao tentar alter seu senha! Por Favor, Verifique Se Você Preencheu Todos Campos E  Tente novamente!\");
				</script>";
			
			}
	
	
	}



?>