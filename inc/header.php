<header class="l-header <?php if(!is_home()) : ?>l-header__sub<?php endif ; ?>">
  <?php if (!is_home()) : ?>
    <a href="<?= esc_url(home_url('/')) ?>" class="c-nav__logo-link">
      <img class="c-nav__logo" src="<?= get_template_directory_uri(); ?>/images/logo.png" width="200" height="100" />
    </a>
  <?php endif; ?>
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
      <li class="c-nav__item"><a href="<?= esc_url(home_url('/')) ?>" class="c-nav__link">TOP</a></li>
      <?php if (is_home()) : ?>
        <li class="c-nav__item"><a href="#js-work__anchor" class="c-nav__link">WORKS</a></li>
        <li class="c-nav__item"><a href="#js-skill__anchor" class="c-nav__link">SKILL</a></li>
        <li class="c-nav__item"><a href="#js-about__anchor" class="c-nav__link">ABOUT</a></li>
      <?php else : ?>
        <!--トップページ以外-->
        <li class="c-nav__item"><a href="<?= esc_url(home_url('/')) ?>#js-work__anchor" class="c-nav__link">WORKS</a></li>
        <li class="c-nav__item"><a href="<?= esc_url(home_url('/')) ?>#js-skill__anchor" class="c-nav__link">SKILL</a></li>
        <li class="c-nav__item"><a href="<?= esc_url(home_url('/')) ?>#js-about__anchor" class="c-nav__link">ABOUT</a></li>
      <?php endif; ?>
      <li class="c-nav__item"><a href="#js-contact__anchor" class="c-nav__link">CONTACT</a></li>
    </ul>
  </nav>
</header>
