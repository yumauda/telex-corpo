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
        <div class="p-mv__media">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/mv/mv-main.webp" alt="" width="3687" height="2726">
        </div>
        <span class="p-mv__overlay" aria-hidden="true"></span>
        <h1 class="p-mv__title">
          <span class="p-mv__titleMain">「未来のあたりまえ」を世界に</span>
        </h1>
      </div>
    </div>
  </section>
  <section class="p-top-news">
    <div class="l-inner">
      <div class="p-top-news__content">
        <div class="p-top-news__grid">
          <div class="p-top-news__head">
            <p class="p-top-news__enTitle">News</p>
            <h2 class="p-top-news__jaTitle">お知らせ</h2>
          </div>

          <div class="p-top-news__body">
            <ul class="p-top-news__list">
              <li class="p-top-news__item">
                <a class="p-top-news__itemLink" href="#">
                  <time class="p-top-news__date" datetime="2025-12-18">2025.12.18</time>
                  <p class="p-top-news__title">2025年度　ホワイト企業認定、ゴールドランクに認定されました。</p>
                </a>
              </li>
              <li class="p-top-news__item">
                <a class="p-top-news__itemLink" href="#">
                  <time class="p-top-news__date" datetime="2025-10-01">2025.10.01</time>
                  <p class="p-top-news__title">23名の新たな仲間が集結！ 2025年度内定式を執り行いました</p>
                </a>
              </li>
              <li class="p-top-news__item">
                <a class="p-top-news__itemLink" href="#">
                  <time class="p-top-news__date" datetime="2025-06-13">2025.06.13</time>
                  <p class="p-top-news__title">アローグループによる学生向けインターンプログラム</p>
                </a>
              </li>
            </ul>

            <div class="p-top-news__more">
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
            <p class="p-top-about__enTitle">About Us</p>
            <h2 class="p-top-about__jaTitle">私たちについて</h2>
          </div>
          <div class="p-top-about__body">
            <p class="p-top-about__text">
              ICTの進歩により、急激に変化を遂げた社会。<br>
              欲しい情報が簡単に手に入り、あたりまえのように遠くの人と顔を合わせて会話ができる。買い物だってどこにいても片手で済ませられるようになった。<br><br>
              この先、未来はどうなっていくのだろう。<br><br>
              私たちテレックス関西は時代に合わせて提供すべき価値を見定め、社会と自分たちの可能性を信じ、より豊かで生産性のある社会を目指して前進・進化し続けます。
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
          <p class="p-top-business__en">Business</p>
          <h2 class="p-top-business__ja">事業内容</h2>
        </div>

        <p class="p-top-business__lead">
          昨今の社会環境の変容に伴い、お客さまの生活環境や価値観も大きく変化をしています。<br>
          そのような中、一人ひとりのお客さまと向き合い、そのライフスタイルにあった最適なサービス提案を通して、<br>
          感動とワクワクをお届けすることが私たちの仕事です。
        </p>

        <ul class="p-top-business__cards">
          <li class="p-top-business__card p-top-business__card--mobile">
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
          <li class="p-top-business__card p-top-business__card--corporate">
            <a class="p-top-business__cardLink" href="<?php echo esc_url(home_url('/corporate-sales')); ?>" aria-label="法人営業部">
              <figure class="p-top-business__cardFigure">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/business/business-corporate.webp" alt="法人営業部" width="282" height="337">
              </figure>
              <div class="p-top-business__cardBody">
                <h3 class="p-top-business__cardTitle">法人営業部</h3>
                <p class="p-top-business__cardText">法人のお客様に向け、最適なプランを提供いたします。</p>
              </div>
            </a>
          </li>
          <li class="p-top-business__card p-top-business__card--event">
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
          <li class="p-top-business__card p-top-business__card--other">
            <a class="p-top-business__cardLink" href="<?php echo esc_url(home_url('/other-business')); ?>" aria-label="その他の事業">
              <figure class="p-top-business__cardFigure">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/business/business-other.webp" alt="その他の事業" width="282" height="337">
              </figure>
              <div class="p-top-business__cardBody">
                <h3 class="p-top-business__cardTitle">その他の事業</h3>
                <p class="p-top-business__cardText">
                  賃貸、売買、テナントのご提案を<br>
                  おこなっています。
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
          <p class="p-top-csr__enTitle">CSR</p>
          <h2 class="p-top-csr__title">CSRの取組み</h2>
        </div>
        <div class="p-top-csr__grid">

          <figure class="p-top-csr__media js-parallax">
            <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/top-csr.png" alt="" width="828" height="336">
          </figure>

          <div class="p-top-csr__copy">
            <p class="p-top-csr__lead">
              可能性を広げ一人ひとりが輝ける<br>
              より良い社会を創り出す
            </p>
            <p class="p-top-csr__text">
              アローグループが目指すのは、誰もが自分らしく挑戦し、安心して暮らせる社会です。次世代の育成、女性活躍の支援、そして地球環境への配慮。私たちは一つひとつのアクションを積み重ね、事業と社会貢献を両立させることで、新しい時代の価値を創造し続けます。
            </p>
            <div class="p-top-csr__cta">
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