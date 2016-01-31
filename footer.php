            <footer id="footer">
                <div id="footercontainer">
                    <div id="icons">
                        <a href="https://github.com/mhhuijsmans">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/github.png"/>
                        </a>
                        <a href="https://nl.linkedin.com/in/mirthehuijsmans">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/linkedin.png"/>
                        </a>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /div#container -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <?php if (is_front_page()) {?>
            <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/filter.js"></script>
        <?php } 
        else {?>
            <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/otherstyle.js"></script>
        <?php }?>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/style.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>