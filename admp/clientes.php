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
<title>Clientes</title>
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
	var dayarray=new Array("Domingo","Segunda-feira","Ter??a-feira","Quarta-feira","Quinta-feira","Sexta-feira","S??bado")
	var montharray=new Array(" de Janeiro de "," de Fevereiro de "," de Mar??o de ","de Abril de ","de Maio de ","de Junho de","de Julho de ","de Agosto de ","de Setembro de "," de Outubro de "," de Novembro de "," de Dezembro de ")
	document.write("   "+dayarray[day]+", "+daym+" "+montharray[month]+year+" ")
	document.write("</b></i></font>")
	</script> 
    </div>  
    <br />
    
    
	<div id="header">
		<div id="logo">
			<ha><a href="inicio.php">Clientes</a></ha>
		</div>
		<div id="slogan">
         	<h2>Seja Bem Vindo <b> <?php  echo $nome ?>
            <img src="../adm/fotos/<?php echo $foto ?>" width="100" height="100" align="absmiddle" /></b></h2>
			<p>&nbsp;</p>
		</div>
	</div>    
    	
	<div id="menu">
		<ul>
        <li><a href="inicio.php">In??cio</a></li>        	
			<li class="first">
				<span class="opener">Servi??os<b></b></span>
                <ul>
                	<li><a href="anuncios2.php">An??ncios</a></li>
					<li><a href="produtos.php">Produtos</a></li>
					<li><a href="promocoes1.php">Promo????es</a></li>
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
            
            <li><a href="Imagens.php">Im??gens</a></li>
            <li>
				<span class="opener">Conta<b></b></span>
				<ul>
					<li><a href="contaadm.php">P??gina principal</a></li>
                    <li><a href="anuncios.php">Configura????es de An??ncios</a></li>
                    <li><a href="cadastrarproduto.php">Cadastrar Novo Produto</a></li>
                    <li><a href="configuracaodepromocoes.php">Cadastrar Nova Promo??ao</a></li>
                    <li><a href="configuracaodeconta.php">Configura????es de Conta</a></li>
					<li><b><a href="logout.php" style="color:#009">Sair</a></b></li>
				</ul>
			</li>
		</ul>
		<br class="clearfix" />
	</div>
	<div id="page">
  <div id="content">
	  <div class="box">
		<h2>Clientes</h2>
				<p>Nesta p??gina voc?? reseber?? as informa????es necessaria para estar por dentro do que esta acontecendo no Mercadinho H&amp;C, como funciona o sistema de entrega dos produtos e outros.</p>
		<p>Alem de tirar suas d??vidas fazendo perguntas nas quais voc?? tem curiosidade.</p>
	  </div>
	  <form id="form1" method="post" action="perguntar.php?funcao=perguntar">
	    <table width="290" border="0" cellspacing="3">
			    <tr>
			      <th scope="row">Nome:</th>
			      <td><label for="nome"></label>
		          <input type="text" name="nome" id="nome" /></td>
		        </tr>
			    <tr>
			      <th scope="row">E-mail:</th>
			      <td><input type="text" name="email" id="email" /></td>
		        </tr>
			    <tr>
			      <th scope="row">Sua Pergunta(?):</th>
			      <td><label for="pergunta"></label>
		          <textarea name="pergunta" id="pergunta" cols="45" rows="5"></textarea></td>
		        </tr>
			    <tr>
			      <th scope="row">&nbsp;</th>
			      <td><input type="submit" name="perguntar" id="perguntar" value="Perguntar" /></td>
		        </tr>
        </table>
	    <p>&nbsp;</p>
      </form>
	  <form id="form1" method="post" action="">
      
      <div id="scroll">
	    <table width="662">
	      <tr align="center" bgcolor="#33FF99">
          	<td width="111" bgcolor="#66FF00"><strong>Nome:</strong></td>
	        <td width="139" bgcolor="#66FF00"><strong>E-Mail:</strong></td>
	        <td width="200" bgcolor="#66FF00"><strong>Perguntas:</strong></td>
	        <td width="192" bgcolor="#66FF00"><strong>Respostas:</strong></td>
          </tr>
	      <?php
  include("conexao.php");
  $sql_busca = "select * from duvidas ORDER BY id desc";
  $executa = mysql_query($sql_busca);
  while($linha = mysql_fetch_array($executa)){
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
          </tr>
	      <?php
  }
  ?>
	      <?php
echo $_GET['com'];
?>
        </table>
        </div>
	  </form>
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
	    <div class="box">
		  <h3>Morbi at varius</h3>
				<div class="date-list">
					<ul class="list date-list">
						<li class="first"><span class="date">2/08</span> <a href="#">Quam sed tempus</a></li>
						<li><span class="date">2/05</span> <a href="#">Lorem et vestibulum</a></li>
						<li><span class="date">2/01</span> <a href="#">Risus aenean tellus</a></li>
						<li class="last"><span class="date">1/31</span> <a href="#">Tristique et primis</a></li>
					</ul>
				</div>
		</div>
	  </div>
	  <br class="clearfix" />
	</div>
	<div id="page-bottom">
		<div id="page-bottom-content">
			<h3>Mais Informa????es:</h3>
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
<div id="footer"><em><strong>Aceitamos os               cart??es Visa, Master Card <br />
e o cart??o proprio Smart F??cil<br />
Org: Helio e               Cl??cia<br />
Tel: 88 - 3637 1244<br />
Reriutaba, Ce</strong></em></div>
</body>
</html>