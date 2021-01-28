<?php
// Template Name: Produtos
?>
<?php get_header(); ?>	
	<section class="introducao-interna interna_produtos">
		<div class="container">
			<h1 class="fadeInUp" data-anime="400">Produtos</h1>
			<p class="fadeInUp" data-anime="700">conheça todos os nossos produtos.</p>
		</div>
	</section>

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

	<section class="container produtos_item fadeInUp" data-anime="1000">
		<div class="grid-11">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/bikcraft-esporte-1.jpg" alt="Bikcraft esporte">
			<h2>Esporte</h2>
		</div>
		<div class="grid-5 produto_icone">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/esporte.svg" alt="Bikcraft esporte">
		</div>
		<div class="grid-8">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/bikcraft-esporte-2.jpg" alt="Bikcraft esporte">
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

	<section class="container produtos_item fadeInUp" data-anime="1000">
		<div class="grid-11">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/bikcraft-retro-1.jpg" alt="Bikcraft retro">
			<h2>Retro</h2>
		</div>
		<div class="grid-5 produto_icone">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/retro.svg" alt="Bikcraft retro">
		</div>
		<div class="grid-8">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/bikcraft-retro-2.jpg" alt="Bikcraft retro">
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

	<section class="orcamento fadeInUp" data-anime="1000">
		<div class="container">
			<h2 class="subtitulo">Orçamento</h2>
			<form class="form grid-8" id="form_orcamento">
				<label for="nome">Nome</label>
				<input type="text" name="nome" id="nome">
				<label for="email">E-mail</label>
				<input type="text" name="email" id="email">
				<label for="espec">Especificações</label>
				<textarea name="espec" id="espec"></textarea>
				<button type="submit" class="btn">Enviar</button>
			</form>

			<div class="grid-8 orcamento_dados">
				<h3>Dados</h3>
				<span>+55 99 99999-9999 </span>
				<span>orcamento@bikcraft.com</span>
				<h3>Monte a sua Bikcraft.</h3>
				<p>Escolhe suas especificações</p>
				<ul>
					<li>- Cores</li>
					<li>- Estilos</li>
					<li>- Medidas</li>
					<li>- Acessórios</li>
					<li>- E Outros</li>
				</ul>
			</div>
		</div>
	</section>
<?php get_footer(); ?>	