<?php
get_header();

the_post();
?>

<article class="single-post">
  <h3 class="single-posttitle"><?= get_the_title() ?></h3>

  <footer>
    de <strong><?= get_the_author(); ?></strong>,
    <?= get_the_date(); ?>
  </footer>

  <?php if(has_post_thumbnail()) {
    $image = wp_get_attachment_image_src(
      get_post_thumbnail_id(),
      'single-post-thumbnail' );

    echo '<img class="single-postthumbnail" src="' . $image[0] . '">';
  } ?>

  <section class="single-postcontent">
    <? the_content(); ?>
  </section>
</article>

<?php get_footer(); ?>
