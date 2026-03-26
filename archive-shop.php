<?php get_header(); ?>
<main>
  <section class="p-archive-news-mv">
    <div class="p-archive-news-mv__media">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/shop_mv.webp" alt="" width="3687" height="2726">
    </div>
    <div class="l-inner">
      <div class="p-archive-news-mv__titles">
        <p class="p-archive-news-mv__en">Shop</p>
        <h1 class="p-archive-news-mv__ja">店舗一覧</h1>
      </div>
    </div>
  </section>

  <section class="p-archive-news">
    <div class="l-page-inner">
      <div class="p-archive-news__content">

        <h2 class="p-archive-news__title">店舗一覧</h2>
  
        <div class="p-archive-news__table" role="list">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <?php
              $shop_area = '';
              if (function_exists('get_field')) {
                $shop_area = (string) get_field('shop_area');
              }
              if ($shop_area === '') {
                $terms = get_the_terms(get_the_ID(), 'shop_category');
                if (!is_wp_error($terms) && !empty($terms)) {
                  $shop_area = $terms[0]->name;
                }
              }
              $shop_tel = function_exists('get_field') ? (string) get_field('shop_tel') : '';
              $shop_address = function_exists('get_field') ? (string) get_field('shop_address') : '';
              ?>
              <a href="<?php the_permalink(); ?>" class="p-archive-news__row" role="listitem">
                <p class="p-archive-news__area"><?php echo esc_html($shop_area !== '' ? $shop_area : '店舗'); ?></p>
                <p class="p-archive-news__name"><?php the_title(); ?></p>
                <p class="p-archive-news__tel"><?php echo esc_html($shop_tel); ?></p>
                <p class="p-archive-news__address"><?php echo esc_html($shop_address); ?></p>
              </a>
            <?php endwhile; ?>
          <?php else : ?>
            <p>店舗情報は準備中です。</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('includes/common-link'); ?>
</main>
<?php get_footer(); ?>
