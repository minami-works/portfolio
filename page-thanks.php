<?php
/**
 * 送信完了ページ（固定ページ スラッグ: thanks）
 * Formspree の _next からここへ戻ってくる
 */
get_header(); ?>

<main>
  <section class="section" aria-labelledby="thanks-title">
    <div class="section__head">
      <h2 class="section__title" id="thanks-title">
        お問い合わせありがとうございます。
      </h2>
    </div>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="page__body">
        <?php // 本文が空（空の段落ブロックだけの場合も含む）なら定型文を出す ?>
        <?php if ( trim( wp_strip_all_tags( get_the_content() ) ) !== '' ) : ?>
          <?php the_content(); ?>
        <?php else : ?>
          <p class="text-ja">
            送信が完了しました。<br />
            内容を確認のうえ、原則1営業日以内にご返信いたします（お休み・営業時間外の場合は翌営業日中に対応）。
          </p>
          <p class="text-ja">
            しばらく経っても返信が届かない場合は、迷惑メールフォルダをご確認ください。
          </p>
        <?php endif; ?>

        <div class="contact__actions">
          <a class="contact__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページへ戻る</a>
        </div>
      </div>
    <?php endwhile; endif; ?>
  </section>
</main>

<?php get_footer(); ?>
