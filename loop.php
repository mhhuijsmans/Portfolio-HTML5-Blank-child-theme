<!-- section#items -->
<section id="items">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class('selectedarticle'); ?>>

            <?php global $dynamic_featured_image;
            $featured_images = $dynamic_featured_image->get_featured_images( get_the_ID() );

            //You can now loop through the image to display them as required
            foreach($featured_images as $featured_image) { ?> 
                <a class="filter" href="<?php the_permalink(); ?>">
                    <img src="<?=$featured_image['full']?>" alt="Project afbeelding"/>
                </a>
            <?php } ?>
           
           
            <?php
            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            ?>
            <a class="color" href="<?php the_permalink(); ?>"> 
                <img src="<?=$url?>" alt="Project afbeelding"/>
            </a>
            
            <a class="title" href="<?php the_permalink(); ?>">
                <h2><?php the_title(); ?></h2>
            </a>
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

</section>
<!-- /section#items -->
