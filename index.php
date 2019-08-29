<!-- Load header -->
<?php get_header() ?>

<!-- Main site -->
    <main>

        <!-- @@ WordPress LOOP @@ -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <!-- Posts iteration -->
        <article <?php post_class(); ?> >

            <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>

            <footer>
                <p class="byline">
                    Author: 
                    <a href="<?php echo get_author_posts_url( $post->post_author ); ?>">
                        <?php the_author(); ?>
                    </a> |
                    Date:
                    <?php the_time( 'M. j, Y'); ?> |
                    Categories:
                    <?php the_category( ', '); ?> |
                    Tags:
                    <?php the_tags( '', ', ', '') ?>
                </p>
            </footer>

        </article>

        <?php endwhile; else: ?>
        <!-- Display 404 error massage with translate option. (TextDomain in style.css) -->
            <?php _e( 'Sorry. No content found!', 'TextDomain'); ?>

        <?php endif; ?>
    </main>

<!-- Load footer -->
<?php get_footer() ?>
    