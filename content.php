<?php
/**
 * @package Aurora
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php aurora_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>

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
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'aurora' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'aurora' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'aurora' ) );
				if ( $categories_list && aurora_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( '<i class="fa fa-copy"></i> %1$s', 'aurora' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'aurora' ) );
				if ( $tags_list ) :
			?><br />
			<span class="tags-links">
				<?php printf( __( '<i class="fa fa-tags"></i> %1$s', 'aurora' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>
<br />
		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><i class="fa fa-comments"></i>
<?php comments_popup_link( __( 'Leave a comment', 'aurora' ), __( '1 Comment', 'aurora' ), __( '% Comments', 'aurora' ) ); ?></span>
		<?php endif; ?>
<br />
		<?php edit_post_link( __( 'Edit', 'aurora' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->