<?php get_header(); ?>
<main>
  <section class="p-archive-news-mv">
    <figure class="p-archive-news-mv__media js-parallax">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/shop_mv.webp" alt="" width="3687" height="2726">
    </figure>
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

        <?php
        global $wp_query;
        $current_page = max(1, get_query_var('paged'));
        $max_pages = (int) $wp_query->max_num_pages;
        ?>
        <?php if ($max_pages > 1) : ?>
          <nav class="p-news__pager" aria-label="ページネーション">
            <div class="p-news__pagerInner">
              <div class="p-news__pagerMeta"><?php echo esc_html($current_page . '/' . $max_pages); ?></div>
              <div class="p-news__pagerLinks">
                <?php
                $page_links = paginate_links(array(
                  'total' => $max_pages,
                  'current' => $current_page,
                  'type' => 'array',
                  'prev_next' => true,
                  'prev_text' => '≪',
                  'next_text' => '≫',
                  'end_size' => 0,
                  'mid_size' => 1,
                ));
                if (is_array($page_links)) :
                  foreach ($page_links as $link) :
                    if (strpos($link, 'prev page-numbers') !== false) {
                      continue;
                    }
                    echo '<div class="p-news__pagerItem">' . $link . '</div>';
                  endforeach;
                endif;
                ?>
              </div>
            </div>
          </nav>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <?php get_template_part('includes/common-link'); ?>
</main>
<?php get_footer(); ?>
