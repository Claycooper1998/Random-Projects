<?php get_header();?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="container section-large">
      <div class="row">
        <div class="col-sm-12">
          <h1>404. The page you are looking for can't be found.</h1>
        </div>
      </div>
    </div>
  <?php endwhile;?>
<?php endif;?>
<?php get_footer();?>