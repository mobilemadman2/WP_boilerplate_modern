<!-- Load header -->
<?php get_header() ?>

<!-- Main site -->
    <main>

        <!-- @@ WordPress LOOP @@ -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>

        <?php endwhile; else: ?>
        <!-- Display 404 error massage with translate option. (TextDomain in style.css) -->
            <?php _e( 'Sorry. No content found!', 'TextDomain'); ?>

        <?php endif; ?>
    </main>

<!-- Load footer -->
<?php get_footer() ?>
    