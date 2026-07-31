<?php
/**
 * 404ページ
 * テンプレート階層の最後の受け皿。存在しないURLはすべてここに来る
 */
get_header(); ?>

<main>
  <section class="section" aria-labelledby="notfound-title">
    <div class="section__head">
      <p class="section__label">404</p>
      <h2 class="section__title" id="notfound-title">
        お探しのページが見つかりませんでした。
      </h2>
    </div>

    <div class="page__body">
      <p class="text-ja">
        URLが変更されたか、削除された可能性があります。<br />
        お手数ですが、トップページから目的のページをお探しください。
      </p>

      <div class="contact__actions">
        <a class="contact__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページへ戻る</a>
        <a class="contact__link" href="<?php echo esc_url( home_url( '/#works' ) ); ?>">制作実績を見る</a>
        <a class="contact__link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">お問い合わせ</a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
