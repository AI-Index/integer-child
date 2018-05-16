<?php
/**
 * The template used for displaying post content in single.php.
 *
 * @package Integer
 */

?>

<div class="back-to-indexed">
	<a href="http://blog.aiindex.org" style="color: #4A90E2;">Back to all <span style="font-family: Utopia; font-weight: 400;">Indexed</span> posts</a>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<?php integer_entry_meta_index(); ?>

	<?php integer_post_thumbnail(); ?>

	<div class="entry-content">

		<?php the_content(); ?>

		<!-- <?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'integer' ),
				'after' => '</div>',
			) );
		?> -->

	</div><!-- .entry-content -->

	<?php integer_entry_footer_widgets(); ?>

</article><!-- #post-## -->
