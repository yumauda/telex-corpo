<?php get_header(); ?>
<main>
  <div class="p-loader" aria-hidden="true">
    <div class="p-loader__bg" aria-hidden="true"></div>
    <div class="p-loader__center">
      <div class="p-loader__logoLink">
        <div class="p-loader__logo-img">
          <img decoding="async" loading="lazy" class="p-header__logo p-loader__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/header-logo.png" alt="" width="260" height="357">
        </div>
        <span class="p-header__logoText p-loader__logoText">
          <span class="p-loader__char">T</span><span class="p-loader__char">e</span><span class="p-loader__char">l</span><span class="p-loader__char">e</span><span class="p-loader__char">x</span><span class="p-loader__char">&nbsp;</span><span class="p-loader__char">K</span><span class="p-loader__char">a</span><span class="p-loader__char">n</span><span class="p-loader__char">s</span><span class="p-loader__char">a</span><span class="p-loader__char">i</span>
        </span>
      </div>
    </div>
  </div>
  <section class="p-mv">
    <div class="l-inner">
      <div class="p-mv__content">
        <figure class="p-mv__media">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/mv/mv-main.webp" alt="" width="3687" height="2726">
        </figure>
        <span class="p-mv__overlay" aria-hidden="true"></span>
        <h1 class="p-mv__title">
          <span class="p-mv__titleMain js-page-main-title">「未来のあたりまえ」<br class="u-mobile">を世界に</span>
        </h1>
      </div>
    </div>
  </section>
  <section class="p-top-news">
    <div class="l-inner">
      <div class="p-top-news__content">
        <div class="p-top-news__grid js-grid-side">
          <div class="p-top-news__head">
            <p class="p-top-news__enTitle js-page-main-title">News</p>
            <h2 class="p-top-news__jaTitle js-opacity-word">お知らせ</h2>
          </div>

          <div class="p-top-news__body">



            <ul class="p-top-news__list">

              <?php
              // パラメータの設定
              $args = array(
                'posts_per_page' => 3,
                'post_status' => 'publish',
                'post_type' => 'post',
                'orderby' => 'date',
              );

              // WP_Queryインスタンスの生成
              $my_query = new WP_Query($args);
              if ($my_query->have_posts()) :
                while ($my_query->have_posts()) : $my_query->the_post();
              ?>

                  <li class="p-top-news__item js-opacity-word">
                    <a class="p-top-news__itemLink" href="<?php the_permalink(); ?>">
                      <time class="p-top-news__date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                        <?php echo esc_html(get_the_date('Y.m.d')); ?>
                      </time>
                      <p class="p-top-news__title"><?php the_title(); ?></p>
                    </a>
                  </li>

              <?php
                endwhile;
              endif;
              wp_reset_postdata();
              ?>
            </ul>

            <div class="p-top-news__more js-opacity-word">
              <a class="p-top-news__moreLink" href="<?php echo esc_url(home_url('/news/')); ?>">
                <span class="p-top-news__moreText">VIEW ALL</span>
                <span class="p-top-news__moreIcon" aria-hidden="true"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-top-about">
    <div class="l-inner">
      <div class="p-top-about__content">
        <div class="p-top-about__detail">
          <div class="p-top-about__head">
            <p class="p-top-about__enTitle js-page-main-title js-page-main-title">About Us</p>
            <h2 class="p-top-about__jaTitle js-opacity-word js-opacity-word">私たちについて</h2>
          </div>
          <div class="p-top-about__body">
            <p class="p-top-about__text js-opacity-word">
              ICTの進歩により、急激に変化を遂げた社会。<br>
              欲しい情報が簡単に手に入り、あたりまえのように遠くの人と顔を合わせて<br class="u-desktop">会話ができる。買い物だってどこにいても片手で済ませられるようになった。<br><br>
              この先、未来はどうなっていくのだろう。<br><br>
              私たちテレックス関西は時代に合わせて提供すべき価値を見定め社会と自分たちの可能性を信じ、より豊かで生産性のある社会を目指して前進・進化し続けます。
            </p>
            <div class="p-top-about__cta">
              <a class="p-top-about__link" href="<?php echo esc_url(home_url('/about/')); ?>">
                <span class="p-top-about__linkText">VIEW ALL</span>
                <span class="p-top-about__linkIcon" aria-hidden="true"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-top-business">
    <div class="l-inner">
      <div class="p-top-business__content">
        <div class="p-top-business__head">
          <p class="p-top-business__en js-page-main-title">Business</p>
          <h2 class="p-top-business__ja js-opacity-word">事業内容</h2>
        </div>

        <p class="p-top-business__lead js-opacity-word">
          昨今の社会環境の変容に伴い、お客さまの生活環境や価値観も大きく変化をしています。<br>
          そのような中、一人ひとりのお客さまと向き合い、そのライフスタイルにあった最適なサービス提案を通して、<br class="u-desktop">
          感動とワクワクをお届けすることが私たちの仕事です。
        </p>

        <ul class="p-top-business__cards">
          <li class="p-top-business__card p-top-business__card--mobile js-opacity-word">
            <a class="p-top-business__cardLink" href="<?php echo esc_url(home_url('/mobile-business')); ?>" aria-label="モバイル事業部">
              <figure class="p-top-business__cardFigure">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/business/business-mobile.webp" alt="モバイル事業部" width="282" height="337">
              </figure>
              <div class="p-top-business__cardBody">
                <h3 class="p-top-business__cardTitle">モバイル事業部</h3>
                <p class="p-top-business__cardText">携帯電話の販売や料金プランサービスなど提供いたします。</p>
              </div>
            </a>
          </li>
          <li class="p-top-business__card p-top-business__card--corporate js-opacity-word">
            <a class="p-top-business__cardLink" href="<?php echo esc_url(home_url('/corporate-sales')); ?>" aria-label="法人営業部">
              <figure class="p-top-business__cardFigure">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/business/business-corporate.webp" alt="法人営業部" width="282" height="337">
              </figure>
              <div class="p-top-business__cardBody">
                <h3 class="p-top-business__cardTitle">法人営業部</h3>
                <p class="p-top-business__cardText">法人のお客様に向け最適なプランやソリューションを提供いたします。</p>
              </div>
            </a>
          </li>
          <li class="p-top-business__card p-top-business__card--event js-opacity-word">
            <a class="p-top-business__cardLink" href="<?php echo esc_url(home_url('/event-business')); ?>" aria-label="イベント事業部">
              <figure class="p-top-business__cardFigure">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/business/business-event.webp" alt="イベント事業部" width="282" height="337">
              </figure>
              <div class="p-top-business__cardBody">
                <h3 class="p-top-business__cardTitle">イベント事業部</h3>
                <p class="p-top-business__cardText">催事場にて携帯電話や各種サービスのご提案をおこないます。</p>
              </div>
            </a>
          </li>
          <li class="p-top-business__card p-top-business__card--other js-opacity-word">
            <a class="p-top-business__cardLink" href="<?php echo esc_url(home_url('/other-business')); ?>" aria-label="その他の事業">
              <figure class="p-top-business__cardFigure">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/business/business-other.webp" alt="その他の事業" width="282" height="337">
              </figure>
              <div class="p-top-business__cardBody">
                <h3 class="p-top-business__cardTitle">その他の事業</h3>
                <p class="p-top-business__cardText">
                  これまでの経験やノウハウをもとに様々な事業を展開しています。
                </p>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="p-top-csr">
    <div class="l-inner">
      <div class="p-top-csr__content">
        <div class="p-top-csr__head">
          <p class="p-top-csr__enTitle js-page-main-title">CSR</p>
          <h2 class="p-top-csr__title js-opacity-word">CSRの取組み</h2>
        </div>
        <div class="p-top-csr__grid">

          <figure class="p-top-csr__media js-parallax js-opacity-word">
            <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/top-csr.webp" alt="" width="828" height="336">
          </figure>

          <div class="p-top-csr__copy">
            <p class="p-top-csr__lead js-opacity-word">
              可能性を広げ一人ひとりが輝ける<br>
              より良い社会を創り出す
            </p>
            <p class="p-top-csr__text js-opacity-word">
              アローグループが目指すのは、誰もが自分らしく挑戦し、安心して暮らせる社会です。次世代の育成、女性活躍の支援、そして地球環境への配慮。私たちは一つひとつのアクションを積み重ね、事業と社会貢献を両立させることで、新しい時代の価値を創造し続けます。
            </p>
            <div class="p-top-csr__cta js-opacity-word">
              <a class="p-top-csr__link" href="<?php echo esc_url(home_url('/csr/')); ?>">
                <span class="p-top-csr__linkText">VIEW ALL</span>
                <span class="p-top-csr__linkIcon" aria-hidden="true"></span>
              </a>
            </div>
          </div>


        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('includes/common-link'); ?>
</main>
<?php get_footer(); ?>