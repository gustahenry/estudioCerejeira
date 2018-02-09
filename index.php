<?php  require_once('header.php') ?>
<style>
	.home{
	 background-image: url('http://res.cloudinary.com/estudiomalves/image/upload/v1518211417/home-otm_pfzyek.jpg');
	  background-position: center center;
	  background-repeat: no-repeat;
	  background-attachment: fixed;
	  background-size: cover;
	}
</style>
<body class="home">
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
	      <a class="navbar-brand" href="index.php"><img id="logo" src="img/logo-site-branco.png" alt="Estudio Cerejeira"></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="sobre.php">SOBRE</a></li>
	        <li><a href="solucoes.php">SOLUÇÕES</a></li>
	        <li><a href="portfolio.php">PORTFÓLIO</a></li>
	        <li><a id="contato" href="contato.php">CONTATO</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="jumbotron text-center">
	  <h1>CONTEÚDO RELEVANTE</h1>
	  <p id="texto1">Produção de vídeos e consultoria em conteúdo</p>
	  <p id="texto1">Comunicação com o seu DNA</p>
	  <p><a class="btn btn-destaque btn-lg" href="portfolio.php" role="button">CONFIRA NOSSOS TRABALHOS</a></p>
		<div>
					<a href="https://www.facebook.com/estudiocerejeira" target="_blank" ><img class="midia-groups2" src="img/facebook.png" alt=""></a>
					<a href="https://www.instagram.com/estudiocerejeira" target="_blank"><img class="midia-groups2" src="img/instagram.png" alt=""></a>
					<a href=""><img class="midia-groups2" src="img/vimeo.png" alt=""></a>
				</div>	<div class="midia">
		

	</div>
</div>


<?php require_once('footer.php') ?>