<?php
include "conexao.php";
session_start();

$login_usuario = $_SESSION["login_usuario"];	
		
$sql = mysql_query("select * from adm where login = '$login_usuario'");
while($linha = mysql_fetch_array($sql)){
	$senha = $linha['senha'];
}

$enviar_arquivo = $_POST['enviar_arquivo'];
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha1 = $_POST['senha1'];
$senha2 = $_POST['senha2'];
$senhalocal = $_POST['senhalocal'];

$sql2 = mysql_query("select * from admp where login = '$login'");
while($linha = mysql_fetch_array($sql2)){
	$login2 = $linha['login'];
}

if($enviar_arquivo == "sim"){

if(is_file($_FILES['arquivo']['tmp_name']) && $nome!="" && $login!="" && $senha1!="" && $senha2!="" && $senhalocal!=""){	

	if($login == $login2){
	
	echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL=novoadmin.php'>
				<script type=\"text/javascript\">
				alert(\"Login J� Existente! Por Favor Tente Outro.\");
				</script>";	
	
	}else{


	if($senha1 == $senha2){
		if( $senhalocal == $senha){

				$foto = $_FILES['arquivo']['name'];
	
	
	
	$foto = str_replace(" ", "_", $foto);
	
	$foto = str_replace("�", "a", $foto);
	$foto = str_replace("�", "a", $foto);
	$foto = str_replace("�", "a", $foto);
	$foto = str_replace("�", "a", $foto);
	$foto = str_replace("@", "a", $foto);
	$foto = str_replace("A", "a", $foto);
	$foto = str_replace("�", "a", $foto);
	$foto = str_replace("�", "a", $foto);
	$foto = str_replace("�", "a", $foto);
	$foto = str_replace("�", "a", $foto);
	
	$foto = str_replace("�", "e", $foto);
	$foto = str_replace("�", "e", $foto);
	$foto = str_replace("�", "e", $foto);
	$foto = str_replace("E", "e", $foto);
	$foto = str_replace("�", "e", $foto);
	$foto = str_replace("�", "e", $foto);
	$foto = str_replace("�", "e", $foto);
	$foto = str_replace("&", "e", $foto);
	
	$foto = str_replace("�", "i", $foto);
	$foto = str_replace("�", "i", $foto);
	$foto = str_replace("�", "i", $foto);
	$foto = str_replace("I", "i", $foto);
	$foto = str_replace("�", "i", $foto);
	$foto = str_replace("�", "i", $foto);
	$foto = str_replace("�", "i", $foto);
	
	$foto = str_replace("�", "o", $foto);
	$foto = str_replace("�", "o", $foto);
	$foto = str_replace("�", "o", $foto);
	$foto = str_replace("�", "o", $foto);
	$foto = str_replace("O", "o", $foto);
	$foto = str_replace("�", "o", $foto);
	$foto = str_replace("�", "o", $foto);
	$foto = str_replace("�", "o", $foto);
	$foto = str_replace("�", "o", $foto);
	
	$foto = str_replace("�", "u", $foto);
	$foto = str_replace("�", "u", $foto);
	$foto = str_replace("�", "u", $foto);
	$foto = str_replace("U", "u", $foto);
	$foto = str_replace("�", "u", $foto);
	$foto = str_replace("�", "u", $foto);
	$foto = str_replace("�", "u", $foto);
	
	$foto = str_replace("B", "b", $foto);
	$foto = str_replace("C", "c", $foto);
	$foto = str_replace("�", "c", $foto);
	$foto = str_replace("�", "c", $foto);
	$foto = str_replace("D", "d", $foto);
	$foto = str_replace("F", "f", $foto);
	$foto = str_replace("G", "g", $foto);
	$foto = str_replace("H", "h", $foto);
	$foto = str_replace("J", "j", $foto);
	$foto = str_replace("K", "k", $foto);
	$foto = str_replace("L", "l", $foto);
	$foto = str_replace("M", "m", $foto);
	$foto = str_replace("N", "n", $foto);
	$foto = str_replace("�", "n", $foto);
	$foto = str_replace("�", "n", $foto);
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
		<META HTTP-EQUIV=REFRESH CONTENT='O; URL=novoadmin.php'>
		<script type=\"text/javascript\">
		alert(\"Formato Inv�lido!\");
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
					<META HTTP-EQUIV=REFRESH CONTENT='O; URL=novoadmin.php'>
					<script type=\"text/javascript\">
					alert(\"Erro ao enviar o arquivo!\");
					</script>
					";
					
					
					}
			
			}
				
				$sql = mysql_query("insert into admp (nome, foto, login, senha) values ('$nome', '$foto', '$login', '$senha1')");
					
					
					echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL=novoadmin.php'>
				<script type=\"text/javascript\">
				alert(\"Novo Administrador Padr�o cadastrado Com Sucesso!\");
				</script>";
					
					
			
			}else{
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL=novoadmin.php'>
				<script type=\"text/javascript\">
				alert(\"A sua senhas n�o correspondem! Tente novamente!\");
				</script>";
			}
			
								
				}else{
					
					echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL=novoadmin.php'>
				<script type=\"text/javascript\">
				alert(\"As senhas n�o correspondem! Tente novamente!\");
				</script>";	
					
				}
	}
	}else{
			echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=novoadmin.php'>
	<script type=\"text/javascript\">
	alert(\"Houve um problema ao tentar enviar seus dados!Por favor preencha todos os campos e tente novamente!(O Campo De Imagem N�o � Obrigat�rio)\");
	</script>";	
			
			
		}
		
}else{
		
		
if($enviar_arquivo == "nao"  && $nome!="" && $login!="" && $senha1!="" && $senha2!="" && $senhalocal!=""){	

if($login == $login2){
	
	echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL=novoadmin.php'>
				<script type=\"text/javascript\">
				alert(\"Login J� Existente! Por Favor Tente Outro.\");
				</script>";	
	
	}else{


	if($senha1 == $senha2){
		if( $senhalocal == $senha){
				
				$sql = mysql_query("insert into admp (nome, foto, login, senha) values ('$nome', '$foto', '$login', '$senha1')");
					
					echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL=novoadmin.php'>
				<script type=\"text/javascript\">
				alert(\"Novo Administrador Padr�o cadastrado Com Sucesso!\");
				</script>";
			
			}else{
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL=novoadmin.php'>
				<script type=\"text/javascript\">
				alert(\"A sua senhas n�o correspondem! Tente novamente!\");
				</script>";
			}
								
				}else{
					
					echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL=novoadmin.php'>
				<script type=\"text/javascript\">
				alert(\"As senhas n�o correspondem! Tente novamente!\");
				</script>";	
					
				}
	}
	}else{
			echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=novoadmin.php'>
	<script type=\"text/javascript\">
	alert(\"Houve um problema ao tentar enviar seus dados!Por favor preencha todos os campos e tente novamente!(O Campo De Imagem N�o � Obrigat�rio)\");
	</script>";	
			
			
		}
}
?>