<?php
include "verifica.php";
include "conexao.php";
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
<title>Cadastrar_Promoção</title>
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
.radio {
	color: #000;
}
.radio {
	color: #000;
}
#wrapper #page #content #form1 table tr th {
	text-align: left;
}
#wrapper #page #content #form3 table tr td label {
	text-align: center;
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
			<h3><a href="configuracaodepromocoes.php">Cadastrar Nova Promoção</a></h3>
		</div>
        <div id="slogan">
			<h2>Seja Bem Vindo <b> <?php  echo $nome ?>
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
                     <li><a href="configuracaodeconta.php">Configurações de Conta</a></li>
					<li><b><a href="logout.php" style="color:#009">Sair</a></b></li>
					
				</ul>
			</li>
		</ul>
		<br class="clearfix" />
	</div>
	<div id="page">
  <div id="content">
    <form id="form1" name="form1" method="post" action="cadpromocao.php?funcao=cadastrar" enctype="multipart/form-data">
      <h1>Cadastrar Nova Promoção</h1>
      <p>&nbsp; </p>
      <p>
        <?php
echo $_GET['cad'];
?>
    </p>
      <table width="665" cellspacing="3">
        <tr>
          <th colspan="2" scope="col"><input type="radio" name="enviar_arquivo" onclick="document.form1.arquivo.disabled=false" id="enviar_arquivo" value="sim" />
            <strong>SIM</strong>
                    <input type="radio" name="enviar_arquivo" onclick="document.form1.arquivo.disabled=true" id="enviar_arquivo" value="nao" checked="checked" />
            <strong>NÃO</strong></th>
          </tr>
        <tr>
          <th width="156" scope="row">IMAGEN:</th>
          <td width="494"><input name="arquivo" type="file" id="arquivo" size="50" disabled="disabled" /></td>
        </tr>
        <tr>
          <th scope="row">PRODUTO:</th>
          <td><label for="produto"></label>
            <input name="produto" type="text" id="produto" size="45" /></td>
        </tr>
        <tr>
          <th scope="row">MARCA:</th>
          <td><label for="marca"></label>
            <input name="marca" type="text" id="marca" size="40" /></td>
        </tr>
        <tr>
          <th scope="row">PREÇO ANTES:</th>
          <td><label for="preco"></label>
            R$
            <input type="text" name="precoa" id="precoa" /></td>
        </tr>
        <tr>
          <th scope="row">PREÇO DEPOIS:</th>
          <td><label for="preco"></label>
            R$
            <input type="text" name="precod" id="precod" /></td>
        </tr>
        <tr>
          <th scope="row">PESO:</th>
          <td><label for="peso"></label>            <input type="text" name="peso" id="peso" /></td>
        </tr>
        <tr>
          <th scope="row">Digite sua Senha:</th>
          <td><label for="peso"></label>
            <label for="senha"></label>
            <input type="password" name="senha" id="senha" /></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td><input type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
</table>
    </form>
      <p>&nbsp;</p>
      <p><font size="5" color="#000000">Editar e Excluir Promoções</font></p>
      <form id="form2" method="post" action="configuracaodepromocoes.php?funcao=pesquisar">
        <p>
          <label for="pesquisa"></label>
          <input name="pesquisa" type="text" id="pesquisa" size="50" />
          <input name="buscar" type="submit" id="buscar" value="Pesquisar" />
        </p>
      </form>
      
      <div id="scroll2">
      <table width="647"  bordercolordark="#000000" bgcolor="#0066FF" cellspacing="3">
        <tr>
          <th width="319" bgcolor="#33FF33" scope="col">IMAGEM</th>
          <th width="309" bgcolor="#33FF33" scope="col">INFORMAÇÕES</th>
        </tr>
         <?php

		  include("conexao.php");
if($_GET['funcao'] == "pesquisar"){	

	$produto1 = $_POST['pesquisa'];
	
	if( $produto1 != ""){
		
		$sql_resp = mysql_query("SELECT * FROM cadastrar_promocao WHERE produto like '%$produto1%'");
	while($linha = mysql_fetch_array($sql_resp)){
		$n = $linha['id'];
		$foto = $linha['foto'];
		$produto = $linha['produto'];
		$marca = $linha['marca'];
		$precoa = $linha['precoa'];
		$precod = $linha['precod'];
		$peso = $linha['peso'];	
		?>
        <tr>
          <td rowspan="8"><img src="../adm/fotos/<?php echo $foto ?>" width="320" height="176" align="texttop" /></td>
          <td>PRODUTO: <?php echo $produto?></td>
        </tr>
        <tr>
          <td>MARCA: <?php echo $marca?></td>
        </tr>
        <tr>
          <td>DE: R$ <?php echo $precoa?></td>
        </tr>
        <tr>
          <td>POR: R$ <?php echo $precod?></td>
        </tr>
        <tr>
          <td>PESO OU VOLUME: <?php echo $peso?></td>
        </tr>
        <tr bgcolor="#FFFF66">
          <td><center><a href="configuracaodepromocoes.php?funcao=alterarinfor&id=<?php echo $n ?>">Editar Informações</a></center></td>
        </tr>
        <tr>
          <td bgcolor="#FFFF66"><center><a href="configuracaodepromocoes.php?funcao=alterarimagem&id=<?php echo $n ?>">Editar Imagem</a></center></td>
        </tr>
        <tr>
          <td bgcolor="#FFFF66" scope="col"><center>
          <a href="configuracaodepromocoes.php?funcao=excluir&id=<?php echo $n ?>">Excluir Promoção</a>
          </center></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" colspan="2">&nbsp;</td>
        </tr>
        <?php
		
	}	
		
			
		}else{
			
			$sql_resp1 = mysql_query("SELECT * FROM cadastrar_promocao ORDER BY id");
	while($linha1 = mysql_fetch_array($sql_resp1)){
		$n = $linha1['id'];
		$foto = $linha1['foto'];
		$produto = $linha1['produto'];
		$marca = $linha1['marca'];
		$precoa = $linha1['precoa'];
		$precod = $linha1['precod'];
		$peso = $linha1['peso'];
		
		?>
        <tr>
          <td rowspan="8"><img src="../adm/fotos/<?php echo $foto ?>" width="320" height="176" align="texttop" /></td>
          <td>PRODUTO: <?php echo $produto?></td>
        </tr>
        <tr>
          <td>MARCA: <?php echo $marca?></td>
        </tr>
        <tr>
          <td>DE: R$ <?php echo $precoa?></td>
        </tr>
        <tr>
          <td>POR: R$ <?php echo $precod?></td>
        </tr>
        <tr>
          <td>PESO OU VOLUME: <?php echo $peso?></td>
        </tr>
        <tr>
          <td bgcolor="#FFFF66"><center><a href="configuracaodepromocoes.php?funcao=alterarinfor&id=<?php echo $n ?>">Editar Informações</a></center></td>
        </tr>
        <tr>
          <td bgcolor="#FFFF66">
          <center>
            <a href="configuracaodepromocoes.php?funcao=alterarimagem&id=<?php echo $n ?>">Editar Imagem</a>
          </center></td>
        </tr>
        <tr>
          <td  bgcolor="#FFFF66"scope="col"><center>
          <a href="configuracaodepromocoes.php?funcao=excluir&id=<?php echo $n ?>">Excluir Promoção</a>
          </center></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" colspan="2">&nbsp;</td>
        </tr>
        <?php
		
	}	
		
			
		}
}
?>
      </table>
      <p>&nbsp;</p>
</div>
      
      
            <?php
if($_GET['funcao'] == "alterarinfor"){	

	$id2 = $_GET['id'];
	$sql_resp = mysql_query("SELECT * FROM cadastrar_promocao WHERE id = '$id2'");
	while($linhas = mysql_fetch_array($sql_resp)){
		$produtos = $linhas['produto'];
		$marcas = $linhas['marca'];
		$precoa = $linhas['precoa'];
		$precod = $linhas['precod'];
		$pesos = $linhas['peso'];
	}
	
?>
      <form id="form3" method="post" action="altinfopro.php?funcao=alterarinfor&id=<?php echo $id2 ?>">

<table width="665" bgcolor="#CCCCCC" cellspacing="3">
        <tr bgcolor="#FF3300">
          <th colspan="2" scope="col"><strong>Editar</strong><strong> Informações</strong></th>
          </tr>
        <tr>
          <th width="109" scope="row">PRODUTO:</th>
          <td width="383"><label for="produto"></label>
            <input name="produto" type="text" id="produto" value="<?php echo $produtos ?>" size="45" /></td>
        </tr>
        <tr>
          <th scope="row">MARCA:</th>
          <td><label for="marca"></label>
            <input name="marca" type="text" id="marca" value="<?php echo $marcas ?>" size="40" /></td>
        </tr>
        <tr>
          <th scope="row">PREÇO ANTES:</th>
          <td><label for="preco"></label>
            R$
            <input name="precoa" type="text" id="precoa" value="<?php echo $precoa ?>" /></td>
        </tr>
        <tr>
          <th scope="row">PREÇO DEPOIS:</th>
          <td><label for="preco"></label>
            R$
            <input name="precod" type="text" id="precod" value="<?php echo $precod ?>" /></td>
        </tr>
        <tr>
          <th scope="row">PESO OU VOLUME:</th>
          <td><label for="peso"></label>            <input name="peso" type="text" id="peso" value="<?php echo $pesos ?>" /></td>
        </tr>
        <tr>
          <th scope="row">Digite sua Senha:</th>
          <td><label for="peso"></label>
            <label for="senha"></label>
            <input type="password" name="senha" id="senha" /></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td><input type="submit" name="button" id="button" value="Salvar" /></td>
        </tr>
</table>

      </form>
	
<?php
}
?>


 <?php
if($_GET['funcao'] == "alterarimagem"){	

	$id2 = $_GET['id'];
	$sql_resp = mysql_query("SELECT * FROM cadastrar_promocao WHERE id = '$id2'");
	while($linhas = mysql_fetch_array($sql_resp)){
		$foto = $linhas['foto'];
	}
	
?>
            <form id="form3" name="form3" method="post" action="altimapro.php?funcao=alterarimagem&id=<?php echo $id2 ?>" enctype="multipart/form-data">

<table width="665" bgcolor="#CCCCCC" cellspacing="3">
        <tr bgcolor="#FF3300">
          <th colspan="2" scope="col"><strong>Editar</strong><strong> Imagem</strong></th>
          </tr>
        <tr>
          <th width="109" scope="row">
          IMAGEM:
            <p><img src="../adm/fotos/<?php echo $foto ?>" width="290" height="176" align="texttop" /></p></th>
          <td width="383"><p>
            <input type="radio" name="enviar_arquivo" id="enviar_arquivo" onclick="document.form3.arquivo.disabled=false" value="sim" />
            <strong>SIM</strong> 
            <input type="radio" name="enviar_arquivo" id="enviar_arquivo" onclick="document.form3.arquivo.disabled=true" value="nao" checked="checked" />
            <strong>NÃO</strong>
          </p>
            <p>Escolha uma Nova Imagem
  <input name="arquivo" type="file" id="arquivo" size="48" disabled="disabled" />
            </p></td>
        </tr>
        <tr>
          <th scope="row">Digite sua Senha:</th>
          <td>
            <label for="senha"></label>
            <input type="password" name="senha" id="senha" /></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td><input type="submit" name="button" id="button" value="Salvar" /></td>
        </tr>
</table>

      </form>
	
<?php
}
?>

 <?php
if($_GET['funcao'] == "excluir"){	

	$id2 = $_GET['id'];
	$sql_resp = mysql_query("SELECT * FROM cadastrar_promocao WHERE id = '$id2'");
	while($linhas = mysql_fetch_array($sql_resp)){
		$fotos = $linhas['foto'];
		$produtos = $linhas['produto'];
		$marcas = $linhas['marca'];
		$precoas = $linhas['precoa'];
		$precods = $linhas['precod'];
		$pesos = $linhas['peso'];
	}
	
?>
      <form id="form3" method="post" action="excpro.php?funcao=excluir&id=<?php echo $id2 ?>">

<table width="665" cellspacing="3" bgcolor="#CCCCCC">
        <tr bgcolor="#FF0000">
          <th colspan="2" scope="col"><strong>Excluir Promoção</strong><strong></strong></th>
        </tr>
        <tr>
          <th rowspan="5" scope="row"><img src="../adm/fotos/<?php echo $fotos ?>" width="278" height="140" align="texttop" /></th>
          <td>PRODUTO: <?php echo $produtos?></td>
        </tr>
        <tr>
          <td>MARCA: <?php echo $marcas?></td>
        </tr>
        <tr>
          <td>PREÇO ANTES: R$ <?php echo $precoas?></td>
        </tr>
        <tr>
          <td>PREÇO DEPOIS: R$ <?php echo $precods?></td>
        </tr>
        <tr>
          <td>PESO OU VOLUME: <?php echo $pesos?></td>
        </tr>
        <tr>
          <th width="241" scope="row">Digite sua Senha:</th>
          <td width="409"><label for="peso"></label>
            <label for="senha"></label>
            <input type="password" name="senha" id="senha" /></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td><input type="submit" name="button" id="button" value="Excluir" /></td>
        </tr>
</table>

      </form>
	
<?php
}
?>

      
      <p><font color="#000000" size="5"></font></p>
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