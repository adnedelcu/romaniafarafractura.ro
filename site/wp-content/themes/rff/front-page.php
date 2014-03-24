<?php get_header(); ?>

<div class="row">

  <div class="col-xs-6">
    <section class="frontpage-section info-section">
      <?php $category_informatii = get_category_by_slug('informatii'); ?>
      <h2 class="frontpage-sectiontitle"><?= $category_informatii->name ?></h2>

      <div class="frontpage-section-articles">
      <?php
      $query_informatii = new WP_Query(
        'showposts=5&cat=' . $category_informatii->term_id);
      while($query_informatii->have_posts()) {
        $query_informatii->the_post(); ?>

        <article class="frontpage-post">
          <h3 class="frontpage-posttitle">
            <?= get_the_title() ?>
          </h3>

          <footer>
            de <strong><?= get_the_author(); ?></strong>,
            <?= get_the_date(); ?>
          </footer>
        </article>

      <?php } wp_reset_postdata(); ?>
      </div>
    </section>
  </div>


  <div class="col-xs-6">
    <section class="frontpage-section news-section">
      <?php $category_stiri = get_category_by_slug('stiri'); ?>
      <h2 class="frontpage-sectiontitle"><?= $category_stiri->name ?></h2>

      <div class="frontpage-section-articles">
      <?php
      $query_stiri = new WP_Query(
        'showposts=5&cat=' . $category_stiri->term_id);
      while($query_stiri->have_posts()) {
        $query_stiri->the_post(); ?>

        <article class="frontpage-post">
          <h3 class="frontpage-posttitle">
            <?= get_the_title() ?>
          </h3>

          <footer>
            de <strong><?= get_the_author(); ?></strong>,
            <?= get_the_date(); ?>
          </footer>
        </article>

      <?php } wp_reset_postdata(); ?>
      </div>
    </section>
  </div>

</div>

<?php get_footer(); ?>
