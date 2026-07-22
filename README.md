# telex_corpo WordPress Theme

このREADMEは、現在のテーマ構成に合わせた作業用メモです。古いテンプレート由来の説明ではなく、実際の `package.json`、`vite.config.js`、`functions.php`、`src/`、`scripts/` を前提にしています。

## 概要

- WordPressクラシックテーマです。
- テーマディレクトリ: `wp-content/themes/telex_corpo`
- CSSは `src/sass/` から `css/styles.css` に出力します。
- 画像は `src/images/` を元データとし、`images/` に圧縮画像とWebPを出力します。
- JavaScriptは `js/` 配下で管理します。
- Viteは開発サーバーとビルドに使いますが、WordPress側のCSS/JS読み込みは主に `functions.php` の `wp_enqueue_*` で制御します。

## 主要ファイル

- `functions.php`: テーマ機能、CSS/JS enqueue、Contact Form 7、投稿名変更、ログイン画面、パンくず、抜粋、ページネーションなど。
- `header.php`: head、ヘッダー、ナビゲーション、共通メタ周り。
- `footer.php`: フッター、共通導線、閉じタグ周り。
- `front-page.php`: トップページ。
- `page-*.php`: 固定ページテンプレート。
- `home.php`: 投稿一覧。
- `single.php`: 投稿詳細。
- `archive-shop.php`: 店舗アーカイブ。
- `includes/`: 共通パーツ。
- `acf-json/`: ACFフィールド定義。
- `src/sass/`: Sassソース。
- `src/images/`: 画像ソース。
- `scripts/`: Sass import生成、画像圧縮などのNodeスクリプト。

## 開発コマンド

```bash
npm install
npm run dev
```

`npm run dev` で実行される主な処理:

- `npm run compress:images`: `src/images/` から `images/` へ圧縮画像/WebPを生成。
- `npm run generate:styles`: `src/sass/styles.scss` を自動生成。
- `dev:vite`: Vite開発サーバー起動。
- `dev:sass`: `src/sass` を `css` にwatchコンパイル。
- `dev:sass-files`: Sassファイル追加/削除時に `styles.scss` を再生成。
- `dev:images`: 画像変更時に圧縮処理を再実行。

その他:

```bash
npm run build
npm run preview
npm run generate:styles
npm run compress:images
```

## Sass構成

`src/sass/styles.scss` は手動管理ではなく、`scripts/generate-styles.js` で生成されます。

読み込み順:

1. `global`
2. `base`
3. `layout`
4. `project`
5. `component`

各カテゴリに `_index.scss` がある場合はディレクトリ単位で `@use` され、ない場合はカテゴリ内の `.scss` がファイル名順で個別に `@use` されます。

基本ルール:

- `css/styles.css` を直接編集しない。原則 `src/sass/` を編集する。
- 既存の `@use "global" as *;`、`rem()`、`vw()`、`strip-unit()`、`@include mq()` を優先する。
- 命名は既存のBEM風プレフィックスに合わせる。
- `p-`: ページ/セクション
- `c-`: 共通コンポーネント
- `l-`: レイアウト
- `u-`: ユーティリティ
- `is-`: 状態

## 画像構成

- 元画像: `src/images/`
- 出力先: `images/`
- JPG/PNG/SVGは圧縮されます。
- JPG/PNGはWebPも生成されます。
- GIF/WebPは再圧縮せずコピーされます。
- 圧縮キャッシュは `.cache/image-compress.json` に保存されます。
- 強制再処理が必要な場合はスクリプト側の `--force` 対応を確認してください。

画像を追加する場合は、原則 `src/images/` に置いてから `npm run compress:images` を実行します。

## WordPress実装ルール

- テーマ内アセットは `get_template_directory_uri()` を使います。
- 内部URLは `esc_url(home_url('/path/'))` を優先します。
- CSS/JSは `functions.php` の enqueue に追加します。
- 既存の `filemtime(get_theme_file_path(...))` によるキャッシュバストを維持します。
- フロント、固定ページ、投稿詳細、店舗詳細などの条件分岐は `is_front_page()`、`is_page()`、`is_singular()` など既存の書き方に合わせます。
- ACFを触る場合は `acf-json/` と管理画面側の同期状態を確認します。
- WordPress core、plugins、uploads は編集しません。

## JavaScript

- `js/script.js`: 共通UI挙動。
- `js/gsap.js`: GSAPアニメーション。
- `js/swiper.js`: Swiper初期化。
- `js/contact-form.js`: お問い合わせフォーム専用処理。
- jQuery前提の箇所は既存の書き方に合わせます。
- GSAPは `timeline()` に `fromTo()` / `to()` を順番に積む読みやすい実装を優先します。
- SplitTextは既にenqueueされているため、使用箇所を変更する場合は依存関係を崩さないようにします。

## 確認

PHPを変更したら、変更ファイルに対して構文確認を行います。

```bash
php -l path/to/file.php
```

Sass/画像周りを変更したら、必要に応じて以下を実行します。

```bash
npm run generate:styles
npm run compress:images
npm run dev
```

画面変更はスマホ幅とPC幅の両方で確認します。
