<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- meta情報 -->
    <?php if (is_home() || is_front_page()) : ?>
        <title>テレックス関西｜コーポレートサイト</title>
        <meta name="description" content="横浜市港北区大倉山の、痛くない・目立たない矯正専門歯科。マウスピース矯正(インビザライン)なども子供から大人まで安心の定額制です。" />
        <meta name="keywords" content="矯正歯科,港北区,大倉山" />
        <meta property="og:title" content="横浜市港北区大倉山の矯正専門歯科｜大倉山ファミリア矯正歯科（横浜市港北区）" />
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://familiar-kyousei.com/">
        <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg" />
        <meta property="og:site_name" content="大倉山ファミリア矯正歯科（横浜市港北区）" />
        <meta property="og:description" content="横浜市大倉山の、痛くない・目立たない矯正専門歯科。マウスピース矯正(インビザラン)なども子供から大人まで安心の定額制です。" />
    <?php elseif (is_page('adult')) : ?>
        <title>大人の矯正・成人矯正｜大倉山ファミリア矯正歯科（横浜市港北区）</title>
        <meta name="description" content="横浜市港北区大倉山の、痛くない・目立たない矯正専門歯科。マウスピース矯正(インビザライン)なども子供から大人まで安心の定額制です。" />
        <meta name="keywords" content="矯正歯科,港北区,大倉山" />
        <meta property="og:title" content="大人の矯正｜大倉山ファミリア矯正歯科（横浜市港北区）" />
        <meta property="og:type" content="article">
        <meta property="og:url" content="https://familiar-kyousei.com/adult">
        <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg" />
        <meta property="og:site_name" content="大倉山ファミリア矯正歯科（横浜市港北区）" />
        <meta property="og:description" content="横浜市大倉山の、痛くない・目立たない矯正専門歯科。マウスピース矯正(インビザラン)なども子供から大人まで安心の定額制です。" />
    <?php elseif (is_page((array('contact', 'confirm')))) : ?>
        <title>お問い合わせ｜大倉山ファミリア矯正歯科（横浜市港北区）</title>
        <meta name="description" content="横浜市港北区大倉山の、痛くない・目立たない矯正専門歯科。マウスピース矯正(インビザライン)なども子供から大人まで安心の定額制です。" />
        <meta name="keywords" content="矯正歯科,港北区,大倉山" />
        <meta property="og:title" content="お問い合わせ｜大倉山ファミリア矯正歯科（横浜市港北区）" />
        <meta property="og:type" content="article">
        <meta property="og:url" content="https://familiar-kyousei.com/contact">
        <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg" />
        <meta property="og:site_name" content="大倉山ファミリア矯正歯科（横浜市港北区）" />
        <meta property="og:description" content="横浜市大倉山の、痛くない・目立たない矯正専門歯科。マウスピース矯正(インビザラン)なども子供から大人まで安心の定額制です。" />
    <?php elseif (is_page('thanks')) : ?>
        <title>送信完了｜大倉山ファミリア矯正歯科（横浜市港北区）</title>
        <meta name="description" content="横浜市港北区大倉山の、痛くない・目立たない矯正専門歯科。マウスピース矯正(インビザライン)なども子供から大人まで安心の定額制です。" />
        <meta name="keywords" content="矯正歯科,港北区,大倉山" />
        <meta property="og:title" content="送信完了｜大倉山ファミリア矯正歯科（横浜市港北区）" />
        <meta property="og:type" content="article">
        <meta property="og:url" content="https://familiar-kyousei.com/thanks">
        <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg" />
        <meta property="og:site_name" content="大倉山ファミリア矯正歯科（横浜市港北区）" />
        <meta property="og:description" content="横浜市大倉山の、痛くない・目立たない矯正専門歯科。マウスピース矯正(インビザラン)なども子供から大人まで安心の定額制です。" />
    <?php elseif (is_single()) : ?>
        <title><?php the_title() ?>｜大倉山ファミリア矯正歯科（横浜市港北区）</title>
        <meta name="description" content="横浜市港北区大倉山の、痛くない・目立たない矯正専門歯科。マウスピース矯正(インビザライン)なども子供から大人まで安心の定額制です。" />
        <meta name="keywords" content="矯正歯科,港北区,大倉山" />
        <meta property="og:title" content="<?php the_title() ?>｜大倉山ファミリア矯正歯科（横浜市港北区）" />
        <meta property="og:type" content="article">
        <meta property="og:url" content="https://familiar-kyousei.com/adult">
        <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg" />
        <meta property="og:site_name" content="大倉山ファミリア矯正歯科（横浜市港北区）" />
        <meta property="og:description" content="横浜市大倉山の、痛くない・目立たない矯正専門歯科。マウスピース矯正(インビザラン)なども子供から大人まで安心の定額制です。" />

    <?php endif; ?>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg">

    <!-- ogp -->
    <!-- ファビコン -->
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/common/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/images/common/apple-touch-icon.png">
    <!-- css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@700&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;500;600;700&family=Oswald:wght@400&family=Urbanist:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- <?php if (is_404()) : ?>
        <meta http-equiv="refresh" content=" 3; url=<?php echo esc_url(home_url("/")); ?>">
    <?php endif; ?> -->
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <header class="p-header<?php echo is_front_page() ? ' js-top-header' : ''; ?>">
        <div class="p-header__inner">
            <div class="p-header__content">
                <div class="p-header__brand">
                    <a class="p-header__logoLink" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Telex Kansai">
                        <img decoding="async" loading="lazy" class="p-header__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/header-logo.png" alt="" width="43" height="59">
                        <span class="p-header__logoText">Telex Kansai</span>
                    </a>
                </div>

                <nav class="p-header__nav" aria-label="グローバルナビゲーション">
                    <ul class="p-header__navList">
                        <li class="p-header__navItem">
                            <a class="p-header__navLink" href="<?php echo esc_url(home_url('/about/')); ?>">私たちについて</a>
                        </li>
                        <li class="p-header__navItem">
                            <a class="p-header__navLink" href="<?php echo esc_url(home_url('/business/')); ?>">事業内容</a>
                        </li>
                        <li class="p-header__navItem">
                            <a class="p-header__navLink" href="<?php echo esc_url(home_url('/csr')); ?>">CSRの取り組み</a>
                        </li>
                        <li class="p-header__navItem">
                            <a class="p-header__navLink" href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a>
                        </li>
                    </ul>

                    <div class="p-header__cta">
                        <a class="p-header__btn" href="<?php echo esc_url(home_url('/recruit')); ?>">採用情報</a>
                        <a class="p-header__btn" href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
                    </div>
                </nav>
                <button class="p-header__drawer p-drawer-icon">
                    <span class="p-drawer-icon__bars">
                        <span class="p-drawer-icon__bar1"></span>
                        <span class="p-drawer-icon__bar3"></span>
                    </span>
                </button>
                <div class="p-header__drawer-content p-drawer-content">
                    <div class="p-drawer-content__items">
                        <ul class="p-drawer-content__lists">
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="p-drawer-content__link">トップ</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/about')); ?>" class="p-drawer-content__link">TRUXiAについて</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/business')); ?>" class="p-drawer-content__link">事業紹介</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/talent')); ?>" class="p-drawer-content__link">タレント紹介</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/news')); ?>" class="p-drawer-content__link">お知らせ</a>
                            </li>
                        </ul>
                        <div class="p-drawer-content__sns">
                            <p class="p-drawer-content__sns-text">FOLLOW US</p>
                            <a href="https://www.instagram.com/truxia.management/" class="p-drawer-content__sns-link" target="_blank">
                                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/instagram.svg" alt="インスタグラム" width="30" height="30">
                            </a>
                            <a href="https://x.com/truxia_mg" class="p-drawer-content__sns-link" target="_blank">
                                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/x.svg" alt="x" width="30" height="30">
                            </a>
                        </div>
                        <div class="p-drawer-content__contact-wrapper">
                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-drawer-content__contact">
                                <p class="p-drawer-content__contact-text">お問い合わせ</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.5" height="4.81">
                                    <path d="M.75 4.06h14l-2.831-3" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>