<?php get_header(); ?>
<main>
  <section class="p-page-mv">
    <div class="l-inner">
      <div class="p-page-mv__content">
        <figure class="p-page-mv__img">
          <img src="<?php echo get_template_directory_uri() ?>/images/event-business/mv.webp" alt="イベント事業部" width="1440" height="480">
        </figure>
        <div class="p-page-mv__detail">
          <p class="p-page-mv__en">Event Business</p>
          <h1 class="p-page-mv__ja">イベント事業部</h1>
        </div>
      </div>
    </div>
  </section>
  
  <section class="p-introduce">
    <div class="l-page-inner">
      <div class="p-introduce__content">
        <div class="p-introduce__head">
          <p class="p-introduce__enTitle">Event Business</p>
          <h2 class="p-introduce__jaTitle">イベント事業部について</h2>
        </div>
        <p class="p-introduce__text">
          イベント事業部（REX）は、docomo・auを中心とした通信キャリアの販促イベントの企画・運営を行う事業部です。単なる販売イベントにとどまらず、来場導線の設計からお客様へのアプローチ、クロージングまでを一気通貫で構築する「成果設計型モデル」を強みとしています。関西圏の商業施設を中心に多数のイベントを展開し、短期間で成果を最大化する設計力と現場対応力を武器に、自社モバイル事業の売上拡大に貢献しています。
        </p>
      </div>
    </div>
  </section>
  <section class="p-features">
    <div class="l-inner">
      <div class="p-features__content">
        <div class="p-features__head">
          <p class="p-features__enTitle">Features</p>
          <h2 class="p-features__jaTitle">イベント事業の特徴</h2>
        </div>

        <div class="p-features__list">
          <article class="p-features__item">
            <div class="p-features__itemBody">
              <h3 class="p-features__itemTitle">
                チームで最大化する<br>
                成果の仕組み
              </h3>
              <p class="p-features__itemText">
                REXでは、個人の力に依存せず、チーム全体で成果を最大化する運営体制を構築しています。役割分担を明確化し、数字管理や即日改善を徹底することで、短期成果と安定運営の両立を実現。イベントの成果は、仕組みと人によって決まると考え、一人ひとりが自らの役割と責任を理解し、自ら考え、動ける自走型現場をつくっています。<br>
                分業制により「誰が何を担うのか」を明確に定義することで、属人化に依存せず、どの現場でも再現性のある運営モデルを確立。若手やインターンも早期から戦力化し、挑戦の機会を積極的に提供しています。
              </p>
            </div>
            <figure class="p-features__itemMedia">
              <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/event-business/features-main-01.webp" alt="チームで最大化する成果の仕組み" width="609" height="406">
            </figure>
          </article>

          <article class="p-features__item p-features__item--reverse">
            <div class="p-features__itemBody">
              <h3 class="p-features__itemTitle">
                再現性の高い人材育成で<br>
                安定した成果を生みだす
              </h3>
              <p class="p-features__itemText">
                単なる台数追求ではなく、事前準備から当日の運営、振り返りまでを一貫して行い、イベント全体の流れを設計。成功事例や改善内容を組織内で共有することで、次の施策に素早く反映し、再現性の高い成果を生み出しています。さらに、未経験から現場に立つ育成環境を整え、実践の中で役割を担い、成果に向き合う経験を重ねることで、短期間でも大きく成長できる仕組みを構築。人が成長することで現場が強くなり、その強さが成果につながる――。育成と成果を切り離さず、成長そのものを事業の力へと変えることが、REXの大きな強みです。
              </p>
            </div>
            <figure class="p-features__itemMedia">
              <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/event-business/features-main-02.webp" alt="再現性の高い人材育成で安定した成果を生みだす" width="609" height="406">
            </figure>
          </article>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('includes/common-link'); ?>

</main>
<?php get_footer(); ?>