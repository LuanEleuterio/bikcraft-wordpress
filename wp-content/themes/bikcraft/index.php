
<?php get_header(); ?>	
	<section class="introducao">
		<div class="container">
			<h1 data-anime="400" class="fadeInUp">Bicicletas Feitas a Mão</h1>
			<blockquote class="quote-externo fadeInUp" data-anime="700">
				<p>"não tenha nada em sua casa que você não considere útil ou acredita ser bonito"</p>
				<cite>Willian Morris</cite>
			</blockquote>

			<a href="produtos.html" class="btn fadeInUp" data-anime="1000">Orçamento</a>
		</div>
	</section>

	<section class="produtos container fadeInUp" data-anime="1300">
		<h2 class="subtitulo">Produtos</h2>
		<ul class="produtos_list">
			<li class=grid-1-3>
				<div class="produtos_icone">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/passeio.svg" alt="bikcraft passeio">
				</div>
				<h3>Passeio</h3>
				<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
			</li>
			<li class=grid-1-3>
				<div class="produtos_icone">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/esporte.svg" alt="bikcraft passeio">
				</div>
				<h3>Esporte</h3>
				<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
			</li>
			<li class=grid-1-3>
				<div class="produtos_icone">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/retro.svg" alt="bikcraft passeio">
				</div>
				<h3>Retro</h3>
				<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
			</li>
		</ul>

		<div class="call">
			<p>Veja mais detalhes dos nossos produtos! Clique no botão abaixo.</p>
			<a href="<?php echo get_stylesheet_directory_uri(); ?>/web/pages/produtos.html" class="btn btn-preto">Produtos</a>
		</div>
	</section>

	<section class="portfolio fadeInUp" data-anime="1300">
		<div class="container">
			<h2 class="subtitulo">Portfólio</h2>
			<ul class="portfolio_items">
				<li class="grid-8"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/retro.jpg" alt="Bicicleta Retro"></li>
				<li class="grid-8"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></li>
				<li class="grid-16"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></li>
			</ul>

			<div class="call">
				<p>Saiba mais sobre nosso Portfólio!</p>
				<a href="<?php echo get_stylesheet_directory_uri(); ?>/web/pages/protfolio.html" class="btn">Portfólio</a>
			</div>
		</div>
	</section>

	<section class="qualidade container fadeInUp" data-anime="1300">
		<h2 class="subtitulo">Qualidade </h2>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bikcraft-qualidade.svg" alt="Bikcraft Qualidade">

		<ul class="qualidade_list">
			<li class="grid-1-3">
				<h3>Durabilidade</h3>
				<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
			</li>
			<li class="grid-1-3">
				<h3>Design</h3>
				<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
			</li>
			<li class="grid-1-3">
				<h3>Sustentabilidade</h3>
				<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
			</li>
		</ul>

		<div class="call">
			<p>Conheça mais a nossa história!</p>
			<a href="<?php echo get_stylesheet_directory_uri(); ?>/web/pages/sobre.html" class="btn btn-preto">Sobre</a>
		</div>
	</section>
<?php get_footer(); ?>