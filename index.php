<?php get_header(); ?>

<main>
	<?php while (have_posts()): the_post(); ?>
		<h2>
			<a href="<?php the_permalink() ?>">
				<?php the_title(); ?>
			</a>
		</h2>
		<?php the_excerpt(); ?>
	<?php endwhile; ?>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
