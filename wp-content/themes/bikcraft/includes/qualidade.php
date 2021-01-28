<?php $sobre = get_page_by_title('sobre'); ?>

<section class="qualidade container fadeInUp" data-anime="1300">
		<h2 class="subtitulo"><?php the_field('titulo_qualidade', $sobre); ?></h2>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bikcraft-qualidade.svg" alt="Bikcraft Qualidade">
    
    <ul class="qualidade_list">
      <?php if(have_rows('itens_qualidade', $sobre)): while(have_rows('itens_qualidade', $sobre)) : the_row(); ?>
        <li class="grid-1-3">
          <h3><?php the_sub_field('subtitulo_item_qualidade', $sobre); ?></h3>
          <p><?php the_sub_field('texto_item_qualidade', $sobre); ?></p>
        </li>
      <?php endwhile; else : endif; ?>
		</ul>

    <?php if (!is_page('Sobre')){ ?>
		<div class="call">
			<p><?php the_field('chamada_sobre', $sobre); ?></p>
			<a href="/bikcraft/sobre" class="btn btn-preto">Sobre</a>
    </div>
    <?php } ?>
	</section>