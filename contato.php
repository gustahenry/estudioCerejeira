<?php  require_once('header.php') ?>
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
	      <a class="navbar-brand" id="black" href="index.php">ESTUDIO<span class="brand1">CEREJEIRA</span></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right nav-black">
	        <li><a href="sobre.php">SOBRE</a></li>
	        <li><a href="portfolio.php">PORTFÓLIO</a></li>
	        <li><a id="contato2" href="contato.php">CONTATO</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="row">
		<div class="col-sm-5">
			<?php
				$email ='';
				$email = $_GET['email'];

				if($email=='sucesso'){
					echo '<p class="text-success">Email enviado com sucesso</p>';
				}
				if($email=='erro'){
					echo '<p class="text-danger">Houve um problema ao enviar o email, tente novamente mais tarde</p>';
				}
			 ?>
			<h2>ENTRE EM CONTATO COM O ESTUDIO</h2>
			<form action="email.php" method="post">
				<div class="form-group">
					<label for="nome">NOME COMPLETO</label>
					<input class="form-control" type="text" id="nome" name="nome">
				</div>
				<div class="form-group">
					<label for="email">E-MAIL</label>
					<input class="form-control" type="email" id="email" name="email">
				</div>
				<div class="form-group">
					<label for="mensagem">MENSAGEM</label>
					<textarea class="form-control" name="mensagem" id="mensagem" cols="30" rows="5"></textarea>
				</div>
				<button class="btn btn-contato btn-lg">CONTATO</button>
			</form>
		</div>
		<div class="col-sm-7">
		<!--	<p><a class="btn btn-trabalho btn-lg" href="#" role="button">VEJA NOSSOS TRABALHOS<a></p>-->
		</div>
	</div>
</div>


<?php require_once('footer.php') ?>