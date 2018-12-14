<?php include 'components/header.php'; ?>

	<section class="topo-interna">
		<div class="container">
			<h1>Contato</h1>
			<ol class="breadcrumb pull-right">
				<li><a href="#">Home</a></li>
				<li class="active">Contato</li>
			</ol>
		</div><!-- container -->
	</section><!-- topo-interna -->

	<section class="interna contato">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8">
					<form action="">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<input type="text" class="form-control" placeholder="Seu nome">
							</div><!-- md-6 -->
							<div class="col-md-6 col-sm-6">
								<input type="email" class="form-control" placeholder="Seu e-mail">
							</div><!-- md-6 -->
							<div class="col-md-6 col-sm-6">
								<input type="text" class="form-control" placeholder="Seu telefone">
							</div><!-- md-6 -->
							<div class="col-md-6 col-sm-6">
								<input type="text" class="form-control" placeholder="Assunto">
							</div><!-- md-6 -->
						</div><!-- row -->
		                <textarea class="form-control" placeholder="Mensagem"></textarea>
		                <button>enviar</button>
		            </form>
				</div><!-- md-8 -->
				<?php include 'components/sidebar.php'; ?>
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- interna -->
	
<?php include 'components/footer.php'; ?>