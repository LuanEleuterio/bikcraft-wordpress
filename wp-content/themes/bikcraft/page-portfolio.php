<?php
// Template Name: Portfolio
?>
<?php get_header(); ?>	
	<section class="introducao-interna interna_portfolio">
		<div class="container">
			<h1 class="fadeInUp" data-anime="400">Portfólio</h1>
			<p class="fadeInUp" data-anime="700">conheça os projetos da Bikcraft.</p>
		</div>
	</section>

	<div class="container fadeInUp" data-anime="1000" data-slide="quote">
		<blockquote class="quote-cliente">
			<p>"No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na formulação de gestão inovadora."</p>
			<cite>Barbara Moss</cite>
		</blockquote>
		<blockquote class="quote-cliente">
			<p>"Por outro lado, o fenômeno da Internet faz parte de um processo de gerenciamento das diversas correntes de pensamento."</p>
			<cite>Maik O'Bannon</cite>
		</blockquote>
		<blockquote class="quote-cliente">
			<p>"Neste sentido, a estrutura atual da organização aponta para a melhoria do fluxo de informações."</p>
			<cite>Egon Zaitv</cite>
		</blockquote>
	</div>

	<div class="portfolio fadeInUp" data-anime="1300">
		<div class="container" data-slide="portfolio-slide">
			<ul class="portfolio_items">
				<li class="grid-8"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/retro.jpg" alt="Bicicleta Retro"></li>
				<li class="grid-8"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></li>
				<li class="grid-16"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></li>
			</ul>
			<ul class="portfolio_items">
				<li class="grid-8"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></li>
				<li class="grid-8"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/retro.jpg" alt="Bicicleta Retro"></li>
				<li class="grid-16"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></li>
			</ul>
		</div>
	</div>

<?php get_footer(); ?>	