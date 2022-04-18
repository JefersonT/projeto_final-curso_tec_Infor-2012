<?php
include("verifica.php");
include("conexao.php");
?>
<?php
session_start();

	$login_usuario = $_SESSION["login_usuario"];
	
		
$sql = mysql_query("select * from adm where login = '$login_usuario'");
while($linha = mysql_fetch_array($sql)){
	$nome = $linha['nome'];
	$foto = $linha['foto'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Big Business 2.0
Description: A two-column, fixed-width design with a bright color scheme.
Version    : 1.0
Released   : 20120624
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Cadastro_ADM</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.dropotron-1.0.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.1.js"></script>
<script type="text/javascript">
	$(function() {
		$('#menu > ul').dropotron({
			mode: 'fade',
			globalOffsetY: 11,
			offsetY: -15
		});
	});
</script>
<style type="text/css">
#wrapper #page #content #form1 table tr th {
	text-align: left;
}
</style>
<script type="text/javascript">
function UR_Start() 
{
	UR_Nu = new Date;
	UR_Indhold = showFilled(UR_Nu.getHours()) + ":" + showFilled(UR_Nu.getMinutes()) + ":" + showFilled(UR_Nu.getSeconds());
	document.getElementById("ur").innerHTML = UR_Indhold;
	setTimeout("UR_Start()",1000);
}
function showFilled(Value) 
{
	return (Value > 9) ? "" + Value : "0" + Value;
}

</script>
</head>
<body onload="UR_Start()">

<div id="wrapper">
<div id="script1">
<font id="ur" size="+2" face="Trebuchet MS, Verdana, Arial, sans-serif" color="#0000FF"></font>
</div>

<div id="script2">
<script language="JavaScript">

	document.write("<font color='#0000ff' size='3' face='arial'>")
	var mydate=new Date()
	var year=mydate.getYear()
	if (year<2000)
	year += (year < 1900) ? 1900 : 0
	var day=mydate.getDay()
	var month=mydate.getMonth()
	var daym=mydate.getDate()
	if (daym<10)
	daym="0"+daym
	var dayarray=new Array("Domingo","Segunda-feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira","Sábado")
	var montharray=new Array(" de Janeiro de "," de Fevereiro de "," de Março de ","de Abril de ","de Maio de ","de Junho de","de Julho de ","de Agosto de ","de Setembro de "," de Outubro de "," de Novembro de "," de Dezembro de ")
	document.write("   "+dayarray[day]+", "+daym+" "+montharray[month]+year+" ")
	document.write("</b></i></font>")
	</script> 
  </div>  
    <br />
    
	<div id="header">
		<div id="logo">
		  <h2><a href="novoadmin.php">Novo Administrador</a></h2>
		</div>
		 <div id="slogan">
         
         	<h2>Seja Bem Vindo <b>
         	  <?php  echo $nome ?>
       	    <img src="fotos/<?php echo $foto ?>" width="100" height="100" align="absmiddle" /></b></h2>
<p>&nbsp;</p>
	  </div>
	</div>    
    	
	<div id="menu">
		<ul>
        <li><a href="inicio.php">Início</a></li>        	
			<li class="first">
				<span class="opener">Serviços<b></b></span>
                <ul>
                	<li><a href="anuncios2.php">Anúncios</a></li>
					<li><a href="produtos.php">Produtos</a></li>
					<li><a href="promocoes1.php">Promoções</a></li>
                    <li>
						<span>Mais<b></b></span>
						<ul>
							 <li><a href="http://helioeclecia.blogspot.com.br/">Nosso Blogger</a></li>
							<li><a href="http://www.quiosqueeletronico.com.br/default.aspx?Codqsq=168">Rede SMART</a></li>
						</ul>
					</li>
                   
                    
				</ul>
			</li>
            <li>
				<span class="opener">Suporte<b></b></span>
				<ul>
					<li><a href="#">Clientes</a></li>
					<li><a href="#">Formas de Pagamento</a></li>
                    <li><a href="#">Ajuda</a></li>
					
				</ul>
			</li>
			<li class="last">
				<span class="opener">Veja outros sites<b></b></span>
                <ul>
					<li><a href="https://www.google.com.br">Google</a></li>
					<li><a href="http://www.youtube.com">You Tuber</a></li>
					<li><a href="http://g1.globo.com">G1</a></li>    
                    <li><a href="http://www.jogai.com/top">Jogos</a></li>                
				</ul>
			</li>
            
            <li><a href="Imagens.php">Imágens</a></li>
            <li>
				<span class="opener">Conta<b></b></span>
				<ul>
					<li><a href="contaadm.php">Página principal</a></li>
                    <li><a href="anuncios.php">Configurações de Anúncios</a></li>
                    <li><a href="cadastrarproduto.php">Cadastrar Novo Produto</a></li>
                    <li><a href="configuracaodepromocoes.php">Cadastrar Nova Promoção</a></li>
                    <li><a href="configuracaodeconta.php">Configurações de Conta</a></li>
                     <li><a href="novoadmin.php">Cadastrar Novo Administrador</a></li>
                     <li><a href="excluirconta.php">Excluir e Editar Contas</a></li>
					<li><b><a href="logout.php" style="color:#009">Sair</a></b></li>					
				</ul>
			</li>
		</ul>
		<br class="clearfix" />
	</div>
	<div id="page">
  <div id="content">
	  <div class="box">
		<h2>Cadastre Um Novo Administrador</h2>
		<p>Nesta página você pode realizar o cadastro de novos administradores para que possa  entrar na administração.</p>
		<p>&nbsp;</p>
	  </div>
	  <p>Cadastrar Novo Administrador Padrão:	  </p>
	  <form id="form1" name="form1" method="post" action="cadastraradm.php" enctype="multipart/form-data">
	    <table width="613" height="228" cellspacing="0">
	      <tr bgcolor="#CCCCCC">
	        <th scope="row">Adicionar Imagem:</th>
	        <td><input type="radio" name="enviar_arquivo" onclick="document.form1.arquivo.disabled=false" id="enviar_arquivo" value="sim" />
              <strong>SIM</strong> ou
              <input type="radio" name="enviar_arquivo" onclick="document.form1.arquivo.disabled=true" id="enviar_arquivo" value="nao" checked="checked" />
<strong>NÃO</strong></td>
          </tr>
	      <tr bgcolor="#CCCCCC">
	        <th scope="row">Imagem de Perfil:</th>
	        <td><label for="nome4"></label>
	          <input name="arquivo" type="file" id="arquivo" size="50" disabled="disabled" /></td>
          </tr>
	      <tr bgcolor="#CCCCCC">
	        <th width="195" scope="row">Nome Completo:</th>
	        <td width="403"><label for="nome2"></label>
	          <input name="nome" type="text" id="nome" size="60" /></td>
          </tr>
	      <tr bgcolor="#CCCCCC">
	        <th scope="row">Nome de Login:</th>
	        <td><label for="login"></label>
            <input name="login" type="text" id="login" size="40" /></td>
          </tr>
	      <tr bgcolor="#CCCCCC">
	        <th scope="row">Senha:</th>
	        <td><label for="senha"></label>
	          <input name="senha1" type="password" id="senha1" size="30" /></td>
          </tr>
	      <tr bgcolor="#CCCCCC">
	        <th scope="row">Confirme a senha:</th>
	        <td><label for="senha2"></label>
            <input name="senha2" type="password" id="senha2" size="30" /></td>
          </tr>
	      <tr bgcolor="#CCCCCC">
	        <th scope="row">Digite sua senha:</th>
	        <td><label for="senhalocal"></label>
            <input name="senhalocal" type="password" id="senhalocal" size="30" /></td>
          </tr>
	      <tr bgcolor="#CCCCCC">
	        <th scope="row">&nbsp;</th>
	        <td><input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar" /></td>
          </tr>
        </table>
	  </form>
</div>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <div id="sidebar">
      <div class="box">
			<h3>Entre em Seu:</h3>
				<ul class="list">
					<li class="first"><a href="http://www.facebook.com/"><img src="images/facebook.jpeg" alt="" width="162" height="53" /></a></li>
					<li><a href="http://twitter.com/"><img src="images/twitter.jpeg" alt="" width="164" height="55" /></a></li>
					<li><a href="http://www.hotmail.com/"><img src="images/hotmail.jpeg" alt="" width="163" height="58" /></a></li>
					<li><a href="https://accounts.google.com/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/mail/?tab%3DTm&scc=1&ltmpl=default&ltmplcache=2"><img src="images/gmail.jpeg" alt="" width="167" height="53" /></a></li>
					<li class="last"><a href="http://br.linkedin.com/"><img src="images/linkedin.jpeg" alt="" width="167" height="54" /></a></li>
                    <li class="last"><a href="https://login.yahoo.com/config/mail?&.src=ym&.intl=br"><img src="images/yahoo.jpeg" alt="" width="167" height="60" /></a></li>
				</ul>
		</div>
	  </div>
	  <br class="clearfix" />
	</div>
	<div id="page-bottom">
		<div id="page-bottom-content">
			<h3>Mais Informações:</h3>
			<p>&nbsp;</p>
		</div>
		<div id="page-bottom-sidebar">
			<h3>Sed interdum</h3>
			<ul class="list">
				<li class="first"><a href="#">Suspendisse ultricies</a></li>
				<li><a href="#">Tortor mollis enim</a></li>
				<li class="last"><a href="#">Lorem enim tempor</a></li>
			</ul>
		</div>
		<br class="clearfix" />
	</div>
</div>
<div id="footer"><em><strong>Aceitamos os               cartões Visa, Master Card <br />
e o cartão propio Smart Fácil<br />
Org: Helio e               Clêcia<br />
Tel: 88 - 3637 1244<br />
Reriutaba, Ce</strong></em></div>
</body>
</html>