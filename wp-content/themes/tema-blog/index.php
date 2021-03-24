<?php get_header(); ?>
<!--Inicio Informacion-->
    <div class="container-fluid">
        <div class="container my-5">
            <div class="row">
              <div class="col-sm-6 col-md-6">
                <h1>Información</h1>
                <p class="text-ph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>
              <div class="col-sm">
                <img class="image-info" src="<?php bloginfo('template_url')?>/images/home-office-336377_1920.jpg" alt="imagen de informacion">
              </div>
            </div>
          </div>
    </div>
    <!--Inicio Informacion-->

        
    <!--Inicio Contenido Blog-->
    <div class="container my-5">
      <div class="row">
      <?php if(have_posts() ): while (have_posts() ): the_post(); ?>
        <div class="col-12 col-sm-6 col-md-4 mb-3">
          <div class="card">
          <a href="./page.php"><?php
          if (has_post_thumbnail()){
            the_post_thumbnail('post-thumbnails', array ('class' => 'card-img-top img-fluid'));
          }
          ?></a>
            <div class="card-block">
              <a href="./page.php">
              <h4 class="card-title"><?php the_title(); ?></h4></a>
              <p class="card-text"><?php the_excerpt(); ?></p>
            </div>
            <div class="card-footer">
              <small class="text-muted"><?php the_tags(); ?> / <?php the_author(); ?> / <?php echo get_the_date(); ?> / <?php the_category(', '); ?></small>
            </div>
          </div>
        </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
    <!--Fin Contenido Blog-->
    <?php get_footer(); ?>

   