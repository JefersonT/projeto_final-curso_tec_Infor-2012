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
<title>Produtos</title>
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
<font id="ur" size="+2" face="Trebuchet MS, Verdana, Arial, sans-serif" color="#CED305"></font>
</div>

<div id="script2">
<script language="JavaScript">

	document.write("<font color='#CED305' size='3' face='arial'>")
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
			<h1><a href="produtos.php">Produtos</a></h1>
		</div>
		<div id="slogan">
			<h2>"Aqui fica o slogan da empresa"</h2>
		</div>
	</div>
	<div id="menu">
		<ul>
        <li><a href="inicio.php">Início</a></li>        	
			<li class="first">
				<span class="opener">Serviços<b></b></span>
                <ul>
					<li><a href="anuncios.php">Anúncios</a></li>
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
					<li><a href="admin.php">Administração</a></li>
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
		</ul>
		<br class="clearfix" />
	</div>
	<div id="page">
  <p><font size="7">Produtos</font></p>
  <div id="content">
    <form id="form1" method="post" action="produtos.php?funcao=pesquisar">
      <label for="pesquisa"></label>
      <input name="pesquisa" type="text" id="pesquisa" size="50" />
      <input name="buscar" type="submit" id="buscar" value="Pesquisar" />
    </form>
    <p>&nbsp;</p>
    <div id="scroll2">
    <table width="666" cellspacing="3" bordercolordark="#000000" bgcolor="#0066FF">
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr>
      <th width="318" bgcolor="#33FF33" scope="col">IMAGEM</th>
      <th width="329" bgcolor="#33FF33" scope="col">INFORMAÇÕES</th>
    </tr>
    <?php
		  include("conexao.php");
if($_GET['funcao'] == "pesquisar"){	

	$produto1 = $_POST['pesquisa'];
	
	if( $produto1 != ""){
		
		$sql_resp = mysql_query("SELECT * FROM cadastrar_produto WHERE produto like '%$produto1%'");
	while($linha = mysql_fetch_array($sql_resp)){
		$n = $linha['id'];
		$foto = $linha['foto'];
		$produto = $linha['produto'];
		$marca = $linha['marca'];
		$preco = $linha['preco'];
		$peso = $linha['peso'];	
		
		?>
    <tr>
      <td rowspan="6"><img src="adm/fotos/<?php echo $foto ?>" width="320" height="176" align="texttop" /></td>
      <td>ID: <?php echo $n?></td>
    </tr>
    <tr>
      <td>PRODUTO: <?php echo $produto?></td>
    </tr>
    <tr>
      <td>MARCA :<?php echo $marca?></td>
    </tr>
    <tr>
      <td>PREÇO :<?php echo $preco?></td>
    </tr>
    <tr>
      <td>PESO ou VOLUME:<?php echo $peso?></td>
    </tr>
    <tr></tr>
    <tr>
      <th colspan="2" bgcolor="#FFFFFF" scope="col">&nbsp;</th>
    </tr>
    <?php
		
	}	
	
		
			
		}else{
			
			$sql_resp1 = mysql_query("SELECT * FROM cadastrar_produto ORDER BY id");
	while($linha1 = mysql_fetch_array($sql_resp1)){
		$n = $linha1['id'];
		$foto = $linha1['foto'];
		$produto = $linha1['produto'];
		$marca = $linha1['marca'];
		$preco = $linha1['preco'];
		$peso = $linha1['peso'];
		
		?>
    <tr>
      <td rowspan="6"><img src="adm/fotos/<?php echo $foto ?>" width="321" height="175" align="middle" /></td>
      <td>ID: <?php echo $n?></td>
    </tr>
    <tr>
      <td>PRODUTO: <?php echo $produto?></td>
    </tr>
    <tr>
      <td>MARCA: <?php echo $marca?></td>
    </tr>
    <tr>
      <td>PREÇO: <?php echo $preco?></td>
    </tr>
    <tr>
      <td>PESO ou VOLUME: <?php echo $peso?></td>
    </tr>
    <tr></tr>
    <tr>
      <th colspan="2" bgcolor="#FFFFFF" scope="col">&nbsp;</th>
    </tr>
    <?php
		
		
		
			
	}
			
			
			
			}
}
?>
    </table>
    </div>
    <p>&nbsp;</p>
    <p><br class="clearfix" />
    </p>
  </div>
  <p>&nbsp;</p>
  <div id="sidebar">
<div class="box">
		    <h3><a href="promocoes1.php">Promoções</a></h3>
				<div class="date-list">
					<ul class="list date-list">
					  <li class="first"><img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" />Promoção 1</li>
				    </ul>
				  <p>&nbsp;</p>
					<ul class="list date-list">
					  <li><span class="first"><img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" /></span>Promoção 2</li>
				  </ul>
				  <p>&nbsp;</p>
					<ul class="list date-list">
					  <li><span class="first"><img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" /></span>Promoção 3</li>
				  </ul>
				  <p>&nbsp;</p>
					<ul class="list date-list">
					  <li class="last"><span class="first"><img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" /></span>Promoção 4</li>
				  </ul>
					<p>&nbsp;</p>
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
e o cartão propio Smart Fácil<br />
Org: Helio e               Clêcia<br />
Tel: 88 - 3637 1244<br />
Reriutaba, Ce</strong></em></div>
</body>
</html>