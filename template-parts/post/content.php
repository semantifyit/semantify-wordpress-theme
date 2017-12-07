<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>



<article id="post-<?php the_ID(); ?>" class="post" >



    <div class="container">
        <div class="section">
            <!--   Icon Section   -->



            <div class="row">

                    <?php if ( has_post_thumbnail()) : ?>
                        <div class="col m4 s12 l3">
                            <a href="<?php echo get_permalink(); ?>"><div class="post-image" style="background-image: url('<?php echo the_post_thumbnail_url( 'small' );  ?>');" ></div></a>
                        </div>
                        <div class="col m8 s12 l9">
                    <?php else: ?>

                            <div class="col s12 ">
                    <?php endif; ?>
                    <div class="nadpis">
                        <a href="<?php echo get_permalink(); ?>"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></a>
                    </div>
                    <div class="meta">
                        <?php the_date(); ?> by <?php the_author(); ?>
                    </div>
                        <div class="claim-text ">
                            <p>
                                <?php echo get_post_meta($post->ID, 'perex',1); ?>
                            </p>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col 12">
                    <div class="page-text">
                        <?php
                        /* translators: %s: Name of current post */
                        wp_link_pages( array(
                                           'before'      => '<div class="page-links">' . __( 'Pages:', 'semantify' ),
                                           'after'       => '</div>',
                                           'link_before' => '<span class="page-number">',
                                           'link_after'  => '</span>',
                                       ) );
                        ?>
                    </div>
                </div>
            </div>


        </div>

    </div>

</article>

