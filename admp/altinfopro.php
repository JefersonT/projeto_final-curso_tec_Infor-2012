<?php 
include "conexao.php";

session_start();

$login_usuario = $_SESSION["login_usuario"];	
		
$sql = mysql_query("select * from admp where login = '$login_usuario'");
while($linha = mysql_fetch_array($sql)){
	$senhal = $linha['senha'];
}

	$produto  = $_POST['produto'];
	$marca = $_POST['marca'];
	$precoa = $_POST['precoa'];
	$precod = $_POST['precod'];
	$peso = $_POST['peso'];
	$senha = $_POST['senha'];
	
	
	
	if( $_GET['funcao'] == "alterarinfor" && $produto != "" && $marca != "" && $precoa !="" && $precod !="" && $senha !=""){
		
		if( $senha == $senhal){
			
			$id = $_GET['id'];
			$sql_resp = mysql_query("UPDATE cadastrar_promocao SET  produto='$produto', marca='$marca', precoa='$precoa', precod='$precod', peso='$peso' WHERE id='$id'");
			
			
			echo"
					<META HTTP-EQUIV=REFRESH CONTENT='O; URL=configuracaodepromocoes.php'>
					<script type=\"text/javascript\">
					alert(\"Informações Alteradas com Sucesso!\");
					</script>
					";
			
			}else{
				
				echo"
					<META HTTP-EQUIV=REFRESH CONTENT='O; URL=configuracaodepromocoes.php'>
					<script type=\"text/javascript\">
					alert(\"A Senha Não Corresponde!\");
					</script>
					";
				
				}
		
		
		}else{
			
			echo"
					<META HTTP-EQUIV=REFRESH CONTENT='O; URL=configuracaodepromocoes.php'>
					<script type=\"text/javascript\">
					alert(\"Erro ao alterar as informações! Por Favor, Verifique Se Você Preencheu Todos Os Campo (Exeto o peso, pois não é obrigatorio) E Tente Novamente.\");
					</script>
					";
			}



?>