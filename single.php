<?php get_header(); ?>
<div class="l-wrapper">

	<?php get_template_part('inc/header') ?>

	<main class="main">
		<article class="l-common p-work-detail">
			<?php $title = get_the_title();?>
			<?php  the_post_thumbnail(array(1200, 800) ,array('alt' => $title, 'class' => 'p-work-detail__siteimg')); ?>
			<h2 class="p-work-detail__title"><?= $title?></h2>
			<p class="p-work-detail__link"><a href="">サイトの閲覧はこちらから</a></p>
			<?php the_content(); ?>
			<p class="p-work_detail__text"><span>制作時期:</span>2020/04</p>
			<p class="p-work_detail__text"><span>使用言語・ツール:</span>HTML/CSS/JQuery</p>
			<p class="p-work_detail__text">ここに制作に当たっての要望や過程・コメントを記載</p>
		</article>
	</main>
	<?php get_template_part('inc/footer'); ?>
</div>
<?php get_footer(); ?>
