<?php
/*
 * Template Name: お問い合わせ(完了)
 * Description: お問い合わせの完了画面
 */
?>

<?php get_header(); ?>

<body>
  <section class="l-contact confirm" id="js-contact__anchor">
    <h2 class="c-section__title fade-in-trigger">CONTACT</h2>
    <img class="c-section__icon c-contact__icon" src="<?= get_template_directory_uri(); ?>/images/contact-color.png" alt="contact-icon" width="250" height="250" />
    <div class="c-contact__form"><?= do_shortcode('[mwform_formkey key="5"]') ?><div>
  </section>
  <div class="p-contact-complete">
    <a class="p-contact-complete__btn" href="<?= esc_url(home_url('/')); ?>">トップページへ</a>
  </div>
  <?php get_footer(); ?>
</body>
