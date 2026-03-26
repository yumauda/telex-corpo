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
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php
            $shop_tel = function_exists('get_field') ? (string) get_field('shop_tel') : '';
            $shop_address = function_exists('get_field') ? (string) get_field('shop_address') : '';
            $shop_business_hours = function_exists('get_field') ? (string) get_field('shop_business_hours') : '';
            $shop_holiday = function_exists('get_field') ? (string) get_field('shop_holiday') : '';
            $shop_parking = function_exists('get_field') ? (string) get_field('shop_parking') : '';
            $shop_map_image = function_exists('get_field') ? get_field('shop_map_image') : null;
            $shop_google_map_embed = function_exists('get_field') ? (string) get_field('shop_google_map_embed') : '';
            $shop_gallery = function_exists('get_field') ? get_field('shop_gallery') : null;
            $slides = array();
            if (is_array($shop_gallery) && !empty($shop_gallery)) {
              $slides = $shop_gallery;
            } elseif (has_post_thumbnail()) {
              $slides[] = get_post_thumbnail_id();
            }
            ?>
            <article class="p-shop-detail">
              <h2 class="p-shop-detail__title"><?php the_title(); ?></h2>

              <?php if (!empty($slides)) : ?>
                <div class="p-shop-detail__media swiper js-shop-slider">
                  <div class="swiper-wrapper">
                    <?php foreach ($slides as $slide) : ?>
                      <?php
                      $slide_id = is_array($slide) ? (int) ($slide['ID'] ?? 0) : (int) $slide;
                      if (!$slide_id) {
                        continue;
                      }
                      $slide_src = wp_get_attachment_image_src($slide_id, 'large');
                      if (!$slide_src) {
                        continue;
                      }
                      ?>
                      <div class="swiper-slide">
                        <figure class="p-shop-detail__slide-img">
                          <img decoding="async" loading="lazy" src="<?php echo esc_url($slide_src[0]); ?>" alt="<?php echo esc_attr(get_the_title() . ' 店舗写真'); ?>" width="<?php echo esc_attr((string) $slide_src[1]); ?>" height="<?php echo esc_attr((string) $slide_src[2]); ?>">
                        </figure>
                      </div>
                    <?php endforeach; ?>
                  </div>
                  <?php if (count($slides) > 1) : ?>
                    <div class="swiper-pagination p-shop-detail__pagination"></div>
                  <?php endif; ?>
                </div>
              <?php endif; ?>

              <dl class="p-shop-detail__info">
                <div class="p-shop-detail__row">
                  <dt class="p-shop-detail__dt">所在地</dt>
                  <dd class="p-shop-detail__dd"><?php echo esc_html($shop_address); ?></dd>
                </div>
                <div class="p-shop-detail__row">
                  <dt class="p-shop-detail__dt">TEL</dt>
                  <dd class="p-shop-detail__dd"><?php echo esc_html($shop_tel); ?></dd>
                </div>
                <div class="p-shop-detail__row">
                  <dt class="p-shop-detail__dt">営業時間</dt>
                  <dd class="p-shop-detail__dd"><?php echo esc_html($shop_business_hours); ?></dd>
                </div>
                <div class="p-shop-detail__row">
                  <dt class="p-shop-detail__dt">定休日</dt>
                  <dd class="p-shop-detail__dd"><?php echo esc_html($shop_holiday); ?></dd>
                </div>
                <div class="p-shop-detail__row">
                  <dt class="p-shop-detail__dt">駐車場</dt>
                  <dd class="p-shop-detail__dd"><?php echo esc_html($shop_parking); ?></dd>
                </div>
                <div class="p-shop-detail__row p-shop-detail__row--map">
                  <dt class="p-shop-detail__dt">マップ</dt>
                  <dd class="p-shop-detail__dd">
                    <?php if ($shop_google_map_embed !== '') : ?>
                      <div class="p-shop-detail__map">
                        <?php
                        echo wp_kses(
                          $shop_google_map_embed,
                          array(
                            'iframe' => array(
                              'src' => true,
                              'width' => true,
                              'height' => true,
                              'style' => true,
                              'allowfullscreen' => true,
                              'loading' => true,
                              'referrerpolicy' => true,
                              'class' => true,
                              'title' => true,
                              'allow' => true,
                            ),
                          )
                        );
                        ?>
                      </div>
                    <?php endif; ?>
                    <?php
                    $map_id = is_array($shop_map_image) ? (int) ($shop_map_image['ID'] ?? 0) : (int) $shop_map_image;
                    $map_src = $map_id ? wp_get_attachment_image_src($map_id, 'large') : null;
                    ?>
                    <?php if ($shop_google_map_embed === '' && $map_src) : ?>
                      <figure class="p-shop-detail__map">
                        <img decoding="async" loading="lazy" src="<?php echo esc_url($map_src[0]); ?>" alt="<?php echo esc_attr(get_the_title() . ' マップ'); ?>" width="<?php echo esc_attr((string) $map_src[1]); ?>" height="<?php echo esc_attr((string) $map_src[2]); ?>">
                      </figure>
                    <?php endif; ?>
                  </dd>
                </div>
              </dl>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <?php get_template_part('includes/common-link'); ?>
</main>
<?php get_footer(); ?>
