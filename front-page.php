<?php get_header(); ?>

<main>
  <section class="hero" aria-labelledby="hero-title">
    <img
      class="hero__img"
      src="<?php echo get_template_directory_uri(); ?>/img/mv2.png"
      alt="木漏れ日の入るデスクに置かれたノートパソコン"
    />
    <div class="hero__content">
      <p class="hero__kicker">Web Coder / Hokkaido, Japan</p>
      <h1 class="hero__title" id="hero-title">Minami<br />Gouda</h1>
      <p class="hero__lead">
        デザインの意図を汲み取りながら、保守しやすく丁寧なコーディングを行います。<br />
        思い込みで進めず、確認してから動く。それを大切にしています。
      </p>
      <ul class="hero__tags" aria-label="対応スキル">
        <li class="hero__tag">HTML / CSS</li>
        <li class="hero__tag">SCSS / BEM</li>
        <li class="hero__tag">JavaScript</li>
        <li class="hero__tag">Figma to Code</li>
      </ul>
    </div>
  </section>

  <section class="section" id="about" aria-labelledby="about__title">
    <div class="section__head">
      <p class="section__label">About</p>
      <h2 class="section__title" id="about__title">
        見た目の再現だけでなく、納品後の運用や修正まで見据えた実装を大切にしています。
      </h2>
    </div>
    <div class="about__grid">
      <div class="about__intro">
        <p class="about__note">Partner for production teams</p>
        <img
          src="<?php echo get_template_directory_uri(); ?>/img/minami-icon.png"
          alt="PCに向かって作業しているイラスト"
          class="about__icon"
        />
        <p class="about__catch">
          コードを書いてサイトが形になっていく瞬間が、一番好きです。
        </p>
      </div>
      <div class="about__body">
        <div class="about__lead">
          <p class="text-ja">
            北海道を拠点に、Webコーダーとして活動しています。ドラッグストアでの接客業を続けながら、2026年3月からHTML/CSS/SCSSを独学。現在はLP制作を中心に、Figmaカンプからのコーディングやレスポンシブ対応に取り組んでいます。
          </p>
          <p class="text-ja">
            もともとはデザインに興味があって学び始めましたが、実際に手を動かすうちに惹かれたのはコーディングの方でした。ある程度「正解」がある感覚と、書いたコードが目に見える形でサイトになっていく過程に楽しさを感じ、コーダーとして力をつけることに決めました。
          </p>
          <p class="text-ja">
            接客業で培った「相手の状況を汲み取って伝える」コミュニケーション力を活かし、原則1営業日以内の返信を心がけています（お休み・営業時間外の場合は翌営業日中に対応）。
          </p>
        </div>
        <dl class="about__facts">
          <div class="about__fact">
            <dt>対応領域</dt>
            <dd>コーディング / レスポンシブ / Figma実装</dd>
          </div>
          <div class="about__fact">
            <dt>稼働形態</dt>
            <dd>業務委託・継続案件 / リモート</dd>
          </div>
          <div class="about__fact">
            <dt>使用ツール</dt>
            <dd>VS Code / GitHub / Figma</dd>
          </div>
          <div class="about__fact">
            <dt>返信目安</dt>
            <dd>原則1営業日以内</dd>
          </div>
        </dl>
      </div>
    </div>
  </section>

  <section class="section" id="skills" aria-labelledby="skills__title">
    <div class="section__head">
      <p class="section__label">Skills</p>
      <h2 class="section__title" id="skills__title">
        実務フローに乗せやすい、堅実なコーディングスキルを磨いています。
      </h2>
    </div>
    <div class="skills__grid">
      <p class="skills__note">What I can support</p>
      <div class="skills__list">
        <article class="skill__box">
          <h3>Coding</h3>
          <p>
            HTML / CSS /
            SCSSを用いた静的コーディングに対応します。BEMを意識し、保守しやすいクラス設計を心がけます。
          </p>
        </article>
        <article class="skill__box">
          <h3>Responsive</h3>
          <p>
            スマートフォンからPCまで、余白・文字量・導線が崩れないレスポンシブ実装を行います。
          </p>
        </article>
        <article class="skill__box">
          <h3>JavaScript</h3>
          <p>
            アコーディオン、ハンバーガーメニュー、フェードインなど、サイトに必要な基本的なUI実装に対応します。
          </p>
        </article>
        <article class="skill__box">
          <h3>Workflow</h3>
          <p>
            Figmaカンプからの実装、GitHubでの管理、既存ルールに合わせた追加修正に対応します。
          </p>
        </article>
      </div>
    </div>
  </section>

<section class="section works" id="works" aria-labelledby="works__title">
  <div class="section__head">
    <p class="section__label">Works</p>
    <h2 class="section__title" id="works__title">
      制作意図・担当範囲・使用技術をまとめた制作実績です。
    </h2>
  </div>

  <div class="work__list">
    <?php
    $works_query = new WP_Query(array(
      'post_type'      => 'works',
      'posts_per_page' => -1,
      'orderby'        => 'date',
      'order'          => 'ASC',
    ));
    if ( $works_query->have_posts() ) :
      while ( $works_query->have_posts() ) : $works_query->the_post();

        $work_ja       = get_field('work_ja');
        $role          = get_field('role');
        $tech          = get_field('tech');
        $period        = get_field('period');
        $github_url    = get_field('github_url');
        $site_label    = get_field('site_label');
        $site_url      = get_field('site_url');
        $image_pc      = get_field('image_pc');
        $image_sp      = get_field('image_sp');
        $overview      = get_field('overview');
        $overview_note = get_field('overview_note');
        $points_raw    = get_field('points');
        $points        = $points_raw ? array_filter( array_map('trim', explode("\n", $points_raw)) ) : array();
        $accordion_id  = 'work-' . get_the_ID();
    ?>
      <article class="work__item">
        <div class="work__main">
          <div class="work__info">
            <div class="work__title-row">
              <div>
                <h3 class="work__title"><?php the_title(); ?></h3>
                <?php if ( $work_ja ) : ?>
                  <p class="work-ja"><?php echo esc_html( $work_ja ); ?></p>
                <?php endif; ?>
              </div>
            </div>
            <dl class="work__meta">
              <?php if ( $role ) : ?>
                <div class="meta-box">
                  <dt>Role</dt>
                  <?php foreach ( $role as $r ) : ?>
                    <dd><?php echo esc_html( $r ); ?></dd>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
              <?php if ( $tech ) : ?>
                <div class="meta-box">
                  <dt>Tech</dt>
                  <dd><?php echo esc_html( $tech ); ?></dd>
                </div>
              <?php endif; ?>
              <?php if ( $period ) : ?>
                <div class="meta-box">
                  <dt>Period</dt>
                  <dd><?php echo esc_html( $period ); ?></dd>
                </div>
              <?php endif; ?>
            </dl>
            <div class="work-actions">
              <button class="detail-btn" type="button" aria-expanded="false" aria-controls="<?php echo esc_attr( $accordion_id ); ?>">
                Case Detail
                <span class="btn-icon" aria-hidden="true">+</span>
              </button>
              <?php if ( $github_url ) : ?>
                <a class="text-link" href="<?php echo esc_url( $github_url ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php the_title(); ?>のGitHubを見る（別タブで開きます）">GitHub</a>
              <?php endif; ?>
              <?php if ( $site_url ) : ?>
                <a class="text-link" href="<?php echo esc_url( $site_url ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php the_title(); ?>の公開サイトを見る（別タブで開きます）"><?php echo esc_html( $site_label ? $site_label : 'View Site' ); ?></a>
              <?php endif; ?>
            </div>
          </div>
          <div class="polaroid">
            <div class="polaroid-mockup">
              <?php if ( $image_pc ) : ?>
                <img class="polaroid-pc" src="<?php echo esc_url( $image_pc['url'] ); ?>" alt="<?php the_title(); ?> PCサイト" />
              <?php endif; ?>
              <?php if ( $image_sp ) : ?>
                <img class="polaroid-sp-thumb" src="<?php echo esc_url( $image_sp['url'] ); ?>" alt="<?php the_title(); ?> スマホサイト" />
              <?php endif; ?>
            </div>
            <p class="polaroid-caption">
              <?php the_title(); ?><?php if ( $work_ja ) : ?> — <?php echo esc_html( $work_ja ); ?><?php endif; ?>
            </p>
          </div>
        </div>
        <div class="accordion" id="<?php echo esc_attr( $accordion_id ); ?>">
          <div class="accordion-inner">
            <p class="section-label">Details</p>
            <div class="detail-grid">
              <div class="detail-block">
                <h4>Overview</h4>
                <?php if ( $overview ) : ?>
                  <p><?php echo esc_html( $overview ); ?></p>
                <?php endif; ?>
                <?php if ( $overview_note ) : ?>
                  <p class="detail-block__note"><?php echo esc_html( $overview_note ); ?></p>
                <?php endif; ?>
              </div>
              <?php if ( $points ) : ?>
                <div class="detail-block">
                  <h4>Point</h4>
                  <ul>
                    <?php foreach ( $points as $point ) : ?>
                      <li><?php echo esc_html( $point ); ?></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </article>
    <?php
      endwhile;
      wp_reset_postdata();
    else :
    ?>
      <p>準備中です。</p>
    <?php endif; ?>
  </div>
</section>

  <section class="section" id="price" aria-labelledby="price__title">
    <div class="section__head">
      <p class="section__label">Price</p>
      <h2 class="section__title" id="price__title">
        「これ入れて」を、取りこぼさず反映します。低価格から、確認ベースで進められます。
      </h2>
    </div>

    <div class="price__body">
      <div class="price__summary">
        <p class="price__amount">LP制作：7,000円〜25,000円</p>
        <p class="price__note">
          （ボリューム・アニメーションの有無により変動）
        </p>
        <p class="price__badge">文字修正1か所から、お気軽に。</p>
      </div>
      <div class="work-actions">
        <button
          class="detail-btn"
          type="button"
          aria-expanded="false"
          aria-controls="price-detail"
        >
          Details
          <span class="btn-icon" aria-hidden="true">+</span>
        </button>
      </div>
    </div>
    <div class="accordion" id="price-detail">
      <div class="accordion-inner">
        <p class="section-label">Details</p>
        <div class="detail-grid">
          <div class="detail-block">
            <h4>修正対応について</h4>
            <p>
              文言・色・余白の調整、画像差し替えなどの軽微な修正は「1回」としてまとめてご連絡ください。レイアウトの大幅変更・ページ追加・デザイン方向の変更は、別途お見積もりいたします。
            </p>
          </div>
          <div class="detail-block">
            <h4>JS実装の範囲について</h4>
            <p>
              ハンバーガーメニュー・フェードイン・TOPへ戻るボタン・アコーディオンは標準で対応します。タブ切り替え・モーダル・ローディングなどは、内容に応じてご相談ください。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section contact" id="contact" aria-labelledby="contact-title">
    <div class="section__head">
      <p class="section__label">Contact</p>
      <h2 class="section__title" id="contact-title">
        サイト制作のコーディングで、お手伝いできることがあればご相談ください。
      </h2>
    </div>
    <div class="contact__grid">
      <p class="contact__note">Feel free to reach out</p>
      <div>
        <p class="text-ja">
          制作会社様のパートナーとして、コーディングのご相談に対応いたします。
          担当範囲やスケジュールが決まっていない段階でも、お気軽にご連絡ください。
        </p>
        <form
          action="https://formspree.io/f/mkokgbld"
          method="POST"
          class="contact__form"
        >
          <input
            type="email"
            name="email"
            class="contact__form-input"
            placeholder="返信先のメールアドレス"
            required
          />
          <textarea
            name="message"
            class="contact__form-textarea"
            placeholder="お問い合わせ内容"
            rows="4"
            required
          ></textarea>
          <button type="submit" class="contact__form-submit">
            送信する
          </button>
        </form>
        <div class="contact__actions">
          <a class="contact__link" href="https://github.com/minami-works" target="_blank" rel="noopener noreferrer" aria-label="GitHubプロフィールを見る（別タブで開きます）">GitHub</a>
          <a class="contact__link" href="https://x.com/mnm_codes" target="_blank" rel="noopener noreferrer" aria-label="Xのプロフィールを見る（別タブで開きます）">X / Twitter</a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>