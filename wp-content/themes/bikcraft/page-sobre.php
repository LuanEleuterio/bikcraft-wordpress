<?php
// Template Name: Sobre
?><?php get_header(); ?>	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php include(TEMPLATEPATH . "/includes/introducao.php") ?>

	<section class="missao_sobre container fadeInUp" data-anime="1000">
		<div class="grid-10">
			<h2 class="subtitulo_interno">História, Missão e Visão</h2>
			<p>No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na formulação da gestão inovadora da qual fazemos parte da qual fazemos parte.</p>
			<p>No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na formulação da gestão inovadora da qual fazemos parte da qual fazemos parte.</p>
		</div>

		<div class="grid-6">
			<h2 class="subtitulo_interno">Valores</h2>
			<ul>
				<li>- Qualidade no processo</li>
				<li>- Foco no cliente</li>
				<li>- Sustentabilidade</li>
			</ul>
		</div>

		<div class="grid-16 foto_equipe">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/equipe-bikcraft.jpg" alt="Equipe Bikcraft">
		</div>
	</section>

	<section class="qualidade container fadeInUp" data-anime="1000">
		<?php include(TEMPLATEPATH . "/includes/qualidade.php") ?>
	</section>
	<?php endwhile; else: endif ?>
<?php get_footer(); ?>	