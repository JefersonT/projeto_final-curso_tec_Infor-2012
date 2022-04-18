<?php
include "conexao.php";
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

if($_GET['funcao'] == "gravar"){
	if($nome == "" || $email=="" || $mensagem==""){
				
		echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=inicio.php'>
	<script type=\"text/javascript\">
	alert(\"Houve um problema ao tentar enviar seu comentario!Por favor verifique se você preencheu todos os itens e tente novamente!\");
	</script>";
		
		}else{
			$sql = mysql_query("insert into comentarios (nome, email, mensagem) values ('$nome', '$email', '$mensagem')");
		echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=inicio.php'>
	<script type=\"text/javascript\">
	alert(\"Comentado Com Sucesso!\");
	</script>";
		}
	}

//*************************************************************************
if($_GET['funcao'] == "excluir"){
	$id = $_GET['id'];
			$sql = mysql_query("DELETE FROM comentarios WHERE id = '$id'");
			
			echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=contaadm.php'>
	<script type=\"text/javascript\">
	alert(\"Comentario Excluido Com Sucesso!\");
	</script>";
		}
//***************************************************************************
if($_GET['funcao'] == "excluir2"){
	$id = $_GET['id'];
			$sql = mysql_query("DELETE FROM duvidas WHERE id = '$id'");
		echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=contaadm.php'>
	<script type=\"text/javascript\">
	alert(\"Pergunta Excluida Com Sucesso!\");
	</script>";
		}

$nome_ca = $_POST['nome2'];
$endereco_ca = $_POST['endereco'];
$cpf_ca = $_POST['cpf'];
$email_ca = $_POST['email'];
$telefone_ca = $_POST['telefone'];
$login_ca = $_POST['login'];
$senha_ca = $_POST['senha'];
$senha2_ca = $_POST['senha2'];

if($_GET['funcao'] == "cadastrar"){
	
	if($senha_ca == $senha2_ca){
		$sql = mysql_query("insert into cadastrados (nome, email, endereco, telefone, cpf, login, senha) values ('$nome_ca', '$email_ca', '$endereco_ca', '$telefone_ca', '$cpf_ca', '$login_ca', '$senha_ca')");
		$sql = mysql_query("CREATE TABLE $login_ca$senha_ca (mensagem longtext);");
	header('Location:cadastro.php?cad="Cadastrado Com Sucesso!"');
	}else{
		header('Location:cadastro.php?cad="As Senha não Correspondem!"');
		}
	
}
		
?>