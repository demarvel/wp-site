<?php
/**
 * Template part for displaying single posts.
 *
 */

?>
<div class="wrapper page-inner-title">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12 col-sm-12 col-xs-12">
				<header class="entry-header">
					<div class="inner-banner-overlay">
						<?php if (is_singular()){ ?>
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<?php if (! is_page() ){?>
							<header class="entry-header">
								<div class="entry-meta entry-inner">
									<?php newslite_posted_on(); ?>
								</div><!-- .entry-meta -->
							</header><!-- .entry-header -->
						<?php } } ?>
					</div>
				</header><!-- .entry-header -->
	        </div>
	    </div>
	</div>
</div>
	<div class="entry-content">
		<?php
		$newslite_single_post_image_align = newslite_single_post_image_align(get_the_ID());
		if( 'no-image' != $newslite_single_post_image_align ){
			if( 'left' == $newslite_single_post_image_align ){
				echo "<div class='image-left'>";
				the_post_thumbnail('medium');
			}
			elseif( 'right' == $newslite_single_post_image_align ){
				echo "<div class='image-right'>";
				the_post_thumbnail('medium');
			}
			else{
				echo "<div class='image-full'>";
				the_post_thumbnail('full');
			}
			echo "</div>";/*div end*/
		}
		?>

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'newslite' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php newslite_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

