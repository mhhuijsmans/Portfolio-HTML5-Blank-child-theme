    <?php get_header(); ?>
    <?php get_sidebar(); ?>
        
    <main id="main">
        <div id="maincontainer" class="container">
            <!-- section#singleitem -->
            <section id="singleitem">
            
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            
                    <!-- article -->
                    <article id="portfolioitem" <?php post_class(); ?>>
            
                        <div id="imgwrapper">
                            <!-- post thumbnail -->
                            <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                                <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                            <?php endif; ?>
                            <!-- /post thumbnail -->
                        </div>
            
                        <div id="postcontainer">
                            <div id="metadata">
                                <!-- post title -->
                                <h1 id="posttitle"><?php the_title(); ?></h1>
                                <!-- /post title -->
                                <div id="githuburl">
                                    <?php
                                    // Grab the metadata from the database
                                    $github_url = get_post_meta( get_the_ID(), '_portfolio_github_url', true );
                                            
                                    // Echo the metadata?>
                                    <a class="metaicon" target="_blank" href="<?php echo esc_html( $github_url );?>">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/github.png"/>
                                    </a>
                                </div>
                                <div id="liveurl">
                                    <?php
                                    // Grab the metadata from the database
                                    $live_url = get_post_meta( get_the_ID(), '_portfolio_live_url', true );
                                            
                                    // Echo the metadata?>
                                    <a  class="metaicon" target="_blank" href="<?php echo esc_html( $live_url );?>">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/live.png"/>
                                    </a>
                                </div>
                                <div id="datum">
                                    <h2>Datum:</h2>
                                    <span>
                                    <?php
                                    // Grab the metadata from the database
                                    $datum = get_post_meta( get_the_ID(), '_portfolio_datum', true );
                                            
                                    // Echo the metadata
                                    echo esc_html( $datum );
                                    ?>
                                    </span>
                                </div>
                                <div id="tags">
                                    <h2>Tags:</h2>
                                    <?php $posttags = get_the_tags();
                                    if ($posttags) {
                                        foreach($posttags as $tag) {?> 
                                            <span class="tag"><strong><?php echo $tag->name;?></strong></span>
                                        <?php }
                                    }?>
                                </div>
                            </div>
                            <?php the_content(); // Dynamic Content ?>
                                
                            <?php comments_template(); ?>
                        </div>
            
                    </article>
                    <!-- /article -->
            
                    <?php endwhile; ?>
            
                    <?php else: ?>
            
                    <!-- article -->
                    <article>
            
                        <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
            
                    </article>
                    <!-- /article -->
            
                    <?php endif; ?>
            
                </section>
                <!-- /section#singleitem -->
            </div>
        </main>

    <?php get_footer(); ?>
