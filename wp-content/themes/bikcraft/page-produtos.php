<?php
// Template Name: Produtos
?>
<?php get_header(); ?>	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php include(TEMPLATEPATH . "/includes/introducao.php") ?>

	<?php
		$args = array (
			'post_type' => 'produtos'
		);
		$the_query = new WP_Query ( $args );
	?>

	<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<section class="container produtos_item fadeInUp" data-anime="1000">
		<a href="<?php the_permalink() ?>">
			<div class="grid-11">
				<img src="<?php the_field('foto_produto'); ?>" alt="Bikcraft <?php the_title(''); ?>">
				<h2><?php the_title(''); ?></h2>
			</div>
			<div class="grid-5 produto_icone">
				<img src="<?php the_field('icone_produto') ?>" alt="Bikcraft <?php the_title(''); ?>">
			</div>
		</a>
	</section>
	<?php endwhile; else: endif; ?>
	<?php wp_reset_query(); wp_reset_postdata(); ?>
	
	<?php include(TEMPLATEPATH . "/includes/produtos-orcamento.php"); ?>

	<?php endwhile; else: endif ?>
<?php get_footer(); ?>	