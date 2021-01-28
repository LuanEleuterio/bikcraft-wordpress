<?php
// Template Name: Home
?>
<?php get_header(); ?>	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="introducao">
		<div class="container">
			<h1 data-anime="400" class="fadeInUp"><?php the_field('titulo_introducao'); ?></h1>
			<blockquote class="quote-externo fadeInUp" data-anime="700">
				<p><?php the_field('quote_introducao'); ?></p>
				<cite><?php the_field('citacao_introducao'); ?></cite>
			</blockquote>

			<a href="/bikcraft/produtos" class="btn fadeInUp" data-anime="1000">Orçamento</a>
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
			<p><?php the_field('chamada_produtos'); ?></p>
			<a href="/bikcraft/produtos" class="btn btn-preto">Produtos</a>
		</div>
	</section>

	<section class="portfolio fadeInUp" data-anime="1300">
		<h2 class="subtitulo">Portfólio</h2>
		<?php include(TEMPLATEPATH . "/includes/portfolio-slide.php"); ?>
	</section>

	<?php include(TEMPLATEPATH . "/includes/qualidade.php"); ?>

	<?php endwhile; else: endif ?>
<?php get_footer(); ?>