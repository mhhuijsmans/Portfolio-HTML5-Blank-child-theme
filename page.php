    <?php get_header(); ?>
    <?php get_sidebar(); ?>
                  
    <main id="main">
        <div id="maincontainer" class="container">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    
                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                    <!-- post title -->
                    <h1><?php the_title(); ?></h1>
                    <!-- /post title -->
                    
                    <?php the_content(); ?>
                    
                    <?php comments_template( '', true ); // Remove if you don't want comments ?>
                    
                    <br class="clear">
                    
                </article>
                <!-- /article -->
                    
            <?php endwhile; ?>
                    
            <?php else: ?>
                    
                <!-- article -->
                <article>
                    
                    <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
                    
                </article>
                <!-- /article -->
                    
            <?php endif; ?>
        </div>
    </main>

    <?php get_footer(); ?>
