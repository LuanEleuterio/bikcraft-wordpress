<?php
// Template Name: Sobre
?><?php get_header(); ?>	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php include(TEMPLATEPATH . "/includes/introducao.php") ?>

	<section class="missao_sobre container fadeInUp" data-anime="1000">
		<div class="grid-10">
			<h2 class="subtitulo_interno">História, Missão e Visão</h2>
			<?php the_field('missao'); ?>
		</div>

		<div class="grid-6">
			<h2 class="subtitulo_interno">Valores</h2>
			<?php the_field('valores'); ?>
		</div>

		<div class="grid-16 foto_equipe">
			<img src="<?php the_field("img_equipe"); ?>" alt="Equipe Bikcraft">
		</div>
	</section>

	<?php include(TEMPLATEPATH . "/includes/qualidade.php") ?>
	
	<?php endwhile; else: endif ?>
<?php get_footer(); ?>	