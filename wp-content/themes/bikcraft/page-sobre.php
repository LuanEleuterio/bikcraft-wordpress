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
	</section>
	<?php endwhile; else: endif ?>
<?php get_footer(); ?>	