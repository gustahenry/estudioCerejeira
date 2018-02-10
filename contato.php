<?php  require_once('header.php');?>
<style>
	/*CONTATO*/
.contato{
  color: #000;
  background-image: url('http://res.cloudinary.com/estudiomalves/image/upload/v1518284028/contato-otm_vroobr.jpg');
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.contato .navbar-default .navbar-toggle {
    border: 2px solid #888;
    border-radius: 0px;
}
.contato .navbar-default .navbar-toggle .icon-bar {
    background-color: #888;
}
.contato .row{
  margin-top: 5rem;
}
#titulo-contato{
  color: #888;
}
#contato-contato{
  background-color: #bf3258;
  color: #fff;
  border: 2px solid #bf3258;
  margin-top: 6px;
  padding: 8px 15px;
}
.nav-black{
 color: #000;
}
.navbar-default .nav-black>li>a{
  color: #9c9c9b;
 }
 .navbar-default .nav-black>li>a:hover{
  color: #bf3258;
  font-weight: bold;
 }
 form{
  margin-top: 4rem;
 }
 .form-control{
  border-radius: 0px;
}
.btn-contato {
    color: #fff;
    background-color: #bf3258;
    border: 2px solid #bf3258;   
    border-radius: 0px; 
}
.btn-contato:hover {
     color: #bf3258;
    background-color: transparent;
    border: 2px solid #bf3258;   
    border-radius: 0px;   
}
.midia{
float: right;
padding-top: 5px;
}
.midia2{
float: left;
padding-top: 5px;
margin-bottom: 2rem;
}
.midia-groups{
  margin-left: 12px;
}
.midia-groups2{
  margin-right: 12px;
}
.informacoes{
  color: #fff;
  font-size: 18px;
  background-color: #bf3258;
  padding: 10px;
  margin-top: 1rem;
}
</style>
<body class="contato">
<div class="container">
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="index.php"><img id="logo" src="img/logo-site.png" alt="Estudio Cerejeira"></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right nav-black">
	        <li><a href="sobre.php">SOBRE</a></li>
	        <li><a href="solucoes.php">SOLUÇÕES</a></li>
	        <li><a href="portfolio.php">PORTFÓLIO</a></li>
	        <li><a id="contato-contato" href="contato.php">CONTATO</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<?php
				$email = $_GET['email'];

				if($email=='sucesso'){
					echo '<p class="text-success">Email enviado com sucesso</p>';
				}
				if($email=='erro'){
					echo '<p class="text-danger">Houve um problema ao enviar o email, tente novamente mais tarde</p>';
				}
			?>

	<div class="row">
		<div class="col-sm-5">
			
			<h2 id="titulo-contato">ENTRE EM CONTATO COM O <span class="brand1">ESTÚDIO</span></h2>
			<form action="email.php" method="post">
				<div class="form-group">
					<input class="form-control" type="text" id="nome" name="nome" placeholder="NOME">
				</div>
				<div class="form-group">
					
					<input class="form-control" type="email" id="email" name="email" placeholder="EMAIL">
				</div>
				<div class="form-group">
					
					<input class="form-control" type="text" id="assunto" name="assunto" placeholder="ASSUNTO">
				</div>
				<div class="form-group">
					
					<textarea class="form-control" name="mensagem" id="mensagem" cols="30" rows="5" placeholder="DEIXE AQUI SUA MENSAGEM"></textarea>
				</div>
				<button class="btn btn-contato btn-lg">CONTATO</button>
				
				<div class="midia">
					<a href="https://www.facebook.com/estudiocerejeira" target="_blank" ><img class="midia-groups2" src="img/facebook.png" alt=""></a>
					<a href="https://www.instagram.com/estudiocerejeira" target="_blank"><img class="midia-groups2" src="img/instagram.png" alt=""></a>
					<a href=""><img class="midia-groups2" src="img/vimeo.png" alt=""></a>
				</div>
			</form>
			
			<div class="informacoes">
				<span class="brand1">FALE COM A GENTE</span><br />
				+55 11 95461-7360<br />
				raquel@estudiocerejeira.com.br
			</div>
			
		</div>
		<div class="col-sm-7">
		<!--	<p><a class="btn btn-trabalho btn-lg" href="#" role="button">VEJA NOSSOS TRABALHOS<a></p>-->
		</div>
	</div>
</div>


<?php require_once('footer.php') ?>
