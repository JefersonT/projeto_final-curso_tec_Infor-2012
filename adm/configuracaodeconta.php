<?php
include("verifica.php");
include("conexao.php");
?>
<?php
session_start();

	$login_usuario = $_SESSION["login_usuario"];
	
		
$sql = mysql_query("select * from adm where login = '$login_usuario'");
while($linha = mysql_fetch_array($sql)){
	$id = $linha['id'];
	$foto = $linha['foto'];
	$nome = $linha['nome'];
	$login = $linha['login'];
	$senha = $linha['senha'];	
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
<title>Config_Conta</title>
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
#wrapper #page #content #form1 table {
	color: #000;
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

]
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
			<h2><a href="configuracaodeconta.php">Configuração da conta</a></h2>
		</div>
		<div id="slogan">
			<h2>Seja Bem Vindo <b> <?php  echo $nome ?>
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
		<h2>Configuração</h2>
				<p>É nesta página que você poderá alterar algumas informações de sua conta como, nome, login e senha.</p>
</div>

<table align="center" border="1" cellpadding="0" cellspacing="0" bordercolor="#111111" width="600" id="AutoNumber1" style=`border:Alpha(Opacity=90, FinishOpacity=0, Style=1, StartX=0, StartY=80, FinishX=0, FinishY=0); border-right-width:2px; border-bottom-width:2px; border-left-style:none; border-top-style:none;` >
	      <tr bgcolor="#CCCCCC">
	        <th colspan="3" bgcolor="#CCCCCC" scope="row">Configuções Gerais Da Conta</th>
            
          </tr>
        
	      <tr bgcolor="#CCCCCC">
	        <th width="131" bgcolor="#CCCCCC" scope="row">Nome:</th>
	        <td bgcolor="#FFFFFF"><?php  echo $nome ?></td>
	        <td bgcolor="#FFFFFF"><center><a href="configuracaodeconta.php?funcao=altnome&id=<?php echo $id ?>">Editar</a></center></td>
          </tr>
          
          <tr bgcolor="#CCCCCC">
	        <th bgcolor="#CCCCCC" scope="row">Imagem:</th>
	        <td bgcolor="#FFFFFF"><center><img src="fotos/<?php echo $foto ?>" width="200" height="200" align="absmiddle" /></center></td>
	        <td bgcolor="#FFFFFF"><center><a href="configuracaodeconta.php?funcao=alterarimagem&id=<?php echo $id ?>">Editar</a></center></td>
      </tr>
	     
<tr bgcolor="#CCCCCC">
	        <th bgcolor="#CCCCCC" scope="row">Senha:</th>
	        <td bgcolor="#FFFFFF">************</td>
	        <td bgcolor="#FFFFFF"><center><a href="configuracaodeconta.php?funcao=altsenha&id=<?php echo $id ?>">Editar</a></center></td>
      </tr>
        </table>
        		  <?php
echo $_GET['cad'];
?>
	    
	    <p>      
<?php
if($_GET['funcao'] == "altnome"){	

	$id2 = $_GET['id'];
	$sql_resp = mysql_query("SELECT * FROM adm WHERE id = '$id'");
	while($linha = mysql_fetch_array($sql_resp)){
		$nome2 = $linha['nome'];
	}
	
?>	  
      <form id="form1" method="post" action="altera.php?funcao=altnome&id=<?php echo $id2 ?>">
	    <table width="486" height="126" cellspacing="0" border="0">
			    <tr bgcolor="#FFFF66">
			      <th scope="row">Nome:</th>
			      <td><label for="nome"></label>
		          <input name="nome" type="text" id="nome" value="<?php echo $nome2 ?>" size="50" /></td>
		        </tr>
			    <tr bgcolor="#FFFF66">
			      <th scope="row">Digite Sua Senha:</th>
			      <td><label for="senhalocal"></label>
			        <input name="senhalocal" type="password" id="senhalocal" /></td>
	      </tr>
			    <tr bgcolor="#FFFF66">
			      <th scope="row">&nbsp;</th>
			      <td><input type="submit" name="salvar" id="salvar" value="Salvar" /></td>
	      </tr>
        </table>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
      </form>
<?php
}
?>


<?php
if($_GET['funcao'] == "altlogin"){	

	$id2 = $_GET['id'];
	$sql_resp = mysql_query("SELECT * FROM adm WHERE id = '$id'");
	while($linha = mysql_fetch_array($sql_resp)){
		$login2 = $linha['login'];
	}
	
?>
<?php
}
?>

<?php
if($_GET['funcao'] == "altsenha"){	

	$id2 = $_GET['id'];
	$sql_resp = mysql_query("SELECT * FROM adm WHERE id = '$id'");
	while($linha = mysql_fetch_array($sql_resp)){
		$senha2 = $linha['senha'];
	}
	
?>	  
      <form id="form1" method="post" action="altera.php?funcao=altsenha&id=<?php echo $id2 ?>">
	    <table width="374" height="113" cellspacing="0" border="0">
	      <tr bgcolor="#FFFF66">
	        <th width="178" scope="row">Digite A Senha Atual:</th>
	        <td width="186"><label for="senhalocal"></label>
	          <input name="senhalocal" type="password" id="senhalocal" /></td>
          </tr>
			    <tr bgcolor="#FFFF66">
			      <th scope="row">Nova Senha:</th>
			      <td><label for="nome"></label>
		          <input name="senha" type="password" id="senha" /></td>
		        </tr>
			    <tr bgcolor="#FFFF66">
			      <th scope="row">Confirme a Senha:</th>
			      <td><label for="nome2"></label>
			        <input name="senha2" type="password" id="senha2" /></td>
	      </tr>
			    <tr bgcolor="#FFFF66">
			      <th scope="row">&nbsp;</th>
			      <td><input type="submit" name="salvar" id="salvar" value="Salvar" /></td>
	      </tr>
        </table>
      </form>
<?php
}
?>

 <?php
if($_GET['funcao'] == "alterarimagem"){	

	$id2 = $_GET['id'];
	$sql_resp = mysql_query("SELECT * FROM adm WHERE id = '$id2'");
	while($linhas = mysql_fetch_array($sql_resp)){
		$foto = $linhas['foto'];
	}
	
?>
            <form id="form3" name="form3" method="post" action="alterarimagemdeperfil.php?funcao=alterarimagem&id=<?php echo $id2 ?>" enctype="multipart/form-data">

<table width="665" bgcolor="#CCCCCC" cellspacing="3">
        <tr bgcolor="#FF3300">
          <th colspan="2" scope="col"><strong>Editar</strong><strong> Imagem</strong></th>
          </tr>
        <tr>
          <th width="109" bgcolor="#CCCCCC" scope="row">
          IMAGEM:
            <p><center><img src="fotos/<?php echo $foto ?>" width="200" height="200" align="texttop" /></center></p></th>
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
          <th bgcolor="#CCCCCC" scope="row">Digite sua Senha:</th>
          <td>
            <label for="senha"></label>
            <input type="password" name="senha" id="senha" /></td>
        </tr>
        <tr>
          <th bgcolor="#CCCCCC" scope="row">&nbsp;</th>
          <td><input type="submit" name="button" id="button" value="Salvar" /></td>
        </tr>
</table>

      </form>
	
<?php
}
?>




<br />

</p>
			<p>&nbsp;</p>
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
e o cartão proprio Smart Fácil<br />
Org: Helio e               Clêcia<br />
Tel: 88 - 3637 1244<br />
Reriutaba, Ce</strong></em></div>
</body>
</html>