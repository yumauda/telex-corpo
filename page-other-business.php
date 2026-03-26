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
          <p class="p-page-mv__en">Other Business</p>
          <h1 class="p-page-mv__ja">その他の事業</h1>
        </div>
      </div>
    </div>
  </section>
  
  <section class="p-introduce">
    <div class="l-page-inner">
      <div class="p-introduce__content">
        <div class="p-introduce__head">
          <p class="p-introduce__enTitle">Other Business</p>
          <h2 class="p-introduce__jaTitle">その他の事業について</h2>
        </div>
        <p class="p-introduce__text">
          既存事業の枠にとらわれることなく、新たな可能性に挑戦しています。<br>
          市場環境や顧客ニーズの変化を的確に捉え、これまで培ってきた経験・技術・ネットワークを活かしながら、新しい価値を創出しています。<br>
          新規事業は単なる事業拡大ではなく、当社の持続的成長を支える重要な取り組みの一つです。<br>
          そのため、部門の垣根を越えた連携体制を整え、柔軟な発想とスピード感をもって企画・検証・実行を行っています。<br>
          変化に対応するのではなく、自ら機会を見出し、形にしています。<br>
          これまでにも新たな取り組みを立ち上げ、事業化へと発展させてきました。<br>
          既存事業との相乗効果を生み出しながら、新たな価値を具体的な事業として確立しています。
        </p>
      </div>
    </div>
  </section>
  <section class="p-features">
    <div class="l-page-inner">
      <div class="p-features__content">
        <div class="p-features__head">
          <p class="p-features__enTitle">Business Portfolio</p>
          <h2 class="p-features__jaTitle">これまでの事業展開</h2>
        </div>

          <div class="p-features__list">
            <article class="p-features__item p-features__item--other">
              <div class="p-features__itemBody p-features__itemBody--other">
                <h3 class="p-features__itemTitle">スマホ修理・買取事業</h3>
                <p class="p-features__itemText">
                  スマートフォンをはじめとするモバイルデバイスの修理・メンテナンス・買取。専門スタッフによる高品質な技術で、デバイスの「可能性」を最後まで守り抜きます。
                </p>
              </div>
              <figure class="p-features__itemMedia p-features__itemOther-img">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/other-business/other_1.webp" alt="スマホ修理・買取事業" width="355" height="237">
              </figure>
            </article>

            <article class="p-features__item p-features__item--other">
              <div class="p-features__itemBody p-features__itemBody--other">
                <h3 class="p-features__itemTitle">コンサルティング事業</h3>
                <p class="p-features__itemText">
                  採用支援、人財育成プログラムの提供、組織マネジメントの最適化。テレックス関西の成長を支えた「人」のノウハウを、企業の力へと変換します。
                </p>
              </div>
              <figure class="p-features__itemMedia p-features__itemOther-img">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/other-business/other_2.webp" alt="コンサルティング事業" width="355" height="237">
              </figure>
            </article>
          </div>
      </div>
    </div>
  </section>

  <?php get_template_part('includes/common-link'); ?>

</main>
<?php get_footer(); ?>