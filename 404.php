<?php get_header(); ?>
<div class="l-wrapper">
	<?php get_template_part('inc/header'); ?>

	<main class="main">
		<article class="l-common">
			<img class="p-404__icon" src="<?= get_template_directory_uri(); ?>/images/404_icon.png" alt="傘を持った紳士" width="300" height="350">
			<p class="p-404__text">恐れ入りますが該当のページは存在致しません。</p>
			<div class="p-404__link-box">
				<a class="p-404__link" href="<?= esc_url(home_url('/')); ?>">トップページへ</a>
			</div>
		</article>
	</main>
</div>
<?php get_footer(); ?>
