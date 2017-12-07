<?php
/**
 * The template for displaying single post
 *
 */

get_header();
the_post();
?>
<?php if ( has_post_thumbnail()) : ?>
    <style>
        .triangel{
            visibility:none;
        }
        .inner .halbe{
            right: 0px !important;
            left: 0px !important;
        }


    </style>
<?php endif; ?>
	<article id="<?php  global $post; echo $post->post_name; ?>"  >



		<div class="container">
			<div class="section">
				<!--   Icon Section   -->

                <?php if ( has_post_thumbnail()) : ?>
                        <div class="post-image big" style="background-image: url('<?php echo the_post_thumbnail_url( 'large' );  ?>');" ></div></a>
                <?php endif; ?>


				<div class="row">
					<div class="col s12">
						<div class="nadpis center">
                            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</div>
						<div class="claim-box center-align">
							<div class="claim-text ">
								<p>
                                    <?php echo get_post_meta($post->ID, 'perex',1); ?>
								</p>
							</div>
							<div class="page-text">
                                <?php
                                /* translators: %s: Name of current post */
                                the_content();
                                ?>
							</div>
						</div>
					</div>
				</div>


			</div>

		</div>

	</article>




<?php get_footer();
