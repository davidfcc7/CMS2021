<?php get_header(); ?>
<div class="container my-5">
      <div class="row">
      <?php if (have_posts() ) : while (have_posts()) : the_post(); ?>
        <div class="col-12 col-sm-6 col-md-4 mb-3">
          <div class="card">
          <a href="<?php the_permalink();?> "><?php
          if (has_post_thumbnail()){
            the_post_thumbnail('post-thumbnails', array ('class' => 'card-img-top img-fluid'));
          } ?></a>
            <div class="card-block">
              <a href="<?php the_permalink();?> ">
              <h4 class="card-title"><?php the_title(); ?></h4></a>
              <p class="card-text"><?php the_excerpt(); ?></p>
            </div>
            <div class="card-footer">
              <small class="text-muted"><?php the_tags(); ?> / <?php the_author(); ?> / <?php echo get_the_date(); ?> / <?php the_category(', '); ?></small>
            </div>
          </div>
        </div>
        <?php endwhile; endif;?>
      </div>
    </div>
    <?php get_footer(); ?>