<?php
/**
 * @package Aurora
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<div class="entry-thumbnail">
		<?php if ( '' != get_the_post_thumbnail() ) : ?>
			<?php if ( ! is_single() ) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'aurora' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="<?php the_ID(); ?>" class="aurora-featured-thumbnail">
				<?php the_post_thumbnail( 'aurora-featured-thumbnail' ); ?>
			</a>
			<?php else : ?>
				<?php the_post_thumbnail( 'aurora-featured-thumbnail' ); ?>
			<?php endif; ?>
		<?php endif; ?>
		</div>

		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		<?php if ( 'post' == get_post_type() ) : ?>
		<?php endif; ?>
		<div class="posted-on"><?php aurora_posted_on(); ?></div>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if($post->post_excerpt) { the_excerpt();
			} else {
		the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'aurora' ) );
			} ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'aurora' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
