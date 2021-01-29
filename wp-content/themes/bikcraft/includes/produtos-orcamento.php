<?php $contato = get_page_by_title('Contato'); ?>
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
				<span><?php the_field('telefone', $contato); ?></span>
				<span><?php the_field('email', $contato); ?></span>
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