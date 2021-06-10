<footer class="footer">
  <ul class="c-foot-menu__list" id="js-page-scroll__foot">
    <?php if (is_home()) : ?>
      <li class="c-foot-menu__item"><a href="#js-top__anchor" class="c-foot-menu__link">TOP</a></li>
      <li class="c-foot-menu__item"><a href="#js-work__anchor" class="c-foot-menu__link">WORKS</a></li>
      <li class="c-foot-menu__item"><a href="#js-skill__anchor" class="c-foot-menu__link">SKILL</a></li>
      <li class="c-foot-menu__item"><a href="#js-about__anchor" class="c-foot-menu__link">ABOUT</a></li>
    <?php else : ?>
      <li class="c-foot-menu__item"><a href="<?= esc_url(home_url('/')) ?>#js-top__anchor" class="c-foot-menu__link">TOP</a></li>
      <li class="c-foot-menu__item"><a href="<?= esc_url(home_url('/')) ?>#js-work__anchor" class="c-foot-menu__link">WORKS</a></li>
      <li class="c-foot-menu__item"><a href="<?= esc_url(home_url('/')) ?>#js-skill__anchor" class="c-foot-menu__link">SKILL</a></li>
      <li class="c-foot-menu__item"><a href="<?= esc_url(home_url('/')) ?>#js-about__anchor" class="c-foot-menu__link">ABOUT</a></li>
      <li class="c-foot-menu__item"><a href="<?= esc_url(home_url('/')) ?>#js-contact__anchor" class="c-foot-menu__link">CONTACT</a></li>
    <?php endif; ?>
  </ul>
  <ul class="c-sns__list">
    <li class="c-sns__item">
      <a href="https://github.com/saeki-taku" class="c-sns__link" target="brank"><img src="<?= get_template_directory_uri(); ?>/images/sns-github_icon.png" alt="githubアイコン" width="25" height="25"></a>
    </li>
    <li class="c-sns__item">
      <a href="https://codepen.io/saeki-taku" class="c-sns__link" target="brank"><img src="<?= get_template_directory_uri(); ?>/images/sns-codepen_icon.png" alt="codepenアイコン" width="25" height="25"></a>
    </li>
  </ul>
  <p class="copyright">Copyright &#169; 2021 saeki's portfolio</p>
</footer>
