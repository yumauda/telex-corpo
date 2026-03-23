<?php get_header(); ?>
<main>
  <section class="p-mv">
    <div class="l-inner">
      <div class="p-mv__content">
        <div class="p-mv__media">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/mv/mv-main.webp" alt="" width="3687" height="2726">
        </div>
        <span class="p-mv__overlay" aria-hidden="true"></span>
        <h1 class="p-mv__title">
          <span class="p-mv__titleMain">「未来のあたりまえ」</span>
          <span class="p-mv__titleSub">を世界に</span>
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
            <a class="p-top-business__cardLink" href="#" aria-label="モバイル事業部">
              <figure class="p-top-business__cardFigure">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/business/business-mobile.png" alt="モバイル事業部" width="3784" height="2527">
              </figure>
              <div class="p-top-business__cardBody">
                <h3 class="p-top-business__cardTitle">モバイル事業部</h3>
                <p class="p-top-business__cardText">携帯電話の販売や料金プランサービスなど提供いたします。</p>
              </div>
            </a>
          </li>
          <li class="p-top-business__card p-top-business__card--corporate">
            <a class="p-top-business__cardLink" href="#" aria-label="法人営業部">
              <figure class="p-top-business__cardFigure">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/business/business-corporate.png" alt="法人営業部" width="4096" height="2736">
              </figure>
              <div class="p-top-business__cardBody">
                <h3 class="p-top-business__cardTitle">法人営業部</h3>
                <p class="p-top-business__cardText">法人のお客様に向け、最適なプランを提供いたします。</p>
              </div>
            </a>
          </li>
          <li class="p-top-business__card p-top-business__card--event">
            <a class="p-top-business__cardLink" href="#" aria-label="イベント事業部">
              <figure class="p-top-business__cardFigure">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/business/business-event.png" alt="イベント事業部" width="3366" height="2248">
              </figure>
              <div class="p-top-business__cardBody">
                <h3 class="p-top-business__cardTitle">イベント事業部</h3>
                <p class="p-top-business__cardText">催事場にて携帯電話や各種サービスのご提案をおこないます。</p>
              </div>
            </a>
          </li>
          <li class="p-top-business__card p-top-business__card--other">
            <a class="p-top-business__cardLink" href="#" aria-label="その他の事業">
              <figure class="p-top-business__cardFigure">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/business/business-other.png" alt="その他の事業" width="3930" height="2625">
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

          <div class="p-top-csr__media">
            <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/top-csr.png" alt="" width="828" height="336">
          </div>

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
  <section class="p-common-link">
    <ul class="p-common-link__list">
      <li class="p-common-link__item">
        <a class="p-common-link__link" href="<?php echo esc_url(home_url('/shop/')); ?>">
          <img decoding="async" loading="lazy" class="p-common-link__bg" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/common-link/common-link-shop.png" alt="" width="4096" height="2736">
          <span class="p-common-link__overlay" aria-hidden="true"></span>
          <span class="p-common-link__body">
            <span class="p-common-link__en">Shop</span>
            <span class="p-common-link__ja">店舗一覧</span>
          </span>
        </a>
      </li>
      <li class="p-common-link__item">
        <a class="p-common-link__link" href="<?php echo esc_url(home_url('/recruit/')); ?>">
          <img decoding="async" loading="lazy" class="p-common-link__bg" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/common-link/common-link-recruit.png" alt="" width="4096" height="2736">
          <span class="p-common-link__overlay" aria-hidden="true"></span>
          <span class="p-common-link__body">
            <span class="p-common-link__en">Recruit</span>
            <span class="p-common-link__ja">採用情報</span>
          </span>
        </a>
      </li>
      <li class="p-common-link__item">
        <a class="p-common-link__link" href="<?php echo esc_url(home_url('/contact/')); ?>">
          <img decoding="async" loading="lazy" class="p-common-link__bg" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/common-link/common-link-contact-464dba.png" alt="" width="664" height="539">
          <span class="p-common-link__overlay" aria-hidden="true"></span>
          <span class="p-common-link__body">
            <span class="p-common-link__en">Contact</span>
            <span class="p-common-link__ja">お問い合わせ</span>
          </span>
        </a>
      </li>
    </ul>
  </section>
</main>
<?php get_footer(); ?>