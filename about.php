<!-- HEAD -->
<?php require './inc/head.php'; ?>

<body>
	<div id="wrapper">
		
		<!-- HEADER -->
		<?php require './inc/header.php'; ?>

		<!-- ABOUT US -->
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="pageTitle">Quem Somos</h2>
					</div>
				</div>
			</div>
		</section>
		<section id="content">
			<section class="section-padding">
				<div class="container">
					<div class="row showcase-section">
						<div class="col-md-6 about-us-img">
							<img src="img/about.png" alt="logo da empresa">
						</div>
						<div class="col-md-6">
							<div class="about-text">
								<h3>Somos a Mudança e o Futuro</h3>
								<p>
									Somos uma startup digital especializada em produtos web. Desenvolvemos e criamos soluções para o seu negócio.
									Nossa equipe de desenvolvedores e designers sempre prontos para atendê-los.
									Nosso foco é na resolução de problemas dos nossos clientes, através da tecnologia, transformamos problemas em soluções.
								</p>
								<p>
									Desenvolvemos sites, sistemas, e-commerce, blogs, manutenção em sistemas e toda uma gama de serviços de design como 
									banners, logomarca, panfletos, convites, cartões, planners e muitos, todos personalizados a pedido e gosto do cliente.
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="container">	
				<div class="about">	
					<div class="row">
						<div class="col-md-4">
							<div class="block-heading-two">
								<h3><span>Por que nos escolher?</span></h3>
							</div>
							<p>
								Respiramos inovação, levamos no coração tudo o que fazemos, tiramos ideias do papel e 
								transformamos em soluções.
								Somos uma startup com foco em transformação e o desejo de fazer a diferença é enorme.
								Desenvolvemos a solução para o seu problema, nos conte qual e faremos, através da tecnologia
								tudo ficar mais simples.<br/><br/>
								Somos a mudança, conectamos vocês ao futuro.
							</p>
						</div>
						<div class="col-md-4">
							<div class="block-heading-two">
								<h3><span>Nossas Soluções</span></h3>
							</div>		
							<div class="panel-group" id="accordion-alt3">
								<div class="panel">	
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
												<i class="fa fa-angle-right"></i> Desenvolvimento de Sistemas # 1
											</a>
										</h4>
									</div>
									<div id="collapseOne-alt3" class="panel-collapse collapse">
										<div class="panel-body">
											Desenvolvemos sistemas para web, blogs e landpages, tudo de acordo com o desejo do cliente. 
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
												<i class="fa fa-angle-right"></i> E-commerce # 2
											</a>
										</h4>
									</div>
									<div id="collapseTwo-alt3" class="panel-collapse collapse">
										<div class="panel-body">
											Desenvolvemos a sua loja virtual, visando sempre que o nosso cliente tenha o seu retorno financeiro.
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
												<i class="fa fa-angle-right"></i> Manutenção em Sistemas # 3
											</a>
										</h4>
									</div>
									<div id="collapseThree-alt3" class="panel-collapse collapse">
										<div class="panel-body">
											Realizamos manutenção em sistemas web desenvolvido em PHP, Laravel ou Wordpress.
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
												<i class="fa fa-angle-right"></i> Design Gráfico # 4
											</a>
										</h4>
									</div>
									<div id="collapseFour-alt3" class="panel-collapse collapse">
										<div class="panel-body">
											Desenvolvemos a sua marca, sua propaganda nas diversas social media, nos conte o que precisa ser feito e faremos.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</section>
		
		<!-- FOOTER -->
		<?php require './inc/footer.php'; ?>
	</div>

	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	
	<!-- SCRIPTS -->
	<?php require './inc/scripts.php'; ?>
</body>
</html>