<?php get_header();

function rff_front_page_section($slug) {
    $category = get_category_by_slug($slug);
    ?><section class="frontpage-section <?= $slug ?>">
      <h2 class="frontpage-sectiontitle"><?= $category->name ?></h2>

      <div class="frontpage-section-articles">
      <?php
      $query = new WP_Query('showposts=5&cat=' . $category->term_id);
      while($query->have_posts()) {
        $query->the_post(); ?>

        <article class="frontpage-post">
          <h3 class="frontpage-posttitle">
            <a href="<?= get_permalink() ?>"><?= get_the_title() ?></a>
          </h3>

          <?php if(has_post_thumbnail()) {
            $image = wp_get_attachment_image_src(
              get_post_thumbnail_id(),
              'single-post-thumbnail' );

            echo '<img class="frontpage-postthumbnail" ' .
                      'src="' . $image[0] . '">';
          } ?>

          <footer>
            de <strong><?= get_the_author(); ?></strong>,
            <?= get_the_date(); ?>
          </footer>
        </article>

      <?php } wp_reset_postdata(); ?>
      </div>
    </section><?
}
?>

<? rff_front_page_section('focus') ?>

<div class="row">
  <div class="col-xs-6">
    <? rff_front_page_section('informatii') ?>
  </div>


  <div class="col-xs-6">
    <? rff_front_page_section('stiri') ?>
  </div>
</div>

<?php get_footer(); ?>
