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
<title>Imagens</title>
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
		$('#slider').slidertron({
			viewerSelector: '.viewer',
			indicatorSelector: '.indicator span',
			reelSelector: '.reel',
			slidesSelector: '.slide',
			speed: 'slow',
			advanceDelay: 4000
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
			<ha><a href="Imagens.php">Imágens</a></ha>
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
                    <li><a href="configuracaodepromocoes.php">Cadastrar Nova Promoçao</a></li>
                    <li><a href="configuracaodeconta.php">Configurações de Conta</a></li>
					<li><b><a href="logout.php" style="color:#009">Sair</a></b></li>
				</ul>
			</li>
		</ul>
		<br class="clearfix" />
	</div>
	<div id="slider">
		<div class="viewer">
			<div class="reel">
            <div class="slide">
					<img src="images/seja bem vindos.jpg" alt="" />
				</div>
            <div class="slide">
					<img src="images/01.jpg" alt="" />
				</div>
				<div class="slide">
					<img src="images/02.jpg" alt="" />
				</div>
				<div class="slide">
					<img src="images/03.jpg" alt="" />
				</div>
				<div class="slide">
					<img src="images/04.jpg" alt="" />
				</div>
				<div class="slide">
					<img src="images/05.jpg" alt="" />
				</div>
				<div class="slide">
					<img src="images/06.jpg" alt="" />
				</div>
                <div class="slide">
					<img src="images/07.jpg" alt="" />
				</div>
                <div class="slide">
					<img src="images/08.jpg" alt="" />
				</div>
                <div class="slide">
					<img src="images/09.jpg" alt="" />
				</div>
                <div class="slide">
					<img src="images/10.jpg" alt="" />
				</div>
                <div class="slide">
					<img src="images/11.jpg" alt="" />
				</div>
                <div class="slide">
					<img src="images/12.jpg" alt="" />
				</div>
                <div class="slide">
					<img src="images/13.jpg" alt="" />
				</div>
                <div class="slide">
					<img src="images/14.jpg" alt="" />
				</div>
                <div class="slide">
					<img src="images/15.jpg" alt="" />
				</div>
                <div class="slide">
					<img src="images/16.jpg" alt="" />
				</div>
                <div class="slide">
					<img src="images/17.jpg" alt="" />
				</div>
                <div class="slide">
					<img src="images/18.jpg" alt="" />
				</div>
			</div>
		</div>
		<div class="indicator">
			<span>1</span>
			<span>2</span>
			<span>3</span>
			<span>4</span>
			<span>5</span>
            <span>6</span>
            <span>7</span>
            <span>8</span>
            <span>9</span>
            <span>10</span>
            <span>11</span>
            <span>12</span>
            <span>13</span>
            <span>14</span>
            <span>15</span>
            <span>16</span>
            <span>17</span>
            <span>18</span>
            <span>19</span>

		</div>
	</div>
	<div id="page">
		<div id="content">
			<div class="box">
				<h2>O MERCADINHO H&amp;C INFORMA.</h2>
				<p>O MERCADINHO H&amp;C FOI ELEITO, CONSIDERADO O 
MELHOR ATENDIMENTO DE RERIUTABA EM 2009. </p>
				<p>Devido sua eficiência, educação e competência na hora de atender um cliente, como uma pessoa de casa, em 2009 o Mercadinho H&amp;C ficou conhecido como o mercado de melhor  atendimento de Reriutaba-CE. E pelo que parece promete melhrar cada vez mais.</p>
			</div>
			<div class="box" id="content-box1">
				<h3>Mauris justo</h3>
				<ul class="section-list">
					<li class="first">
						<img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" />
						<span>Condimentum et porttitor tristique nec aliquet magnis pretium quam nibh.</span>
					</li>
					<li>
						<img class="pic alignleft" src="images/pic02.jpg" width="70" height="70" alt="" />
						<span>Posuere elementum sapien justo tortor nulla fringilla suspendisse nascetur.</span>
					</li>
					<li class="last">
						<img class="pic alignleft" src="images/pic03.jpg" width="70" height="70" alt="" />
						<span>Ipsum quis vestibulum feugiat congue nunc laoreet volutpat lorem ipsum sociis.</span>
					</li>
				</ul>
			</div>
			<div class="box" id="content-box2">
				<h3>Magnis hendrerit erat</h3>
				<p>
					Neque neque ornare penatibus tristique fusce turpis. Purus sagittis euismod at ornare suscipit tempus.
				</p>
				<ul class="list">
					<li class="first"><a href="#">Ipsum phasellus ullamcorper</a></li>
					<li><a href="#">Mollis mattis tempus amet</a></li>
					<li><a href="#">Ipsum aliquet dignissim vitae</a></li>
					<li><a href="#">Orci metus curae sed mollis</a></li>
					<li class="last"><a href="#">Tristique amet venenatis</a></li>
				</ul>
			</div>
			<br class="clearfix" />
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
			<h3>Magnis hendrerit erat</h3>
			<p>
				Euismod sodales sociis hendrerit pulvinar acursus urna. Consectetur egestas sodales at ornare laoreet turpis. Lorem id sapien ridiculus sagittis imperdiet urna suspendisse. Posuere arcu parturient quam risus. Aliquam nullam magnis integer gravida vulputate felis. Consectetur montes sollicitudin dictum. Auctor sociis hendrerit pulvinar acursus urna lorem ipsum dolor vivamus pulvinar libero. Massa egestas cubilia lacus augue mattis consectetur.
			</p>
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