<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _tk
 */
?>

<article class="col-md-4" id="post-<?php the_ID(); ?>">
	<div class="entry-content">
			<a class="preview" href="<?php the_permalink(); ?>">
				<?php
					$image = get_field('green_image');
					$image2 = get_field('normal_image');

					if( !empty($image) ): ?>

						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" onmouseover="this.src='<?php echo $image2['url']; ?>'" onmouseout="this.src='<?php echo $image['url']; ?>'" />

<?php endif; ?>
			</a>
		<!-- <div class="entry-content-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div> -->
		<?php /* the_content(); */ ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
