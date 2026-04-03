<footer class="p-footer">
    <div class="l-inner">
        <div class="p-footer__top">
            <div class="p-footer__company">
                <p class="p-footer__name">株式会社テレックス関西</p>
                <p class="p-footer__address">
                    〒651-0096<br>
                    兵庫県神戸市中央区雲井通4-2-2<br>
                    マークラー神戸ビル4階
                </p>
            </div>

            <div class="p-footer__cta">
                <a class="p-footer__ctaLink is-disabled" href="<?php echo esc_url(home_url('/recruit')); ?>">
                    <span class="p-footer__ctaEn">Recruit</span>
                    <span class="p-footer__ctaJa">採用情報</span>
                </a>
                <a class="p-footer__ctaLink" href="<?php echo esc_url(home_url('/contact')); ?>">
                    <span class="p-footer__ctaEn">Contact</span>
                    <span class="p-footer__ctaJa">お問い合わせ</span>
                </a>
            </div>
        </div>

        <nav class="p-footer__nav" aria-label="フッターナビゲーション">
            <ul class="p-footer__navList">
                <li class="p-footer__navItem">
                    <a class="p-footer__navLink" href="<?php echo esc_url(home_url('/message')); ?>">私たちについて</a>
                </li>
                <!-- <li class="p-footer__navItem">
                    <a class="p-footer__navLink" href="<?php echo esc_url(home_url('/company')); ?>">会社概要</a>
                </li> -->
                <li class="p-footer__navItem">
                    <a class="p-footer__navLink" href="<?php echo esc_url(home_url('/csr')); ?>">CSRの取組み</a>
                </li>
                <li class="p-footer__navItem">
                    <a class="p-footer__navLink" href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a>
                </li>
                <li class="p-footer__navItem">
                    <a class="p-footer__navLink" href="<?php echo esc_url(home_url('/privacy')); ?>">プライバシーポリシー</a>
                </li>
            </ul>

            <ul class="p-footer__navList p-footer__navList--sub">
                <li class="p-footer__navItem">
                    <a class="p-footer__navLink" href="<?php echo esc_url(home_url('/business')); ?>">事業内容</a>
                </li>
                <li class="p-footer__navItem">
                    <a class="p-footer__navLink" href="<?php echo esc_url(home_url('/mobile-business')); ?>">-モバイルショップ事業</a>
                </li>
                <li class="p-footer__navItem">
                    <a class="p-footer__navLink" href="<?php echo esc_url(home_url('/corporate-sales')); ?>">-法人営業</a>
                </li>
                <li class="p-footer__navItem">
                    <a class="p-footer__navLink" href="<?php echo esc_url(home_url('/event-business')); ?>">-イベント事業</a>
                </li>
                <li class="p-footer__navItem">
                    <a class="p-footer__navLink" href="<?php echo esc_url(home_url('/other-business')); ?>">-その他事業</a>
                </li>
            </ul>
        </nav>

        <hr class="p-footer__divider">
        <p class="p-footer__copyright">copyright © Telex Kansai All rights reserved.</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>