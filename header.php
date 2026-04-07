<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />

    <!-- meta情報 -->
    <?php
    $site_name = 'テレックス関西株式会社';
    $site_url = esc_url(home_url('/'));
    $default_description = 'テレックス関西は、モバイルショップ事業、法人営業、イベント事業などを通じて、地域社会に貢献する企業です。';
    $ogp_image = get_template_directory_uri() . '/images/common/ogp.jpg';
    ?>

    <?php if (is_home() || is_front_page()) : ?>
        <title><?php echo $site_name; ?>｜トップページ</title>
        <meta name="description" content="<?php echo $default_description; ?>" />
        <meta property="og:title" content="<?php echo $site_name; ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?php echo $site_url; ?>" />
        <meta property="og:image" content="<?php echo $ogp_image; ?>" />
        <meta property="og:site_name" content="<?php echo $site_name; ?>" />
        <meta property="og:description" content="<?php echo $default_description; ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php echo $site_name; ?>" />
        <meta name="twitter:description" content="<?php echo $default_description; ?>" />
        <meta name="twitter:image" content="<?php echo $ogp_image; ?>" />

    <?php elseif (is_page('message')) : ?>
        <?php
        $page_title = '私たちについて';
        $page_description = 'テレックス関西の企業理念、代表メッセージをご紹介します。私たちは地域社会に貢献し、お客様に最高のサービスを提供することを使命としています。';
        ?>
        <title><?php echo $page_title; ?>｜<?php echo $site_name; ?></title>
        <meta name="description" content="<?php echo $page_description; ?>" />
        <meta property="og:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo esc_url(home_url('/message')); ?>" />
        <meta property="og:image" content="<?php echo $ogp_image; ?>" />
        <meta property="og:site_name" content="<?php echo $site_name; ?>" />
        <meta property="og:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta name="twitter:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:image" content="<?php echo $ogp_image; ?>" />

    <?php elseif (is_page('company')) : ?>
        <?php
        $page_title = '会社概要';
        $page_description = 'テレックス関西の会社概要、所在地、事業内容などの基本情報をご紹介します。';
        ?>
        <title><?php echo $page_title; ?>｜<?php echo $site_name; ?></title>
        <meta name="description" content="<?php echo $page_description; ?>" />
        <meta property="og:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo esc_url(home_url('/company')); ?>" />
        <meta property="og:image" content="<?php echo $ogp_image; ?>" />
        <meta property="og:site_name" content="<?php echo $site_name; ?>" />
        <meta property="og:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta name="twitter:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:image" content="<?php echo $ogp_image; ?>" />

    <?php elseif (is_page('business')) : ?>
        <?php
        $page_title = '事業内容';
        $page_description = 'テレックス関西の主要事業であるモバイルショップ事業、法人営業、イベント事業などをご紹介します。';
        ?>
        <title><?php echo $page_title; ?>｜<?php echo $site_name; ?></title>
        <meta name="description" content="<?php echo $page_description; ?>" />
        <meta property="og:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo esc_url(home_url('/business')); ?>" />
        <meta property="og:image" content="<?php echo $ogp_image; ?>" />
        <meta property="og:site_name" content="<?php echo $site_name; ?>" />
        <meta property="og:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta name="twitter:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:image" content="<?php echo $ogp_image; ?>" />

    <?php elseif (is_page('mobile-business')) : ?>
        <?php
        $page_title = 'モバイルショップ事業';
        $page_description = 'テレックス関西のモバイルショップ事業について。携帯電話販売、サポートサービスなどを展開しています。';
        ?>
        <title><?php echo $page_title; ?>｜<?php echo $site_name; ?></title>
        <meta name="description" content="<?php echo $page_description; ?>" />
        <meta property="og:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo esc_url(home_url('/mobile-business')); ?>" />
        <meta property="og:image" content="<?php echo $ogp_image; ?>" />
        <meta property="og:site_name" content="<?php echo $site_name; ?>" />
        <meta property="og:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta name="twitter:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:image" content="<?php echo $ogp_image; ?>" />

    <?php elseif (is_page('corporate-sales')) : ?>
        <?php
        $page_title = '法人営業';
        $page_description = 'テレックス関西の法人営業について。企業向けモバイルソリューション、通信サービスをご提供しています。';
        ?>
        <title><?php echo $page_title; ?>｜<?php echo $site_name; ?></title>
        <meta name="description" content="<?php echo $page_description; ?>" />
        <meta property="og:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo esc_url(home_url('/corporate-sales')); ?>" />
        <meta property="og:image" content="<?php echo $ogp_image; ?>" />
        <meta property="og:site_name" content="<?php echo $site_name; ?>" />
        <meta property="og:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta name="twitter:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:image" content="<?php echo $ogp_image; ?>" />

    <?php elseif (is_page('event-business')) : ?>
        <?php
        $page_title = 'イベント事業';
        $page_description = 'テレックス関西のイベント事業について。地域イベントの企画・運営、プロモーション活動を行っています。';
        ?>
        <title><?php echo $page_title; ?>｜<?php echo $site_name; ?></title>
        <meta name="description" content="<?php echo $page_description; ?>" />
        <meta property="og:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo esc_url(home_url('/event-business')); ?>" />
        <meta property="og:image" content="<?php echo $ogp_image; ?>" />
        <meta property="og:site_name" content="<?php echo $site_name; ?>" />
        <meta property="og:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta name="twitter:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:image" content="<?php echo $ogp_image; ?>" />

    <?php elseif (is_page('other-business')) : ?>
        <?php
        $page_title = 'その他事業';
        $page_description = 'テレックス関西のその他事業について。多様なサービスで地域社会に貢献しています。';
        ?>
        <title><?php echo $page_title; ?>｜<?php echo $site_name; ?></title>
        <meta name="description" content="<?php echo $page_description; ?>" />
        <meta property="og:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo esc_url(home_url('/other-business')); ?>" />
        <meta property="og:image" content="<?php echo $ogp_image; ?>" />
        <meta property="og:site_name" content="<?php echo $site_name; ?>" />
        <meta property="og:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta name="twitter:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:image" content="<?php echo $ogp_image; ?>" />

    <?php elseif (is_page('csr')) : ?>
        <?php
        $page_title = 'CSRの取り組み';
        $page_description = 'テレックス関西のCSR活動、社会貢献への取り組みについてご紹介します。地域社会との共生を目指しています。';
        ?>
        <title><?php echo $page_title; ?>｜<?php echo $site_name; ?></title>
        <meta name="description" content="<?php echo $page_description; ?>" />
        <meta property="og:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo esc_url(home_url('/csr')); ?>" />
        <meta property="og:image" content="<?php echo $ogp_image; ?>" />
        <meta property="og:site_name" content="<?php echo $site_name; ?>" />
        <meta property="og:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta name="twitter:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:image" content="<?php echo $ogp_image; ?>" />

    <?php elseif (is_home() || is_post_type_archive('post') || is_page('news')) : ?>
        <?php
        $page_title = 'お知らせ';
        $page_description = 'テレックス関西からのお知らせ、ニュース、最新情報をご覧いただけます。';
        ?>
        <title><?php echo $page_title; ?>｜<?php echo $site_name; ?></title>
        <meta name="description" content="<?php echo $page_description; ?>" />
        <meta property="og:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?php echo esc_url(home_url('/news')); ?>" />
        <meta property="og:image" content="<?php echo $ogp_image; ?>" />
        <meta property="og:site_name" content="<?php echo $site_name; ?>" />
        <meta property="og:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta name="twitter:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:image" content="<?php echo $ogp_image; ?>" />

    <?php elseif (is_page('contact')) : ?>
        <?php
        $page_title = 'お問い合わせ';
        $page_description = 'テレックス関西へのお問い合わせはこちらから。お気軽にご連絡ください。';
        ?>
        <title><?php echo $page_title; ?>｜<?php echo $site_name; ?></title>
        <meta name="description" content="<?php echo $page_description; ?>" />
        <meta property="og:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo esc_url(home_url('/contact')); ?>" />
        <meta property="og:image" content="<?php echo $ogp_image; ?>" />
        <meta property="og:site_name" content="<?php echo $site_name; ?>" />
        <meta property="og:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta name="twitter:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:image" content="<?php echo $ogp_image; ?>" />

    <?php elseif (is_page('contact-thanks')) : ?>
        <?php
        $page_title = 'お問い合わせ完了';
        $page_description = 'お問い合わせありがとうございました。担当者より折り返しご連絡いたします。';
        ?>
        <title><?php echo $page_title; ?>｜<?php echo $site_name; ?></title>
        <meta name="description" content="<?php echo $page_description; ?>" />
        <meta property="og:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo esc_url(home_url('/contact-thanks')); ?>" />
        <meta property="og:image" content="<?php echo $ogp_image; ?>" />
        <meta property="og:site_name" content="<?php echo $site_name; ?>" />
        <meta property="og:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta name="twitter:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:image" content="<?php echo $ogp_image; ?>" />

    <?php elseif (is_page('privacy')) : ?>
        <?php
        $page_title = 'プライバシーポリシー';
        $page_description = 'テレックス関西のプライバシーポリシー、個人情報保護方針についてご確認いただけます。';
        ?>
        <title><?php echo $page_title; ?>｜<?php echo $site_name; ?></title>
        <meta name="description" content="<?php echo $page_description; ?>" />
        <meta property="og:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo esc_url(home_url('/privacy')); ?>" />
        <meta property="og:image" content="<?php echo $ogp_image; ?>" />
        <meta property="og:site_name" content="<?php echo $site_name; ?>" />
        <meta property="og:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta name="twitter:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:image" content="<?php echo $ogp_image; ?>" />

    <?php elseif (is_page('recruit')) : ?>
        <?php
        $page_title = '採用情報';
        $page_description = 'テレックス関西の採用情報。一緒に働く仲間を募集しています。';
        ?>
        <title><?php echo $page_title; ?>｜<?php echo $site_name; ?></title>
        <meta name="description" content="<?php echo $page_description; ?>" />
        <meta property="og:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo esc_url(home_url('/recruit')); ?>" />
        <meta property="og:image" content="<?php echo $ogp_image; ?>" />
        <meta property="og:site_name" content="<?php echo $site_name; ?>" />
        <meta property="og:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php echo $page_title; ?>｜<?php echo $site_name; ?>" />
        <meta name="twitter:description" content="<?php echo $page_description; ?>" />
        <meta name="twitter:image" content="<?php echo $ogp_image; ?>" />

    <?php elseif (is_single()) : ?>
        <?php
        $post_title = get_the_title();
        $post_excerpt = get_the_excerpt();
        $post_description = $post_excerpt ? wp_trim_words($post_excerpt, 55, '...') : $default_description;
        $post_thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : $ogp_image;
        ?>
        <title><?php echo $post_title; ?>｜<?php echo $site_name; ?></title>
        <meta name="description" content="<?php echo esc_attr($post_description); ?>" />
        <meta property="og:title" content="<?php echo $post_title; ?>｜<?php echo $site_name; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>" />
        <meta property="og:image" content="<?php echo esc_url($post_thumbnail); ?>" />
        <meta property="og:site_name" content="<?php echo $site_name; ?>" />
        <meta property="og:description" content="<?php echo esc_attr($post_description); ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php echo $post_title; ?>｜<?php echo $site_name; ?>" />
        <meta name="twitter:description" content="<?php echo esc_attr($post_description); ?>" />
        <meta name="twitter:image" content="<?php echo esc_url($post_thumbnail); ?>" />

    <?php else : ?>
        <title><?php echo $site_name; ?></title>
        <meta name="description" content="<?php echo $default_description; ?>" />
        <meta property="og:title" content="<?php echo $site_name; ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?php echo $site_url; ?>" />
        <meta property="og:image" content="<?php echo $ogp_image; ?>" />
        <meta property="og:site_name" content="<?php echo $site_name; ?>" />
        <meta property="og:description" content="<?php echo $default_description; ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php echo $site_name; ?>" />
        <meta name="twitter:description" content="<?php echo $default_description; ?>" />
        <meta name="twitter:image" content="<?php echo $ogp_image; ?>" />
    <?php endif; ?>

    <!-- ファビコン -->
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/common/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/images/common/apple-touch-icon.png" />
    <!-- css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@700&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;500;600;700&family=Oswald:wght@400&family=Urbanist:wght@400;500;600&display=swap" rel="stylesheet">
    
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <?php
    $is_header_light = is_home() || is_singular('post') || is_page(array('contact', 'contact-thanks', 'privacy', 'message', 'company'));
    $header_logo_file = $is_header_light ? 'header-logo-black.png' : 'header-logo.png';
    ?>
    <header class="p-header<?php echo is_front_page() ? ' js-top-header' : ''; ?><?php echo $is_header_light ? ' p-header--light' : ''; ?>">
        <div class="p-header__inner">
            <div class="p-header__content">
                <div class="p-header__brand">
                    <a class="p-header__logoLink" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Telex Kansai">
                        <img decoding="async" loading="lazy" class="p-header__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/<?php echo esc_attr($header_logo_file); ?>" alt="" width="<?php echo esc_attr($is_header_light ? '35' : '43'); ?>" height="<?php echo esc_attr($is_header_light ? '39' : '59'); ?>">
                        <span class="p-header__logoText">Telex Kansai</span>
                    </a>
                </div>

                <nav class="p-header__nav" aria-label="グローバルナビゲーション">
                    <ul class="p-header__navList">
                        <li class="p-header__navItem p-header__navItem--hasDropdown">
                            <span class="p-header__navLink">私たちについて</span>
                            <ul class="p-header__dropdown">
                                <li class="p-header__dropdownItem">
                                    <a class="p-header__dropdownLink" href="<?php echo esc_url(home_url('/message')); ?>">代表メッセージ</a>
                                </li>
                                <li class="p-header__dropdownItem">
                                    <a class="p-header__dropdownLink" href="<?php echo esc_url(home_url('/company')); ?>">会社概要</a>
                                </li>
                            </ul>
                        </li>
                        <li class="p-header__navItem p-header__navItem--hasDropdown">
                            <span class="p-header__navLink">事業内容</span>
                            <ul class="p-header__dropdown">
                                <li class="p-header__dropdownItem">
                                    <a class="p-header__dropdownLink" href="<?php echo esc_url(home_url('/mobile-business')); ?>">モバイルショップ事業</a>
                                </li>
                                <li class="p-header__dropdownItem">
                                    <a class="p-header__dropdownLink" href="<?php echo esc_url(home_url('/corporate-sales')); ?>">法人営業</a>
                                </li>
                                <li class="p-header__dropdownItem">
                                    <a class="p-header__dropdownLink" href="<?php echo esc_url(home_url('/event-business')); ?>">イベント事業</a>
                                </li>
                                <li class="p-header__dropdownItem">
                                    <a class="p-header__dropdownLink" href="<?php echo esc_url(home_url('/other-business')); ?>">その他事業</a>
                                </li>
                            </ul>
                        </li>
                        <li class="p-header__navItem">
                            <a class="p-header__navLink" href="<?php echo esc_url(home_url('/csr')); ?>">CSRの取り組み</a>
                        </li>
                        <li class="p-header__navItem">
                            <a class="p-header__navLink" href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a>
                        </li>
                        <li class="p-header__navItem">
                            <a class="p-header__navLink" href="<?php echo esc_url(home_url('/shop')); ?>">店舗一覧</a>
                        </li>
                    </ul>

                    <div class="p-header__cta">
                        <a class="p-header__btn is-disabled" href="<?php echo esc_url(home_url('/recruit')); ?>">採用情報</a>
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
                            <li class="p-drawer-content__list p-drawer-content__list--parent">
                                <span class="p-drawer-content__link p-drawer-content__link--parent">私たちについて</span>
                                <ul class="p-drawer-content__sublist">
                                    <li class="p-drawer-content__subitem">
                                        <a href="<?php echo esc_url(home_url('/message')); ?>" class="p-drawer-content__sublink">代表メッセージ</a>
                                    </li>
                                    <li class="p-drawer-content__subitem">
                                        <a href="<?php echo esc_url(home_url('/company')); ?>" class="p-drawer-content__sublink">会社概要</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="p-drawer-content__list p-drawer-content__list--parent">
                                <span class="p-drawer-content__link p-drawer-content__link--parent">事業内容</span>
                                <ul class="p-drawer-content__sublist">
                                    <li class="p-drawer-content__subitem">
                                        <a href="<?php echo esc_url(home_url('/mobile-business')); ?>" class="p-drawer-content__sublink">モバイルショップ事業</a>
                                    </li>
                                    <li class="p-drawer-content__subitem">
                                        <a href="<?php echo esc_url(home_url('/corporate-sales')); ?>" class="p-drawer-content__sublink">法人営業</a>
                                    </li>
                                    <li class="p-drawer-content__subitem">
                                        <a href="<?php echo esc_url(home_url('/event-business')); ?>" class="p-drawer-content__sublink">イベント事業</a>
                                    </li>
                                    <li class="p-drawer-content__subitem">
                                        <a href="<?php echo esc_url(home_url('/other-business')); ?>" class="p-drawer-content__sublink">その他事業</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/csr')); ?>" class="p-drawer-content__link">CSRの取り組み</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/news')); ?>" class="p-drawer-content__link">お知らせ</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/shop')); ?>" class="p-drawer-content__link">店舗一覧</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="p-drawer-content__link is-disabled">採用情報</a>
                            </li>
                        </ul>
                        <div class="p-drawer-content__contact-wrapper">
                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-drawer-content__contact">
                                <span class="p-drawer-content__contact-text">お問い合わせ</span>
                                <svg class="p-drawer-content__contact-arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>