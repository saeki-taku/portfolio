<?php get_header(); ?>
<div class="l-wrapper">

	<?php get_template_part('inc/header') ?>

	<main class="main">
		<article class="l-common p-work-detail">
			<?php $title = get_the_title();?>
			<?php  the_post_thumbnail(array(1200, 800) ,array('alt' => $title, 'class' => 'p-work-detail__siteimg')); ?>
			<h2 class="p-work-detail__title"><?= $title?></h2>
			<?php the_content(); ?>
		</article>
	</main>
	<?php get_template_part('inc/footer'); ?>
</div>
<?php get_footer(); ?>
