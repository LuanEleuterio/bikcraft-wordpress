<?php
// Template Name: Contato
?>
<?php get_header(); ?>	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php include(TEMPLATEPATH . "/includes/introducao.php") ?>

	<section class="contato container fadeInUp" data-anime="1000">
		<form class="contato_form grid-8" id="form_orcamento">
			<label for="nome">Nome</label>
			<input type="text" name="nome" id="nome">
			<label for="email">E-mail</label>
			<input type="text" name="email" id="email">
			<label for="espec">Especificações</label>
			<textarea name="espec" id="espec"></textarea>
			<button type="submit" class="btn btn-preto">Enviar</button>
		</form>

		<div class="grid-8 contato_dados">
			<h3>Dados</h3>
			<span><?php the_field('telefone'); ?></span>
			<span><?php the_field('email'); ?></span>
			<span><?php the_field('endereco'); ?></span>
			<span><?php the_field('endereco_uf'); ?></span>
			<h3>Redes Sociais</h3>
			<?php include(TEMPLATEPATH . "/includes/redes-sociais.php"); ?>
		</div>
	</section>

	<div class="container contato_mapa fadeInUp" data-anime="1000">
		<a href="<?php the_field('link_mapa'); ?>" target="_blank" class="grid-16"><img src="<?php the_field('foto_mapa'); ?>" alt="<?php the_field('endereco'); ?>"></a>
	</div>
	<?php endwhile; else: endif?>
<?php get_footer(); ?>	