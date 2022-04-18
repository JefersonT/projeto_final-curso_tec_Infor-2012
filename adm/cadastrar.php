<?php 
include "conexao.php";

session_start();

$login_usuario = $_SESSION["login_usuario"];	
		
$sql = mysql_query("select * from adm where login = '$login_usuario'");
while($linha = mysql_fetch_array($sql)){
	$senhal = $linha['senha'];
}


$enviar_arquivo = $_POST['enviar_arquivo'];
$produto  = $_POST['produto'];
$marca = $_POST['marca'];
$preco = $_POST['preco'];
$peso = $_POST['peso'];
$senha = $_POST['senha'];

if($_GET['funcao'] == "cadastrar" && $enviar_arquivo == "sim" && is_file($_FILES['arquivo']['tmp_name']) && $produto != "" && $marca !="" && $preco !="" && $senha !=""){
	
	
	if( $senha == $senhal){
	
	$foto = $_FILES['arquivo']['name'];
	
	
	
	$foto = str_replace(" ", "_", $foto);
	
	$foto = str_replace("á", "a", $foto);
	$foto = str_replace("à", "a", $foto);
	$foto = str_replace("ã", "a", $foto);
	$foto = str_replace("â", "a", $foto);
	$foto = str_replace("@", "a", $foto);
	$foto = str_replace("A", "a", $foto);
	$foto = str_replace("Á", "a", $foto);
	$foto = str_replace("À", "a", $foto);
	$foto = str_replace("Ã", "a", $foto);
	$foto = str_replace("Â", "a", $foto);
	
	$foto = str_replace("é", "e", $foto);
	$foto = str_replace("è", "e", $foto);
	$foto = str_replace("ê", "e", $foto);
	$foto = str_replace("E", "e", $foto);
	$foto = str_replace("É", "e", $foto);
	$foto = str_replace("È", "e", $foto);
	$foto = str_replace("Ê", "e", $foto);
	$foto = str_replace("&", "e", $foto);
	
	$foto = str_replace("í", "i", $foto);
	$foto = str_replace("ì", "i", $foto);
	$foto = str_replace("î", "i", $foto);
	$foto = str_replace("I", "i", $foto);
	$foto = str_replace("Í", "i", $foto);
	$foto = str_replace("Ì", "i", $foto);
	$foto = str_replace("Î", "i", $foto);
	
	$foto = str_replace("ó", "o", $foto);
	$foto = str_replace("ò", "o", $foto);
	$foto = str_replace("õ", "o", $foto);
	$foto = str_replace("ô", "o", $foto);
	$foto = str_replace("O", "o", $foto);
	$foto = str_replace("Ó", "o", $foto);
	$foto = str_replace("Ò", "o", $foto);
	$foto = str_replace("Õ", "o", $foto);
	$foto = str_replace("Ô", "o", $foto);
	
	$foto = str_replace("ú", "u", $foto);
	$foto = str_replace("ù", "u", $foto);
	$foto = str_replace("û", "u", $foto);
	$foto = str_replace("U", "u", $foto);
	$foto = str_replace("Ú", "u", $foto);
	$foto = str_replace("Ù", "u", $foto);
	$foto = str_replace("Û", "u", $foto);
	
	$foto = str_replace("B", "b", $foto);
	$foto = str_replace("C", "c", $foto);
	$foto = str_replace("Ç", "c", $foto);
	$foto = str_replace("ç", "c", $foto);
	$foto = str_replace("D", "d", $foto);
	$foto = str_replace("F", "f", $foto);
	$foto = str_replace("G", "g", $foto);
	$foto = str_replace("H", "h", $foto);
	$foto = str_replace("J", "j", $foto);
	$foto = str_replace("K", "k", $foto);
	$foto = str_replace("L", "l", $foto);
	$foto = str_replace("M", "m", $foto);
	$foto = str_replace("N", "n", $foto);
	$foto = str_replace("Ñ", "n", $foto);
	$foto = str_replace("ñ", "n", $foto);
	$foto = str_replace("P", "p", $foto);
	$foto = str_replace("Q", "q", $foto);
	$foto = str_replace("R", "r", $foto);
	$foto = str_replace("S", "s", $foto);
	$foto = str_replace("T", "t", $foto);
	$foto = str_replace("V", "v", $foto);
	$foto = str_replace("W", "w", $foto);
	$foto = str_replace("X", "x", $foto);
	$foto = str_replace("Y", "y", $foto);
	$foto = str_replace("Z", "z", $foto);
	

	$foto = strtolower($foto);
	
	if(!eregi("^image\/(jpeg|png|gif|pjpeg|jpg)$", $_FILES['arquivo']['type'])){
		echo"
		<META HTTP-EQUIV=REFRESH CONTENT='O; URL=cadastrarproduto.php'>
		<script type=\"text/javascript\">
		alert(\"Formato Inválido!\");
		</script>
		";
		
		}else{
			
			if(file_exists("fotos/$foto")){
				$a = 1;
				while(file_exists("fotos/[$a]$foto")){
					$a++;
					}
					
					$foto = "[".$a."]".$foto;
				
				}
				
				if(!move_uploaded_file($_FILES['arquivo']['tmp_name'], "fotos/".$foto)){
					echo"
					<META HTTP-EQUIV=REFRESH CONTENT='O; URL=cadastrarproduto.php'>
					<script type=\"text/javascript\">
					alert(\"Erro ao enviar o arquivo!\");
					</script>
					";
					
					
					}
			
			}
			
			$sql = mysql_query("insert into cadastrar_produto (foto, produto, marca, preco, peso) values ('$foto', '$produto', '$marca', '$preco', '$peso')");
			echo"
					<META HTTP-EQUIV=REFRESH CONTENT='O; URL=cadastrarproduto.php'>
					<script type=\"text/javascript\">
					alert(\"Produto Cadastrado Com Sucesso!\");
					</script>
					";
			
			}else{
				
				echo"
					<META HTTP-EQUIV=REFRESH CONTENT='O; URL=cadastrarproduto.php'>
					<script type=\"text/javascript\">
					alert(\"A Senha Não Corresponde!\");
					</script>
					";
				
				}
	
		
}else{
	
	echo"
					<META HTTP-EQUIV=REFRESH CONTENT='O; URL=cadastrarproduto.php'>
					<script type=\"text/javascript\">
					alert(\Erro ao cadastrar produto! Por Favor, Verifique Se Você Preencheu Todos Os Campo (Exeto o peso, pois não é obrigatorio) E Tente Novamente.\");
					</script>
					";

	}
	

?>