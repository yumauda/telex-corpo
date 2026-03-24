<?php get_header(); ?>
<main>
  <section class="p-page-mv">
    <div class="l-inner">
      <div class="p-page-mv__content">
        <figure class="p-page-mv__img">
          <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/other-business/mv.webp" alt="モバイル事業部" width="1440" height="480">
        </figure>
        <span class="p-page-mv__overlay" aria-hidden="true"></span>
        <div class="p-page-mv__detail">
          <p class="p-page-mv__en">Other business</p>
          <h1 class="p-page-mv__ja">その他の事業</h1>
        </div>
      </div>
    </div>
  </section>
  
  <section class="p-introduce">
    <div class="l-page-inner">
      <div class="p-introduce__content">
        <div class="p-introduce__head">
          <p class="p-introduce__enTitle">Other business</p>
          <h2 class="p-introduce__jaTitle">その他の事業について</h2>
        </div>
        <p class="p-introduce__text">
          モバイル事業やイベント事業で培った経験・技術・ネットワークを活かし、既存事業の枠にとらわれない新たな可能性に挑戦しています。部門の垣根を越えた連携と柔軟な発想で、社会の変化に合わせた「新しい価値」を次々と具現化しています。
        </p>
      </div>
    </div>
  </section>
  <section class="p-features">
    <div class="l-inner">
      <div class="p-feature__content">
        <div class="p-features__inner">
          <div class="p-features__head">
            <p class="p-features__enTitle">Business Portfolio</p>
            <h2 class="p-features__jaTitle">これまでの事業展開</h2>
          </div>

          <div class="p-features__list">
            <article class="p-features__item">
              <div class="p-features__itemBody">
                <h3 class="p-features__itemTitle">スマホ修理・買取事業</h3>
                <p class="p-features__itemText">
                  スマートフォンをはじめとするモバイルデバイスの修理・メンテナンス・買取。専門スタッフによる高品質な技術で、デバイスの「可能性」を最後まで守り抜きます。
                </p>
              </div>
              <figure class="p-features__itemMedia">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/other-business/portfolio-01-5df8f4.png" alt="" width="3227" height="2154">
              </figure>
            </article>

            <article class="p-features__item">
              <div class="p-features__itemBody">
                <h3 class="p-features__itemTitle">コンサルティング事業</h3>
                <p class="p-features__itemText">
                  採用支援、人財育成プログラムの提供、組織マネジメントの最適化。テレックス関西の成長を支えた「人」のノウハウを、企業の力へと変換します。
                </p>
              </div>
              <figure class="p-features__itemMedia">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/other-business/portfolio-02.png" alt="" width="3000" height="2000">
              </figure>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('includes/common-link'); ?>

</main>
<?php get_footer(); ?>