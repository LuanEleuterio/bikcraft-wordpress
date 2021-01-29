<style type="text/css">
  .introducao-interna {
  background: url("<?php the_field('imagem_introducao')?>") no-repeat center;
  background-size: cover;
  }
</style>

<section class="introducao-interna">
  <div class="container">
    <h1 class="fadeInUp" data-anime="400"><?php the_title(); ?></h1>
    <p class="fadeInUp" data-anime="700"><?php the_field('subtitulo_introducao'); ?></p>
  </div>
</section>