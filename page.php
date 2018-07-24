<?php get_template_part( 'php/includes/header' ); ?>

<div class="container padding-top-xl">
  <div class="row">
    <div class="col-md-3 order-last order-md-2">
      <?php get_template_part( 'php/includes/resources' ); ?>
    </div>
    <div class="col-md-9 order-md-2 order-md-1 padding-bottom-xl">

      <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
      	   get_template_part( 'php/includes/content-page', get_post_format() );
        endwhile; endif; ?>

    </div>
  </div>
</div>

<?php get_template_part( 'php/includes/footer' ); ?>
