<?php get_header(); ?>

<div class="loading" id="js-loading">
  <div class="spinner">
    <div class="double-bounce"></div>
    <div class="double-bounce"></div>
  </div>
</div>
<div class="l-wrapper">
  <section class="p-hero" id="js-top__anchor">
    <header class="l-header">
      <!--humburger menu-->
      <button type="button" id="js-buttonHamburger" class="c-button c-hamburger" aria-controls="global-nav" aria-expanded="false">
        <span class="c-hamburger__line">
          <span class="c-visuallyHidden">
            メニューを開閉する
          </span>
        </span>
      </button>

      <nav class="c-nav">
        <ul class="c-nav__list" id="js-page-scroll__head">
          <li class="c-nav__item"><a href="" class="c-nav__link">TOP</a></li>
          <li class="c-nav__item"><a href="#js-work__anchor" class="c-nav__link">WORKS</a></li>
          <li class="c-nav__item"><a href="#js-skill__anchor" class="c-nav__link">SKILL</a></li>
          <li class="c-nav__item"><a href="#js-about__anchor" class="c-nav__link">ABOUT</a></li>
          <li class="c-nav__item"><a href="#js-contact__anchor" class="c-nav__link">CONTACT</a></li>
        </ul>
      </nav>
    </header>
    <div class="p-hero__title p-slide-in">
      <h1 class="p-slide-in__inner">saeki's<br /><span>portfolio</span></h1>
    </div>
    <div class="p-hero__icon-wind">
      <!-- <jsよりleafのimgが入る> -->
      <img class="p-hero__icon wind" src="<?= get_template_directory_uri(); ?>/images/hero-flow.png" alt="top-icon" width="300" height="180" />
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
      <h2 class="c-section__title fade-in-trigger">WORKS</h2>
      <img class="c-section__icon" src="<?= get_template_directory_uri(); ?>/images/work-color.png" alt="work-icon" width="250" height="250" />
      <ul class="c-work__list">
        <!-- wordpress側投稿する為srcsetは一旦設定無し -->
        <li class="c-work__item">
          <a class="c-work__link c-work__slidebg" href="">
            <img src="<?= get_template_directory_uri(); ?>/images/work01-600.jpg" alt="制作の画像" width="600" height="400" />
          </a>
          <!-- wordpress側投稿する為srcsetは一旦設定無し(下記) -->
          <!-- <a class="c-work__link c-work__slidebg" href="">
							<img src="<?= get_template_directory_uri(); ?>/images/work01-600.jpg" srcset="<?= get_template_directory_uri(); ?>/images/work01-300.jpg 1x, <?= get_template_directory_uri(); ?>/images/work01-600.jpg 2x, <?= get_template_directory_uri(); ?>/images/work01-900.jpg 3x" alt="制作の画像" width="600" height="400" />
						</a> -->
        </li>
        <li class="c-work__item">
          <a class="c-work__link c-work__slidebg" href="">
            <img src="<?= get_template_directory_uri(); ?>/images/work02-300.jpg" alt="制作の画像" width="600" height="400" />
          </a>
        </li>
        <li class="c-work__item">
          <a class="c-work__link c-work__slidebg" href="">
            <img src="<?= get_template_directory_uri(); ?>/images/work02-300.jpg" alt="制作の画像" width="600" height="400" />
          </a>
        </li>
      </ul>
      <a class="c-more__button" href="./work_all.html"><span class="c-arrow"></span>もっと見る？</a>
    </section>
    <!-- skill -->
    <section class="l-common p-skill" id="js-skill__anchor">
      <h2 class="c-section__title fade-in-trigger">SKILL</h2>
      <img class="c-section__icon c-skill__icon" src="<?= get_template_directory_uri(); ?>/images/skill-color.png" alt="skill-icon" width="100" height="127" />
      <p class="p-skill__text">
        HTML / CSS / Javascript / JQuery / <br />
        Sass / Webpack / Wordpress / github / <br />
        photoshop / illustrator
      </p>
    </section>
    <!-- about -->
    <section class="l-common p-about" id="js-about__anchor">
      <h2 class="c-section__title fade-in-trigger">ABOUT</h2>
      <img class="c-section__icon" src="<?= get_template_directory_uri(); ?>/images/about-color.png" alt="about-icon" width="250" height="250" />
      <div class="p-about__wrap">
        <!-- <div class="p-about__inner"> -->
        <img class="p-about__face" src="<?= get_template_directory_uri(); ?>/images/face.jpg" alt="佐伯の顔写真" width="90" height="90" />
        <div class="p-about__textBox">
          <h3 class="p-about__myname">saeki takuya</h3>
          <p class="p-about__text"><label for="text">在住:</label>東京都</p>
          <p class="p-about__text">現在、コーダーを目指してweb制作を日々学習に励んでおります。</p>
          <p class="p-about__text">
            これまで営業・施術スタッフ(整骨院・リラクゼーション)・寄付活動など様々な職種に携わってきました。多様化が進む現在において数多く経験を活かすことで幅広く活動していきたいと思っております様々なジャンルにおいてweb制作として携わりたいと思っておりますのでどうぞ宜しくお願い致します。
          </p>
          <!-- </div> -->
        </div>
        <!-- <a class="c-more__button" href="">もっと見る？</a> -->
      </div>
    </section>
    <!-- contact -->
    <section class="l-contact" id="js-contact__anchor">
      <h2 class="c-section__title fade-in-trigger">CONTACT</h2>
      <img class="c-section__icon c-contact__icon" src="<?= get_template_directory_uri(); ?>/images/contact-color.png" alt="contact-icon" width="250" height="250" />
      <div class="c-contact__form">

				<?= do_shortcode('[mwform_formkey key="5"]'); ?>


        <div>
    </section>
  </main>

  <?php get_template_part('inc/footer'); ?>
</div>
<?php get_footer(); ?>
