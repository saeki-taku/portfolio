<?php get_header(); ?>
<div class="l-wrapper">

	<?php get_template_part('inc/header') ?>

	<main class="main">
		<article class="l-common p-work-detail">
			<?php $title = get_the_title(); ?>
			<h2 class="p-work-detail__title"><?= $title ?></h2>
			<?php the_content(); ?>
			<!-- <img class="p-work-detail__site-topImg" src="http://localhost:10034/wp-content/uploads/2021/05/mockup_b-fit2.jpg" alt="b-fit" width="1500" height="1000" class="alignnone size-full wp-image-88" />
			<div class="p-work-detail__wrap">
				<p class="p-work-detail__link"><a href="https://b-fit-atsugi.com/B-fit/">https://b-fit-atsugi.com/B-fit/</a></p>
				<p class="p-work-detail__text">ここに制作に当たっての要望や過程・コメントを記載</p>
				<img class="p-work-detail__site-allImg" src="http://localhost:10034/wp-content/uploads/2021/05/9beb31bc-ac71-42aa-a583-7afe8c46937e-scaled.jpeg" alt="" width="688" height="2560" class="alignnone size-full wp-image-83" />
				<div class="p-work-detail__text-box">
					<p class="p-work-detail__text-title">制作期間</p>
					<p class="p-work-detail__text-contents">例：1ヶ月間</p>
				</div>
				<div class="p-work-detail__text-box">
					<p class="p-work-detail__text-title">使用言語・ツール</p>
					<p class="p-work-detail__text-contents">例:HTML/CSS/JQuery</p>
				</div>
				<div class="p-work-detail__text-box">
					<p class="p-work-detail__text">制作内容</p>
					<p class="p-work-detail__text-contents">例:デザイン・コーディング</p>
				</div>
			</div> -->
		</article>
	</main>
	<?php get_template_part('inc/footer'); ?>
</div>
<?php get_footer(); ?>
