<?php
// Template Name: Produtos
?>
<?php get_header(); ?>	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php include(TEMPLATEPATH . "/includes/introducao.php") ?>

	<section class="container produtos_item fadeInUp" data-anime="1000">
		<div class="grid-11">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/bikcraft-passeio-1.jpg" alt="Bikcraft Passeio">
			<h2>Passeio</h2>
		</div>
		<div class="grid-5 produto_icone">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/passeio.svg" alt="Bikcraft Passeio">
		</div>
		<div class="grid-8">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/bikcraft-passeio-2.jpg" alt="Bikcraft Passeio">
		</div>
		<div class="grid-8 produto_info">
			<p>No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na formula de gestão inovadora da qual fazemos parte.</p>

			<ul>
				<li>Conforto</li>
				<li>Velocidade</li>
				<li>Design</li>
				<li>Versatilidade</li>
			</ul>
		</div>
	</section>

	<?php include(TEMPLATEPATH . "/includes/produtos-orcamento.php"); ?>

	<?php endwhile; else: endif ?>
<?php get_footer(); ?>	