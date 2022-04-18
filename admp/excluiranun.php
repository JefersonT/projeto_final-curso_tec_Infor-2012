<?php 
include "conexao.php";

session_start();

$login_usuario = $_SESSION["login_usuario"];	
		
$sql = mysql_query("select * from admp where login = '$login_usuario'");
while($linha = mysql_fetch_array($sql)){
	$senhal = $linha['senha'];
}

$senha = $_POST['senha'];

if($_GET['funcao'] == "excluir"){
	
	if( $senhal == $senha){
		$id = $_GET['id'];
			$sql = mysql_query("DELETE FROM anuncios WHERE id_a = '$id'");
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL= anuncios.php'>
				<script type=\"text/javascript\">
				alert(\"Anúncio Excluido Com Sucesso!\");
				</script>";
		
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL= anuncios.php'>
				<script type=\"text/javascript\">
				alert(\"A sua senhas não correspondem! Tente novamente!\");
				</script>";
			}
	
		}

?>