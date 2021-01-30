<?php $contato = get_page_by_title('Contato'); ?>

<style>
	.quebra_footer {
		background: url("<?php the_field('imagem_footer', $contato); ?>") no-repeat center;
		background-size: cover;
	}
</style>

<section class="quebra_footer">
		<blockquote class="quote-externo conteiner">

			<p><?php the_field('quote_citacao', $contato); ?></p>
			<cite><?php the_field('autor_citacao', $contato); ?></cite>
		</blockquote>
	</section>

	<footer>
		<div class="footer">
			<div class="container">
				<div class="grid-8 footer_historia">
					<h3>Nossa História</h3>
					<p><?php the_field('historia_empresa', $contato); ?></p>
				</div>

				<div class="grid-4 footer_contato">
					<h3>Contato</h3>
					<ul>
						<li>- <?php the_field('telefone', $contato); ?></li>
						<li>- <?php the_field('email', $contato); ?></li>
						<li>- <?php the_field('endereco_complementar', $contato); ?></li>
					</ul>
				</div>

				<div class="grid-4 footer_redes">
					<h3>Redes Sociais</h3>
					<?php include(TEMPLATEPATH . "/includes/redes-sociais.php") ?>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<p class="grid-16">Todos os direitos reservados - <?php  bloginfo('name'); ?> <?php echo date('Y') ?>.</p>
			</div>
		</div>

  </footer>
  
  <?php wp_footer(); ?>
</body>

</html>