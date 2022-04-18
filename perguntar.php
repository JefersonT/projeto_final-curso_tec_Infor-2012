<?php
include "conexao.php";
$nome = $_POST['nome'];
$email = $_POST['email'];
$pergunta = $_POST['pergunta'];
$resposta = $_POST['resposta2'];

if($_GET['funcao'] == "perguntar"){
	if($nome == "" || $email=="" || $pergunta==""){
		
		echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=clientes.php'>
	<script type=\"text/javascript\">
	alert(\"Houve um problema ao tentar enviar sua pergunta!Por favor verifique se você preencheu todos os itens e tente novamente!\");
	</script>";
		
		}else{
			$sql = mysql_query("insert into duvidas (nome, email, pergunta) values ('$nome', '$email', '$pergunta')");
		echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=clientes.php'>
	<script type=\"text/javascript\">
	alert(\"Pergunta Realizada com Sucesso!\");
	</script>";
		
		}
	}

//*************************************************************************


if($_GET['funcao'] == "responder"){
	$id = $_GET['id'];
	$sql_resp = mysql_query("UPDATE duvidas SET  nome='$nome', email='$email', pergunta='$pergunta', resposta='$resposta' WHERE id= '$id'");
	header('Location: contaadm.php?cad="Pergunta Respondida com Sucesso!"');	
	}

?>