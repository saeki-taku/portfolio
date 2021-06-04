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
  <p class="copyright">Copyright &#169; 2021 saeki's portfolio</p>
</footer>
