<?php get_header(); ?>
<main>
  <section class="p-common-mv">
    <div class="p-common-mv__media">
      <svg class="p-common-mv__waveSvg" viewBox="0 0 1440 672" preserveAspectRatio="xMidYMid slice" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g class="p-common-mv__waveGroup" opacity="0.1">
          <path d="M24.7578 0H1439.87V391.96H24.7578V0Z" fill="white" opacity="0" />
          <path d="M26.4229 0.03125C78.9572 68.861 128.805 121.176 174.645 155.538C232.343 198.777 285.354 214.912 332.214 203.524C378.462 192.28 409.417 156.84 436.704 125.587C464.536 93.6918 488.593 66.1699 521.554 71.6207C533.072 73.5269 543.406 79.0151 553.223 88.3531C561.924 96.6819 570.007 107.883 577.926 122.634C592.573 150.006 604.363 185.782 615.779 220.362C627.133 254.799 638.889 290.388 653.434 317.761C669.708 348.379 687.818 365.186 708.82 369.185C726.42 372.543 743.448 366.83 762.374 351.219C779.26 337.29 795.37 317.387 812.426 296.325C830.91 273.506 850.007 249.903 871.553 232.279C895.983 212.301 920.011 203.225 945.02 204.533C965.341 205.617 983.044 213.192 1000.75 228.355C1016.55 241.91 1030.52 259.951 1045.29 279.069C1072.92 314.771 1104.22 355.219 1156.41 376.58C1233.41 408.057 1328.56 387.145 1439.23 314.359L1439.77 315.331C1392.17 346.666 1346.94 368.625 1305.45 380.647C1279.52 388.154 1254.44 391.96 1230.97 391.96C1230.8 391.96 1230.69 391.96 1230.63 391.96Z" fill="black" />
        </g>
      </svg>
    </div>
    <div class="l-inner">
      <div class="p-common-mv__content">
        <div class="p-common-mv__titles">
          <p class="p-common-mv__enTitle">Contact</p>
          <h1 class="p-common-mv__jaTitle">送信完了</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="p-contactThanks">
    <div class="l-page-inner">
      <div class="p-contactThanks__content">
        <p class="p-contactThanks__title">お問い合わせを受け付けました。</p>
        <p class="p-contactThanks__text">
          この度はお問い合わせいただき、誠にありがとうございます。<br>
          担当者よりご連絡いたしますので、今しばらくお待ちください。
        </p>
        <div class="p-contactThanks__btn">
          <a class="p-contactThanks__link" href="<?php echo esc_url(home_url('/')); ?>">TOPへ戻る</a>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('includes/common-link'); ?>
</main>
<?php get_footer(); ?>

