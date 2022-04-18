<?php 
include "conexao.php";

session_start();

$login_usuario = $_SESSION["login_usuario"];	
		
$sql = mysql_query("select * from admp where login = '$login_usuario'");
while($linha = mysql_fetch_array($sql)){
	$senhal = $linha['senha'];
}

	$anuncio = $_POST['anuncio'];
	$titulo  = $_POST['titulo'];
	$senha = $_POST['senha'];
//************************************************************************************

if( $_GET['funcao'] == "alteraranun" && $anuncio != "" && $senha !=""){
		
		if( $senha == $senhal){
			
			$id = $_GET['id'];
			$sql_resp = mysql_query("UPDATE anuncios SET  texto='$anuncio' WHERE id_a='$id'");
			
			
			echo"
					<META HTTP-EQUIV=REFRESH CONTENT='O; URL=anuncios.php'>
					<script type=\"text/javascript\">
					alert(\"Anúncio Alterado com Sucesso!\");
					</script>
					";
			
			}else{
				
				echo"
					<META HTTP-EQUIV=REFRESH CONTENT='O; URL=anuncios.php'>
					<script type=\"text/javascript\">
					alert(\"A Senha Não Corresponde!\");
					</script>
					";
				
				}
		
		
		}else{
			
			echo"
					<META HTTP-EQUIV=REFRESH CONTENT='O; URL=anuncios.php'>
					<script type=\"text/javascript\">
					alert(\"Erro ao Alterar o Anúncio! Por Favor, Verifique Se Você Preencheu Todos Os Campo E Tente Novamente.\");
					</script>
					";
			}


?>