<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="format-detection" content="telephone=no">

  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/style.css" />
  <!-- ページによって読み込ませるcssを変える(スラッグを使用するか) ↓↓↓↓ -->
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/pages/work/style.css" />
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/pages/home/style.css" />
  <?php if (is_page('contact-confirm') || is_page('contact-complete')) : ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/pages/contact-comfirm/style.css" />
  <?php endif; ?>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Merienda&family=Neucha&family=Poiret+One&display=swap" rel="stylesheet" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-RK68CDP0QP"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-RK68CDP0QP');
  </script>
  <script>
    const path = "<?= get_template_directory_uri(); ?>";
  </script>
  <script src="<?= get_template_directory_uri(); ?>/js/jquery-3.6.0min.js" defer></script>
  <?php if (is_home()) : ?>
    <script src="<?= get_template_directory_uri(); ?>/js/hero.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/slide-in.js" defer></script>
  <?php endif; ?>
  <script src="<?= get_template_directory_uri(); ?>/js/loading.js"></script>
  <script src="<?= get_template_directory_uri(); ?>/js/main.js" defer></script>
  <script src="<?= get_template_directory_uri(); ?>/js/hamburger.js" defer></script>
  <script src="<?= get_template_directory_uri(); ?>/js/page-scroll.js" defer></script>
  <script src="<?= get_template_directory_uri(); ?>/js/fade-animation.js" defer></script>

  <?php wp_head(); ?>

</head>

<body>
  <?php wp_body_open(); ?>
