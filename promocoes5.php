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
<title>Promoções 5</title>
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
			<h0><a href="promocoes5.php">Promoções</a></h0>
		</div>
		<div id="slogan">
			<h2>Template design by Free CSS Templates</h2>
			<p>&nbsp;</p>
		</div>
	</div>
    	  
	<div id="menu">
		<ul>
        <li><a href="index.php">Início</a></li>        	
			<li class="first">
				<span class="opener">Serviços<b></b></span>
                <ul>
					<li><a href="anuncios.php">Anúncios</a></li>
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
  <div id="content">
			<div class="box">
				<h2>As Melhores Promoções e Ofertas para você.</h2>
				<p>Aqui  você verá todas as promoções que o mercadinha H&amp;C oferece aos seus clientes. As quais você não encontrará em nenhum outro lugar.</p>
				<p>Venha e desfrute de todas as promoçoes e descontos que você nunca viu.</p>
				<p>&nbsp;</p>
			</div>
			<table width="650" border="5" bgcolor="" bordercolor="#0000FF" cellspacing="10">
			  <tr>
			    <td><ul class="section-list">
			      <li class="first"><img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" /></li>
			      <li class="first"><span>Alo lado fica a imagen do produto,e aqui as informáções sobre oproduto como: </span>preço, tamanho, desconto etc...</li>
			      </ul></td>
			    <td><ul class="section-list">
			      <li class="first"><img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" /></li>
			      <li class="first"><span>Alo lado fica a imagen do produto,e aqui as informáções sobre oproduto como: </span>preço, tamanho, desconto etc...</li>
			      </ul></td>
			    <td><ul class="section-list">
			      <li class="first"><img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" /></li>
			      <li class="first"><span>Alo lado fica a imagen do produto,e aqui as informáções sobre oproduto como:</span>preço, tamanho, desconto etc...</li>
			      </ul></td>
			    <td><ul class="section-list">
			      <li class="first"><img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" /></li>
			      <li class="first"><span>Alo lado fica a imagen do produto,e aqui as informáções sobre oproduto como:</span>preço, tamanho, desconto etc...</li>
			      </ul></td>
		      </tr>
			  <tr>
			    <td><ul class="section-list">
			      <li class="first"><img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" /></li>
			      <li class="first"><span>Alo lado fica a imagen do produto,e aqui as informáções sobre oproduto como: </span>preço, tamanho, desconto etc...</li>
			      </ul></td>
			    <td><ul class="section-list">
			      <li class="first"><img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" /></li>
			      <li class="first"><span>Alo lado fica a imagen do produto,e aqui as informáções sobre oproduto como: </span>preço, tamanho, desconto etc...</li>
			      </ul></td>
			    <td><ul class="section-list">
			      <li class="first"><img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" /></li>
			      <li class="first"><span>Alo lado fica a imagen do produto,e aqui as informáções sobre oproduto como: </span>preço, tamanho, desconto etc...</li>
			      </ul></td>
			    <td><ul class="section-list">
			      <li class="first"><img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" /></li>
			      <li class="first"><span>Alo lado fica a imagen do produto,e aqui as informáções sobre oproduto como: </span>preço, tamanho, desconto etc...</li>
			      </ul></td>
		      </tr>
			  <tr>
			    <td><ul class="section-list">
			      <li class="first"><img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" /></li>
			      <li class="first"><span>Alo lado fica a imagen do produto,e aqui as informáções sobre oproduto como: </span>preço, tamanho, desconto etc...</li>
			      </ul></td>
			    <td><ul class="section-list">
			      <li class="first"><img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" /></li>
			      <li class="first"><span>Alo lado fica a imagen do produto,e aqui as informáções sobre oproduto como: </span>preço, tamanho, desconto etc...</li>
			      </ul></td>
			    <td><ul class="section-list">
			      <li class="first"><img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" /></li>
			      <li class="first"><span>Alo lado fica a imagen do produto,e aqui as informáções sobre oproduto como: </span>preço, tamanho, desconto etc...</li>
			      </ul></td>
			    <td><ul class="section-list">
			      <li class="first"><img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" /></li>
			      <li class="first"><span>Alo lado fica a imagen do produto,e aqui as informáções sobre oproduto como: </span>preço, tamanho, desconto etc...</li>
			      </ul></td>
		      </tr>
			  <tr>
			    <td><ul class="section-list">
			      <li class="first"><img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" /></li>
			      <li class="first"><span>Alo lado fica a imagen do produto,e aqui as informáções sobre oproduto como: </span>preço, tamanho, desconto etc...</li>
			      </ul></td>
			    <td><ul class="section-list">
			      <li class="first"><img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" /></li>
			      <li class="first"><span>Alo lado fica a imagen do produto,e aqui as informáções sobre oproduto como: </span>preço, tamanho, desconto etc...</li>
			      </ul></td>
			    <td><ul class="section-list">
			      <li class="first"><img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" /></li>
			      <li class="first"><span>Alo lado fica a imagen do produto,e aqui as informáções sobre oproduto como: </span>preço, tamanho, desconto etc...</li>
			      </ul></td>
			    <td><ul class="section-list">
			      <li class="first"><img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" /></li>
			      <li class="first"><span>Alo lado fica a imagen do produto,e aqui as informáções sobre oproduto como: </span>preço, tamanho, desconto etc...</li>
			      </ul></td>
		      </tr>
	  </table>
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
    <pre><center>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p><a href="promocoes4.html">&lt;&lt;  Anterior</A> <a href="promocoes1.html">1</A>, <a href="promocoes2.html">2</A>, <a href="promocoes3.html">3</A>, <a href="promocoes4.html">4</A> e 5.    </p></center>
    </pre>
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