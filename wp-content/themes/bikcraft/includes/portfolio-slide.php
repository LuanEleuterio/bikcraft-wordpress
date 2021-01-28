<?php $portfolio = get_page_by_title('Portfolio'); ?>

<div class="container" data-slide="portfolio-slide">
  <?php if(have_rows('colecao_fotos', $portfolio)): while(have_rows('colecao_fotos', $portfolio)) : the_row(); ?>
  <ul class="portfolio_items">
      <li class="grid-8"><img src="<?php the_sub_field('img_1', $portfolio); ?>" alt="<?php the_sub_field('descricao_1', $portfolio); ?>"></li>
      <li class="grid-8"><img src="<?php the_sub_field('img_2', $portfolio); ?>" alt="<?php the_sub_field('descricao_2', $portfolio); ?>"></li>
      <li class="grid-16"><img src="<?php the_sub_field('img_3', $portfolio); ?>" alt="<?php the_sub_field('descricao_3', $portfolio); ?>"></li>
  </ul>
  <?php endwhile; else : endif; ?>
</div>
<?php if(!is_page('Portfolio')) { ?>
  <div class="call">
    <p><?php the_field('chamada_portfolio', $portfolio); ?></p>
    <a href="/bikcraft/portfolio" class="btn">Portfólio</a>
  </div>
<?php } ?>