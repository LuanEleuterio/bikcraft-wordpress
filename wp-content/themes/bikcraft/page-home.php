<?php
// Template Name: Home
?>
<?php get_header(); ?>	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php 
		$imgId = get_field('background_home'); 
		$backgroundImgLarge = wp_get_attachment_image_src($imgId, 'large');
		$backgroundImgMedium = wp_get_attachment_image_src($imgId, 'medium');
	?>
	<style>
	@media only screen and (max-width: 767px){
		.introducao {
			background-image: url('<?php echo $backgroundImgMedium[0]; ?>');
			background-size: cover;
		}
	}
	@media only screen and (min-width: 768px){
		.introducao {
			background-image: url("<?php echo $backgroundImgLarge[0]; ?>");
			background-size: cover;
		}
	}

	</style>
	<section class="introducao">
		<div class="container">
			<h1 data-anime="400" class="fadeInUp"><?php the_field('titulo_introducao'); ?></h1>
			<blockquote class="quote-externo fadeInUp" data-anime="700">
				<p><?php the_field('quote_introducao'); ?></p>
				<cite><?php the_field('citacao_autor'); ?></cite>
			</blockquote>

			<a href="/bikcraft/produtos" class="btn fadeInUp" data-anime="1000">Orçamento</a>
		</div>
	</section>

	<section class="produtos container fadeInUp" data-anime="1300">
		<h2 class="subtitulo">Produtos</h2>
		<ul class="produtos_list">
			<?php
				$args = array (
					'post_type' => 'produtos'
				);
				$the_query = new WP_Query ( $args );
			?>

			<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<li class=grid-1-3>
					<a href="<?php the_permalink() ?>">
						<div class="produtos_icone">
							<img src="<?php the_field('icone_produto') ?>" alt="Bikcraft <?php the_title(''); ?>">
						</div>
						<h3><?php the_title(''); ?></h3>
						<p><?php the_field('resumo_produtos'); ?></p>
					</a>
				</li>
			<?php endwhile; else: endif; ?>
			<?php wp_reset_query(); wp_reset_postdata(); ?>
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