<?php
include "conexao.php";

session_start();

$login_usuario = $_SESSION["login_usuario"];	
		
$sql = mysql_query("select * from adm where login = '$login_usuario'");
while($linha = mysql_fetch_array($sql)){
	$senhal = $linha['senha'];
}



$nome = $_POST['nome'];
$senha = $_POST['senha'];
$senhalocal = $_POST['senhalocal'];


//*************************************************************************
if($_GET['funcao'] == "editar"){
	
if($senha !="" && $nome !="" && $senhalocal !=""){
	
	if( $senhalocal == $senhal){		
		$id = $_GET['id'];
	$sql_resp = mysql_query("UPDATE admp SET  nome='$nome', senha='$senha' WHERE id= '$id'");
	echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL= excluirconta.php'>
				<script type=\"text/javascript\">
				alert(\"Administrador Padrão Editado com Sucesso!\");
				</script>";
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL= excluirconta.php'>
				<script type=\"text/javascript\">
				alert(\"A sua senhas não corresponde! Tente novamente!\");
				</script>";
			}	
	
	}else{
		
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL= excluirconta.php'>
				<script type=\"text/javascript\">
				alert(\"Por Favor Verifique Se Você Preencheu Todos Os Campos e  Tente novamente!\");
				</script>";
		}
}
	
//*************************************************************************

	
if($_GET['funcao'] == "excluir"){
	
	if( $senhalocal == $senhal){
		$id = $_GET['id'];
			$sql = mysql_query("DELETE FROM admp WHERE id = '$id'");
		
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL= excluirconta.php'>
				<script type=\"text/javascript\">
				alert(\"Administrador Excluido Com Sucesso!\");
				</script>";
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL= excluirconta.php'>
				<script type=\"text/javascript\">
				alert(\"A sua senhas não correspondem! Tente novamente!\");
				</script>";
			}
	
		}
?>