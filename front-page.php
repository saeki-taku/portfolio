<?php get_header(); ?>

<div class="loading" id="js-loading">
  <div class="spinner">
    <div class="double-bounce"></div>
    <div class="double-bounce"></div>
  </div>
</div>
<div class="l-wrapper">
  <section class="p-hero" id="js-top__anchor">

    <?php get_template_part('inc/header') ?>

    <div class="p-hero__title p-slide-in">
      <h1 class="p-slide-in__inner">saeki's<br /><span>portfolio</span></h1>
    </div>
    <div class="p-hero__icon-wind">
      <!-- <jsよりwindのimgが入る> -->
      <img class="p-hero__icon wind" id="wind" src="<?= get_template_directory_uri(); ?>/images/hero-flow.png" alt="top-icon" width="300" height="180" />
    </div>
    <div class="p-hero__icon-leaf">
      <!-- <jsよりleafのimgが入る> -->
      <img class="p-hero__icon leaf" src="<?= get_template_directory_uri(); ?>/images/leaf.png" alt="top-icon" width="300" height="180" />
    </div>
    <div class="c-scrolldown">
      <span>scroll</span>
    </div>
  </section>
  <main class="main">
    <!-- work -->
    <section class="l-common c-work" id="js-work__anchor">
      <h2 class="c-section__title js-fade-down-trigger">WORKS</h2>
      <img class="c-section__icon" src="<?= get_template_directory_uri(); ?>/images/work-color.png" alt="work-icon" width="250" height="250" />
      <ul class="c-work__list delayScroll">
        <!-- wordpress側投稿する為srcsetは一旦設定無し -->
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php $ID = get_the_ID(); ?>
            <?php $title = get_the_title($ID); ?>
            <li class="c-work__item js-fade-down-trigger">
              <a class="c-work__link c-work__slidebg" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(array(600, 400), array('alt' => $title)); ?>
              </a>
            </li>
          <?php endwhile; ?>
        <?php else : ?>
          <p>作品が見つかりません</p>
        <?php endif; ?>
      </ul>
      <a class="c-more__button" href="<?= get_category_link(2); ?>"><span class="c-arrow"></span>もっと見る？</a>
    </section>
    <!-- skill -->
    <section class="l-common p-skill" id="js-skill__anchor">
      <h2 class="c-section__title js-fade-down-trigger">SKILL</h2>
      <img class="c-section__icon c-skill__icon" src="<?= get_template_directory_uri(); ?>/images/skill-color.png" alt="skill-icon" width="100" height="127" />
      <p class="p-skill__text">
        HTML / CSS / Javascript / JQuery / <br />
        Sass / Webpack / Wordpress / github / <br />
        photoshop / illustrator
      </p>
    </section>
    <!-- about -->
    <section class="l-common p-about" id="js-about__anchor">
      <h2 class="c-section__title js-fade-down-trigger">ABOUT</h2>
      <img class="c-section__icon" src="<?= get_template_directory_uri(); ?>/images/about-color.png" alt="about-icon" width="250" height="250" />
      <div class="p-about__wrap">
        <img class="p-about__face" src="<?= get_template_directory_uri(); ?>/images/face.jpg" alt="佐伯の顔写真" width="90" height="90" />
        <div class="p-about__profile">
          <h3 class="p-about__profile-myname">saeki takuya</h3>
          <p class="p-about__profile-from"><label for="text">在住:</label>東京</p>
        </div>
        <div class="p-about__introduce">
          <p class="p-about__introduce-text">現在、コーダーを目指してweb制作を日々学習に励んでおります。</p>
          <p class="p-about__introduce-text">
            これまで営業・施術スタッフ(整骨院・リラクゼーション)・寄付活動など様々な職種に携わってきました。多様化が進む現在において数多く経験を活かすことで幅広く活動していきたいと思っております様々なジャンルにおいてweb制作として携わりたいと思っておりますのでどうぞ宜しくお願い致します。
          </p>
        </div>
      </div>
    </section>
    <!-- contact -->
    <section class="l-contact" id="js-contact__anchor">
      <h2 class="c-section__title js-fade-down-trigger">CONTACT</h2>
      <img class="c-section__icon c-contact__icon" src="<?= get_template_directory_uri(); ?>/images/contact-color.png" alt="contact-icon" width="250" height="250" />
      <div class="c-contact__form">

        <?= do_shortcode('[mwform_formkey key="5"]'); ?>

        <div>
    </section>
  </main>

  <?php get_template_part('inc/footer'); ?>
</div>
<?php get_footer(); ?>
