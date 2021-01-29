<?php
// Template Name: Portfolio
?>
<?php get_header(); ?>	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php include(TEMPLATEPATH . "/includes/introducao.php"); ?>

	<div class="container fadeInUp" data-anime="1000" data-slide="quote">
	<?php if(have_rows('colecao_citacoes')): while(have_rows('colecao_citacoes')) : the_row(); ?>
		<blockquote class="quote-cliente">
			<p><?php the_sub_field('citacao');?></p>
			<cite><?php the_sub_field('autor_citacao');?></cite>
		</blockquote>
	<?php endwhile; else : endif; ?>
	</div>

	<div class="portfolio fadeInUp" data-anime="1300">
		<?php include(TEMPLATEPATH . "/includes/portfolio-slide.php"); ?>
	</div>
	<?php endwhile; else: endif ?>
<?php get_footer(); ?>	