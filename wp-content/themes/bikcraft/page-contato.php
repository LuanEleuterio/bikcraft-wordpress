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
			<span>+55 99 99999-9999 </span>
			<span>orcamento@bikcraft.com</span>
			<span>Rua Ta Logo Ali - Pinheiros</span>
			<span>São Paulo - SP</span>
			<h3>Redes Sociais</h3>
			<ul>
				<li><a href="https://facebook.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/redes-sociais/facebook.svg" alt="Facebook"></a></li>
				<li><a href="https://twitter.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/redes-sociais/twitter.svg" alt="Twitter"></a></li>
				<li><a href="https://instagram.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/redes-sociais/instagram.svg" alt="Instagram"></a></li>
			</ul>
		</div>
	</section>

	<div class="container contato_mapa fadeInUp" data-anime="1000">
		<a href="https://google.com" target="_blank" class="grid-16"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/endereco-bikcraft.jpg" alt="Endereço Bikcraft"></a>
	</div>
	<?php endwhile; else: endif?>
<?php get_footer(); ?>	