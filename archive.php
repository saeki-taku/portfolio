<?php get_header(); ?>

<div class="l-wrapper">

	<?php get_template_part('inc/header') ?>

	<main class="main"></main>
	<!-- work-all -->
	<section class="l-common p-work-all" id="js-work__anchor">
		<h2 class="c-section__title peak">ALL WORKS</h2>
		<img class="c-section__icon" src="<?= get_template_directory_uri(); ?>/images/workall_icon.png" alt="work-icon" width="250" height="250" />
		<ul class="c-work__list">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php $ID = get_the_ID(); ?>
					<?php $title = get_the_title($ID); ?>
					<li class="c-work__item">
						<div class="p-work-all__box">
							<a class="c-work__link c-work__slidebg test2" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(array(600, 400), array('alt' => $title)); ?>
							</a>
						</div>
						<h3 class="p-work-all__siteTitle"><?= $title; ?></h3>
					</li>
				<?php endwhile; ?>
			<?php else : ?>
				<p>作品が見つかりません</p>
			<?php endif; ?>
		</ul>
	</section>
	</main>

	<?php get_template_part('inc/footer'); ?>
</div>
<?php get_footer(); ?>
