    <?php get_header(); ?>
    <?php get_sidebar(); ?>
        
        <main id="main">
            <div id="maincontainer" class="container">
                <?php get_template_part('loop'); ?>
                    
                <?php get_template_part('pagination'); ?>
            </div>
        </main>

    <?php get_footer(); ?>