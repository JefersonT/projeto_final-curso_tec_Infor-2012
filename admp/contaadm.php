<?php
include("verifica.php");
include("conexao.php");
?>
<?php
session_start();

	$login_usuario = $_SESSION["login_usuario"];
	
		
$sql = mysql_query("select * from admp where login = '$login_usuario'");
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
<title>ADM</title>
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
<font id="ur" size="+2" face="Trebuchet MS, Verdana, Arial, sans-serif" color="#FF0000"></font>
</div>

<div id="script2">
<script language="JavaScript">

	document.write("<font color='#FF0000' size='3' face='arial'>")
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
			<h3><a href="admin.php">Página de Administração</a></h3>
		</div>
        <div id="slogan">
			<h2> Seja Bem Vindo <b> <?php  echo $nome ?>
            <img src="../adm/fotos/<?php echo $foto ?>" width="100" height="100" align="absmiddle" /></b></h2>
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
					<li><a href="clientes.php">Clientes</a></li>
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
                    <li><a href="configuracaodepromocoes.php">Cadastrar Nova Promoçao</a></li>
                    <li><a href="configuracaodeconta.php">Configurações de Conta</a></li>
					<li><b><a href="logout.php" style="color:#009">Sair</a></b></li>
					
				</ul>
			</li>
		</ul>
		<br class="clearfix" />
	</div>
	<div id="page">
  <div id="content">
	  <div class="box">
	    <h2>Página de administração</h2>
		  <p>É nesta página que será administrado a parte de comentario de todos os usuarios do site e tambem as encomendas realizadas pelos clientes via internet.		  </p>
		  <p>&nbsp;</p>
	  </div>
    <h2>Comentários</h2>
      

        <div id="scroll">
    <table width="664">
	      <tr align="center" bgcolor="#33FF99">
          	<td width="112" bgcolor="#66FF00"><strong>Nome</strong></td>
	        <td width="150" bgcolor="#66FF00"><strong>E-Mail</strong></td>
	        <td width="237" bgcolor="#66FF00"><strong>Comentario</strong></td>
	        <td width="145" bgcolor="#66FF00"><strong>Excluir</strong></td>
          </tr>
	      <?php
  include("conexao.php");
  $executa = mysql_query("select * from comentarios ORDER BY id desc");
  while($linha = mysql_fetch_array($executa)){
	  $id = $linha['id'];
	  $nome = $linha['nome'];
	  $email = $linha['email'];
	  $mensagem = $linha['mensagem'];	  
	  ?>
      
	      <tr bgcolor="#33FFFF">
          	<td><center><?php echo $nome ?></center></td>
	        <td><center><?php echo $email ?></center></td>
	        <td><center><?php echo $mensagem ?></center></td>
	        <td><center><a href="funcao.php?funcao=excluir&id=<?php echo $id ?>">Excluir</a></center></td>
          </tr>
	      <?php
  }
  ?>
	      <?php
echo $_GET['com'];
?>
        </table>
        </div>
	   <p>&nbsp;</p>
	  <h2>Perguntas dos Clientes </h2>
	  <div id="tabela">
	    <div id="tabela"></div>
	  </div>
      
      <div id="scroll">
	  <table width="665">
	    <tr align="center" bgcolor="#33FF99">
	      <td width="109" bgcolor="#66FF00"><strong>Nome</strong></td>
	      <td width="123" bgcolor="#66FF00"><strong>E-Mail</strong></td>
	      <td width="183" bgcolor="#66FF00"><strong>Pergunta</strong></td>
	      <td width="179" bgcolor="#66FF00"><strong>Respostas</strong></td>
          <td width="179" bgcolor="#66FF00"><strong>Responder</strong></td>
          <td width="179" bgcolor="#66FF00"><strong>Excluir</strong></td>
        </tr>
	    <?php
  include("conexao.php");
  $sql_busca = "select * from duvidas ORDER BY id desc";
  $id = $_GET['id'];
  $executa = mysql_query($sql_busca);
  while($linha = mysql_fetch_array($executa)){
	  $id = $linha['id'];
	  $nome = $linha['nome'];
	  $email = $linha['email'];
	  $pergunta = $linha['pergunta'];
	  $resposta = $linha['resposta'];	  
	  ?>
	    <tr bgcolor="#33FFFF">
	      <td><center><?php echo $nome ?></center></td>
	      <td><center><?php echo $email ?></center></td>
	      <td><center><?php echo $pergunta ?></center></td>
	      <td><center><?php echo $resposta ?></center></td>
          <td><center><a href="contaadm.php?funcao=responder&id=<?php echo $id ?>">Responder</a></center></td>
          <td><center><a href="funcao.php?funcao=excluir2&id=<?php echo $id ?>">Excluir</a></center></td>
        </tr>
	    <?php
  }
  ?>
	    <?php
echo $_GET['com'];
?>
      </table>
      </div>
      
      
<?php
if($_GET['funcao'] ==  "responder"){
	$id = $_GET['id'];
	$sql_resp = mysql_query("SELECT * FROM duvidas WHERE id = '$id'");
	while($linha = mysql_fetch_array($sql_resp)){
		$nome = $linha['nome'];
		$email = $linha['email'];
		$pergunta = $linha['pergunta'];
		$resposta = $linha['resposta'];
		
	}
?>	  
      <form id="form1" method="post" action="perguntar.php?funcao=responder&id=<?php echo $id ?>">
	    <table width="290" border="0" cellspacing="3">
			    <tr>
			      <th scope="row">Nome:</th>
			      <td><label for="nome"></label>
		          <input name="nome" type="text" id="nome" value="<?php echo $nome ?>" /></td>
		        </tr>
			    <tr>
			      <th scope="row">E-mail:</th>
			      <td><input name="email" type="text" id="email"  value="<?php echo $email ?>"/></td>
		        </tr>
			    <tr>
			      <th scope="row">Sua Pergunta(?):</th>
			      <td><label for="pergunta"></label>
		          <textarea name="pergunta" cols="45" rows="5" id="pergunta"><?php echo $pergunta ?></textarea></td>
		        </tr>
			    <tr>
			      <th scope="row">Resposta:</th>
			      <td><label for="resposta2"></label>
		          <textarea name="resposta2" id="resposta2" cols="45" rows="5"><?php echo $resposta ?></textarea></td>
		        </tr>
			    <tr>
			      <th scope="row">&nbsp;</th>
			      <td><input type="submit" name="perguntar" id="perguntar" value="Responder" /></td>
	      </tr>
        </table>
      </form>
<?php
}
?>

  </div>
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